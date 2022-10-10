<template>

<div class="dropdown     w-full">
  <div class=" dropbtn triangle-container">
    Marks



  </div>


  <div class="dropdown-content">

                     <router-link
                      v-for="(rout,index) in myrouts" :key="index"
                      active-class=" font-semibold text-gray-900"
                       class="ar px-6 text-gray-500 hover:text-gray-900 " 
                       :to="rout.name">
                       {{rout.title}}
                     </router-link>





  </div>


</div>



</template>

<script>
export default {
  name: 'NavBarMarks',

  data() {
    return {
myrouts:[
 { name:{ name: 'marks_import' }, title:'marks_import'},//marks_search
//  { name:{ name: 'marks_search' }, title:'marks_search'},//marks_search
 { name:{ name: 'marks_setup' }, title:'marks_setup'},//marks_setup
 { name:{ name: 'marks_login' }, title:'marks_login'},//marks_setup
 { name:{ name: 'marks_register' }, title:'marks_register'},//marks_setup
 { name:{ name: 'marks_Profile' }, title:'marks_Profile'},//marks_setup

],

    };
  },


};
</script>
