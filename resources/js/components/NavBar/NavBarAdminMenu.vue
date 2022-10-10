<template>

<div class="dropdown     w-full">
  <div class=" dropbtn triangle-container">
    admin



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
  name: 'NavBarAdmin',

  data() {
    return {
myrouts:[
 { name:{ name: 'uploadexcel' }, title:'upload excel'},
 { name:{ name: 'excel1' }, title:'excel1'},
 { name:{ name: 'menu' }, title:'menu'},
 { name:{ name: 'addclass' }, title:'addclass'},
 { name:{ name: 'addteacher' }, title:'addteacher'},
 { name:{ name: 'addstudent' }, title:'addstudent'},
 { name:{ name: 'classteachersubject' }, title:'classteachersubject'},
 { name:{ name: 'classteachersubject' }, title:'classteachersubject'},
 { name:{ name: 'classteachersubject' }, title:'classteachersubject'},
 { name:{ name: 'classteachersubject' }, title:'classteachersubject'},
 { name:{ name: 'classteachersubject' }, title:'classteachersubject'},
//  { name:{ name: 'uploadexcel2' }, title:'upload excel22'},
],

    };
  },


};
</script>
