<template>
    <div  >
         quiz resources\js\Views\start\teacher\quiz\quizcreate.vue
         <button :class="button" @click="get_quizzesfun()">get_quizzesfun</button>
         <p>quizQ:{{quizQ}}</p>
<p><button :class="button" @click="shuf()">shuf</button></p>


<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <h3 class="animate-charcter"> SchoolEveryThing</h3>
    </div>
  </div>
</div>
<p>

    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
  Button
</button>
</p>

<p>scschoolQuizall:{{scschoolQuizall}}</p>
<p>randorder:{{randorder}}</p>
<input type="text" id="edit-name" value="yyyyyyy" class=" rounded tooltip-description form-text required"> 


<input type="number" name="" id="" max="100" v-model="mypercent">

 x-data="{ circumference: 50 * 2 * Math.PI, percent: 80 }"
 :x-data="{ circumference: 50 * 2 * Math.PI, percent: 80 }"
<div class="min-h-screen py-20 px-10 bg-gray-100">
  <div class="grid grid-cols-1 gap-20 lg:grid-cols-2 lg:gap-10">
    <div class="flex items-center flex-wrap max-w-md px-10 bg-white shadow-xl rounded-2xl h-20"
      

       >
          <div class="flex items-center justify-center -m-6 overflow-hidden bg-white rounded-full">
            <svg class="w-32 h-32 transform translate-x-1 translate-y-1" x-cloak aria-hidden="true">
              <circle
                class="text-gray-300"
                stroke-width="10"
                stroke="currentColor"
                fill="transparent"
                r="50"
                cx="60"
                cy="60"
                />
 <!-- class="text-bg-gradient" -->
                

              <circle
             :class="(mypercent>50)?(mypercent>70)?'text-green-600':'text-blue-600':'text-red-600'"
                stroke-width="10"
                 :stroke-dasharray="circumference"
                :stroke-dashoffset="circumference - mypercent / 100 * circumference"
                stroke-linecap="round"
                stroke="currentColor"
                fill="transparent"
                r="50"
                cx="60"
                cy="60"
               />
            </svg>
          <span class="absolute left-26 text-xl font-medium text-blue-600   sm:block">+{{mypercent}}%</span>
            <!-- <span class="absolute text-2xl text-blue-700" x-text="70%"></span> -->
            <!-- <span class="absolute text-2xl text-blue-700" x-text="`${percent}%`"></span> -->
          </div>
          <!-- <p class="ml-10 font-medium text-gray-600 sm:text-xl">Performance</p> -->

          <!-- <span class="ml-auto text-xl font-medium text-blue-600 hidden sm:block">+25%</span> -->
      </div>
    
    <button @click="addMessage()">addMessage()</button>
    <div class="flex items-center flex-wrap max-w-md px-10 bg-white shadow-xl rounded-2xl h-20"
       x-data="{ circumference: circumference, percent: 90 }"
       >
          <div  class="flex items-center justify-center -m-6 overflow-hidden bg-white rounded-full">
            <svg class="w-32 h-32 transform translate-x-1 translate-y-1" x-cloak aria-hidden="true">
              <circle
                class="text-gray-300"
                stroke-width="10"
                stroke="currentColor"
                fill="transparent"
                r="50"
                cx="60"
                cy="60"
                />
              <circle
                class="text-red-600"
                stroke-width="10"
                :stroke-dasharray="circumference"
                :stroke-dashoffset="circumference - 25 / 100 * circumference"
                stroke-linecap="round"
                stroke="currentColor"
                fill="transparent"
                r="50"
                cx="60"
                cy="60"
               />
            </svg>
            <span class="absolute text-2xl text-red-700" x-text="25%"></span>
            <!-- <span class="absolute text-2xl text-red-700" x-text="`${percent}%`"></span> -->
          </div>
          <p class="ml-10 font-medium text-gray-600 sm:text-xl">Storage</p>

          <span class="ml-auto text-xl font-medium text-red-600 hidden sm:block">20GB</span>
      </div>
  </div>
</div>


<div class="fixed bottom-5 right-5 flex items-center space-x-4">
  <a href="https://twitter.com/ak_kamona" target="_blank" class="transition-transform transform hover:scale-125">
    <span class="sr-only">Twitter</span>
      <svg
         aria-hidden="true"
         class="w-8 h-8 text-blue-500"
         fill="currentColor"
         xmlns="http://www.w3.org/2000/svg"
         viewBox="0 0 24 24"
            >
      <path d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z"
            ></path>
    </svg>
  </a>
  <a href="https://github.com/Kamona-WD" target="_blank" class="transition-transform transform hover:scale-125">
    <span class="sr-only">Github</span>
      <svg
         aria-hidden="true"
         class="w-8 h-8 text-black"
         fill="currentColor"
         xmlns="http://www.w3.org/2000/svg"
         viewBox="0 0 24 24"
         >
        <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M12.026,2c-5.509,0-9.974,4.465-9.974,9.974c0,4.406,2.857,8.145,6.821,9.465 c0.499,0.09,0.679-0.217,0.679-0.481c0-0.237-0.008-0.865-0.011-1.696c-2.775,0.602-3.361-1.338-3.361-1.338 c-0.452-1.152-1.107-1.459-1.107-1.459c-0.905-0.619,0.069-0.605,0.069-0.605c1.002,0.07,1.527,1.028,1.527,1.028 c0.89,1.524,2.336,1.084,2.902,0.829c0.091-0.645,0.351-1.085,0.635-1.334c-2.214-0.251-4.542-1.107-4.542-4.93 c0-1.087,0.389-1.979,1.024-2.675c-0.101-0.253-0.446-1.268,0.099-2.64c0,0,0.837-0.269,2.742,1.021 c0.798-0.221,1.649-0.332,2.496-0.336c0.849,0.004,1.701,0.115,2.496,0.336c1.906-1.291,2.742-1.021,2.742-1.021 c0.545,1.372,0.203,2.387,0.099,2.64c0.64,0.696,1.024,1.587,1.024,2.675c0,3.833-2.33,4.675-4.552,4.922 c0.355,0.308,0.675,0.916,0.675,1.846c0,1.334-0.012,2.41-0.012,2.737c0,0.267,0.178,0.577,0.687,0.479 C19.146,20.115,22,16.379,22,11.974C22,6.465,17.535,2,12.026,2z"
              ></path>
    </svg>
  </a>
</div>











<div class="flex items-center">
    <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
    <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Second star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
    <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Third star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
    <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fourth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
    <svg aria-hidden="true" class="w-5 h-5 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fifth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
</div>



<ul class="flex justify-center">
  <li>
    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
      <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
    </svg>
  </li>
  <li>
    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
      <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
    </svg>
  </li>
  <li>
    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
      <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
    </svg>
  </li>
  <li>
    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
      <path fill="currentColor" d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"></path>
    </svg>
  </li>
  <li>
    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star" class="w-4 text-yellow-500" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
      <path fill="currentColor" d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"></path>
    </svg>
  </li>
</ul>








<ul class="flex justify-center">
  <li>
    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="angry" class="w-5 text-blue-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
      <path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 448c-110.3 0-200-89.7-200-200S137.7 56 248 56s200 89.7 200 200-89.7 200-200 200zm0-144c-33.6 0-65.2 14.8-86.8 40.6-8.5 10.2-7.1 25.3 3.1 33.8s25.3 7.2 33.8-3c24.8-29.7 75-29.7 99.8 0 8.1 9.7 23.2 11.9 33.8 3 10.2-8.5 11.5-23.6 3.1-33.8-21.6-25.8-53.2-40.6-86.8-40.6zm-48-72c10.3 0 19.9-6.7 23-17.1 3.8-12.7-3.4-26.1-16.1-29.9l-80-24c-12.8-3.9-26.1 3.4-29.9 16.1-3.8 12.7 3.4 26.1 16.1 29.9l28.2 8.5c-3.1 4.9-5.3 10.4-5.3 16.6 0 17.7 14.3 32 32 32s32-14.4 32-32.1zm199-54.9c-3.8-12.7-17.1-19.9-29.9-16.1l-80 24c-12.7 3.8-19.9 17.2-16.1 29.9 3.1 10.4 12.7 17.1 23 17.1 0 17.7 14.3 32 32 32s32-14.3 32-32c0-6.2-2.2-11.7-5.3-16.6l28.2-8.5c12.7-3.7 19.9-17.1 16.1-29.8z"></path>
    </svg>
  </li>
  <li>
    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="frown" class="w-5 text-blue-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
      <path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 448c-110.3 0-200-89.7-200-200S137.7 56 248 56s200 89.7 200 200-89.7 200-200 200zm-80-216c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32zm160-64c-17.7 0-32 14.3-32 32s14.3 32 32 32 32-14.3 32-32-14.3-32-32-32zm-80 128c-40.2 0-78 17.7-103.8 48.6-8.5 10.2-7.1 25.3 3.1 33.8 10.2 8.4 25.3 7.1 33.8-3.1 16.6-19.9 41-31.4 66.9-31.4s50.3 11.4 66.9 31.4c8.1 9.7 23.1 11.9 33.8 3.1 10.2-8.5 11.5-23.6 3.1-33.8C326 321.7 288.2 304 248 304z"></path>
    </svg>
  </li>
  <li>
    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="meh" class="w-5 text-blue-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
      <path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 448c-110.3 0-200-89.7-200-200S137.7 56 248 56s200 89.7 200 200-89.7 200-200 200zm-80-216c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32zm160-64c-17.7 0-32 14.3-32 32s14.3 32 32 32 32-14.3 32-32-14.3-32-32-32zm8 144H160c-13.2 0-24 10.8-24 24s10.8 24 24 24h176c13.2 0 24-10.8 24-24s-10.8-24-24-24z"></path>
    </svg>
  </li>
  <li>
    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="smile" class="w-5 text-blue-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
      <path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 448c-110.3 0-200-89.7-200-200S137.7 56 248 56s200 89.7 200 200-89.7 200-200 200zm-80-216c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32zm160 0c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32zm4 72.6c-20.8 25-51.5 39.4-84 39.4s-63.2-14.3-84-39.4c-8.5-10.2-23.7-11.5-33.8-3.1-10.2 8.5-11.5 23.6-3.1 33.8 30 36 74.1 56.6 120.9 56.6s90.9-20.6 120.9-56.6c8.5-10.2 7.1-25.3-3.1-33.8-10.1-8.4-25.3-7.1-33.8 3.1z"></path>
    </svg>
  </li>
  <li>
    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="grin-stars" class="w-5 text-blue-500 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
      <path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 448c-110.3 0-200-89.7-200-200S137.7 56 248 56s200 89.7 200 200-89.7 200-200 200zm105.6-151.4c-25.9 8.3-64.4 13.1-105.6 13.1s-79.6-4.8-105.6-13.1c-9.8-3.1-19.4 5.3-17.7 15.3 7.9 47.2 71.3 80 123.3 80s115.3-32.9 123.3-80c1.6-9.8-7.7-18.4-17.7-15.3zm-227.9-57.5c-1 6.2 5.4 11 11 7.9l31.3-16.3 31.3 16.3c5.6 3.1 12-1.7 11-7.9l-6-34.9 25.4-24.6c4.5-4.5 1.9-12.2-4.3-13.2l-34.9-5-15.5-31.6c-2.9-5.8-11-5.8-13.9 0l-15.5 31.6-34.9 5c-6.2.9-8.9 8.6-4.3 13.2l25.4 24.6-6.1 34.9zm259.7-72.7l-34.9-5-15.5-31.6c-2.9-5.8-11-5.8-13.9 0l-15.5 31.6-34.9 5c-6.2.9-8.9 8.6-4.3 13.2l25.4 24.6-6 34.9c-1 6.2 5.4 11 11 7.9l31.3-16.3 31.3 16.3c5.6 3.1 12-1.7 11-7.9l-6-34.9 25.4-24.6c4.5-4.6 1.8-12.2-4.4-13.2z"></path>
    </svg>
  </li>
</ul>




<div id="toast-success" class="flex items-center p-4 mb-4 w-full max-w-xs text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
    <div class="inline-flex flex-shrink-0 justify-center items-center w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Check icon</span>
    </div>
    <div class="ml-3 text-sm font-normal">Item moved successfully.</div>
    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
</div>
<div id="toast-danger" class="flex items-center p-4 mb-4 w-full max-w-xs text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
    <div class="inline-flex flex-shrink-0 justify-center items-center w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Error icon</span>
    </div>
    <div class="ml-3 text-sm font-normal">Item has been deleted.</div>
    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-danger" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
</div>
<div id="toast-warning" class="flex items-center p-4 w-full max-w-xs text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
    <div class="inline-flex flex-shrink-0 justify-center items-center w-8 h-8 text-orange-500 bg-orange-100 rounded-lg dark:bg-orange-700 dark:text-orange-200">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Warning icon</span>
    </div>
    <div class="ml-3 text-sm font-normal">Improve password difficulty.</div>
    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-warning" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
</div>






<div class="flex items-center justify-center h-full">
  <button class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-700" @click="toggleModal=!toggleModal" > {{toggleModal}}Show Modal</button>
</div>
<div class="fixed z-10 overflow-y-auto top-0 left-0   animate__animated" :class="(toggleModal)?' animate__fadeIn  w-full ':' animate__fadeOut hidden '" id="modal">
  <div class="flex items-center justify-center min-height-100vh pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <div class="fixed inset-0 transition-opacity">
      <div class="absolute inset-0 bg-gray-900 opacity-75" />
    </div>
    <span class="  sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>
    <div :class="(toggleModal)?'animate__animated animate__zoomInDown':'animate__animated animate__bounceOut'"  class="  inline-block align-center bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
      <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <label>Name</label>
        <input type="text" class="w-full bg-gray-100 p-2 mt-2 mb-3" />
        <label>Url</label>
        <input type="text" class="w-full bg-gray-100 p-2 mt-2 mb-3" />
      </div>
      <div class="bg-gray-200 px-4 py-3 text-right">
        <button type="button" class="py-2 px-4 bg-gray-500 text-white rounded hover:bg-gray-700 mr-2"  @click="toggleModal=!toggleModal" ><i class="fas fa-times"></i> Cancel</button>
        <button type="button" class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-700 mr-2"><i class="fas fa-plus"></i> Create</button>
      </div>
    </div>
  </div>
</div>






           <table class='tbl1'>
               <thead>
                   <tr>
                       <th>N</th>
                       <th>Q</th>
                       <th>Answer</th>
                       <th>result</th>

                   </tr>
               </thead>
               <tbody>
                   <tr v-for="(item,index) in randorder" :key='index'>
                    <td>{{index+1}}</td>
                       <td>
                        <p>{{quizQ[item].head}}</p>
                        <p>{{quizQ[item].main}}</p>
                        <p>{{quizQ[item].head}}</p>
                        </td>
                        <td>
                            <input type="text" v-model="quizQ[randorder[index]].notes">
                        </td>
                        <td>{{quizQ[item].correct}}</td>
                        <td>{{quizQ[item][quizQ[item].correct]}}</td>
                        <td :class="(quizQ[item][quizQ[item].correct]==quizQ[randorder[index]].notes)?'bg-green-400':'bg-red-400' ">{{(quizQ[item][quizQ[item].correct]==quizQ[randorder[index]].notes)?'correct':'wrong'}}</td>

                   </tr>
               </tbody>

           </table>


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








    </div>
</template>

<script>


export default {
    data() {
        return {
mypercent:0,toggleModal:false,
circumference: 50 * 2 * Math.PI,
 

            property: 'value',quizQ:'',
            randorder:[],
            scschoolQuizall:[],
            button:"bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded",
            // button:<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded"> Button </button>
        };
    },
// mounted() {

//     },
// computed:{

// com(){
// return value

//   },
   methods: {

 addMessage() {
    console.log(this.$refs.toolbarChat.scrollTop);
    
//  addMessage(message) {
this.$refs.toolbarChat.scrollTop = -2002

        // this.messages.unshift(message);
        // this.$nextTick(() => {
        //     this.$refs.toolbarChat.scrollTop = 0;
        // });

        // axios.post(chat_send_route, message)
        // .then(response => {
        //     console.log(response.data);
        // });

    },




    shuf(){
var arr=[0,1,2,3,4,5,6]
arr.sort(() => (Math.random() > .5) ? 1 : -1);
console.log(arr);

    },
async   get_quizzesfun(){
    var msgin='get_quizzes'
            this.datamsg = msgin+"...";
            this.loading = true;

            var datadb
            try{

            await axios.post("/api/teacher/get_quizzes" )
            .then((res) => {
                console.log(res.data.message);
                this.quizQ=res.data.data.quizq

this.randorder=res.data.data.order
this.scschoolQuizall=res.data.data.scschoolQuizall
                console.log(res.data);







// const date1 = new Date('7/13/2010');
// const date2 = new Date('12/15/2010');
// const diffTime = Math.abs(date2 - date1);
// const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)); 
// console.log(diffTime + " milliseconds");
// console.log(diffDays + " days");
console.log('res.data.data.publishoff');
console.log(res.data.data.publishoff);
console.log('res.data.data.current');
console.log(res.data.data.current);
// var date1=new Date(res.data.data.current)//new
var date1=new Date()//now
// var date2=new Date(res.data.data.publish)//old
var date2=new Date(res.data.data.publishoff)//old
//    var difference = date1 - date2;
console.log('date1.getTime() > date2.getTime()');
console.log(date1.getTime() > date2.getTime());

   var difference =date2.getTime() - date1.getTime() ;
//    var difference = date1.getTime() - date2.getTime();
console.log('date1');
console.log(date1);
console.log('date2');
console.log(date2);

console.log('difference');
console.log(difference);
    var daysDifference = Math.floor(difference/1000/60/60/24);
    difference -= daysDifference*1000*60*60*24

    var hoursDifference = Math.floor(difference/1000/60/60);
    difference -= hoursDifference*1000*60*60

    var minutesDifference = Math.floor(difference/1000/60);
    difference -= minutesDifference*1000*60

    var secondsDifference = Math.floor(difference/1000);

    console.log('difference = ' + 
      daysDifference + ' day/s ' + 
      hoursDifference + ' hour/s ' + 
      minutesDifference + ' minute/s ' + 
      secondsDifference + ' second/s ');





            // datadb = res.data.message;
            // this.datamsg = msgin+"...Done";
            // this.loading = false;
            });

            } catch (e) {
            // this.datamsg = msgin+"...error";
            console.log(e);
            // alert(msgin+" ... error");
            }
},


   }





}
 </script >

<style scoped>


.animate-charcter
{
  /* text-transform: uppercase;
  // background-image: linear-gradient(
  //   -225deg,
  //   #231557 0%,
  //   #44107a 29%,
  //   #ff1361 67%,
  //   #fff800 100%
  // );
*/
  background-image: linear-gradient(
    -225deg,
    #fafafa 0%,
    #7412dd 29%,

    #0704ac 100%
  );






  background-size: auto auto;
  background-clip: border-box;
  background-size: 250% auto;
  /*background-size: 200% auto; */
  color: rgb(252, 252, 252);
   font-size: 30px; 
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  display: inline-block;
}

@keyframes textclip {
  to {
    background-position: -200% center;
  }
}




.text-bg-gradient{

/* Created with https://www.css-gradient.com */
background: #2B64BB;
background: -webkit-linear-gradient(top left, #2B64BB, #D83177);
background: -moz-linear-gradient(top left, #2B64BB, #D83177);
background: linear-gradient(to bottom right, #2B64BB, #D83177);
      

}












input #edit-name .tooltip-description form-text required {
	/* Font & Text */
	font-family: Lato, helvetica, arial, sans-serif;
	font-size: 16px;
	font-style: normal;
	font-variant: normal;
	font-weight: 400;
	letter-spacing: normal;
	line-height: 20px;
	text-decoration: none solid rgb(85, 85, 85);
	text-align: start;
	text-indent: 0px;
	text-transform: none;
	vertical-align: middle;
	white-space: normal;
	word-spacing: 0px;

	/* Color & Background */
	background-attachment: scroll;
	background-color: rgb(255, 255, 255);
	background-image: none;
	background-position: 0% 0%;
	background-repeat: repeat;
	color: rgb(85, 85, 85);

	/* Box */
	height: 35px;
	width: 334.6px;
	border: 1px solid rgba(82, 168, 236, 0.8);
	border-top: 1px solid rgba(82, 168, 236, 0.8);
	border-right: 1px solid rgba(82, 168, 236, 0.8);
	border-bottom: 1px solid rgba(82, 168, 236, 0.8);
	border-left: 1px solid rgba(82, 168, 236, 0.8);
	margin: 0px;
	padding: 7px 15px;
	max-height: none;
	min-height: 0px;
	max-width: none;
	min-width: 0px;

	/* Positioning */
	position: static;
	top: auto;
	bottom: auto;
	right: auto;
	left: auto;
	float: right;
	display: block;
	clear: none;
	z-index: auto;

	/* List */
	list-style-image: none;
	list-style-type: disc;
	list-style-position: outside;

	/* Table */
	border-collapse: separate;
	border-spacing: 0px 0px;
	caption-side: top;
	empty-cells: show;
	table-layout: auto;

	/* Miscellaneous */
	overflow: visible;
	cursor: text;
	visibility: visible;

	/* Effects */
	transform: none;
	transition: border 0.2s linear 0s, box-shadow 0.2s linear 0s;
	outline: rgb(255, 0, 0) dashed 1px;
	outline-offset: 0px;
	box-sizing: border-box;
	resize: none;
	text-shadow: none;
	text-overflow: clip;
	word-wrap: normal;
	box-shadow: rgba(0, 0, 0, 0.075) 0px 1px 1px 0px inset, rgba(82, 168, 236, 0.6) 0px 0px 8px 0px;
	border-top-left-radius: 5px;
	border-top-right-radius: 5px;
	border-bottom-left-radius: 5px;
	border-bottom-right-radius: 5px;
}
</style>