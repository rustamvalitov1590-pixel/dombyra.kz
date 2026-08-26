// Tuner functionality for Dombra
let audioContext;
let analyser;
let microphone;
let isTuning = false;
let animationId;

// Standard Dombra frequencies
const TARGET_D3 = 146.83; // Ре (нижняя струна)
const TARGET_G3 = 196.00; // Соль (верхняя струна)

const notes = [
    { note: "C", freq: 130.81 },
    { note: "C#", freq: 138.59 },
    { note: "D (Ре)", freq: TARGET_D3 },
    { note: "D#", freq: 155.56 },
    { note: "E", freq: 164.81 },
    { note: "F", freq: 174.61 },
    { note: "F#", freq: 185.00 },
    { note: "G (Соль)", freq: TARGET_G3 },
    { note: "G#", freq: 207.65 },
    { note: "A", freq: 220.00 },
    { note: "A#", freq: 233.08 },
    { note: "B", freq: 246.94 }
];

async function toggleTuner() {
    if (isTuning) {
        stopTuner();
    } else {
        await startTuner();
    }
}

async function startTuner() {
    try {
        const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
        audioContext = new (window.AudioContext || window.webkitAudioContext)();
        analyser = audioContext.createAnalyser();
        analyser.fftSize = 2048;
        microphone = audioContext.createMediaStreamSource(stream);
        microphone.connect(analyser);

        isTuning = true;
        document.getElementById('btnStartTuner').innerHTML = '<span class="text-brand-red font-black">ВЫКЛЮЧИТЬ МИКРОФОН</span>';
        document.getElementById('tunerStatus').innerText = 'СЛУШАЮ...';
        
        updatePitch();
    } catch (err) {
        alert('Не удалось получить доступ к микрофону. Разрешите доступ в браузере.');
        console.error(err);
    }
}

function stopTuner() {
    isTuning = false;
    if (microphone) microphone.disconnect();
    if (audioContext) audioContext.close();
    cancelAnimationFrame(animationId);
    
    document.getElementById('btnStartTuner').innerHTML = `
        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 14c1.66 0 3-1.34 3-3V5c0-1.66-1.34-3-3-3S9 3.34 9 5v6c0 1.66 1.34 3 3 3z"/><path d="M17 11c0 2.76-2.24 5-5 5s-5-2.24-5-5H5c0 3.53 2.61 6.43 6 6.92V21h2v-3.08c3.39-.49 6-3.39 6-6.92h-2z"/></svg>
        Включить микрофон
    `;
    document.getElementById('tunerNote').innerText = '-';
    document.getElementById('tunerHz').innerText = '-- Hz';
    document.getElementById('tunerStatus').innerText = 'ОЖИДАНИЕ...';
    document.getElementById('tunerNeedle').style.transform = 'translate(-50%, -100%) rotate(0deg)';
    document.getElementById('tunerNeedle').style.backgroundColor = '#FF4233'; // Red
}

function autoCorrelate(buf, sampleRate) {
    let SIZE = buf.length;
    let rms = 0;
    for (let i = 0; i < SIZE; i++) {
        let val = buf[i];
        rms += val * val;
    }
    rms = Math.sqrt(rms / SIZE);
    if (rms < 0.01) return -1;

    let r1 = 0, r2 = SIZE - 1, thres = 0.2;
    for (let i = 0; i < SIZE / 2; i++)
        if (Math.abs(buf[i]) < thres) { r1 = i; break; }
    for (let i = 1; i < SIZE / 2; i++)
        if (Math.abs(buf[SIZE - i]) < thres) { r2 = SIZE - i; break; }

    buf = buf.slice(r1, r2);
    SIZE = buf.length;

    let c = new Array(SIZE).fill(0);
    for (let i = 0; i < SIZE; i++)
        for (let j = 0; j < SIZE - i; j++)
            c[i] = c[i] + buf[j] * buf[j + i];

    let d = 0; while (c[d] > c[d + 1]) d++;
    let maxval = -1, maxpos = -1;
    for (let i = d; i < SIZE; i++) {
        if (c[i] > maxval) {
            maxval = c[i];
            maxpos = i;
        }
    }
    let T0 = maxpos;
    let x1 = c[T0 - 1], x2 = c[T0], x3 = c[T0 + 1];
    let a = (x1 + x3 - 2 * x2) / 2;
    let b = (x3 - x1) / 2;
    if (a) T0 = T0 - b / (2 * a);
    return sampleRate / T0;
}

function updatePitch() {
    if (!isTuning) return;
    
    let buffer = new Float32Array(analyser.fftSize);
    analyser.getFloatTimeDomainData(buffer);
    
    let ac = autoCorrelate(buffer, audioContext.sampleRate);
    
    if (ac !== -1) {
        let pitch = ac;
        // Limit range for Dombra (approx 100Hz to 300Hz)
        if (pitch > 80 && pitch < 400) {
            document.getElementById('tunerHz').innerText = pitch.toFixed(1) + ' Hz';
            
            // Find closest note
            let closestNote = notes[0];
            let minDiff = Math.abs(pitch - notes[0].freq);
            for(let i=1; i<notes.length; i++) {
                let diff = Math.abs(pitch - notes[i].freq);
                if(diff < minDiff) {
                    minDiff = diff;
                    closestNote = notes[i];
                }
            }
            
            document.getElementById('tunerNote').innerText = closestNote.note.split(' ')[0];
            
            // Calculate cents (logarithmic difference)
            let cents = 1200 * Math.log2(pitch / closestNote.freq);
            // Map -50 to 50 cents to -45 to 45 degrees
            let angle = Math.max(-45, Math.min(45, cents));
            
            let needle = document.getElementById('tunerNeedle');
            needle.style.transform = `translate(-50%, -100%) rotate(${angle}deg)`;
            
            if (Math.abs(cents) < 5) {
                needle.style.backgroundColor = '#A3F800'; // Green (in tune)
                document.getElementById('tunerStatus').innerText = 'ИДЕАЛЬНО!';
                document.getElementById('tunerStatus').style.color = '#A3F800';
            } else {
                needle.style.backgroundColor = '#FF4233'; // Red (out of tune)
                if (cents < 0) {
                    document.getElementById('tunerStatus').innerText = 'НАТЯНИТЕ (ВЫШЕ)';
                } else {
                    document.getElementById('tunerStatus').innerText = 'ОСЛАБЬТЕ (НИЖЕ)';
                }
                document.getElementById('tunerStatus').style.color = '#C5A377';
            }
        }
    }
    
    animationId = requestAnimationFrame(updatePitch);
}

// Play reference tone using Tone.js (already loaded on page)
let synth;
function playReferenceTone(frequency) {
    if (!synth) {
        synth = new Tone.Synth({
            oscillator: { type: "triangle" },
            envelope: { attack: 0.1, decay: 0.2, sustain: 0.5, release: 2 }
        }).toDestination();
    }
    
    // Resume audio context if suspended
    if (Tone.context.state !== 'running') {
        Tone.context.resume();
    }
    
    synth.triggerAttackRelease(frequency, "1n");
}
