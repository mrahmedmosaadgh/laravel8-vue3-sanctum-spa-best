<template>
    <div>
        scschooltermmarkmain
        <button @click="canreload=!canreload" @keyup="canreload=!canreload" >reload</button>
<div v-if="canreload==true" class="   animate__animated animate__fadeIn">




<!-- <button @click="compview(1)" :class="(compviewarray[1])? 'bg-blue-300':''"  class="   animate__animated animate__fadeIn">cangenerate</button>
<button @click="compview(2)" :class="(compviewarray[2])? 'bg-blue-300':''"  class="   animate__animated animate__fadeIn">canloaddb</button>
<button @click="compview(4)" :class="(compviewarray[4])? 'bg-blue-300':''"  class="   animate__animated animate__fadeIn">test auto save</button> -->
<button @click="compview(1)" :class="(compviewarray[1])? ' bg-green-800':''"  class="border-green-800 border-2  animate__animated animate__fadeIn  rounded-none m-0">teacher connect class subject</button>
<button @click="compview(2)" :class="(compviewarray[2])? ' bg-green-800':''"  class="border-green-800 border-2  animate__animated animate__fadeIn  rounded-none m-0">Scschooltermmark</button>

<div v-show="compviewarray[1]"  class="   animate__animated animate__fadeIn">
<scschooltermmarkmain>---</scschooltermmarkmain>
</div>

<div v-show="compviewarray[2]"  class="   animate__animated animate__fadeIn">
<button @click="parentfromparent='4444444444444'">parentfromparent:{{parentfromparent}}</button>
<scschooltermmark :parent='parentfromparent' dd='test1'>---</scschooltermmark>
</div>
 

    </div>
    </div>
</template>
../../../components/scschool/marks/scschooltermmarkmain.vue
<script>
import  scschooltermmarkmain  from '../../../components/scschool/marks/scschooltermmarkmain.vue';
import  scschooltermmark  from '../../../components/scschool/marks/scschooltermmark.vue';


export default {
      components:{
scschooltermmarkmain,scschooltermmark
  },

    data() {
        return {
            parentfromparent:'from parent in child parentfromparent',
              compviewarray:[false,false,false,false,false,false,false,false,false,false,false],
              canreload:false,
            // canreload: 'value',
            // canreload: 'value',
            // canreload: 'value',
        };
    },
// mounted() {

//     },
// computed:{

// com(){
// return value

//   },
   methods: {
          compview(index){
let val= this.compviewarray[index]
                this.compviewarray=[false,false,false,false,false,false,false,false,false,false,false]
                this.compviewarray[index]=!val
          },


   }





}
 </script >

<style scoped>

</style>