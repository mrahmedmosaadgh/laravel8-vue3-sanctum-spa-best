<template>
<div>
  <div  v-if="permissions!=null && permissions.has('menu_teacher')" class="max-w-screen-lg mx-auto text-gray-900 md:flex md:flex-row md:justify-between md:items-start">


  <!-- resources\js\Views\start\teacher\teachermain.vue md:w-full md:w-4/12-->
            <div class="border     mr-0 mb-3 md:mb-0  sm:w-full lg:w-64 md:mr-3 btl">

                <div class="  p-2  font-semibold bsky3  text-center btl ">Settings</div>
                <div class="  w-full px-8 flex flex-col bg-white">
                    <div class=" w-full  p-2 flex items-center cursor-pointer    "
                        :class="(comlistactive==index)?'text-white bg-blue-500':''" v-for="(item,index) in comlist"
                        :key='index' @click="comlistactive=index">
                       <span class="flex"> <UserIcon class="h-5 w-5 ml-8 hvr-rectangle-out"  /><span>{{item}}</span> </span></div>
                </div>
            </div>
            <div>
            </div>
            <div class="border w-full transition-opacity btr ">

                <!-- <classwork  v-if      ="comlistactive==0" >{{comlist[0]}} ُ Error</classwork>  -->
                <schedule      v-if      ="comlistactive==0" >{{comlist[0]}} ُ Error</schedule> 
                <test2      v-if      ="comlistactive==1" >{{comlist[1]}} ُ Error</test2>
                <cts        v-if      ="comlistactive==2" >{{comlist[2]}} ُ Error</cts>
                <test1   v-if      ="comlistactive==3" >{{comlist[3]}} ُ Error</test1>
                <calender   v-if      ="comlistactive==4" >{{comlist[4]}} ُ Error</calender>
                <!-- <calender   v-if      ="comlistactive==5" >{{comlist[5]}} ُ Error</calender> -->
                <!-- <calender  v-if      ="comlistactive==6" >{{comlist[6]}} err</calender>
                <calender  v-if      ="comlistactive==7" >{{comlist[7]}} err</calender>
                <calender  v-if      ="comlistactive==8" >{{comlist[8]}} err</calender>
                <calender  v-if      ="comlistactive==9" >{{comlist[9]}} err</calender> -->
<!-- 
                 <calender  v-if      ="comlistactive==0" >{{comlist[0]}} err</calender> 
                <calender  v-if      ="comlistactive==1" >{{comlist[1]}} err</calender>
                <calender  v-if      ="comlistactive==2" >{{comlist[2]}} err</calender>
                <calender  v-if      ="comlistactive==3" >{{comlist[3]}} err</calender>
                <calender  v-if      ="comlistactive==4" >{{comlist[4]}} err</calender>
                <calender  v-if      ="comlistactive==5" >{{comlist[5]}} err</calender>
                <calender  v-if      ="comlistactive==6" >{{comlist[6]}} err</calender>
                <calender  v-if      ="comlistactive==7" >{{comlist[7]}} err</calender>
                <calender  v-if      ="comlistactive==8" >{{comlist[8]}} err</calender>
                <calender  v-if      ="comlistactive==9" >{{comlist[9]}} err</calender> -->

                <!-- <calender v-if="comlistactive==5">calender err</calender> -->
                        
                <router-view />
                        
            </div>
        
  </div>
<div v-else>
  <p v-if="permissions.size>0" class="bg-red-300 text-center h-5" >access denied <span class=" text-xs">(Please login as a Teacher)</span></p>
  </div>
  </div>
</template>


<script>
import {UserIcon , KeyIcon} from '@heroicons/vue/outline'
import test1 from '../../../components/startcom/teacher/test/test1.vue';
import test2 from '../../../components/startcom/teacher/test/test2.vue';
import cts from '../../../components/startcom/teacher/cts.vue';
import schedule from '../../../components/startcom/teacher/schedule.vue';
//schedule import test3 from '../../../components/startcom/teacher/test3.vue';
import calender from '../../../components/startcom/teacher/calender.vue';
// import calender from '../../../components/startcom/teacher/calender.vue';
// import classwork from '../../../components/startcom/teacher/classwork.vue';
// import classwork from '../../../components/startcom/teacher/classwork.vue';
export default {
    components : {
        UserIcon ,
         KeyIcon,
         test2,
         test1,
         cts,
         schedule,
         calender,
        //  classwork
        // UserIcon , KeyIcon,test1,test2,teacomhome,test3
    },
    data(){
        return{
     comlist:[       
// 'classwork',
'schedule' ,
'test1'    ,
'test2'    ,
'cts'      ,
'calender' ,
],
            comlistactive:0,
            current_user:{},
            roles       :new Set(),
            permissions :new Set(),
            compo1:"<classwork >classwork erreeeedddd</classwork>",
            compo:'<classwork>classwork err</classwork>',
        }
    },
    mounted(){
this.userdata()
    },
    methods:{

async userdata() {
    var datadb

            await axios.post('/api/userdata').then((res) => {
                // this.userdata2= res.data.message;
                datadb=res.data.message.user;
                this.current_user=res.data.message.user
            datadb.roles.forEach(r => {
                this.roles.add(r.name)
            });
            datadb.permissions.forEach(p => {
                this.permissions.add(p.name)
            });
            }).catch((err) => {
                 console.log(err.response); 
            })
},





        showme(index){
            hideme[index]=!hideme[index]
            comlistactive=index
        }
    }
}
</script>





