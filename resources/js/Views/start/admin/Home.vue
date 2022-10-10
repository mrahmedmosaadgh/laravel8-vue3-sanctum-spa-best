<template>
  <div class=" mx-auto text-gray-900">
    <div class="flex justify-center">
        <div class="flex-1">
            <div class="border w-auto">
                <div  class="border p-4 font-semibold ">
                    <!-- Dashboard<h2>news-bar 1</h2> -->

usertype:{{usertype}}
9999999999999
<!-- newsbar -->
  <div class="slideUp" id="news-bar">
<marquee direction="left" scrollamount="3" behavior="scroll" onmouseover="this.stop()" onmouseout="this.start()">
<a href="#" class="hvr-pop">first part</a><a> -*- </a>
<a href="#" class="hvr-pop">second part 2222222222222222222222222222222222222222222222222</a><a> -*- </a>
<a href="#" class="hvr-pop">الخبر الثالث</a><a> -*- </a>
<a href="#" class="hvr-pop">الخبر الرابع</a><a> -*- </a>
<a href="#" class="hvr-pop">الخبر الخامسrrrrrrrrrrrrr</a><a> -*- </a>
<a href="#" class="hvr-pop">الخبر الخامس</a><a> -*- </a>
<a href="#" class="hvr-pop">الخبر الخامس</a><a> -*- </a>
<a href="#" class="hvr-pop">الخبر الخامس</a><a> -*- </a>
<a href="#" class="hvr-pop">الخبر الخامس</a><a> -*- </a>
<a href="#" class="hvr-pop">الخبر الخامس</a><a> -*- </a>
</marquee>
    </div>



                </div>

                <div class="p-4 bg-white ">
<!-- <a href="#" class="btn-flip" data-back="Back44" data-front="Front666"></a>
<button class="button-73" role="button">Button 73</button>
<button class="button-88" role="button">Button 88</button>
                    You are Home ! -->

<button @click="this.$router.push('markmain')">this.$router.push('Home')</button>
<p>----------------------------------------------------------------</p>
<cards>--- error card</cards>

                </div>
            </div>
        </div>
    </div>
</div>
</template>



<script>
import  cards  from '../components/cards';

export default {

    data() {
        return {
          usertype:''
        }
    },
          components:{
cards
  },
 created: function() {
        if(this.$store.getters.user) {
      this.usertype=   this.$store.getters.user.usertype

      //       let self = this ;   
      //       window.addEventListener('click', function(e){
      //           if ( self.$refs.dropMenu && !self.$refs.dropMenu.contains(e.target) ){
      //               self.drop = false
      //           } 
      //       })
         }
      // this.$router.push('markmain')

  }
}
</script>