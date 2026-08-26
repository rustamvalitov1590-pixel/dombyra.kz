import os
import glob
import re

for file in glob.glob('*.html'):
    with open(file, 'r', encoding='utf-8') as f:
        content = f.read()
    
    # Replace header classes
    content = content.replace('<header class=\"fixed w-full top-0 z-50 px-4 transition-all duration-300\"',
                              '<header class=\"fixed w-full top-0 z-50 px-0 md:px-4 transition-all duration-300\"')
    
    with open(file, 'w', encoding='utf-8') as f:
        f.write(content)
