<template>
  <div class="w-full mx-auto text-gray-900">
    cts-------------
<!-- myclass -->
 <!-- <div class="w-full   flex">
    <div class="w-24 p-2 m-1 rounded border-2 border-gray-600 bsky"
                   v-for="(item,index) in myclass" :key='index'
                  >{{item}}
                            <button @click="get_class_students(item)">students</button>
                    </div>
</div> -->

<!-- myclass -->





                  <p>myclass:{{myclass}}</p>
                  <div  v-for="(item,index) in datadb[2]" :key='index' >
                    <p class="bg-red-300">({{index+1}})</p>
                    <p class="bg-green-300">{{item.cts.mysubjects.name}}</p>
                    <p class="bg-blue-300">{{item.cts.myteachers.name}}</p>
                    <p class="bg-blue-300">{{item.day}}</p>
                    <p class="bg-blue-300">{{item.period}}</p>
          <details>
            <summary class=" cursor-pointer">
              {{item.cts.myclasses.name}} {{trans('students')}} </summary>
            <p v-for="(item2,index) in item.cts.mystudents" :key='index'  class="bg-blue-300">{{item2.name}}</p>
          </details>








                    </div>
                    <br>mystudents:
                    <hr>
<div v-for="(item,index) in mystudents" :key='index'  class="bg-green-300">
<p>{{index+1}}:{{item.id}}:{{item.name}}</p>
<p></p>
  
</div>

<!-- <p>{{$store.state.trlang.tr['teacher_home'][$store.state.trlang.lang]}}</p> -->
<p>teacher_home trans:{{trans('teacher_home')}}</p>
<p>this.$store.state.user.lang:{{this.$store.state.user.lang}}</p>
<p><button @click="langchange('ar')">ar</button></p>
<p><button @click="langchange('en')">en</button></p>
<div >

<p></p>
<p><button @click="teacher_get_classes_students()">teacher_get_classes_students</button></p>

<p v-for="(myclass,index) in datadb" :key="index" >{{myclass.name}}</p>

</div>


</div>

</template>



<script>
// import  teacomhome  from '../../../components/startcom/teacher/teacomhome.vue';
import swal from 'sweetalert2'
import schedule1Vue from '../../scschool/firstdata/classteachersubject/schedule1.vue'
export default {

    data() {
        return {
          myclass:[],
          datadb:[],
          datadb2:[],
          datadb3:[],
          mystudents:[],
          datamsg:null,
          loading:false,
          usertype:'',
            // my_classes:['4A','4B','4C','4D','5A','5B','5C'],
            my_classes:['45A'],
            lang:'en',
            tr:{
              'teacher_home':{ar:'الصفحة الرئيسية للمدرس',en:'Teacher home'},
              'usertype':{ar:'نوع المستخدم',en:'User type'},
              'teacher_home':{ar:'الصفحة الرئيسية للمدرس',en:'Teacher home'},
              'students':{ar:'التلاميذ',en:'students'},
            }
        }
    },
    mounted(){
  this.lang=this.$store.state.user.lang
// this.lang=$store.state.user.lang
    },

  methods:{
async    langchange(lang){
                    try{
            await axios.post("/api/lang" ,{lang:lang})

            .then((res) => {
              // alert(this.$store.state.user.lang)
              console.log(res.data.message);});
            } catch (e) {
            // this.datamsg = msgin+"...error";
            console.log(e);
            // alert(msgin+" ... error");
            }
            // this.lang=$store.state.user.lang
            // this.$store.state.lang=lang
            this.lang=lang
//  return this.$store.state.trlang.tr[txt][this.$store.state.user.lang]
},

trans(txt){
      return this.tr[txt][this.lang]
      //  return this.$store.state.trlang.tr[txt][this.$store.state.user.lang]
},
async   teacher_get_classes_students(){
    var msgin='teacher_get_classes_students'
            this.datamsg = msgin+"...";
            this.loading = true;
            try{
            await axios.post("/api/teacher/teacher_get_classes_students" )
            .then((res) => {
            this.datadb = res.data.message;
            // swal.fire(`Done`)

const Toast = swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 2000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', swal.stopTimer)
    toast.addEventListener('mouseleave', swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'success',
  title: 'Signed in successfully'
})
              //             this.toast.success("success", {
              // timeout:               1000
              // });
            // console.log(res.data.message);
            this.datamsg = msgin+"...Done";
            this.loading = false;});
            } catch (e) {
            this.datamsg = msgin+"...error";
            console.log(e);
            alert(msgin+" ... error");}

// console.log(this.datadb[0][0].myteachers);.class_id
  var array=this.datadb[0];
this.myclass=[]
array.forEach(e => {
var index=this.datadb[1].findIndex(i => i.id == e.class_id)
// alert(index)
// console.log(index);
this.myclass.push(this.datadb[1][index].name)
});
},
// scschoolschedules
async   schedule(){
    var msgin='teacher_get_classes_students'
            this.datamsg = msgin+"...";
            this.loading = true;
            try{
            await axios.post("/api/teacher/schedule" )
            .then((res) => {
            this.datadb = res.data.message;
            // swal.fire(`Done`)

const Toast = swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 2000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', swal.stopTimer)
    toast.addEventListener('mouseleave', swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'success',
  title: 'Signed in successfully'
})
              //             this.toast.success("success", {
              // timeout:               1000
              // });
            // console.log(res.data.message);
            this.datamsg = msgin+"...Done";
            this.loading = false;});
            } catch (e) {
            this.datamsg = msgin+"...error";
            console.log(e);
            alert(msgin+" ... error");}

// console.log(this.datadb[0][0].myteachers);.class_id
  var array=this.datadb[0];
this.myclass=[]
array.forEach(e => {
var index=this.datadb[1].findIndex(i => i.id == e.class_id)
// alert(index)
// console.log(index);
this.myclass.push(this.datadb[1][index].name)
});
},





  }
}
</script>
<style scoped>
/* *{outline:2px solid blue} */


.wrapper {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  /* grid-template-columns: repeat(4, 1fr); */
  grid-gap: 3px;
  /* grid-template-columns: 100px 100px  100px 100px; */
  /* grid-gap: 4px; */
  /* background-color: #fff; */
  /* color: #444; */
}

/* .box { */
  /* grid-area: item;  */
  /* background-color: #444; */
  /* color: #fff; */
  /* border-radius: 5px; */
  /* padding: 2px; */
  /* font-size: 150%; */
/* } */



/*
 display: grid;
grid: 
"item ..... item" auto/
1fr 1fr 1fr
;

}
.grid-item{
    grid-area: item; 
    */
</style>