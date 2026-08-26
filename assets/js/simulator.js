// DombyraAI Simulator Logic (Ported perfectly from game.html)

// ── AUDIO SAMPLES ──────────────────────────────────────────────────────
const NOTE_SAMPLES = {
  'G4': 'assets/audio/notes/G4.mp3',
  'Ab4': 'assets/audio/notes/Ab4.mp3',
  'A4': 'assets/audio/notes/A4.mp3',
  'Bb4': 'assets/audio/notes/Bb4.mp3',
  'B4': 'assets/audio/notes/B4.mp3',
  'C5': 'assets/audio/notes/C5.mp3',
  'Db5': 'assets/audio/notes/Db5.mp3',
  'D5': 'assets/audio/notes/D5.mp3',
  'Eb5': 'assets/audio/notes/Eb5.mp3',
  'E5': 'assets/audio/notes/E5.mp3',
  'F5': 'assets/audio/notes/F5.mp3',
  'Gb5': 'assets/audio/notes/Gb5.mp3',
  'G5': 'assets/audio/notes/G5.mp3',
  'Ab5': 'assets/audio/notes/Ab5.mp3',
  'A5': 'assets/audio/notes/A5.mp3',
  'Bb5': 'assets/audio/notes/Bb5.mp3',
  'B5': 'assets/audio/notes/B5.mp3',
  'C6': 'assets/audio/notes/C6.mp3',
  'Db6': 'assets/audio/notes/Db6.mp3',
  'D6': 'assets/audio/notes/D6.mp3'
};

const NOTE_FREQS = {
  'G3': 196.00, 'D4': 293.66,
  'G4': 392.00, 'Ab4': 415.30, 'A4': 440.00, 'Bb4': 466.16, 'B4': 493.88,
  'C5': 523.25, 'Db5': 554.37, 'D5': 587.33, 'Eb5': 622.25, 'E5': 659.25,
  'F5': 698.46, 'Gb5': 739.99, 'G5': 783.99, 'Ab5': 830.61, 'A5': 880.00,
  'Bb5': 932.33, 'B5': 987.77, 'C6': 1046.50, 'Db6': 1108.73, 'D6': 1174.66
};

let audioBuffers = {};
let samplesLoading = false;
let samplesLoaded = false;

// Always use actual MP3 files
const resolveSampleUrl = (note) => {
    return NOTE_SAMPLES[note];
};

async function loadSamples() {
  if (samplesLoading || samplesLoaded) return;
  samplesLoading = true;
  const ctx = getAudioCtx();
  
  let samplesToLoad = NOTE_SAMPLES;
  if (typeof AUDIO_B64 !== 'undefined') {
      samplesToLoad = AUDIO_B64;
  }
  
  const promises = Object.entries(samplesToLoad).map(async ([note, data]) => {
    try {
      let arrayBuffer;
      if (data.startsWith('data:audio/mp3;base64,')) {
         // Convert base64 directly to avoid large fetch overhead
         const base64 = data.split(',')[1];
         const binaryString = atob(base64);
         const len = binaryString.length;
         const bytes = new Uint8Array(len);
         for (let i = 0; i < len; i++) {
             bytes[i] = binaryString.charCodeAt(i);
         }
         arrayBuffer = bytes.buffer;
      } else {
         const response = await fetch(data);
         arrayBuffer = await response.arrayBuffer();
      }
      const audioBuffer = await ctx.decodeAudioData(arrayBuffer);
      audioBuffers[note] = audioBuffer;
    } catch (e) {
      console.error('Failed to load sample', note, e);
    }
  });
  
  await Promise.all(promises);
  
  // Map missing Eb6 to Bb6 to their 5th octave equivalents as a fallback
  if (audioBuffers['Eb5']) audioBuffers['Eb6'] = audioBuffers['Eb5'];
  if (audioBuffers['E5']) audioBuffers['E6'] = audioBuffers['E5'];
  if (audioBuffers['F5']) audioBuffers['F6'] = audioBuffers['F5'];
  if (audioBuffers['Gb5']) audioBuffers['Gb6'] = audioBuffers['Gb5'];
  if (audioBuffers['G5']) audioBuffers['G6'] = audioBuffers['G5'];
  if (audioBuffers['Ab5']) audioBuffers['Ab6'] = audioBuffers['Ab5'];
  if (audioBuffers['A5']) audioBuffers['A6'] = audioBuffers['A5'];
  if (audioBuffers['Bb5']) audioBuffers['Bb6'] = audioBuffers['Bb5'];
  
  // Clean up unused D4-Gb4 mappings since we now use D5 as the base
  if (audioBuffers['G4']) audioBuffers['G3'] = audioBuffers['G4'];
  
  samplesLoaded = true;
  samplesLoading = false;
  console.log('All dombra samples loaded');
}

// UI Sounds (used by certificate.html)
window.playSingleTone = function(freq, type = 'sine', duration = 0.1) {
  try {
    const ctx = getAudioCtx();
    const osc = ctx.createOscillator();
    const gain = ctx.createGain();
    osc.type = type;
    osc.frequency.setValueAtTime(freq, ctx.currentTime);
    gain.gain.setValueAtTime(0.1, ctx.currentTime);
    gain.gain.exponentialRampToValueAtTime(0.01, ctx.currentTime + duration);
    osc.connect(gain);
    gain.connect(ctx.destination);
    osc.start();
    osc.stop(ctx.currentTime + duration);
  } catch(e) {
    console.warn('UI Audio play failed', e);
  }
};

// ── AUDIO CONTEXT ──────────────────────────────────────────────────────
let audioCtx = null;
function getAudioCtx(){
  if(!audioCtx) {
    audioCtx = new(window.AudioContext||window.webkitAudioContext)();
  }
  return audioCtx;
}

// Pre-load audio samples on first user interaction
document.addEventListener('click', () => {
  if(!samplesLoading && !samplesLoaded) {
    getAudioCtx().resume().then(() => loadSamples());
  }
}, {once: true});

function getClosestBufferAndRate(noteName) {
  // Removed, we don't want pitch shifting which degrades sound quality
}

function playNoteExact(noteName, duration=2.5) {
  const ctx = getAudioCtx();
  if (!samplesLoaded) {
    loadSamples();
    return playNoteSynthetic(NOTE_FREQS[noteName] || 440, duration);
  }

  // Use exactly recorded buffer, fallback to G4
  const buffer = audioBuffers[noteName] || audioBuffers['G4'];
  if (!buffer) return playNoteSynthetic(NOTE_FREQS[noteName] || 440, duration);
  
  const source = ctx.createBufferSource();
  source.buffer = buffer;
  source.playbackRate.value = 1.0; // NO pitch shifting! Play exactly as recorded!
  
  const gainNode = ctx.createGain();
  gainNode.gain.setValueAtTime(1.5, ctx.currentTime);
  gainNode.gain.setTargetAtTime(0.001, ctx.currentTime + duration - 0.1, 0.1);

  source.connect(gainNode);
  gainNode.connect(ctx.destination);
  
  source.start(ctx.currentTime);
}

function playNoteSynthetic(freq, duration=2.5) {
  const ctx = getAudioCtx();
  const burstDuration = 1 / freq;
  const bufferSize = Math.floor(ctx.sampleRate * burstDuration); 
  const buffer = ctx.createBuffer(1, bufferSize, ctx.sampleRate);
  const data = buffer.getChannelData(0);
  let lastVal = 0;
  for (let i = 0; i < bufferSize; i++) {
    let noise = Math.random() * 2 - 1;
    lastVal = (lastVal + noise) * 0.5;
    data[i] = lastVal;
  }
  
  const noiseSource = ctx.createBufferSource();
  noiseSource.buffer = buffer;

  const delayNode = ctx.createDelay();
  delayNode.delayTime.value = 1 / freq;
  
  const filterNode = ctx.createBiquadFilter();
  filterNode.type = 'lowpass';
  filterNode.frequency.value = freq * 10; 
  
  const feedbackGain = ctx.createGain();
  feedbackGain.gain.value = 0.99; 
  
  noiseSource.connect(delayNode);
  delayNode.connect(filterNode);
  filterNode.connect(feedbackGain);
  feedbackGain.connect(delayNode);
  
  const outputGain = ctx.createGain();
  outputGain.gain.setValueAtTime(0, ctx.currentTime);
  outputGain.gain.linearRampToValueAtTime(2.5, ctx.currentTime + 0.01); 
  outputGain.gain.exponentialRampToValueAtTime(0.001, ctx.currentTime + duration);
  
  delayNode.connect(outputGain);
  outputGain.connect(ctx.destination);
  
  noiseSource.start(ctx.currentTime);
}

function playClick(){
  const ctx=getAudioCtx();
  const buf=ctx.createBuffer(1,ctx.sampleRate*0.01,ctx.sampleRate);
  const d=buf.getChannelData(0);
  for(let i=0;i<d.length;i++) d[i]=(Math.random()*2-1)*Math.exp(-i/(ctx.sampleRate*0.002));
  const src=ctx.createBufferSource();
  src.buffer=buf;
  
  const filter = ctx.createBiquadFilter();
  filter.type = 'bandpass';
  filter.frequency.value = 1500;
  
  const g=ctx.createGain();
  g.gain.value=2.0;
  
  src.connect(filter);
  filter.connect(g);
  g.connect(ctx.destination);
  src.start();
}

// ── SIMULATOR / TABS ───────────────────────────────────────────────────
const KUIS = [
  {
    title:'Smoke on the Water', emoji:'🎸', color:'violet', desc:'Deep Purple • Рок-классика на домбре',
    tempo: 220,
    s1: [0, -1, 3, -1, 5, -1, -1, -1,  0, -1, 3, -1, 6, 5, -1, -1,  0, -1, 3, -1, 5, -1, -1, -1,  3, -1, 0, -1, -1, -1, -1, -1],
    s2: [0, -1, 3, -1, 5, -1, -1, -1,  0, -1, 3, -1, 6, 5, -1, -1,  0, -1, 3, -1, 5, -1, -1, -1,  3, -1, 0, -1, -1, -1, -1, -1],
    hints:['0-3-5', '0-3-6-5', '0-3-5', '3-0', 'Играй аккордами!'],
    tabColors:['violet','cyan','coral','gold']
  },
  {
    title:'Bella Ciao', emoji:'🇮🇹', color:'cyan', desc:'Итальянский гимн • Очень легко и задорно',
    tempo: 280,
    s1: [2, 7, 9, 10, -1, 7, -1, -1,  2, 7, 9, 10, -1, 7, -1, -1,  2, 7, 9, 10, -1, 9, -1, 7, -1, 10, -1, 10, -1, 10, -1, -1],
    s2: [0, -1, -1, 0, -1, 0, -1, -1,  0, -1, -1, 0, -1, 0, -1, -1,  0, -1, -1, 0, -1, 0, -1, 0, -1, 0, -1, 0, -1, 0, -1, -1],
    hints:['Уна маттина!', 'Ми соно альзато!', 'О белла чао!', 'Чао!', 'Чао!'],
    tabColors:['cyan','violet','gold','cyan','mint'],
  },
  {
    title:'Көзімнің қарасы', emoji:'🇰🇿', color:'gold', desc:'Абай Кунанбаев • Чувственная степная классика',
    tempo: 160,
    s1: [7, -1, 7, -1, 5, -1, 3, -1, 5, -1, 7, -1, 7, -1, -1, -1, 5, -1, 5, -1, 3, -1, 2, -1, 3, -1, 5, -1, 5, -1, -1, -1],
    s2: [0, -1, 0, -1, 0, -1, 0, -1, 0, -1, 0, -1, 0, -1, -1, -1, 0, -1, 0, -1, 0, -1, 0, -1, 0, -1, 0, -1, 0, -1, -1, -1],
    hints:['Көзімнің', 'қарасы', 'Көңілімнің', 'санасы', 'Играй нежно'],
    tabColors:['gold','cyan','violet','mint'],
  },
  {
    title:'Адай (Күй фрагмент)', emoji:'🌪️', color:'coral', desc:'Курмангазы • Ураганная энергия кочевников',
    tempo: 360,
    s1: [0,-1,0,0,  3,-1,3,3,  5,-1,5,5,  7,-1,7,7,  10,-1,9,-1, 7,-1,5,-1, 3,-1,2,-1, 0,-1,-1,-1],
    s2: [0,-1,0,0,  0,-1,0,0,  0,-1,0,0,  0,-1,0,0,   0,-1,0,-1, 0,-1,0,-1, 0,-1,0,-1, 0,-1,-1,-1],
    hints:['Быстрый бой на открытых!','Переход на 3-й лад!','Разгон на 5-й лад!','Пик на 7-м ладу!','И быстрый спуск вниз!'],
    tabColors:['coral','steppe','gold','violet','cyan'],
  }
].map(kui => {
  const notesPerSec = kui.tempo / 60;
  const targetNotes = Math.floor(notesPerSec * 45);
  const repeats = Math.ceil(targetNotes / kui.s1.length);
  
  if(repeats > 1) {
    kui.s1 = Array(repeats).fill(kui.s1).flat();
    kui.s2 = Array(repeats).fill(kui.s2).flat();
  }
  return kui;
});

let currentKui=0;
let tabPlayTimeout=null;


const dombyraNotes1 = ["D5", "Eb5", "E5", "F5", "Gb5", "G5", "Ab5", "A5", "Bb5", "B5", "C6", "Db6", "D6", "Eb6", "E6", "F6", "Gb6", "G6", "Ab6", "A6", "Bb6"];
const dombyraNotes2 = ["G4", "Ab4", "A4", "Bb4", "B4", "C5", "Db5", "D5", "Eb5", "E5", "F5", "Gb5", "G5", "Ab5", "A5", "Bb5", "B5", "C6", "Db6", "D6", "Eb6"];

function initFretboard(){
  const container=document.getElementById('fretboard-container');
  if(!container) return;
  container.innerHTML='';
  
  const numberOfFrets = 20;
  const fretMarkPositions = [2, 5, 7, 10, 12, 14];

  // String 1
  let string1 = document.createElement('div');
  string1.classList.add('string-zh');
  string1.setAttribute('string_number', '1');
  container.appendChild(string1);

  for (let fret = 0; fret <= numberOfFrets; fret++) {
    let noteFret = document.createElement("div");
    noteFret.classList.add('noteFret-zh');
    noteFret.setAttribute('data-note', dombyraNotes1[fret]);
    if (fretMarkPositions.includes(fret)) noteFret.classList.add('fretmark-zh');
    noteFret.onclick = () => playFret(fret, 1);
    string1.appendChild(noteFret);
  }

  // String 2
  let string2 = document.createElement('div');
  string2.classList.add('string-zh');
  string2.setAttribute('string_number', '2');
  container.appendChild(string2);

  for (let fret = 0; fret <= numberOfFrets; fret++) {
    let noteFret = document.createElement("div");
    noteFret.classList.add('noteFret-zh');
    noteFret.setAttribute('data-note', dombyraNotes2[fret]);
    noteFret.onclick = () => playFret(fret, 2);
    string2.appendChild(noteFret);
  }
}

function playFret(fret, string){
  const noteName = string === 1 ? dombyraNotes1[fret] : dombyraNotes2[fret];
  playNoteExact(noteName, 1.2);
  
  const stringRow = document.querySelector(`[string_number="${string}"]`);
  if(stringRow) {
    const noteEl = stringRow.children[fret];
    if(noteEl) {
      noteEl.style.setProperty('--noteDotOpacity', '1');
      setTimeout(() => { noteEl.style.setProperty('--noteDotOpacity', '0'); }, 400);
    }
  }
}

// Window attachment for certificate.html bindings
window.selectMelody = function(songId) {
    // Map songId to index
    const map = {'smoke':0, 'bella':1, 'kozim':2, 'adai':3};
    let idx = map[songId] !== undefined ? map[songId] : 1;
    selectKui(idx);
    
    // UI active state
    document.querySelectorAll('button[id^="songBtn_"]').forEach(btn => {
        btn.classList.remove('border-brand-gold');
        btn.classList.add('border-brand-gold/10');
    });
    
    const selectedBtn = document.getElementById(`songBtn_${songId}`);
    if(selectedBtn) {
        selectedBtn.classList.remove('border-brand-gold/10');
        selectedBtn.classList.add('border-brand-gold');
    }
};

function selectKui(idx){
  currentKui=idx;
  renderTabs(idx);
}

function renderTabs(idx){
  const k=KUIS[idx];
  const r1=document.getElementById('tab-row-1');
  const r2=document.getElementById('tab-row-2');
  if(!r1 || !r2) return;
  r1.innerHTML=''; r2.innerHTML='';
  k.s1.forEach((n,i)=>{ r1.appendChild(makeTabCell(n,'violet',i)); });
  k.s2.forEach((n,i)=>{ r2.appendChild(makeTabCell(n,'cyan',i)); });
}

function makeTabCell(num, color, idx){
  const div=document.createElement('div');
  div.id=`tab-cell-${color}-${idx}`;
  const colorMap={
    violet:'border-amber-800/40 text-amber-900 bg-amber-800/10',
    cyan:'border-amber-600/40 text-amber-700 bg-amber-600/10'
  };
  div.className=`w-7 h-7 flex-shrink-0 rounded border ${colorMap[color]} flex items-center justify-center text-xs font-bold font-mono transition-all`;
  div.textContent=num===0?'○':(num===-1?'-':num);
  if(num===-1) div.style.opacity='0.3';
  return div;
}

let tabStep=0;
window.playTabs = async function(){
  if(tabPlayTimeout) { clearTimeout(tabPlayTimeout); tabStep=0; }
  
  const btn=document.getElementById('play-tabs-btn');
  if(!samplesLoaded) {
    btn.textContent='⏳ Загрузка...';
    await loadSamples();
  }
  
  const k=KUIS[currentKui];
  tabStep=0;
  btn.textContent='⏹ Стоп';
  btn.onclick=()=>{ clearTimeout(tabPlayTimeout); tabStep=0; resetTabHighlight(); btn.textContent='▶ Воспроизвести'; btn.onclick=window.playTabs; };

  function step(){
    if(tabStep>=k.s1.length){ btn.textContent='▶ Воспроизвести'; btn.onclick=window.playTabs; resetTabHighlight(); return; }
    resetTabHighlight();
    highlightTabCell('violet',tabStep);
    highlightTabCell('cyan',tabStep);

    // Guitar Hero Scroll
    const offset = -(tabStep * 44);
    const delay = 60000 / (k.tempo || 200);
    const row1 = document.getElementById('tab-row-1');
    const row2 = document.getElementById('tab-row-2');
    row1.style.transitionDuration = delay + 'ms';
    row2.style.transitionDuration = delay + 'ms';
    row1.style.transform = `translateX(${offset}px)`;
    row2.style.transform = `translateX(${offset}px)`;

    const n1 = k.s1[tabStep];
    const n2 = k.s2[tabStep];
    
    if (n1 >= 0) {
      const stringRow = document.querySelector(`[string_number="1"]`);
      if(stringRow) {
        const noteEl = stringRow.children[n1];
        if(noteEl) { noteEl.style.setProperty('--noteDotOpacity', '1'); setTimeout(()=>noteEl.style.setProperty('--noteDotOpacity', '0'), 200); }
      }
    }
    if (n2 >= 0) {
      const stringRow = document.querySelector(`[string_number="2"]`);
      if(stringRow) {
        const noteEl = stringRow.children[n2];
        if(noteEl) { noteEl.style.setProperty('--noteDotOpacity', '1'); setTimeout(()=>noteEl.style.setProperty('--noteDotOpacity', '0'), 200); }
      }
    }
    
    // Natural dombra strum
    if (tabStep % 2 === 0) {
      if (n2 >= 0) { playNoteExact(dombyraNotes2[n2], 2.5); }
      if (n1 >= 0) { setTimeout(() => playNoteExact(dombyraNotes1[n1], 2.5), 25); }
    } else {
      if (n1 >= 0) { playNoteExact(dombyraNotes1[n1], 2.5); }
      if (n2 >= 0) { setTimeout(() => playNoteExact(dombyraNotes2[n2], 2.5), 25); }
    }
    
    if (n1 >= 0) highlightFret(n1, 1);
    if (n2 >= 0) highlightFret(n2, 2);
    
    tabStep++;
    tabPlayTimeout = setTimeout(step, delay);
  }
  step();
};

function highlightTabCell(color,idx){
  const cell=document.getElementById(`tab-cell-${color}-${idx}`);
  if(!cell) return;
  const c=color==='violet'?'bg-amber-800/50 border-amber-800 scale-125 shadow-md text-white':'bg-amber-600/50 border-amber-600 scale-125 shadow-md text-white';
  cell.className=`w-7 h-7 flex-shrink-0 rounded border ${c} flex items-center justify-center text-xs font-bold font-mono transition-all`;
}

function resetTabHighlight(){
  const r1 = document.getElementById('tab-row-1');
  const r2 = document.getElementById('tab-row-2');
  if(r1) r1.style.transform = `translateX(0px)`;
  if(r2) r2.style.transform = `translateX(0px)`;

  document.querySelectorAll('[id^="tab-cell-"]').forEach(el=>{
    const isViolet=el.id.includes('violet');
    const colorMap=isViolet?'border-amber-800/40 text-amber-900 bg-amber-800/10':'border-amber-600/40 text-amber-700 bg-amber-600/10';
    el.className=`w-7 h-7 flex-shrink-0 rounded border ${colorMap} flex items-center justify-center text-xs font-bold font-mono transition-all`;
  });
}

function highlightFret(fret,string){
  const btn=document.getElementById(`fret-${fret}-${string}`);
  if(!btn) return;
  btn.classList.add('active-tab');
  setTimeout(()=>btn.classList.remove('active-tab'),500);
}

// ── METRONOME ──────────────────────────────────────────────────────────
// Metronome removed per user request.

document.addEventListener('DOMContentLoaded', () => {
    initFretboard();
    window.selectMelody('smoke');
});
