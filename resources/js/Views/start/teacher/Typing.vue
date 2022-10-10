<template>
    <div>
<p><button @click="starttimer">starttimer</button></p>
<p><button @click="endtimer">endtimer</button></p>
<p><button @click="pausetimer">pausetimer</button></p>


<!-- <img src="../../../assets/music/loadinglogo.svg" alt=""> -->
<div class="bg-red-400">
    <!-- dfdsgdgfgfgf -->


<!-- <audio src="../../../../../public/mp3/point_up.mp3">dddd</audio>
<div class="mouse-cursor cursor-outer" style="visibility: visible; transform: translate(701px, 231px);"></div>
<div class="mouse-cursor cursor-inner" style="visibility: visible; transform: translate(702px, 536px);"></div>
<div class="mouse-cursor cursor-inner" style="visibility: visible; transform: translate(698px, 324px);"></div> -->
<p>timer:{{timer}}</p>
<p>counter:{{counter}}</p>
<p>wordcount:{{wordcount}}</p>

<p>speed{{wordcount/counter*60}}</p>
</div>
<p>{{textmecorrection.length}}</p>
<p>{{textmecorrection.filter(x => x==1).length}}</p>
<p>{{textmecorrection.filter(x => x==0).length}}</p>
<p>erro:{{textmecorrection.filter(x => x==0).length/textmecorrection.length*100}}</p>
<p>corr:{{textmecorrection.filter(x => x==1).length/textmecorrection.length*100}}</p>
        <p>{{text}}</p> <br>
         <br> <div class="flex">
                        <div class="txtls9 text-4xl  animate__animated  " v-for="(txtletter,index) in txtarray" :key="index" :class="(textmecorrection[index]==1)?'bg-green-200 animate__bounceIn':(textmecorrection[index]==null)?(index==textme.length)?' txtactive ':'':' bg-red-300  animate__shakeX'">
{{(txtletter==' ')?'_':  txtletter}}
            </div>
         </div>

         <br>
        <p> <br><input  ref="myinput"  type="text" v-model="textme" class=" w-full"></p>
         <br><p>textme                     : {{textme                     }}</p>
        <p>txtarray                   : {{txtarray                   }}</p>
        <p>txtarray[textme.length-1]  : {{txtarray[textme.length-1]  }}</p>
        <p>txtmearray                 : {{txtmearray                 }}</p>
        <p>txtmearray[textme.length-1]: {{txtmearray[textme.length-1]}}</p>
        <p>textmecorrection           : {{textmecorrection           }}</p>
        <p>textcom           : {{textcom           }}</p>
<p>window.user_roles           : {{user_roles          }}</p>
<div><div class="txtactive">aaa</div>   </div>

        
    </div>
</template>

<script>
// import sound from '../../../assets/music/point_up.mp3'

// import { defineComponent, onMounted, ref } from "vue";
export default {
  










    name: 'Laravel8Vue3SanctumSpaBest3Typing',

    data() {
        return {
            text:'Laravel 8 Vue 3 Sanctum Spa Best 3 Typing',
            textme:'',
            txtarray:[],
            txtmearray:[],
            textmecorrection:[],user_roles:'',
            playing: false,
            timer:0,
            counter:0,
             wordcount:0,
        };
    },
    computed:{
textcom(){
this.txtmearray=this.textme.split("");
this.textmecorrection=new Array(this.txtarray.length);
console.log('this.txtmearray.length');
console.log(this.txtmearray.length);
console.log('this.textmecorrection');
console.log(this.textmecorrection);
this.wordcount=this.textme.split(' ').length-1

this.txtmearray.forEach((element,index) => {
    console.log('element');
    console.log(element);
    console.log('this.txtarray[index]');
    console.log(this.txtarray[index]);
   this.user_roles= window.user_roles
    if ( element===this.txtarray[index]) {
this.textmecorrection[index]=1

// const sound = ( new Audio( require('@/assets/foo.ogg') ).play())
// var audio = new Audio('../../../assets/music/point_up.mp3'); // path to file
//    audio.play();
// import sound from '../../../assets/music/point_up.mp3'
// import sound from '../assets/sound.mp3'
// const audio = new Audio(sound)
// audio.play()



    }else{
        this.textmecorrection[index]=0
    }

});
}
    },

    mounted() {
this.txttoarray()
this.submitData()

    },

    methods: {
        submitData() {
      this.$refs.myinput.focus()
    },
                pausetimer(){
 
                this.timer=     setInterval(() => {
                       this.counter ++
                        
                    }, 1000000000)
         


        //   this.timer=  setInterval(function() {this.counter ++}, 1000);
        },
        starttimer(){
clearInterval(this.timer)
this.counter=0
                this.timer=     setInterval(() => {
                       this.counter ++
                        
                    }, 1000)
         


        //   this.timer=  setInterval(function() {this.counter ++}, 1000);
        },
                endtimer(){
        //   clearInterval(this.timer); 
          clearInterval(); 
        //    setInterval(function() {element.innerHTML += "Hello"}, 1000);
        },
txttoarray(){
this.txtarray=this.text.split('')
},

toggleAudio() {
      this.playing = !this.playing
      if (this.playing) {
        this.audio.play()
      } else {
        this.audio.pause()
      }
    }






    },
};
</script>

<style  scoped>
.screenBasic-letter.is-active {
    background-color: transparent;
    color: #3295db;
    border-color: #3295db;
    border-radius: 0;
    -webkit-animation-name: cursorBlink;
    animation-name: cursorBlink;
animation-iteration-count: infinite;
    -webkit-animation-duration: 2s;
    animation-duration: 2s;
}
.txtls9{
    letter-spacing: 9px; 
}
.txtactive {
  /* width: 20px;
  height: 4px; */

  /* text-shadow: 2px 2px 0 #4074b5, 2px -2px 0 #4074b5, -2px 2px 0 #4074b5, -2px -2px 0 #4074b5, 2px 0px 0 #4074b5, 0px 2px 0 #4074b5, -2px 0px 0 #4074b5, 0px -2px 0 #4074b5, 1px 5px 14px #CE5937; */
  /* background-color: rgba(0, 255, 38, 0.519); */
animation: example .4s  infinite alternate;
}

@keyframes example {
/* !important */
   0%  {background-color: white; color: blue;}
  100% {background-color: green; color: white;}
}
</style>