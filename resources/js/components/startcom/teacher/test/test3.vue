<template>
  <div class="w-full mx-auto text-gray-900">


<div class="box"><div class="lsn_name " title="Keys d &amp; k">Keys d &amp; k</div><div class="lsn_num">5</div><div class="boxicon"><div class="lesson_icon e-qwerty qwerty-dk"></div></div><div class="completion-check"></div></div>










<!-- myclass -->
 <div class="w-full   flex">
    <div class="w-24 p-2 m-1 rounded border-2 border-gray-600 bsky"
                   v-for="(item,index) in myclass" :key='index'
                  >{{item}}
                            <button @click="get_class_students(item)">students</button>
                    </div>
</div><!-- myclass -->

<div class="w-full   wrapper  justify-center ">
  <div class="w-full wrapper">
  <div class="  p-4  rounded border-2 border-blue-600 bsky  hover:bg-blue-800  hover:cursor-pointer hover:text-white " v-for="(item,index) in datadb3" :key='index'>
  <span class="bdg1">{{index}}</span>{{item.id}}:{{item.name}}

</div>
</div>
 </div>





<p>permissions:{{permissions}}</p>

  <p>myfirstcounter:---------------------------------------</p>
                  <p>myclass:{{myclass}}</p>
                  <div  v-for="(item,index) in datadb[0]" :key='index' >
                    <p class="bg-red-300">({{index+1}})::{{item.myclasses.name}}
<button @click="students(index)">students</button>


                    </p>
                    <p class="bg-green-300">{{item.mysubjects.name}}</p>
                    <p class="bg-blue-300">{{item.myteachers.name}}</p>
                    </div>
                    <br>mystudents:
                    <hr>



                 <div  v-for="(item,index) in datadb[2]" :key='index' >
                    <p class="bg-red-300">({{index+1}})
<!-- <button @click="students(index)">students</button> -->


                    </p>
                    <p class="bg-green-300">{{item.cts.mysubjects.name}}</p>
                    <p class="bg-blue-300">{{item.cts.myteachers.name}}</p>
                    <p class="bg-blue-300">{{item.day}}</p>
                    <p class="bg-blue-300">{{item.period}}</p>
                    <details>
  <summary class="button-88 w-full">
    <button  >{{item.cts.myclasses.name}} students</button>
    {{item.cts.myclasses.name}} students </summary>
  <p v-for="(item2,index) in item.cts.mystudents" :key='index'  class="bg-blue-300">{{item2.name}}</p>
</details>
                    </div>

<div v-for="(item,index) in mystudents" :key='index'  class="bg-green-300">
<p>{{index+1}}:{{item.id}}:{{item.name}}</p>
<p></p>

</div>
<!-- GFG_Array.findIndex(i => i.prop_1 === "val_11"); -->
                    <!-- Dashboard<h2>news-bar 1</h2> v-if="userdata.permissions.has('menu_teacher')"-->
<!-- <p>$store.state.lang:{{$store.state.lang}}</p>
<p>{{tr['teacher_home'][$store.state.lang]}}</p>
<p>22222{{tr['teacher_home'][lang]}}</p>
<p>{{tr['teacher_home']['en']}}</p> -->
<!-- <p>lang:{{lang}}</p>
<p>tr:{{tr}}</p>-->
<p>trcom(txt){{trans('teacher_home')}}</p>
<p>{{trans('usertype')}}</p>
<!-- <p>tr:{{tr['teacher_home'][lang]}}</p> 
<p>$store.:{{$store.state.trlang.tr['teacher_home'][$store.state.trlang.lang]}}</p> -->
<!-- <navteacher  v-if="permissions.has('menu_teacher')" :icon='true' class="  inline-block   z-10  hover:bg-blue-800 hover:text-white w-28">navteacher err</navteacher> -->

<div v-if="permissions!=null && permissions.has('menu_teacher')">
<!-- <p class="p-3 w-72">current_user:{{current_user}}</p>
<p class="p-3 w-72">roles       :{{roles       }}</p>
<p class="p-3 w-72">permissions :{{permissions }}</p> -->
<!-- <p>{{tr['usertype'][$store.state.lang]}}:{{usertype}}</p> -->
<p></p>
<p><button @click="teacher_get_classes_students()">teacher_get_classes_students</button></p>
<!-- <p>{{datadb}}</p> -->
<p v-for="(myclass,index) in datadb" :key="index" >{{myclass.name}}</p>
 <!-- v-for="myclass in my_classes" :key="myclass" -->
<teacomhome  >err teacomhome</teacomhome>
<!-- <cards>---</cards> -->

</div>
<div v-else>
  <p v-if="permissions.size>0" class="bg-red-300 text-center h-5" >access denied <span class=" text-xs">(Please login as a Teacher)</span></p>
  </div>
<!-- <p>permissions:{{permissions2}}</p>
<p>permissions:{{permissions2!=null}}</p>
<p>permissions:{{permissions2.size==0}}</p>
<p>permissions:{{permissions.size}}</p> -->
</div>

</template>



<script>

import  teacomhome  from '../teacomhome.vue';

export default {
          components:{teacomhome},//cards,
    data() {
        return {
          lang:'ar',
          myclass:[],
          datadb:[],
          datadb2:[],
          datadb3:[],
          mystudents:[],
          datamsg:null,
          loading:false,
          usertype:'',
          userdata2:'',
          piniadata:'',
            current_user:{},
            roles       :new Set(),
            permissions :new Set(),
            permissions2 :new Set(),
            my_classes:['4A','4B','4C','4D','5A','5B','5C'],
            tr:{
              'teacher_home':{ar:'الصفحة الرئيسية للمدرس',en:'Teacher home'},
              'usertype':{ar:'نوع المستخدم',en:'User type'},
              'teacher_home':{ar:'الصفحة الرئيسية للمدرس',en:'Teacher home'},
              'teacher_home':{ar:'الصفحة الرئيسية للمدرس',en:'Teacher home'},
            }
        }
    },


  mounted(){
//  this.userdata();

  },
  methods:{
    trans(txt){
 return this.$store.state.trlang.tr[txt][this.$store.state.trlang.lang]
},
async   teacher_get_classes_students(){
    var msgin='teacher_get_classes_students'
            this.datamsg = msgin+"...";
            this.loading = true;
            try{
            await axios.post("/api/teacher/teacher_get_classes_students" )
            .then((res) => {
            this.datadb = res.data.message;
            // console.log(res.data.message);
            this.datamsg = msgin+"...Done";
            this.loading = false;});
            } catch (e) {
            this.datamsg = msgin+"...error";
            console.log(e);
            alert(msgin+" ... error");}

  var array=this.datadb[0];
this.myclass=[]
array.forEach(e => {
var index=this.datadb[1].findIndex(i => i.id == e.class_id)
// alert(index)
// console.log(index);
this.myclass.push(this.datadb[1][index].name)
});
},
students(index){

this.mystudents=this.datadb[0][index].mystudents;


},



async   get_class_students(classname){
    var msgin='teacher_get_class_students'
            this.datamsg = msgin+"...";
            this.loading = true;
            try{
            await axios.post("/api/teacher/get_class_students", {classname:classname}  )
            .then((res) => {
            this.datadb3 = res.data.message;
            console.log(res.data.message);
            this.datamsg = msgin+"...Done";
            this.loading = false;});
            } catch (e) {
            this.datamsg = msgin+"...error";
            console.log(e);
            alert(msgin+" ... error");}
            console.log(this.datadb3);
},

async userdata() {
            await axios.post('/api/userdata').then((res) => {
                this.userdata2= res.data.message;
                // console.log(res.data.message.user);
                // console.log(res.data.message.user_roles);
                // console.log(res.data.message.user_permissions);

                // this.current_user=res.data.message;
                this.current_user=res.data.message.user;
                // this.current_user=this.$store.getters.user;
                // roles
            this.current_user.roles.forEach(r => {
                this.roles.add(r.name)
            });
            this.current_user.permissions.forEach(p => {
                this.permissions.add(p.name)
            });
            }).catch((err) => {
                 this.userdata2=err.response
            })
}

 }//methods
}
</script>
<style scoped>
/* *{outline:2px solid blue} */
.box:hover {
  box-shadow: 0 2px 2px 0 rgba(0,0,0,0.2),0 6px 10px 0 rgba(0,0,0,0.3);
}
.box {
  cursor: pointer;
  position: relative;
  width: 160px;
  height: 160px;
  padding: 10px;
  background-color: rgba(255,255,255,0.7);
  box-shadow: 0 1px 4px 0 rgba(0,0,0,0.37);
  transition: box-shadow 0.28s cubic-bezier(0.4, 0, 0.2, 1);
  border-radius: 3px;
}
 ::after, ::before {
  box-sizing: border-box;
}
.box-container {
  display: table-cell;
  padding: 10px;
}


</style>