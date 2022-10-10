<template>

<div class="dropdown     w-full">
  <div class=" dropbtn triangle-container">
    Teacher



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
  name: 'NavBarTeacher',

  data() {
    return {
myrouts:[
 { name:{ name: 'uploadexcel' }, title:'upload excel'},
 { name:{ name: 'quizcreate' }, title:'quizcreate'},
 { name:{ name: 'teachermain' }, title:'teachermain'},
 { name:{ name: 'scheduletest' }, title:'scheduletest'},
 { name:{ name: 'Typing' }, title:'Typing'},
 { name:{ name: 'todo' }, title:'todo'},
 { name:{ name: 'uploadexcel' }, title:'upload excel'},
//  { name:{ name: 'uploadexcel2' }, title:'upload excel22'},Typing
],

    };
  },


};
</script>
