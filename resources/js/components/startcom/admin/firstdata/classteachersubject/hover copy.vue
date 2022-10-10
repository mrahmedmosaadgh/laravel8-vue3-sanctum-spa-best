<template>
    <div>
         <div id="effects" class="effects">

                     <div
  
          class="animate__animated   animate__jello fixed p-2 top-0 right-0   bg-green-200">
            <span  ><span v-show="loading"  ></span></span>
            <span>{{datamsg}}</span>
        </div>

				<h2>2D Transitions</h2>
<button @mousemove="hovp='hovp'" @mouseleave="hovp='hovp1'" :class="hovp">hovp111111111111111111</button>
<button @click="hovp='hovp1'">hovp22222222222222222</button>
<button @click="hovp='hovp'">hovp22222222222222222</button>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-grow">Grow</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-shrink">Shrink</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-pulse">Pulse</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-pulse-grow">Pulse Grow</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-pulse-shrink">Pulse Shrink</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-push">Push</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-pop">Pop</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-bounce-in">Bounce In</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-bounce-out">Bounce Out</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-rotate">Rotate</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-grow-rotate">Grow Rotate</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-float">Float</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-sink">Sink</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-bob">Bob</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-hang">Hang</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-skew">Skew</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-skew-forward">Skew Forward</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-skew-backward">Skew Backward</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-wobble-horizontal">Wobble Horizontal</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-wobble-vertical">Wobble Vertical</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-wobble-to-bottom-right">Wobble To Bottom Right</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-wobble-to-top-right">Wobble To Top Right</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-wobble-top">Wobble Top</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-wobble-bottom">Wobble Bottom</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-wobble-skew">Wobble Skew</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-buzz">Buzz</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-buzz-out">Buzz Out</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-forward">Forward</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-backward">Backward</a>


				<h2>Background Transitions</h2>

				<a href="https://ianlunn.github.io/Hover/#" class="hvr-fade">Fade</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-back-pulse">Back Pulse</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-sweep-to-right">Sweep To Right</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-sweep-to-left">Sweep To Left</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-sweep-to-bottom">Sweep To Bottom</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-sweep-to-top">Sweep To Top</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-bounce-to-right">Bounce To Right</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-bounce-to-left">Bounce To Left</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-bounce-to-bottom">Bounce To Bottom</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-bounce-to-top">Bounce To Top</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-radial-out">Radial Out</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-radial-in">Radial In</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-rectangle-in">Rectangle In</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-rectangle-out">Rectangle Out</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-shutter-in-horizontal">Shutter In Horizontal</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-shutter-out-horizontal">Shutter Out Horizontal</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-shutter-in-vertical">Shutter In Vertical</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-shutter-out-vertical">Shutter Out Vertical</a>


				<h2>Icons</h2>

				<small>Demo font icons courtesy of <a href="https://fortawesome.github.io/Font-Awesome/">FontAwesome</a>. <a href="https://github.com/IanLunn/Hover/#using-icon-effects">How to use icons</a> with Hover.css.</small>

				<a href="https://ianlunn.github.io/Hover/#" class="hvr-icon-back">
					<i class="fa fa-chevron-circle-left hvr-icon"></i> Icon Back
				</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-icon-forward">
					Icon Forward
					<i class="fa fa-chevron-circle-right hvr-icon"></i>
				</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-icon-down">
					Icon Down <i class="fa fa-arrow-circle-o-down hvr-icon"></i>
				</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-icon-up">
					Icon Up <i class="fa fa-arrow-circle-o-up hvr-icon"></i>
				</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-icon-spin">
					Icon Spin <i class="fa fa-refresh hvr-icon"></i>
				</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-icon-drop">
					Icon Drop <i class="fa fa-tint hvr-icon"></i>
				</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-icon-fade">
					Icon Fade <i class="fa fa-check hvr-icon"></i>
				</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-icon-float-away">
					Icon Float Away <i class="fa fa-plus-circle hvr-icon"></i>
				</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-icon-sink-away">
					Icon Sink Away <i class="fa fa-minus-circle hvr-icon"></i>
				</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-icon-grow">
					Icon Grow <i class="fa fa-smile-o hvr-icon"></i>
				</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-icon-shrink">
					Icon Shrink <i class="fa fa-frown-o hvr-icon"></i>
				</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-icon-pulse">
					Icon Pulse <i class="fa fa-home hvr-icon"></i>
				</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-icon-pulse-grow">
					Icon Pulse Grow <i class="fa fa-home hvr-icon"></i>
				</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-icon-pulse-shrink">
					Icon Pulse Shrink <i class="fa fa-home hvr-icon"></i>
				</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-icon-push">
					Icon Push <i class="fa fa-star-o hvr-icon"></i>
				</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-icon-pop">
					Icon Pop <i class="fa fa-star hvr-icon"></i>
				</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-icon-bounce">
					Icon Bounce <i class="fa fa-thumbs-o-up hvr-icon"></i>
				</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-icon-rotate">
					Icon Rotate <i class="fa fa-paperclip hvr-icon"></i>
				</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-icon-grow-rotate">
					Icon Grow Rotate <i class="fa fa-phone hvr-icon"></i>
				</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-icon-float">
					Icon Float <i class="fa fa-arrow-circle-o-up hvr-icon"></i>
				</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-icon-sink">
					Icon Sink <i class="fa fa-arrow-circle-o-down hvr-icon"></i>
				</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-icon-bob">
					Icon Bob <i class="fa fa-chevron-up hvr-icon"></i>
				</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-icon-hang">
					Icon Hang <i class="fa fa-chevron-down hvr-icon"></i>
				</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-icon-wobble-horizontal">
					Icon Wobble Horizontal <i class="fa fa-arrow-right hvr-icon"></i>
				</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-icon-wobble-vertical">
					Icon Wobble Vertical <i class="fa fa-arrow-up hvr-icon"></i>
				</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-icon-buzz">
					Icon Buzz <i class="fa fa-clock-o hvr-icon"></i>
				</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-icon-buzz-out">
					Icon Buzz Out <i class="fa fa-lock hvr-icon"></i>
				</a>


				<h2>Border Transitions</h2>

				<a href="https://ianlunn.github.io/Hover/#" class="hvr-border-fade">Border Fade</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-hollow">Hollow</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-trim">Trim</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-ripple-out">Ripple Out</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-ripple-in">Ripple In</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-outline-out">Outline Out</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-outline-in">Outline In</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-round-corners">Round Corners</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-underline-from-left">Underline From Left</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-underline-from-center">Underline From Center</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-underline-from-right">Underline From Right</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-reveal">Reveal</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-underline-reveal">Underline Reveal</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-overline-reveal">Overline Reveal</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-overline-from-left">Overline From Left</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-overline-from-center">Overline From Center</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-overline-from-right">Overline From Right</a>


				<h2>Shadow and Glow Transitions</h2>

				<a href="https://ianlunn.github.io/Hover/#" class="hvr-shadow">Shadow</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-grow-shadow">Grow Shadow</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-float-shadow">Float Shadow</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-glow">Glow</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-shadow-radial">Shadow Radial</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-box-shadow-outset">Box Shadow Outset</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-box-shadow-inset">Box Shadow Inset</a>


				<h2>Speech Bubbles</h2>

				<a href="https://ianlunn.github.io/Hover/#" class="hvr-bubble-top">Bubble Top</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-bubble-right">Bubble Right</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-bubble-bottom">Bubble Bottom</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-bubble-left">Bubble Left</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-bubble-float-top">Bubble Float Top</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-bubble-float-right">Bubble Float Right</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-bubble-float-bottom">Bubble Float Bottom</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-bubble-float-left">Bubble Float Left</a>


				<h2>Curls</h2>

				<a href="https://ianlunn.github.io/Hover/#" class="hvr-curl-top-left">Curl Top Left</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-curl-top-right">Curl Top Right</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hvr-curl-bottom-right">Curl Bottom Right</a>
				<a href="https://ianlunn.github.io/Hover/#" class="hovp">Curl Bottom Left</a>
			</div>
    </div>
</template>

<script>


export default {
    data() {
        return {
            hovp: 'hovp',
            hovp1: 'hovp1',
            copymsg: 'copy?',
        };
    },
// mounted() {

//     },
// computed:{

// com(){
// return value

//   },
   methods: {
copyme(txt) {
// document.execCommand(txt);
navigator.clipboard.writeText(JSON.stringify( txt))
this.copymsg='copied!'
// .then(function() {
//     /* clipboard successfully set */
//     this.copymsg='copied!'
//   }, function() {
//     /* clipboard write failed */
//     this.copymsg='error '
//   });

 setTimeout(() => this.copymsg = 'Copy', 2000);
},


   }





}
 </script >

<style scoped>
a{
    background-color: gray;

    padding: 12px;

    margin: 5px;

}

.hovp{display:inline-block;
vertical-align:middle;
-webkit-transform:perspective(1px)
translateZ(0);
transform:perspective(1px) translateZ(0);
box-shadow:0 0 1px
transparent;
position:relative;

}

.hovp:before{pointer-events:none;
position:absolute;
content:'';
height:0;
width:0;
bottom:0;
left:0;
background:#fff;
background:linear-gradient(45deg,#fff
45%,#aaa 50%,#ccc 56%,#fff 80%);
box-shadow:1px -1px 1px
rgba(0,0,0,.4);
-webkit-transition-duration:.3s;
transition-duration:.3s;
-webkit-transition-property:width,height;
transition-property:width,height;
 width:25px;height:25px
}


.hovp:active:before,.hovp:focus:before,.hovp:hover:before{
    width:25px;height:25px
    }









.hovp2{display:inline-block;
vertical-align:middle;
-webkit-transform:perspective(1px)
translateZ(0);
transform:perspective(1px) translateZ(0);
box-shadow:0 0 1px
transparent;
position:relative;

}

.hovp2:before{pointer-events:none;
position:absolute;
content:'';
height:0;
width:0;
bottom:0;
left:0;
background:#fff;
background:linear-gradient(45deg,#fff
45%,#aaa 50%,#ccc 56%,#fff 80%);
box-shadow:1px -1px 1px
rgba(0,0,0,.4);
-webkit-transition-duration:.3s;
transition-duration:.3s;
-webkit-transition-property:width,height;
transition-property:width,height;
 width:25px;height:25px
}






</style>
 