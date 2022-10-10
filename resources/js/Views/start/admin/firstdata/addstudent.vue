<template>
    <div>
addstudent main
<button @click="canreload=!canreload" @keyup="canreload=!canreload" >reload</button>
<div v-if="canreload==true" class="   animate__animated animate__fadeIn">

<!-- <button @click="compview(1)" :class="(compviewarray[1])? 'bg-blue-300':''"  class="   animate__animated animate__fadeIn">cangenerate</button>
<button @click="compview(2)" :class="(compviewarray[2])? 'bg-blue-300':''"  class="   animate__animated animate__fadeIn">canloaddb</button>
<button @click="compview(3)" :class="(compviewarray[3])? 'bg-blue-300':''"  class="   animate__animated animate__fadeIn">todo</button>
<button @click="compview(4)" :class="(compviewarray[4])? 'bg-blue-300':''"  class="   animate__animated animate__fadeIn">test auto save</button> -->
<button @click="compview(1)" :class="(compviewarray[1])? 'bg-blue-300':''"  class="   animate__animated animate__fadeIn">student add new</button>
<button @click="compview(2)" :class="(compviewarray[2])? 'bg-blue-300':''"  class="   animate__animated animate__fadeIn">students from excel</button>
<!-- <button @click="compview(3)" :class="(compviewarray[3])? 'bg-blue-300':''"  class="   animate__animated animate__fadeIn">teacherfromexcel_update</button> -->


<!-- <div v-show="compviewarray[1]"  class="   animate__animated animate__fadeIn">
<generate>---</generate>-->
</div> 

<!-- 
<div v-show="compviewarray[2]"  class="   animate__animated animate__fadeIn">
<loaddb>---</loaddb>
</div>


<div v-show="compviewarray[3]"  class="   animate__animated animate__fadeIn">
<todo>---</todo>
 
</div>
<div v-show="compviewarray[4]"  class="   animate__animated animate__fadeIn">
 
<test>---</test>
</div> -->
<div v-show="compviewarray[1]"  class="   animate__animated animate__fadeIn">
 
<studentnew>---</studentnew>
</div>
<div v-show="compviewarray[2]"  class="   animate__animated animate__fadeIn">
 
<studentfromexcel>---</studentfromexcel>
</div>

<!-- <div v-show="compviewarray[2]"  class="   animate__animated animate__fadeIn">
<teacherfromexcel>---</teacherfromexcel>
</div>
<div v-show="compviewarray[3]"  class="   animate__animated animate__fadeIn">
<teacherfromexcelupdate>---</teacherfromexcelupdate>
</div>
</div> -->
<!-- <p>compviewarray:{{compviewarray}}</p>  -->
 <!-- ======================================================= -->

<!-- <Addclassviewdb></Addclassviewdb> -->
<!-- <circle-svg class="w-6 h-6" /> -->
      <!-- -------------------------------------------------------------------- -->
    </div>
</template>
<script>
// import CircleSvg from '../components/';
// import CircleSvg from 'components/CircleSvg.vue';
// import Success from '../components/Success.vue'  //  Addclassviewdb ,
// import  addclassviewdb from '../'resources\js\components/scschool/firstdata
// import  loaddb  from '../../../components/scschool/firstdata/addclass/loaddb.vue';
// import  generate  from '../../../components/scschool/firstdata/addclass/generate.vue';
// import  todo  from '../../../components/scschool/firstdata/addclass/todo.vue';
// import  test  from '../../../components/scschool/firstdata/addclass/test-autosave.vue';
import  studentnew  from '../../../components/scschool/firstdata/addstudent/studentnew.vue';
import  studentfromexcel  from '../../../components/scschool/firstdata/addstudent/studentfromexcel.vue';
// import  teacherfromexcel  from '../../../components/scschool/firstdata/addteacher/teacherfromexcel.vue';
// import  teacherfromexcelupdate  from '../../../components/scschool/firstdata/addteacher/teacherfromexcelupdate.vue';


// import 'animate.css';testsaveall
export default {
  components:{
studentnew,studentfromexcel
  },
   data() {

            return {
              compviewarray:[false,false,false,false,false,false,false,false,false,false,false],

              canreload:true,
              newdata: [],
              menuitems2: '',
              menuitems3: '',
              datamsg: '',
              loading:false,




            };

        },
 
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