<template>
    <div>
        classteachersubject main
        <button @click="canreload=!canreload" @keyup="canreload=!canreload" >reload</button>
<div v-if="canreload==true" class="   animate__animated animate__fadeIn">




<!-- <button @click="compview(1)" :class="(compviewarray[1])? 'bg-blue-300':''"  class="   animate__animated animate__fadeIn">cangenerate</button>
<button @click="compview(2)" :class="(compviewarray[2])? 'bg-blue-300':''"  class="   animate__animated animate__fadeIn">canloaddb</button>
<button @click="compview(4)" :class="(compviewarray[4])? 'bg-blue-300':''"  class="   animate__animated animate__fadeIn">test auto save</button> -->
<button @click="compview(1)" :class="(compviewarray[1])? ' bg-green-800':''"  class="border-green-800 border-2  animate__animated animate__fadeIn  rounded-none m-0">teacher connect class subject</button>
<button @click="compview(2)" :class="(compviewarray[2])? 'bg-green-800':''"  class="border-green-800   border-2 animate__animated animate__fadeIn  rounded-none m-0">
 class teacher subject
  </button>

<button @click="compview(3)" :class="(compviewarray[3])? 'bg-green-800':''"  class="border-green-800   border-2 animate__animated animate__fadeIn  rounded-none m-0">
  1subjectclass</button>
<button @click="compview(4)" :class="(compviewarray[4])? 'bg-green-800':''"  class="border-green-800   border-2 animate__animated animate__fadeIn  rounded-none m-0">
  hover</button>
<button @click="compview(5)" :class="(compviewarray[5])? 'bg-green-800':''"  class="border-green-800   border-2 animate__animated animate__fadeIn  rounded-none m-0">
  test2</button>
  <button @click="compview(6)" :class="(compviewarray[6])? 'bg-green-800':''"  class="border-green-800   border-2 animate__animated animate__fadeIn  rounded-none m-0">
 updateteachers
  </button>
<!-- <button @click="compview(3)" :class="(compviewarray[3])? 'bg-blue-300':''"  class="   animate__animated animate__fadeIn">teacherfromexcel_update</button> -->

<div v-show="compviewarray[1]"  class="   animate__animated animate__fadeIn">
 
<connect>---</connect>
</div>
<div v-show="compviewarray[2]"  class="   animate__animated animate__fadeIn">
<classteachersubject>---</classteachersubject>
</div>
<div v-show="compviewarray[3]"  class="   animate__animated animate__fadeIn">
<subjectclass>---</subjectclass>
</div>
<div v-show="compviewarray[4]"  class="   animate__animated animate__fadeIn">
<hover>---</hover>
</div>
<div v-show="compviewarray[5]"  class="   animate__animated animate__fadeIn">
<test2>---</test2>
</div>
<div v-show="compviewarray[6]"  class="   animate__animated animate__fadeIn">
<subjectteacher>---</subjectteacher>
</div>
<!-- <div v-show="compviewarray[2]"  class="   animate__animated animate__fadeIn">
<teacherfromexcel>---</teacherfromexcel>
</div>
<div v-show="compviewarray[3]"  class="   animate__animated animate__fadeIn">
<teacherfromexcelupdate>---</teacherfromexcelupdate>
</div> -->


    </div></div>
</template>
<script>
import  connect  from '../../../components/scschool/firstdata/classteachersubject/connect.vue';
import  classteachersubject  from '../../../components/scschool/firstdata/classteachersubject/classteachersubject.vue';
import  subjectclass  from '../../../components/scschool/firstdata/classteachersubject/1subjectclass.vue';
import  subjectteacher  from '../../../components/scschool/firstdata/classteachersubject/2subjectteacher.vue';
import  hover  from '../../../components/scschool/firstdata/classteachersubject/hover.vue';
import  test2  from '../../../components/scschool/firstdata/classteachersubject/test2.vue';

export default {
  components:{
connect,classteachersubject,subjectclass,subjectteacher,hover,test2
  },
   data() {

            return {
              compviewarray:[false,false,false,false,false,false,false,false,false,false,false],
              canreload:false,
            }},

                    methods: {
          compview(index){
let val= this.compviewarray[index]
                this.compviewarray=[false,false,false,false,false,false,false,false,false,false,false]
                this.compviewarray[index]=!val
          },

                    }
}
</script>
<style>
    
</style>