<template>
    <div>


<div class="flex">

<!-- v-model="showhides[index]" -->
<label v-for="(showhide, index) in showhides" :key="index" :for="'default-toggle'+index" class="inline-flex relative items-center cursor-pointer">
  <input type="checkbox"  :checked="showhides[index]"
  @change="showhides[index]=!showhides[index]"
  :value="showhides[index]" :id="'default-toggle'+index" class="sr-only peer">
  <div class="   w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border  after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
  <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">
    {{showhidesnames[index]}}:{{showhides[index]}}</span>
</label>
</div>

<div class=" text-center flex">
  <svg class=" bg-red-600" xmlns="http://www.w3.org/2000/svg" style="margin: auto; display: block; shape-rendering: auto; background: none;" width="206" height="59" preserveAspectRatio="xMidYMid">

<g style="transform-origin:103px 29.5px;transform:scale(1)">
<g transform="translate(103,29.5)">
  <g transform="translate(0,0)"><g class="path" style="transform: matrix(0.01, 0, 0, 0.01, 0, 0); transform-origin: -44.05px -2.20936px; animation: 1s linear 0s 1 normal forwards running bounce-in-2ee05c40-e3be-417d-adf1-b63158888def;"><path d="M1.02-2.01L2.65-4.73L2.65-4.73Q3.88-3.71 5.41-3.06L5.41-3.06L5.41-3.06Q6.94-2.41 8.98-2.41L8.98-2.41L8.98-2.41Q11.42-2.41 12.85-3.43L12.85-3.43L12.85-3.43Q14.28-4.45 14.28-6.19L14.28-6.19L14.28-6.19Q14.28-6.90 14.08-7.51L14.08-7.51L14.08-7.51Q13.87-8.13 13.28-8.69L13.28-8.69L13.28-8.69Q12.68-9.25 11.61-9.81L11.61-9.81L11.61-9.81Q10.54-10.37 8.84-11.02L8.84-11.02L8.84-11.02Q7.00-11.73 5.73-12.43L5.73-12.43L5.73-12.43Q4.45-13.12 3.67-13.96L3.67-13.96L3.67-13.96Q2.89-14.79 2.55-15.79L2.55-15.79L2.55-15.79Q2.21-16.80 2.21-18.09L2.21-18.09L2.21-18.09Q2.21-19.35 2.74-20.47L2.74-20.47L2.74-20.47Q3.26-21.59 4.30-22.42L4.30-22.42L4.30-22.42Q5.34-23.26 6.85-23.73L6.85-23.73L6.85-23.73Q8.36-24.21 10.30-24.21L10.30-24.21L10.30-24.21Q12.41-24.21 14.08-23.78L14.08-23.78L14.08-23.78Q15.74-23.36 17.37-22.58L17.37-22.58L16.18-19.82L16.18-19.82Q15.03-20.50 13.48-20.96L13.48-20.96L13.48-20.96Q11.93-21.42 10.23-21.42L10.23-21.42L10.23-21.42Q7.99-21.42 6.70-20.55L6.70-20.55L6.70-20.55Q5.41-19.69 5.41-18.26L5.41-18.26L5.41-18.26Q5.41-17.58 5.59-17.05L5.59-17.05L5.59-17.05Q5.78-16.52 6.34-16.03L6.34-16.03L6.34-16.03Q6.90-15.54 7.91-15.03L7.91-15.03L7.91-15.03Q8.91-14.52 10.57-13.91L10.57-13.91L10.57-13.91Q12.55-13.16 13.91-12.38L13.91-12.38L13.91-12.38Q15.27-11.59 16.08-10.71L16.08-10.71L16.08-10.71Q16.90-9.83 17.26-8.81L17.26-8.81L17.26-8.81Q17.61-7.79 17.61-6.56L17.61-6.56L17.61-6.56Q17.61-4.90 16.97-3.60L16.97-3.60L16.97-3.60Q16.32-2.31 15.18-1.41L15.18-1.41L15.18-1.41Q14.04-0.51 12.44-0.05L12.44-0.05L12.44-0.05Q10.85 0.41 8.98 0.41L8.98 0.41L8.98 0.41Q6.49 0.41 4.45-0.26L4.45-0.26L4.45-0.26Q2.41-0.92 1.02-2.01L1.02-2.01" fill="#7c77ff" stroke="none" stroke-width="none" transform="translate(-53.36500549316406,9.690635884602871)" style="fill: rgb(124, 119, 255);"></path></g><g class="path" style="transform: matrix(0.01, 0, 0, 0.01, 0, 0); transform-origin: -25.69px 0.850636px; animation: 1s linear 0.11s 1 normal forwards running bounce-in-2ee05c40-e3be-417d-adf1-b63158888def;"><path d="M34.24-17.03L33.32-14.45L33.32-14.45Q32.33-14.93 31.48-15.15L31.48-15.15L31.48-15.15Q30.63-15.37 29.58-15.37L29.58-15.37L29.58-15.37Q28.39-15.37 27.35-14.93L27.35-14.93L27.35-14.93Q26.32-14.48 25.57-13.65L25.57-13.65L25.57-13.65Q24.82-12.82 24.40-11.63L24.40-11.63L24.40-11.63Q23.97-10.44 23.97-8.91L23.97-8.91L23.97-8.91Q23.97-7.51 24.36-6.32L24.36-6.32L24.36-6.32Q24.75-5.13 25.47-4.23L25.47-4.23L25.47-4.23Q26.18-3.33 27.17-2.82L27.17-2.82L27.17-2.82Q28.15-2.31 29.38-2.31L29.38-2.31L29.38-2.31Q30.67-2.31 31.59-2.58L31.59-2.58L31.59-2.58Q32.50-2.86 33.56-3.43L33.56-3.43L34.51-0.85L34.51-0.85Q33.42-0.27 32.13 0.07L32.13 0.07L32.13 0.07Q30.84 0.41 29.17 0.41L29.17 0.41L29.17 0.41Q27.27 0.41 25.74-0.27L25.74-0.27L25.74-0.27Q24.21-0.95 23.12-2.18L23.12-2.18L23.12-2.18Q22.03-3.40 21.44-5.10L21.44-5.10L21.44-5.10Q20.84-6.80 20.84-8.84L20.84-8.84L20.84-8.84Q20.84-10.74 21.44-12.43L21.44-12.43L21.44-12.43Q22.03-14.11 23.15-15.37L23.15-15.37L23.15-15.37Q24.28-16.63 25.86-17.36L25.86-17.36L25.86-17.36Q27.44-18.09 29.41-18.09L29.41-18.09L29.41-18.09Q30.94-18.09 32.06-17.82L32.06-17.82L32.06-17.82Q33.18-17.54 34.24-17.03L34.24-17.03" fill="#7c77ff" stroke="none" stroke-width="none" transform="translate(-53.36500549316406,9.690635884602871)" style="fill: rgb(124, 119, 255);"></path></g><g class="path" style="transform: matrix(0.01, 0, 0, 0.01, 0, 0); transform-origin: -7.85501px -2.88936px; animation: 1s linear 0.22s 1 normal forwards running bounce-in-2ee05c40-e3be-417d-adf1-b63158888def;"><path d="M41.14-25.16L41.14-14.86L41.14-14.86Q42.09-16.25 43.54-17.17L43.54-17.17L43.54-17.17Q44.98-18.09 46.99-18.09L46.99-18.09L46.99-18.09Q49.98-18.09 51.46-16.29L51.46-16.29L51.46-16.29Q52.94-14.48 52.94-11.53L52.94-11.53L52.94 0L49.88 0L49.88-11.19L49.88-11.19Q49.88-13.12 49.01-14.26L49.01-14.26L49.01-14.26Q48.14-15.40 46.51-15.40L46.51-15.40L46.51-15.40Q45.73-15.40 44.97-15.11L44.97-15.11L44.97-15.11Q44.20-14.82 43.52-14.31L43.52-14.31L43.52-14.31Q42.84-13.80 42.23-13.12L42.23-13.12L42.23-13.12Q41.62-12.44 41.14-11.70L41.14-11.70L41.14 0L38.08 0L38.08-25.16L41.14-25.16" fill="#7c77ff" stroke="none" stroke-width="none" transform="translate(-53.36500549316406,9.690635884602871)" style="fill: rgb(124, 119, 255);"></path></g><g class="path" style="transform: matrix(0.01, 0, 0, 0.01, 0, 0); transform-origin: 12.29px 0.850636px; animation: 1s linear 0.33s 1 normal forwards running bounce-in-2ee05c40-e3be-417d-adf1-b63158888def;"><path d="M71.33-8.84L71.33-8.84L71.33-8.84Q71.33-10.17 70.91-11.36L70.91-11.36L70.91-11.36Q70.48-12.55 69.72-13.43L69.72-13.43L69.72-13.43Q68.95-14.31 67.92-14.84L67.92-14.84L67.92-14.84Q66.88-15.37 65.65-15.37L65.65-15.37L65.65-15.37Q62.97-15.37 61.47-13.60L61.47-13.60L61.47-13.60Q59.98-11.83 59.98-8.91L59.98-8.91L59.98-8.91Q59.98-7.58 60.40-6.38L60.40-6.38L60.40-6.38Q60.83-5.17 61.59-4.27L61.59-4.27L61.59-4.27Q62.36-3.37 63.39-2.84L63.39-2.84L63.39-2.84Q64.43-2.31 65.65-2.31L65.65-2.31L65.65-2.31Q66.98-2.31 68.03-2.79L68.03-2.79L68.03-2.79Q69.09-3.26 69.82-4.13L69.82-4.13L69.82-4.13Q70.55-5.00 70.94-6.19L70.94-6.19L70.94-6.19Q71.33-7.38 71.33-8.84zM56.85-8.84L56.85-8.84L56.85-8.84Q56.85-10.98 57.53-12.70L57.53-12.70L57.53-12.70Q58.21-14.42 59.38-15.61L59.38-15.61L59.38-15.61Q60.55-16.80 62.17-17.44L62.17-17.44L62.17-17.44Q63.78-18.09 65.65-18.09L65.65-18.09L65.65-18.09Q67.49-18.09 69.11-17.44L69.11-17.44L69.11-17.44Q70.72-16.80 71.91-15.61L71.91-15.61L71.91-15.61Q73.10-14.42 73.78-12.72L73.78-12.72L73.78-12.72Q74.46-11.02 74.46-8.91L74.46-8.91L74.46-8.91Q74.46-6.80 73.80-5.08L73.80-5.08L73.80-5.08Q73.13-3.37 71.94-2.14L71.94-2.14L71.94-2.14Q70.75-0.92 69.14-0.26L69.14-0.26L69.14-0.26Q67.52 0.41 65.65 0.41L65.65 0.41L65.65 0.41Q63.75 0.41 62.13-0.27L62.13-0.27L62.13-0.27Q60.52-0.95 59.35-2.18L59.35-2.18L59.35-2.18Q58.17-3.40 57.51-5.10L57.51-5.10L57.51-5.10Q56.85-6.80 56.85-8.84" fill="#7c77ff" stroke="none" stroke-width="none" transform="translate(-53.36500549316406,9.690635884602871)" style="fill: rgb(67, 60, 255);"></path></g><g class="path" style="transform: matrix(0.01, 0, 0, 0.01, 0, 0); transform-origin: 32.62px 0.850636px; animation: 1s linear 0.44s 1 normal forwards running bounce-in-2ee05c40-e3be-417d-adf1-b63158888def;"><path d="M91.66-8.84L91.66-8.84L91.66-8.84Q91.66-10.17 91.24-11.36L91.24-11.36L91.24-11.36Q90.81-12.55 90.05-13.43L90.05-13.43L90.05-13.43Q89.28-14.31 88.25-14.84L88.25-14.84L88.25-14.84Q87.21-15.37 85.99-15.37L85.99-15.37L85.99-15.37Q83.30-15.37 81.80-13.60L81.80-13.60L81.80-13.60Q80.31-11.83 80.31-8.91L80.31-8.91L80.31-8.91Q80.31-7.58 80.73-6.38L80.73-6.38L80.73-6.38Q81.16-5.17 81.92-4.27L81.92-4.27L81.92-4.27Q82.69-3.37 83.72-2.84L83.72-2.84L83.72-2.84Q84.76-2.31 85.99-2.31L85.99-2.31L85.99-2.31Q87.31-2.31 88.37-2.79L88.37-2.79L88.37-2.79Q89.42-3.26 90.15-4.13L90.15-4.13L90.15-4.13Q90.88-5.00 91.27-6.19L91.27-6.19L91.27-6.19Q91.66-7.38 91.66-8.84zM77.18-8.84L77.18-8.84L77.18-8.84Q77.18-10.98 77.86-12.70L77.86-12.70L77.86-12.70Q78.54-14.42 79.71-15.61L79.71-15.61L79.71-15.61Q80.89-16.80 82.50-17.44L82.50-17.44L82.50-17.44Q84.12-18.09 85.99-18.09L85.99-18.09L85.99-18.09Q87.82-18.09 89.44-17.44L89.44-17.44L89.44-17.44Q91.05-16.80 92.24-15.61L92.24-15.61L92.24-15.61Q93.43-14.42 94.11-12.72L94.11-12.72L94.11-12.72Q94.79-11.02 94.79-8.91L94.79-8.91L94.79-8.91Q94.79-6.80 94.13-5.08L94.13-5.08L94.13-5.08Q93.47-3.37 92.28-2.14L92.28-2.14L92.28-2.14Q91.09-0.92 89.47-0.26L89.47-0.26L89.47-0.26Q87.86 0.41 85.99 0.41L85.99 0.41L85.99 0.41Q84.08 0.41 82.47-0.27L82.47-0.27L82.47-0.27Q80.85-0.95 79.68-2.18L79.68-2.18L79.68-2.18Q78.51-3.40 77.84-5.10L77.84-5.10L77.84-5.10Q77.18-6.80 77.18-8.84" fill="#7c77ff" stroke="none" stroke-width="none" transform="translate(-53.36500549316406,9.690635884602871)" style="fill: rgb(67, 60, 255);"></path></g><g class="path" style="transform: matrix(0.01, 0, 0, 0.01, 0, 0); transform-origin: 49.86px -2.68436px; animation: 1s linear 0.55s 1 normal forwards running bounce-in-2ee05c40-e3be-417d-adf1-b63158888def;"><path d="M101.76-25.16L101.76-5.85L101.76-5.85Q101.76-4.01 102.53-3.13L102.53-3.13L102.53-3.13Q103.29-2.24 104.65-2.24L104.65-2.24L104.65-2.24Q105.30-2.24 105.91-2.40L105.91-2.40L105.91-2.40Q106.52-2.55 107.00-2.75L107.00-2.75L107.75-0.27L107.75-0.27Q107.13 0 106.23 0.20L106.23 0.20L106.23 0.20Q105.33 0.41 104.24 0.41L104.24 0.41L104.24 0.41Q103.05 0.41 102.05 0.07L102.05 0.07L102.05 0.07Q101.05-0.27 100.30-0.99L100.30-0.99L100.30-0.99Q99.55-1.70 99.13-2.82L99.13-2.82L99.13-2.82Q98.70-3.94 98.70-5.54L98.70-5.54L98.70-25.16L101.76-25.16" fill="#7c77ff" stroke="none" stroke-width="none" transform="translate(-53.36500549316406,9.690635884602871)" style="fill: rgb(124, 119, 255);"></path></g></g>
</g>
</g>
</svg>
  











<svg class=" bg-green-600" xmlns="http://www.w3.org/2000/svg" style="margin: -50px; display: block; shape-rendering: auto; background: none;" width="206" height="59" preserveAspectRatio="xMidYMid">

<g style="transform-origin:103px 29.5px;transform:scale(1)">
<g transform="translate(103,29.5)">
  <g transform="translate(0,0)"><g class="path" style="opacity: 1; transform-origin: -70.635px -2.48118px; animation: 1s linear -0.6s infinite normal forwards running fade-cbdbb8b5-4f03-494d-8bf4-6f5013eb9de4;"><path d="M3.06 0L3.06-23.80L17.34-23.80L17.34-21.01L6.29-21.01L6.29-13.77L15.81-13.77L15.81-11.05L6.29-11.05L6.29-2.79L17.34-2.79L17.34 0L3.06 0" fill="#7c77ff" stroke="none" stroke-width="none" transform="translate(-80.83499145507812,9.418821133700286)" style="fill: rgb(124, 119, 255);"></path></g><g class="path" style="opacity: 1; transform-origin: -53.925px 0.408821px; animation: 1s linear -0.54s infinite normal forwards running fade-cbdbb8b5-4f03-494d-8bf4-6f5013eb9de4;"><path d="M25.30 0L18.19-16.86L20.98-18.02L27.00-3.47L33.01-18.02L35.63-16.86L28.49 0L25.30 0" fill="#7c77ff" stroke="none" stroke-width="none" transform="translate(-80.83499145507812,9.418821133700286)" style="fill: rgb(124, 119, 255);"></path></g><g class="path" style="opacity: 1; transform-origin: -36.21px 0.578821px; animation: 1s linear -0.48s infinite normal forwards running fade-cbdbb8b5-4f03-494d-8bf4-6f5013eb9de4;"><path d="M52.33-7.58L39.95-7.58L39.95-7.58Q40.26-5.10 41.68-3.71L41.68-3.71L41.68-3.71Q43.11-2.31 45.46-2.31L45.46-2.31L45.46-2.31Q46.99-2.31 48.21-2.64L48.21-2.64L48.21-2.64Q49.44-2.96 50.56-3.47L50.56-3.47L51.27-0.85L51.27-0.85Q50.05-0.27 48.52 0.07L48.52 0.07L48.52 0.07Q46.99 0.41 45.08 0.41L45.08 0.41L45.08 0.41Q43.18 0.41 41.65-0.22L41.65-0.22L41.65-0.22Q40.12-0.85 39.05-2.02L39.05-2.02L39.05-2.02Q37.98-3.20 37.40-4.91L37.40-4.91L37.40-4.91Q36.82-6.63 36.82-8.84L36.82-8.84L36.82-8.84Q36.82-10.81 37.40-12.51L37.40-12.51L37.40-12.51Q37.98-14.21 39.03-15.45L39.03-15.45L39.03-15.45Q40.09-16.69 41.55-17.39L41.55-17.39L41.55-17.39Q43.01-18.09 44.81-18.09L44.81-18.09L44.81-18.09Q46.72-18.09 48.14-17.44L48.14-17.44L48.14-17.44Q49.57-16.80 50.52-15.67L50.52-15.67L50.52-15.67Q51.48-14.55 51.95-13.06L51.95-13.06L51.95-13.06Q52.43-11.56 52.43-9.89L52.43-9.89L52.43-9.89Q52.43-8.70 52.33-7.58L52.33-7.58zM44.74-15.44L44.74-15.44L44.74-15.44Q42.74-15.44 41.46-14.08L41.46-14.08L41.46-14.08Q40.19-12.72 39.92-10.06L39.92-10.06L49.61-10.06L49.61-10.06Q49.61-12.65 48.31-14.04L48.31-14.04L48.31-14.04Q47.02-15.44 44.74-15.44" fill="#7c77ff" stroke="none" stroke-width="none" transform="translate(-80.83499145507812,9.418821133700286)" style="fill: rgb(124, 119, 255);"></path></g><g class="path" style="opacity: 1; transform-origin: -19.075px 0.373821px; animation: 1s linear -0.42s infinite normal forwards running fade-cbdbb8b5-4f03-494d-8bf4-6f5013eb9de4;"><path d="M67.01-17.88L66.10-14.72L66.10-14.72Q65.45-14.99 64.57-14.99L64.57-14.99L64.57-14.99Q63.61-14.99 62.71-14.59L62.71-14.59L62.71-14.59Q61.81-14.18 61.12-13.36L61.12-13.36L61.12-13.36Q60.42-12.55 59.99-11.27L59.99-11.27L59.99-11.27Q59.57-10.00 59.57-8.26L59.57-8.26L59.57 0L56.51 0L56.51-17.68L59.47-17.68L59.47-13.84L59.47-13.84Q59.77-14.65 60.28-15.44L60.28-15.44L60.28-15.44Q60.79-16.22 61.49-16.80L61.49-16.80L61.49-16.80Q62.19-17.37 63.10-17.73L63.10-17.73L63.10-17.73Q64.02-18.09 65.14-18.09L65.14-18.09L65.14-18.09Q65.65-18.09 66.15-18.04L66.15-18.04L66.15-18.04Q66.64-17.99 67.01-17.88L67.01-17.88" fill="#7c77ff" stroke="none" stroke-width="none" transform="translate(-80.83499145507812,9.418821133700286)" style="fill: rgb(67, 60, 255);"></path></g><g class="path" style="opacity: 1; transform-origin: -4.67499px 4.31882px; animation: 1s linear -0.36s infinite normal forwards running fade-cbdbb8b5-4f03-494d-8bf4-6f5013eb9de4;"><path d="M70.52 7.89L70.52 7.89L70.52 7.89Q69.50 7.89 68.73 7.68L68.73 7.68L68.73 7.68Q67.97 7.48 67.52 7.21L67.52 7.21L68.20 4.66L68.20 4.66Q68.61 4.90 69.21 5.07L69.21 5.07L69.21 5.07Q69.80 5.24 70.58 5.24L70.58 5.24L70.58 5.24Q71.30 5.24 71.93 5.03L71.93 5.03L71.93 5.03Q72.56 4.83 73.13 4.32L73.13 4.32L73.13 4.32Q73.71 3.81 74.24 2.92L74.24 2.92L74.24 2.92Q74.77 2.04 75.28 0.71L75.28 0.71L76.06-1.33L74.43-1.33L67.52-16.86L70.24-18.09L76.84-3.37L81.97-17.95L84.80-16.86L78.30 0.88L78.30 0.88Q77.55 2.92 76.72 4.27L76.72 4.27L76.72 4.27Q75.89 5.61 74.94 6.43L74.94 6.43L74.94 6.43Q73.98 7.24 72.88 7.57L72.88 7.57L72.88 7.57Q71.77 7.89 70.52 7.89" fill="#7c77ff" stroke="none" stroke-width="none" transform="translate(-80.83499145507812,9.418821133700286)" style="fill: rgb(67, 60, 255);"></path></g><g class="path" style="opacity: 1; transform-origin: 11.05px -1.68118px; animation: 1s linear -0.3s infinite normal forwards running fade-cbdbb8b5-4f03-494d-8bf4-6f5013eb9de4;"><path d="M88.60-17.03L89.25-22.61L91.60-22.61L91.60-17.03L96.49-17.03L96.49-14.38L91.60-14.38L91.60-5.85L91.60-5.85Q91.60-4.86 91.82-4.18L91.82-4.18L91.82-4.18Q92.04-3.50 92.41-3.09L92.41-3.09L92.41-3.09Q92.79-2.69 93.31-2.50L93.31-2.50L93.31-2.50Q93.84-2.31 94.42-2.31L94.42-2.31L94.42-2.31Q95.27-2.31 96.02-2.58L96.02-2.58L96.02-2.58Q96.76-2.86 97.44-3.23L97.44-3.23L98.29-0.78L98.29-0.78Q97.61-0.37 96.46 0.02L96.46 0.02L96.46 0.02Q95.30 0.41 94.04 0.41L94.04 0.41L94.04 0.41Q91.49 0.41 90.02-1.26L90.02-1.26L90.02-1.26Q88.54-2.92 88.54-6.09L88.54-6.09L88.54-14.38L85.48-14.38L85.48-17.03L88.60-17.03" fill="#7c77ff" stroke="none" stroke-width="none" transform="translate(-80.83499145507812,9.418821133700286)" style="fill: rgb(124, 119, 255);"></path></g><g class="path" style="opacity: 1; transform-origin: 27.945px -3.16118px; animation: 1s linear -0.24s infinite normal forwards running fade-cbdbb8b5-4f03-494d-8bf4-6f5013eb9de4;"><path d="M104.41-25.16L104.41-14.86L104.41-14.86Q105.37-16.25 106.81-17.17L106.81-17.17L106.81-17.17Q108.26-18.09 110.26-18.09L110.26-18.09L110.26-18.09Q113.25-18.09 114.73-16.29L114.73-16.29L114.73-16.29Q116.21-14.48 116.21-11.53L116.21-11.53L116.21 0L113.15 0L113.15-11.19L113.15-11.19Q113.15-13.12 112.28-14.26L112.28-14.26L112.28-14.26Q111.42-15.40 109.79-15.40L109.79-15.40L109.79-15.40Q109.00-15.40 108.24-15.11L108.24-15.11L108.24-15.11Q107.47-14.82 106.79-14.31L106.79-14.31L106.79-14.31Q106.11-13.80 105.50-13.12L105.50-13.12L105.50-13.12Q104.89-12.44 104.41-11.70L104.41-11.70L104.41 0L101.35 0L101.35-25.16L104.41-25.16" fill="#7c77ff" stroke="none" stroke-width="none" transform="translate(-80.83499145507812,9.418821133700286)" style="fill: rgb(124, 119, 255);"></path></g><g class="path" style="opacity: 1; transform-origin: 42.175px 0.578821px; animation: 1s linear -0.18s infinite normal forwards running fade-cbdbb8b5-4f03-494d-8bf4-6f5013eb9de4;"><path d="M124.54-17.68L124.54 0L121.48 0L121.48-17.68L124.54-17.68" fill="#7c77ff" stroke="none" stroke-width="none" transform="translate(-80.83499145507812,9.418821133700286)" style="fill: rgb(124, 119, 255);"></path></g><g class="path" style="opacity: 1; transform-origin: 42.175px -13.4312px; animation: 1s linear -0.12s infinite normal forwards running fade-cbdbb8b5-4f03-494d-8bf4-6f5013eb9de4;"><path d="M123.01-20.71L123.01-20.71L123.01-20.71Q122.13-20.71 121.50-21.34L121.50-21.34L121.50-21.34Q120.87-21.96 120.87-22.85L120.87-22.85L120.87-22.85Q120.87-23.83 121.45-24.41L121.45-24.41L121.45-24.41Q122.03-24.99 123.01-24.99L123.01-24.99L123.01-24.99Q123.90-24.99 124.53-24.36L124.53-24.36L124.53-24.36Q125.15-23.73 125.15-22.85L125.15-22.85L125.15-22.85Q125.15-21.86 124.58-21.28L124.58-21.28L124.58-21.28Q124.00-20.71 123.01-20.71" fill="#7c77ff" stroke="none" stroke-width="none" transform="translate(-80.83499145507812,9.418821133700286)" style="fill: rgb(67, 60, 255);"></path></g><g class="path" style="opacity: 1; transform-origin: 56.575px 0.373821px; animation: 1s linear -0.06s infinite normal forwards running fade-cbdbb8b5-4f03-494d-8bf4-6f5013eb9de4;"><path d="M132.94-17.68L132.94-14.72L132.94-14.72Q133.89-16.15 135.37-17.12L135.37-17.12L135.37-17.12Q136.85-18.09 138.89-18.09L138.89-18.09L138.89-18.09Q141.88-18.09 143.36-16.29L143.36-16.29L143.36-16.29Q144.84-14.48 144.84-11.53L144.84-11.53L144.84 0L141.78 0L141.78-11.19L141.78-11.19Q141.78-13.12 140.90-14.26L140.90-14.26L140.90-14.26Q140.01-15.40 138.38-15.40L138.38-15.40L138.38-15.40Q137.60-15.40 136.85-15.11L136.85-15.11L136.85-15.11Q136.10-14.82 135.41-14.31L135.41-14.31L135.41-14.31Q134.71-13.80 134.11-13.12L134.11-13.12L134.11-13.12Q133.52-12.44 133.04-11.70L133.04-11.70L133.04 0L129.98 0L129.98-17.68L132.94-17.68" fill="#7c77ff" stroke="none" stroke-width="none" transform="translate(-80.83499145507812,9.418821133700286)" style="fill: rgb(67, 60, 255);"></path></g><g class="path" style="opacity: 1; transform-origin: 75.99px 4.31882px; animation: 1s linear 0s infinite normal forwards running fade-cbdbb8b5-4f03-494d-8bf4-6f5013eb9de4;"><path d="M157.11-18.09L157.11-18.09L157.11-18.09Q158.64-18.09 159.85-17.58L159.85-17.58L159.85-17.58Q161.06-17.07 161.94-16.32L161.94-16.32L161.94-17.68L164.73-17.68L164.73-0.41L164.73-0.41Q164.73 1.80 164.15 3.37L164.15 3.37L164.15 3.37Q163.57 4.93 162.50 5.93L162.50 5.93L162.50 5.93Q161.43 6.94 159.94 7.41L159.94 7.41L159.94 7.41Q158.44 7.89 156.60 7.89L156.60 7.89L156.60 7.89Q155.01 7.89 153.54 7.51L153.54 7.51L153.54 7.51Q152.08 7.14 150.93 6.39L150.93 6.39L152.05 3.74L152.05 3.74Q152.86 4.39 153.95 4.81L153.95 4.81L153.95 4.81Q155.04 5.24 156.60 5.24L156.60 5.24L156.60 5.24Q159.02 5.24 160.39 3.98L160.39 3.98L160.39 3.98Q161.77 2.72 161.77-0.10L161.77-0.10L161.77-2.28L161.77-2.28Q161.09-1.46 159.82-0.73L159.82-0.73L159.82-0.73Q158.54 0 156.77 0L156.77 0L156.77 0Q155.28 0 153.85-0.60L153.85-0.60L153.85-0.60Q152.42-1.19 151.33-2.33L151.33-2.33L151.33-2.33Q150.25-3.47 149.58-5.12L149.58-5.12L149.58-5.12Q148.92-6.77 148.92-8.91L148.92-8.91L148.92-8.91Q148.92-10.88 149.57-12.56L149.57-12.56L149.57-12.56Q150.21-14.25 151.32-15.47L151.32-15.47L151.32-15.47Q152.42-16.69 153.92-17.39L153.92-17.39L153.92-17.39Q155.41-18.09 157.11-18.09zM157.45-2.72L157.45-2.72L157.45-2.72Q158.81-2.72 159.90-3.33L159.90-3.33L159.90-3.33Q160.99-3.94 161.67-4.76L161.67-4.76L161.67-14.01L161.67-14.01Q160.89-14.55 159.87-14.99L159.87-14.99L159.87-14.99Q158.85-15.44 157.42-15.44L157.42-15.44L157.42-15.44Q156.37-15.44 155.40-15.01L155.40-15.01L155.40-15.01Q154.43-14.59 153.68-13.77L153.68-13.77L153.68-13.77Q152.93-12.95 152.49-11.78L152.49-11.78L152.49-11.78Q152.05-10.61 152.05-9.08L152.05-9.08L152.05-9.08Q152.05-7.62 152.49-6.44L152.49-6.44L152.49-6.44Q152.93-5.27 153.68-4.44L153.68-4.44L153.68-4.44Q154.43-3.60 155.40-3.16L155.40-3.16L155.40-3.16Q156.37-2.72 157.45-2.72" fill="#7c77ff" stroke="none" stroke-width="none" transform="translate(-80.83499145507812,9.418821133700286)" style="fill: rgb(124, 119, 255);"></path></g></g>
</g>
</g>


</svg>


</div>


<div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h1>Hello, my name is <span class="hello">Ahmed Mossad</span>.<br></h1>
              <h1 class="sentence">I'm web designer and developer
            <div class="slidingVertical red">
              <span> html </span>
              <span> css </span>
              <span> javascript </span>
              <span> jquery </span>
              <span> php </span>
            </div>
  </h1>

          </div>
        </div>















<p>
    <button class="button" @click="get_weekly_c_recs_fun()">weeklys</button>

</p>

<!-- <p>weeklys:{{weeklys}}</p> -->
<div v-if="weeklys!=null"
>
   <br> Grade:  {{weeklys[0].grade_id}}        <br> Class:   {{weeklys[0].myclass.name}}           <br>  Subject:  <span v-if="weeklys[0].subject_id!=null"> {{weeklys[0].mysubject.name}}</span>        <br> Teacher:   {{weeklys[0].myteacher.name}}  <br> Date:{{weeklys[0].date}}  <br>  from

</div>
<!-- <p><button @click="showhides[0]=!showhides[0]">totalday``</button></p>
<p><button @click="showhides[1]=!showhides[1]">totalweek``</button></p>
<p><button @click="showhides[2]=!showhides[2]">totalterm``</button></p> -->

          <button
          @click="invisible=!invisible"

          data-popover-target="popover-top1" data-popover-placement="top" type="button" class="text-white mb-3 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Top popover</button>
<!-- <div
@mouseleave="invisible=!invisible"
:class="(invisible)?' invisible opacity-0 ':' visible opacity-100'"


id="popover-top1" role="tooltip"

class="inline-block absolute  z-10 w-64 text-sm font-light text-gray-500 bg-white rounded-lg border border-gray-200 shadow-sm  transition-opacity duration-300 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
    <div class="py-2 px-3 bg-gray-100 rounded-t-lg border-b border-gray-200 dark:border-gray-600 dark:bg-gray-700">
        <h3 class="font-semibold text-gray-900 dark:text-white">Popover top</h3>
    </div>
    <div class="py-2 px-3">
        <p>And here's some amazing content. It's very engaging. Right?</p>
    </div>
    <div data-popper-arrow></div>
</div> -->


<div
@mouseleave="invisible=!invisible"
:class="(invisible)?' invisible opacity-0 ':' visible opacity-100'"


id="popover-top1" role="tooltip"

class="inline-block absolute  z-10 w-64 text-sm font-light text-gray-500 bg-white rounded-lg border border-gray-200 shadow-sm  transition-opacity duration-300 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
    <div class="py-2 px-3 bg-gray-100 rounded-t-lg border-b border-gray-200 dark:border-gray-600 dark:bg-gray-700">
        <h3 class="font-semibold text-gray-900 dark:text-white">Popover top</h3>
    </div>
    <div class="py-2 px-3">

<button >1</button>
<button >1</button>
<button >1</button>
<button >1</button>
<button >1</button>
<button >1</button>




        <!-- <p>And here's some amazing content. It's very engaging. Right?</p> -->
    </div>
    <div data-popper-arrow></div>
</div>




          <table class='tbl1'>
               <thead>
                   <tr>
                       <th  rowspan="2">N</th>
                       <th  rowspan="2">Name</th>

                       <th v-if="showhides[0]" colspan="6">Day{{choosenday}}Date:{{choosendate}}</th>


                       <th  class=" bg-yellow-400"  v-if="showhides[1]" colspan="6">Total for week</th>



                       <th  v-if="showhides[2]" colspan="6">Total for Term</th>



                   </tr>
                   <tr>
                       <th class=" bg-green-400"  v-if="showhides[0]">A</th>
                       <th  class=" bg-green-400"   v-if="showhides[0]">B</th>
                       <th  class=" bg-green-400"   v-if="showhides[0]">P</th>
                       <th  class=" bg-green-400"   v-if="showhides[0]">W</th>
                       <th  class=" bg-green-400"   v-if="showhides[0]">Quiz</th>
                       <th  class=" bg-green-400"   v-if="showhides[0]">Project</th>


                       <th  class=" bg-green-400"  v-if="showhides[1]">A</th>
                       <th  class=" bg-green-400"   v-if="showhides[1]">B</th>
                       <th  class=" bg-green-400"   v-if="showhides[1]">P</th>
                       <th  class=" bg-green-400"   v-if="showhides[1]">W</th>
                       <th  class=" bg-green-400"   v-if="showhides[1]">Quiz</th>
                       <th  class=" bg-green-400"   v-if="showhides[1]">Project</th>


                       <th  class=" bg-green-400"   v-if="showhides[2]">A</th>
                       <th  class=" bg-green-400"   v-if="showhides[2]">B</th>
                       <th  class=" bg-green-400"   v-if="showhides[2]">P</th>
                       <th  class=" bg-green-400"   v-if="showhides[2]">W</th>
                       <th  class=" bg-green-400"   v-if="showhides[2]">Quiz</th>
                       <th  class=" bg-green-400"   v-if="showhides[2]">Project</th>







                   </tr>
               </thead>
               <tbody>
                   <tr v-for="(item,index) in weeklys" :key='index'>
                    <td>{{index+1}}</td>
                       <td>
{{item.mystudent.name}}
                        </td>
                        <!-- <td>
{{item.attendance}}
 </td> -->
                            <!-- <input type="text" v-model="quizQ[randorder[index]].notes"> -->

                        <!-- attendance": 0,
                         "behavior": 0, "participation": 0,
                          "classwork": 0,
                          "homework": 0,
                           "quiz": null,
                            "project": n -->
                        <td>
                            <!-- :disabled="(can_change_attendence)?false:true" -->
                            <!-- <div class="form-check form-switch mb-4">
                                  <input type="checkbox"
      @change="weeklys[index].attendance=!weeklys[index].attendance"
      v-model="weeklys[index].attendance"
      class="form-check-input appearance-none w-12 -ml-10 rounded-full float-left h-5 align-top bg-white bg-no-repeat bg-contain bg-gray-300 focus:outline-none cursor-pointer shadow-sm"  role="switch" >
  </div> -->

<!-- v-model="weeklys[index].attendance" -->
<label :for="'disabled-checked-toggle'+index" class="inline-flex relative items-center cursor-pointer">
  <input type="checkbox"


      @change="(array_attendances[index]==true)?weeklys[index].attendance=1:weeklys[index].attendance=0"
  v-model="array_attendances[index]"
  value="" :id="'disabled-checked-toggle'+index" class="sr-only peer" :checked="weeklys[index].attendance" >
  <div class="w-11 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
  <span class="ml-3 text-sm font-medium text-gray-400 dark:text-gray-500"></span>

</label>


<span v-if="array_attendances[index]==0" id="badge-dismiss-dark" class="inline-flex items-center py-1 px-2 mr-2 text-sm font-medium text-gray-800 bg-gray-100 rounded dark:bg-gray-200 dark:text-gray-800">
  Absent
  <!-- <button type="button" class="inline-flex items-center p-0.5 ml-2 text-sm text-red-400 bg-transparent rounded-sm hover:bg-gray-200 hover:text-red-900 dark:hover:bg-red-300 dark:hover:text-red-900" data-dismiss-target="#badge-dismiss-dark" aria-label="Absent">
      <svg aria-hidden="true" class="w-3.5 h-3.5"  fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      <span class="sr-only"></span>
  </button> -->
</span>










                            <!-- {{item.attendance}} -->

                            </td>
                        <td>{{item.behavior}}

                        <button
                        @mouseover="invisible=true"
                        @mouseleave="invisible=false"
                         class=" w-54   bg-green-400">
<div class="flex" v-if="invisible">
    <button class="w-12 h-12  bg-green-800">1</button>
    <button class="w-12 h-12  bg-green-800">1</button>
    <button class="w-12 h-12  bg-green-800">1</button>
    <button class="w-12 h-12  bg-green-800">1</button>
</div>
                        </button>




<button :data-popover-target="'popover-default'+index" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Default popover</button>
<div :id="'popover-default'+index" role="tooltip" class="inline-block absolute invisible z-10 w-64 text-sm font-light text-gray-500 bg-white rounded-lg border border-gray-200 shadow-sm opacity-0 transition-opacity duration-300 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(206.667px, 106px, 0px);">
    <div class="py-2 px-3 bg-gray-100 rounded-t-lg border-b border-gray-200 dark:border-gray-600 dark:bg-gray-700">
        <h3 class="font-semibold text-gray-900 dark:text-white">Popover title</h3>
    </div>
    <div class="py-2 px-3">
        <p>And here's some amazing content. It's very engaging. Right?</p>
    </div>
    <div data-popper-arrow="" style="position: absolute; left: 0px; transform: translate3d(123.333px, 0px, 0px);"></div>
</div>






                        </td>
                        <td>{{item.participation}}</td>
                        <td>{{item.classwork}}</td>
                        <td>{{item.quiz}}</td>
                        <td>{{item.project}}</td>

                   </tr>
               </tbody>

           <table class='tbl1'>
             <thead>
               <tr>
                 <th>N</th>
                 <th>Name</th>
               </tr>
             </thead>
             <tbody>

               <tr v-for="(item,index) in collection" :key='index'>
                 <td>{{index+1}}</td>
                 <td>
                   <p>{{item.name}}</p>
                 </td>
               </tr>
             </tbody>
           </table>





<button data-popover-target="popover-default" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Default popover</button>
<div id="popover-default" role="tooltip" class="inline-block absolute invisible z-10 w-64 text-sm font-light text-gray-500 bg-white rounded-lg border border-gray-200 shadow-sm opacity-0 transition-opacity duration-300 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(206.667px, 106px, 0px);">
    <div class="py-2 px-3 bg-gray-100 rounded-t-lg border-b border-gray-200 dark:border-gray-600 dark:bg-gray-700">
        <h3 class="font-semibold text-gray-900 dark:text-white">Popover title</h3>
    </div>
    <div class="py-2 px-3">
        <p>And here's some amazing content. It's very engaging. Right?</p>
    </div>
    <div data-popper-arrow="" style="position: absolute; left: 0px; transform: translate3d(123.333px, 0px, 0px);"></div>
</div>


<span id="badge-dismiss-dark" class="inline-flex items-center py-1 px-2 mr-2 text-sm font-medium text-gray-800 bg-gray-100 rounded dark:bg-gray-200 dark:text-gray-800">
  Dark
  <button type="button" class="inline-flex items-center p-0.5 ml-2 text-sm text-gray-400 bg-transparent rounded-sm hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-300 dark:hover:text-gray-900" data-dismiss-target="#badge-dismiss-dark" aria-label="Remove">
      <svg aria-hidden="true" class="w-3.5 h-3.5"  fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      <span class="sr-only">Remove badge</span>
  </button>
</span>









<p class="flex items-center text-sm font-light text-gray-500 dark:text-gray-400">This is just some informational text <button data-popover-target="popover-description" data-popover-placement="bottom-end" type="button"><svg class="ml-2 w-4 h-4 text-gray-400 hover:text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg><span class="sr-only">Show information</span></button></p>
<div id="popover-description" role="tooltip" class="inline-block absolute invisible z-10 w-72 text-sm font-light text-gray-500 bg-white rounded-lg border border-gray-200 shadow-sm opacity-0 transition-opacity duration-300 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom-end" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(-380.667px, 48px, 0px);">
    <div class="p-3 space-y-2">
        <h3 class="font-semibold text-gray-900 dark:text-white">Activity growth - Incremental</h3>
        <p>Report helps navigate cumulative growth of community activities. Ideally, the chart should have a growing trend, as stagnating chart signifies a significant decrease of community activity.</p>
        <h3 class="font-semibold text-gray-900 dark:text-white">Calculation</h3>
        <p>For each date bucket, the all-time volume of activities is calculated. This means that activities in period n contain all activities up to period n, plus the activities generated by your community in period.</p>
        <a href="#" class="flex items-center font-medium text-blue-600 dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700">Read more <svg class="ml-1 w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></a>
    </div>
    <div data-popper-arrow="" style="position: absolute; left: 0px; transform: translate3d(253.333px, 0px, 0px);"></div>
</div>







<!--

<button class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="popup-modal">
  Toggle modal
</button>

<div id="popup-modal" tabindex="-1" class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full justify-center items-center flex" aria-modal="true" role="dialog">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-6 text-center">
                <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this product?</h3>
                <button data-modal-toggle="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                    Yes, I'm sure
                </button>
                <button data-modal-toggle="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
            </div>
        </div>
    </div>
</div> -->





          <div class="flex justify-center">
      <button
        @click="isOpen = true"
        class="px-6 py-2 text-white bg-blue-600 rounded shadow"
        type="button"
      >
        Open Model
      </button>

      <div
        v-show="isOpen"
        class="
          absolute
          inset-0
          flex
          items-center
          justify-center
          bg-gray-700 bg-opacity-50
        "
      >
        <div class="max-w-2xl p-6 bg-white rounded-md shadow-xl">
          <div class="flex items-center justify-between">
            <h3 class="text-2xl">Model Title</h3>
            <svg
              @click="isOpen = false"
              xmlns="http://www.w3.org/2000/svg"
              class="w-8 h-8 text-red-900 cursor-pointer"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"
              />
            </svg>
          </div>
          <div class="mt-4">
            <p class="mb-4 text-sm">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Voluptatibus qui nihil laborum quaerat blanditiis nemo explicabo
              voluptatum ea architecto corporis quo vitae, velit temporibus
              eaque quisquam in quis provident necessitatibus.
            </p>
            <button
              @click="isOpen = false"
              class="px-6 py-2 text-blue-800 border border-blue-600 rounded"
            >
              Cancel
            </button>
            <button class="px-6 py-2 ml-2 text-blue-100 bg-blue-600 rounded">
              Save
            </button>
          </div>
        </div>
      </div>
    </div>







         <!-- <tbody>
                   <tr v-for="(item,index) in quizQ" :key='index'>
                    <td>{{index+1}}</td>
                       <td>
                        <p>{{item.head}}</p>
                        <p>{{item.main}}</p>
                        <p>{{item.head}}</p>
                        </td>
                        <td>
                            <input type="text" v-model="quizQ[randorder[index]].notes">
                        </td>
                        <td>{{item.correct}}</td>
                        <td>{{item[item.correct]}}</td>
                        <td :class="(item[item.correct]==quizQ[randorder[index]].notes)?'bg-green-400':'bg-red-400' ">{{(item[item.correct]==quizQ[randorder[index]].notes)?'correct':'wrong'}}</td>

                   </tr>
               </tbody> -->




           </table>




<!-- <div v-for="item in weeklys" :key="item.id"> -->
<div v-for="item in weeklys" :key="item.id">
    <!-- {{ item }} -->
   <br> Grade:  {{item.grade_id}}        <br> Class:   {{item.myclass.name}}           <br>  Subject:  <span v-if="item.subject_id!=null"> {{item.mysubject.name}}</span>        <br> Teacher:   {{item.myteacher.name}}  <br> Date:{{item.date}}  <br>  from
</div>

    </div>
</template>
<script>
export default {
    data(){
        return{
            invisible:true,choosendate:'',
            isOpen: false,
            weeklys:null,
            totalday:1,
            totalweek:0,
            totalterm:0,
            showhides:[1,1,0],
            showhides:[true,false,false],
            showhidesnames:['Day','Total Week','Total Term',false],
            array_attendances:[],

        }
    },
    methods:{
async   get_weekly_c_recs_fun(){
//this.datamsg = 'saving teachers ...';
try{
 await axios.post('/api/teacher/get_weekly_c_recs')
//   await axios.post('/api/teacher/get_weekly_c_recs',{data:this.alltxt})
.then((res) => {
    this.weeklys =res.data.data;
    console.log(res.data);
    // weeklys[index].attendance
    this.array_attendances=[]
    this.weeklys.forEach(element => {

        if (element.attendance==0) {
            this.array_attendances.push(false)
            // element.attendance=false
        } else {
                        this.array_attendances.push(true)


        }
    });

});
} catch (e) {
    console.log(e);

// this.datamsg = 'data error';
}
//setTimeout(() => this.datamsg = '', 5000);
},

        get_weeklys_fun(){
async
        }
    }

}
</script>
<style type="text/css">
  text {
    text-anchor: middle; font-size: 34px; opacity: 0;
  }
</style>
<style id="bounce-in-2ee05c40-e3be-417d-adf1-b63158888def" data-anikit="">@keyframes bounce-in-2ee05c40-e3be-417d-adf1-b63158888def
  {
    0% {
      animation-timing-function: cubic-bezier(0.0383,0.3388,0.0421,0.6652);
      transform: matrix(0.01,0,0,0.01,0,0);
      opacity: 1;
    }
    4.7% {
      animation-timing-function: cubic-bezier(0.3296,0.3336,0.5772,0.6672);
      transform: matrix(0.556,0,0,0.556,0,0);
      opacity: 1;
    }
    8.4% {
      animation-timing-function: cubic-bezier(0.0781,0.1617,0.0874,0.9301);
      transform: matrix(0.979,0,0,0.979,0,0);
      opacity: 1;
    }
    12.4% {
      animation-timing-function: cubic-bezier(0.8341,0.1496,0.8634,0.7673);
      transform: matrix(1.153,0,0,1.153,0,0);
      opacity: 1;
    }
    16.3% {
      animation-timing-function: cubic-bezier(0.3264,0.3332,0.5758,0.6695);
      transform: matrix(1.008,0,0,1.008,0,0);
      opacity: 1;
    }
    21.2% {
      animation-timing-function: cubic-bezier(0.0921,0.1883,0.3277,1);
      transform: matrix(0.704,0,0,0.704,0,0);
      opacity: 1;
    }
    24.5% {
      animation-timing-function: cubic-bezier(0.6905,0.0944,0.8759,0.7624);
      transform: matrix(0.626,0,0,0.626,0,0);
      opacity: 1;
    }
    27.7% {
      animation-timing-function: cubic-bezier(0.3688,0.332,0.624,0.6684);
      transform: matrix(0.704,0,0,0.704,0,0);
      opacity: 1;
    }
    32.6% {
      animation-timing-function: cubic-bezier(0.1368,0.2364,0.2451,0.9049);
      transform: matrix(0.958,0,0,0.958,0,0);
      opacity: 1;
    }
    37.4% {
      animation-timing-function: cubic-bezier(0.5936,0.0846,0.3495,1);
      transform: matrix(1.085,0,0,1.085,0,0);
      opacity: 1;
    }
    49.5% {
      animation-timing-function: cubic-bezier(0.5522,0.0981,0.3807,1);
      transform: matrix(0.802,0,0,0.802,0,0);
      opacity: 1;
    }
    62.4% {
      animation-timing-function: cubic-bezier(0.4497,0.1349,0.4911,1);
      transform: matrix(1.044,0,0,1.044,0,0);
      opacity: 1;
    }
    74.1% {
      animation-timing-function: cubic-bezier(0.429,0,0.5239,1);
      transform: matrix(0.914,0,0,0.914,0,0);
      opacity: 1;
    }
    87% {
      animation-timing-function: cubic-bezier(0.3501,0,0.6422,1);
      transform: matrix(1.013,0,0,1.013,0,0);
      opacity: 1;
    }
    95.8% {
      animation-timing-function: cubic-bezier(0.3653,0,0.6776,1);
      transform: matrix(0.992,0,0,0.992,0,0);
      opacity: 1;
    }
    100% {
      transform: matrix(1,0,0,1,0,0);
      opacity: 1;
    }
  }</style>

<style id="fade-cbdbb8b5-4f03-494d-8bf4-6f5013eb9de4" data-anikit="">@keyframes fade-cbdbb8b5-4f03-494d-8bf4-6f5013eb9de4
  {
    0% {
      animation-timing-function: cubic-bezier(0.2057,0.573,0.3723,0.9184);
      opacity: 1;
    }
    100% {
      opacity: 0;
    }
  }</style>




