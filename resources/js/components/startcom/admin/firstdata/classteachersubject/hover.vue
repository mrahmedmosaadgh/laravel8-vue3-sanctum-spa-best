<template>
    <div>
         <div id="effects" class="effects">

                     <div
  
          class="animate__animated   animate__jello fixed p-2 top-0 right-0   bg-green-200">
            <span  > </span>
            <span>{{copymsg}}</span>
        </div>

				<h2>2D Transitions</h2>
<button @click="copyme('hvr-grow')" class="hvr-grow">Grow</button>
<button @click="copyme('hvr-shrink')" class="hvr-shrink">Shrink</button>
<button @click="copyme('hvr-pulse')" class="hvr-pulse">Pulse</button>
<button @click="copyme('hvr-pulse-grow')" class="hvr-pulse-grow">Pulse Grow</button>
<button @click="copyme('hvr-pulse-shrink')" class="hvr-pulse-shrink">Pulse Shrink</button>
<button @click="copyme('hvr-push')" class="hvr-push">Push</button>
<button @click="copyme('hvr-pop')" class="hvr-pop">Pop</button>
<button @click="copyme('hvr-bounce-in')" class="hvr-bounce-in">Bounce In</button>
<button @click="copyme('hvr-bounce-out')" class="hvr-bounce-out">Bounce Out</button>
<button @click="copyme('hvr-rotate')" class="hvr-rotate">Rotate</button>
<button @click="copyme('hvr-grow-rotate')" class="hvr-grow-rotate">Grow Rotate</button>
<button @click="copyme('hvr-float')" class="hvr-float">Float</button>
<button @click="copyme('hvr-sink')" class="hvr-sink">Sink</button>
<button @click="copyme('hvr-bob')" class="hvr-bob">Bob</button>
<button @click="copyme('hvr-hang')" class="hvr-hang">Hang</button>
<button @click="copyme('hvr-skew')" class="hvr-skew">Skew</button>
<button @click="copyme('hvr-skew-forward')" class="hvr-skew-forward">Skew Forward</button>
<button @click="copyme('hvr-skew-backward')" class="hvr-skew-backward">Skew Backward</button>
<button @click="copyme('hvr-wobble-horizontal')" class="hvr-wobble-horizontal">Wobble Horizontal</button>
<button @click="copyme('hvr-wobble-vertical')" class="hvr-wobble-vertical">Wobble Vertical</button>
<button @click="copyme('hvr-wobble-to-bottom-right')" class="hvr-wobble-to-bottom-right">Wobble To Bottom Right</button>
<button @click="copyme('hvr-wobble-to-top-right')" class="hvr-wobble-to-top-right">Wobble To Top Right</button>
<button @click="copyme('hvr-wobble-top')" class="hvr-wobble-top">Wobble Top</button>
<button @click="copyme('hvr-wobble-bottom')" class="hvr-wobble-bottom">Wobble Bottom</button>
<button @click="copyme('hvr-wobble-skew')" class="hvr-wobble-skew">Wobble Skew</button>
<button @click="copyme('hvr-buzz')" class="hvr-buzz">Buzz</button>
<button @click="copyme('hvr-buzz-out')" class="hvr-buzz-out">Buzz Out</button>
<button @click="copyme('hvr-forward')" class="hvr-forward">Forward</button>
<button @click="copyme('hvr-backward')" class="hvr-backward">Backward</button>
<button @click="copyme('hvr-fade')" class="hvr-fade">Fade</button>
<button @click="copyme('hvr-back-pulse')" class="hvr-back-pulse">Back Pulse</button>
<button @click="copyme('hvr-sweep-to-right')" class="hvr-sweep-to-right">Sweep To Right</button>
<button @click="copyme('hvr-sweep-to-left')" class="hvr-sweep-to-left">Sweep To Left</button>
<button @click="copyme('hvr-sweep-to-bottom')" class="hvr-sweep-to-bottom">Sweep To Bottom</button>
<button @click="copyme('hvr-sweep-to-top')" class="hvr-sweep-to-top">Sweep To Top</button>
<button @click="copyme('hvr-bounce-to-right')" class="hvr-bounce-to-right">Bounce To Right</button>
<button @click="copyme('hvr-bounce-to-left')" class="hvr-bounce-to-left">Bounce To Left</button>
<button @click="copyme('hvr-bounce-to-bottom')" class="hvr-bounce-to-bottom">Bounce To Bottom</button>
<button @click="copyme('hvr-bounce-to-top')" class="hvr-bounce-to-top">Bounce To Top</button>
<button @click="copyme('hvr-radial-out')" class="hvr-radial-out">Radial Out</button>
<button @click="copyme('hvr-radial-in')" class="hvr-radial-in">Radial In</button>
<button @click="copyme('hvr-rectangle-in')" class="hvr-rectangle-in">Rectangle In</button>
<button @click="copyme('hvr-rectangle-out')" class="hvr-rectangle-out">Rectangle Out</button>
<button @click="copyme('hvr-shutter-in-horizontal')" class="hvr-shutter-in-horizontal">Shutter In Horizontal</button>
<button @click="copyme('hvr-shutter-out-horizontal')" class="hvr-shutter-out-horizontal">Shutter Out Horizontal</button>
<button @click="copyme('hvr-shutter-in-vertical')" class="hvr-shutter-in-vertical">Shutter In Vertical</button>
<button @click="copyme('hvr-shutter-out-vertical')" class="hvr-shutter-out-vertical">Shutter Out Vertical</button>
<button @click="copyme('')" class=""></button>
<button @click="copyme('hvr-icon-back')" class="hvr-icon-back"></button>
<button @click="copyme('')" class=""></button>
<button @click="copyme('hvr-icon-forward')" class="hvr-icon-forward"></button>
<button @click="copyme('')" class=""></button>
<button @click="copyme('hvr-icon-down')" class="hvr-icon-down"></button>
<button @click="copyme('')" class=""></button>
<button @click="copyme('hvr-icon-up')" class="hvr-icon-up"></button>
<button @click="copyme('')" class=""></button>
<button @click="copyme('hvr-icon-spin')" class="hvr-icon-spin"></button>
<button @click="copyme('')" class=""></button>
<button @click="copyme('hvr-icon-drop')" class="hvr-icon-drop"></button>
<button @click="copyme('')" class=""></button>
<button @click="copyme('hvr-icon-fade')" class="hvr-icon-fade"></button>
<button @click="copyme('')" class=""></button>
<button @click="copyme('hvr-icon-float-away')" class="hvr-icon-float-away"></button>
<button @click="copyme('')" class=""></button>
<button @click="copyme('hvr-icon-sink-away')" class="hvr-icon-sink-away"></button>
<button @click="copyme('')" class=""></button>
<button @click="copyme('hvr-icon-grow')" class="hvr-icon-grow"></button>
<button @click="copyme('')" class=""></button>
<button @click="copyme('hvr-icon-shrink')" class="hvr-icon-shrink"></button>
<button @click="copyme('')" class=""></button>
<button @click="copyme('hvr-icon-pulse')" class="hvr-icon-pulse"></button>
<button @click="copyme('')" class=""></button>
<button @click="copyme('hvr-icon-pulse-grow')" class="hvr-icon-pulse-grow"></button>
<button @click="copyme('')" class=""></button>
<button @click="copyme('hvr-icon-pulse-shrink')" class="hvr-icon-pulse-shrink"></button>
<button @click="copyme('')" class=""></button>
<button @click="copyme('hvr-icon-push')" class="hvr-icon-push"></button>
<button @click="copyme('')" class=""></button>
<button @click="copyme('hvr-icon-pop')" class="hvr-icon-pop"></button>
<button @click="copyme('')" class=""></button>
<button @click="copyme('hvr-icon-bounce')" class="hvr-icon-bounce"></button>
<button @click="copyme('')" class=""></button>
<button @click="copyme('hvr-icon-rotate')" class="hvr-icon-rotate"></button>
<button @click="copyme('')" class=""></button>
<button @click="copyme('hvr-icon-grow-rotate')" class="hvr-icon-grow-rotate"></button>
<button @click="copyme('')" class=""></button>
<button @click="copyme('hvr-icon-float')" class="hvr-icon-float"></button>
<button @click="copyme('')" class=""></button>
<button @click="copyme('hvr-icon-sink')" class="hvr-icon-sink"></button>
<button @click="copyme('')" class=""></button>
<button @click="copyme('hvr-icon-bob')" class="hvr-icon-bob"></button>
<button @click="copyme('')" class=""></button>
<button @click="copyme('hvr-icon-hang')" class="hvr-icon-hang"></button>
<button @click="copyme('')" class=""></button>
<button @click="copyme('hvr-icon-wobble-horizontal')" class="hvr-icon-wobble-horizontal"></button>
<button @click="copyme('')" class=""></button>
<button @click="copyme('hvr-icon-wobble-vertical')" class="hvr-icon-wobble-vertical"></button>
<button @click="copyme('')" class=""></button>
<button @click="copyme('hvr-icon-buzz')" class="hvr-icon-buzz"></button>
<button @click="copyme('')" class=""></button>
<button @click="copyme('hvr-icon-buzz-out')" class="hvr-icon-buzz-out"></button>
<button @click="copyme('')" class=""></button>
<button @click="copyme('hvr-border-fade')" class="hvr-border-fade">Border Fade</button>
<button @click="copyme('hvr-hollow')" class="hvr-hollow">Hollow</button>
<button @click="copyme('hvr-trim')" class="hvr-trim">Trim</button>
<button @click="copyme('hvr-ripple-out')" class="hvr-ripple-out">Ripple Out</button>
<button @click="copyme('hvr-ripple-in')" class="hvr-ripple-in">Ripple In</button>
<button @click="copyme('hvr-outline-out')" class="hvr-outline-out">Outline Out</button>
<button @click="copyme('hvr-outline-in')" class="hvr-outline-in">Outline In</button>
<button @click="copyme('hvr-round-corners')" class="hvr-round-corners">Round Corners</button>
<button @click="copyme('hvr-underline-from-left')" class="hvr-underline-from-left">Underline From Left</button>
<button @click="copyme('hvr-underline-from-center')" class="hvr-underline-from-center">Underline From Center</button>
<button @click="copyme('hvr-underline-from-right')" class="hvr-underline-from-right">Underline From Right</button>
<button @click="copyme('hvr-reveal')" class="hvr-reveal">Reveal</button>
<button @click="copyme('hvr-underline-reveal')" class="hvr-underline-reveal">Underline Reveal</button>
<button @click="copyme('hvr-overline-reveal')" class="hvr-overline-reveal">Overline Reveal</button>
<button @click="copyme('hvr-overline-from-left')" class="hvr-overline-from-left">Overline From Left</button>
<button @click="copyme('hvr-overline-from-center')" class="hvr-overline-from-center">Overline From Center</button>
<button @click="copyme('hvr-overline-from-right')" class="hvr-overline-from-right">Overline From Right</button>
<button @click="copyme('hvr-shadow')" class="hvr-shadow">Shadow</button>
<button @click="copyme('hvr-grow-shadow')" class="hvr-grow-shadow">Grow Shadow</button>
<button @click="copyme('hvr-float-shadow')" class="hvr-float-shadow">Float Shadow</button>
<button @click="copyme('hvr-glow')" class="hvr-glow">Glow</button>
<button @click="copyme('hvr-shadow-radial')" class="hvr-shadow-radial">Shadow Radial</button>
<button @click="copyme('hvr-box-shadow-outset')" class="hvr-box-shadow-outset">Box Shadow Outset</button>
<button @click="copyme('hvr-box-shadow-inset')" class="hvr-box-shadow-inset">Box Shadow Inset</button>
<button @click="copyme('hvr-bubble-top')" class="hvr-bubble-top">Bubble Top</button>
<button @click="copyme('hvr-bubble-right')" class="hvr-bubble-right">Bubble Right</button>
<button @click="copyme('hvr-bubble-bottom')" class="hvr-bubble-bottom">Bubble Bottom</button>
<button @click="copyme('hvr-bubble-left')" class="hvr-bubble-left">Bubble Left</button>
<button @click="copyme('hvr-bubble-float-top')" class="hvr-bubble-float-top">Bubble Float Top</button>
<button @click="copyme('hvr-bubble-float-right')" class="hvr-bubble-float-right">Bubble Float Right</button>
<button @click="copyme('hvr-bubble-float-bottom')" class="hvr-bubble-float-bottom">Bubble Float Bottom</button>
<button @click="copyme('hvr-bubble-float-left')" class="hvr-bubble-float-left">Bubble Float Left</button>
<button @click="copyme('hvr-curl-top-left')" class="hvr-curl-top-left">Curl Top Left</button>
<button @click="copyme('hvr-curl-top-right')" class="hvr-curl-top-right">Curl Top Right</button>
<button @click="copyme('hvr-curl-bottom-right')" class="hvr-curl-bottom-right">Curl Bottom Right</button>
<button @click="copyme('hovp')" class="hovp">Curl Bottom Left</button>

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
navigator.clipboard.writeText(JSON.stringify(txt))
this.copymsg='copied!'
// .then(function() {
//     /* clipboard successfully set */
//     this.copymsg='copied!'
//   }, function() {
//     /* clipboard write failed */
//     this.copymsg='error '
//   });"hvr-pulse-grow"
 
 setTimeout(() => this.copymsg = 'Copy?', 1000);
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
 