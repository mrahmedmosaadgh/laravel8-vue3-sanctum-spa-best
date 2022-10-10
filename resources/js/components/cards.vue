<template>
    <div>

<div class="l-container">
  <div class="b-game-card  ">
    <div class="b-game-card__cover text-center">
      <p class=" text-lg  bg-blue-700 text-white">setup</p>
    <!-- <div class="b-game-card__cover text-center" style="background-image: url(https://andrewhawkes.github.io/codepen-assets/steam-game-cards/game_2.jpg);"> -->
  <!-- <a href="#">setup</a><br>
<button class="button-73 z99" role="button">setup73</button> <br> -->
 <a href="#" class="btn-flip my-4" data-back="Back44" data-front="Front666"></a> <br>
 <a href="#" class="btn-flip" data-back="Back44" data-front="Front666"></a> <br>
 <a href="#" class="btn-flip" data-back="Back44" data-front="Front666"></a> <br>
     <!--<button class="button-73 z99" role="button">Button vvvvvv73</button>
  
    <a href="#" class="btn-flip" data-back="Back44" data-front="Front666">5555555555</a> -->
<!-- <a href="#" class="button">shiny!</a>
<button class="button">tttttttttttt</button> -->
<!-- <button class="custom-btn btn-8">Read More8</button> -->
    </div>
    
  </div>
  

  
  <div class="b-game-card">
    <div class="b-game-card__cover  text-center" >
      <p class=" text-lg  bg-blue-700 text-white">data input</p>

    </div>
  </div>
  <div class="b-game-card">
    <div class="b-game-card__cover  text-center" >
      <p class=" text-lg  bg-blue-700 text-white">reports</p>

    </div>
  </div>
  <div class="b-game-card">
    <div class="b-game-card__cover" ></div>
  </div>
</div>

    </div>
</template>

<script>


export default {
    data() {
        return {
            property: 'value',
        };
    },
// mounted() {

//     },
// computed:{

// com(){
// return value

//   },
   methods: {



   }





}
 </script >

<style scoped>


#news-bar {
  /* width: 80%; */
  background: white;
  box-shadow: 0 4px 10px rgba(42, 39, 207, 0.722), 0 0 10px rgba(176, 255, 180, 0.781) inset;
  border-radius: 8px;
  font: 18px bold;
  padding: 1px;
  padding-left: 20px;
  padding-right: 20px;
}

#news-bar:hover {
  transition: 0.37s;
}

#news-bar a {
  padding: 1px 1px;
  color: black;
  text-decoration: none;
}

#news-bar a:hover {
  transition: 0.37s;
  color: red;
}

/* Pop */

@-webkit-keyframes hvr-pop {
  50% {
    -webkit-transform: scale(1.2);
    transform: scale(1.2);
  }
}

@keyframes hvr-pop {
  50% {
    -webkit-transform: scale(1.2);
    transform: scale(1.2);
  }
}

.hvr-pop {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
}

.hvr-pop:hover,
.hvr-pop:focus,
.hvr-pop:active {
  -webkit-animation-name: hvr-pop;
  animation-name: hvr-pop;
  -webkit-animation-duration: 0.3s;
  animation-duration: 0.3s;
  -webkit-animation-timing-function: linear;
  animation-timing-function: linear;
  -webkit-animation-iteration-count: 1;
  animation-iteration-count: 1;
}

/* Float */

.hvr-float {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: transform;
  transition-property: transform;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
}

.hvr-float:hover,
.hvr-float:focus,
.hvr-float:active {
  -webkit-transform: translateY(-8px);
  transform: translateY(-8px);
}

/* slideUp */

.slideUp {
  animation-name: slideUp;
  -webkit-animation-name: slideUp;
  animation-duration: 1s;
  -webkit-animation-duration: 1s;
  animation-timing-function: ease;
  -webkit-animation-timing-function: ease;
  visibility: visible !important;
}

@keyframes slideUp {
  0% {
    transform: translateY(100%);
  }
  50% {
    transform: translateY(-8%);
  }
  65% {
    transform: translateY(4%);
  }
  80% {
    transform: translateY(-4%);
  }
  95% {
    transform: translateY(2%);
  }
  100% {
    transform: translateY(0%);
  }
}

@-webkit-keyframes slideUp {
  0% {
    -webkit-transform: translateY(100%);
  }
  50% {
    -webkit-transform: translateY(-8%);
  }
  65% {
    -webkit-transform: translateY(4%);
  }
  80% {
    -webkit-transform: translateY(-4%);
  }
  95% {
    -webkit-transform: translateY(2%);
  }
  100% {
    -webkit-transform: translateY(0%);
  }
}


/* newsbar----------------------------------------------------------------------- */



.l-container {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 30px;
  width: 100%;
  max-width: 1200px;
  /* padding: 30px;
 justify-content: ; */
 margin: auto;
  
  
}
@media screen and (max-width: 760px) {
  .l-container {
    grid-template-columns: repeat(2, 1fr);
  }
}

.b-game-card {
  position: relative;
  z-index: 1;
  width: 100%;
  padding-bottom: 150%;
  perspective: 1000px;

  
}
.b-game-card__cover {
  position: absolute;
  z-index: 1;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
  background-image: linear-gradient(120deg, #cde6ff 0%, #e3ffdb 100%);
  border-radius: 8px;

  background-size: cover;
  perspective-origin: 50% 50%;
  transform-style: preserve-3d;
  transform-origin: top center;
  will-change: transform;
  transform: skewX(0.001deg);
  transition: transform 0.35s ease-in-out;
}
.b-cover {

  background-image: linear-gradient(120deg, #cde6ff 0%, #e3ffdb 100%);
  border-radius: 8px;

  background-size: cover;
  perspective-origin: 50% 50%;
  transform-style: preserve-3d;
  transform-origin: top center;
  will-change: transform;
  transform: skewX(0.001deg);
  transition: transform 0.35s ease-in-out;
  /* box-shadow: 0 0 30px 0 rgba(0, 199, 236, 0.5); */
  box-shadow: 0 4px 10px rgba(42, 39, 207, 0.722), 0 0 10px rgba(176, 255, 180, 0.781) inset;
  -webkit-transition: box-shadow 0.2s ease-in;
  -moz-transition: box-shadow 0.2s ease-in;
  /* text-shadow: 1px 1px 2px black, 0 0 1em blue, 0 0 0.2em blue;
  text-shadow     : 0 0 3px #427a06, 0 0 5px #7700ff; */
  text-shadow     :  0  0.1px 3px #cdf724, 0 0.4px 0.4px #7700ff;
}
/* .b-cover:hover { */
/* 
  background: linear-gradient(226deg, rgba(255, 255, 255, 0.4) 0%, rgba(255, 255, 255, 0.4) 35%, rgba(255, 255, 255, 0.2) 42%, rgba(255, 255, 255, 0) 60%); */
  /* transform: translateY(-20%); */
  /* will-change: transform; */
  /* pointer-events: none; */
  /* transform: rotateX(7deg) translateY(-6px);
  transition: transform 0.65s cubic-bezier(0.18, 0.9, 0.58, 1); */

/* } */
.z99{
   z-index: 999999;
}
.b-game-card__cover::after {
  display: block;
  content: "";
  position: absolute;
  z-index: 100;
  top: 0;
  left: 0;
  width: 100%;
  height: 120%;
  background: linear-gradient(226deg, rgba(255, 255, 255, 0.4) 0%, rgba(255, 255, 255, 0.4) 35%, rgba(255, 255, 255, 0.2) 42%, rgba(255, 255, 255, 0) 60%);
  transform: translateY(-20%);
  will-change: transform;
  transition: transform 0.65s cubic-bezier(0.18, 0.9, 0.58, 1);
  pointer-events: none;
  
}

.b-game-card:hover .b-game-card__cover {
  transform: rotateX(7deg) translateY(-6px);
}
.b-game-card:hover .b-game-card__cover::after {
  transform: translateY(0%);
}
.b-game-card::before {
  display: block;
  content: "";
  position: absolute;
  top: 5%;
  left: 5%;
  width: 90%;
  height: 90%;
  background: rgba(0, 0, 0, 0.5);
  box-shadow: 0 6px 12px 12px rgba(0, 0, 0, 0.4);
  will-change: opacity;
  transform-origin: top center;
  transform: skewX(0.001deg);
  transition: transform 0.35s ease-in-out, opacity 0.5s ease-in-out;
}
.b-game-card:hover::before {
  opacity: 0.6;
  transform: rotateX(7deg) translateY(-6px) scale(1.05);
}
/* button----------------------------------------------------------------------- */
.button {
  text-decoration: none;
  text-transform: uppercase;
  /* font-family: "Exo 2", sans-serif;
  font-weight: 300;
  font-size: 30px; */
  display: inline-block;
  position: relative;
  text-align: center;
  color: #00c7ec;
  border: 1px solid #00c7ec;
  border-radius: 5px;
  line-height: 3em;
  padding-left: 5em;
  padding-right: 5em;
  box-shadow: 0 0 0 0 transparent;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}
.button:hover {
  color: white;
  box-shadow: 0 0 30px 0 rgba(0, 199, 236, 0.5);
  background-color: #00c7ec;
  -webkit-transition: all 0.2s ease-out;
  -moz-transition: all 0.2s ease-out;
  transition: all 0.2s ease-out;
}
.button:hover:before {
  -webkit-animation: shine 0.5s 0s linear;
  -moz-animation: shine 0.5s 0s linear;
  animation: shine 0.5s 0s linear;
}
.button:active {
  box-shadow: 0 0 0 0 transparent;
  -webkit-transition: box-shadow 0.2s ease-in;
  -moz-transition: box-shadow 0.2s ease-in;
  transition: box-shadow 0.2s ease-in;
}
.button:before {
  content: "";
  /* display: block; */
  /* width: 0px;
  height: 86%;
  position: absolute;
  top: 7%;
  left: 0%; */
  opacity: 0;
  background: white;
  box-shadow: 0 0 15px 3px white;
  -webkit-transform: skewX(-20deg);
  -moz-transform: skewX(-20deg);
  -ms-transform: skewX(-20deg);
  -o-transform: skewX(-20deg);
  transform: skewX(-20deg);
}

@-webkit-keyframes shine {
  from {
    opacity: 0;
    left: 0%;
  }
  50% {
    opacity: 1;
  }
  to {
    opacity: 0;
    left: 100%;
  }
}
@-moz-keyframes shine {
  from {
    opacity: 0;
    left: 0%;
  }
  50% {
    opacity: 1;
  }
  to {
    opacity: 0;
    left: 100%;
  }
}
@keyframes shine {
  from {
    opacity: 0;
    left: 0%;
  }
  50% {
    opacity: 1;
  }
  to {
    opacity: 0;
    left: 100%;
  }
}

</style>
