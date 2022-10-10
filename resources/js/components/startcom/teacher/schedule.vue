<template>
  <div class="w-full mx-auto text-gray-900">
resources\js\components\startcom\teacher\schedule.vue
<div >
  <div>
lable+input


<!-- --------------tooltip---------------------------------- -->
    <div class="tooltip">
    Top
    <div class="top">
        <h3>Lorem Ipsum</h3>
        <ul>
            <li>Aliquam ac odio ut est</li>
            <li>Cras porttitor orci</li>
        </ul>
        <i></i>
    </div>
</div>
<!-- --------------tooltip---------------------------------- -->
    <div class="tooltip">
    Top
    <div class="top">
        <h3>Lorem Ipsum</h3> 
        <i></i>
    </div>
</div>
<!-- --------------tooltip---------------------------------- -->
<div class="tooltip">
    Right
    <div class="right">
        <img src="cssttp/tooltip-head.jpg" />
        <div class="text-content">
            <h3>Fade in Effect</h3>
            <ul>
                <li>This demo has fade in/out effect.</li>
                <li>It is using CSS opacity, visibility, and transition property to toggle the tooltip.</li>
                <li>Other demos are using display property<em>(none or block)</em> for the toggle.</li>
            </ul>
        </div>
        <i></i>
    </div>
</div>



















class=" bg-orange-500"
  </div>
  <p><input type="number" max="8" min="0" v-model="todaynum"></p>
<p>todaynum:{{todaynum}}</p>
<p 
:class="(todaynum==nu)?'bg-green-700 text-inherit':''"

v-for="nu in 8" :key="nu"
>{{nu}}uu</p>
<p>datetoday:{{datetoday}}</p>
<p><button @click="editmood=!editmood" :class="(editmood)?'bg-green-900':''">editmood
  <span v-if="editmood" class="text-xs  text-red-400">(auto save is on)</span>
  </button></p>
<p>
  <button @click="schedule()">schedule</button>
</p>
<h2>thisweek:{{thisweek}}</h2>
<details open>
  <summary class="text-lg cursor-pointer select-none bg-blue-600 text-white m-1 p-1">
schedule Table
  </summary>


<div>
  <table class='tbl1' v-if="uuu!=null">
    <thead>
      <tr>
        <th> {{trans('day')}}</th>
        <th v-for=" item  in 8" :key='item'>P{{item}}</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for=" itemday in 5" :key='itemday' >

        <td >{{trans(itemday)}}{{itemday}}</td>

        <td v-for=" itemperiod  in 8" :key='itemperiod'>

          <div v-if="uuu[itemday][itemperiod].class_id!='' && !editmood"
          :class="(datetoday==uuu[itemday][itemperiod].date)?'bg-red-600':''"
          
          >

    <!-- <button @click="$refs.attendancecomp.createattendance()">Click me</button> -->
    <!-- <child-component ref="myChild" /> -->

<!-- 
 dataToClassworkFun( class_id,class_name,period,date)

  -->
            <button class="relative m-1 p-1 hover:-rotate-12 hover:bg-blue-600 hover:text-white"
            @click="dataToClassworkFun(uuu[itemday][itemperiod].class_id,uuu[itemday][itemperiod].class_name,itemperiod,uuu[itemday][itemperiod].date)"
            >
            {{uuu[itemday][itemperiod].class_name}}
            </button>
            <details >
              <summary>

              </summary>
              <p class=" overflow-visible absolute text-yellow-200 bg-black">{{uuu[itemday][itemperiod]}}</p>

            </details>

          </div>
<!-- ({{uuu[itemday][itemperiod]}}) -->
          <div v-if="editmood">
            <!-- {{uuu[itemday][itemperiod].class_name}} -->
            <select 
            v-model="uuu[itemday][itemperiod].newclass_id"
            @change="scedite(itemday,itemperiod)" name="select"
            class=" bg-gray-200 text-black  hover:text-black" 
            >
              <option value=""></option>
              <option v-for="(itemc,index) in ctsclasses" :key='index+4444' :value="itemc.myclasses.id" >
                {{itemc.myclasses.name}}</option>
            </select>

          </div>

        </td>
      </tr>
    </tbody>
  </table>
</div>

</details>




<p> 
             <!-- <button @click="createattendance()" class="button-73">go attendance</button> -->
<input type="date" name="" id="" v-model="custumdate" @change="createattendance()">
</p>



<!-- <p>thisclass.id    :{{thisclass[0]}}</p> -->
<!-- <p>thisclass.id    :{{thisclass.id}}</p> -->
<!-- <p>thisclass.name  :{{thisclass[1]}}</p> -->
<!-- <p>thisclass.name  :{{thisclass.name}}</p> -->
<p>thisdate        :{{thisdate}}</p>
<p>thisperiod      :{{thisperiod}}</p>
<p>thissubject.id  :{{thissubject.id}}</p>
<p>thissubject.name:{{thissubject.name}}</p>
 




<select v-model="selected">
  <option v-for="option in options" :key="option.id" :value="option.id">
    {{ option.name}}
  </option>
</select>

















    <!-- <button @click="$refs.myChild.sayHello()">Click me</button>
    <child-component ref="myChild" /> -->

        <!-- <button @click="$refs.myChild.createattendance()">Click me</button>
    <child-component ref="myChild" /> -->
<!-- <classworkcomp  >classworkcomp err</classworkcomp> -->
<classworkcomp ref="myChild" :dataFromScedule='dataToClasswork' :classroom="thisclass"   :subject="thissubject" :date="thisdate" :period="thisperiod">classworkcomp err</classworkcomp>

<!-- <p class=" bg-yellow-500">{{datadb2}}</p> -->
</div>
</div>
</template>


<script>
import swal from 'sweetalert2'
import classworkcomp from './schedule/classwork.vue'
export default {
components:{classworkcomp},
    data() {
        return {
          selected: 2,
      options: [
        { name: 'book1', id: 1 },
        { name: 'book2', id: 2 },
        { name: 'book3', id: 3 }
      ],


          uuu:null,editmood:false,
          datetoday :'2022-8-16',
          todaynum:0,
          today:null,
          // datetoday :new Date().getFullYear()+'-'+(new Date().getMonth()+1)+'-'+new Date().getDate(),//2022-8-19
          datadb:[],
          datadb2:[],
          mystudents:[],
          // myindex:[0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25],
          datamsg:null,
          custumdate:null,
           myschedules:null,
           calenderthisweek:null,
           thisweek:null,
// thisclass:['',''],
dataToClasswork:'',
thisclass:{
            id:'',
          name:'',
          date:'',
          period:''
          },
thisdate    :null,
thisperiod  :null,
thissubject  :{id:'',name:''},
            class_students:null,
            class_students2s:null,



          ctsclasses:[],
          loading:false,
            lang:'en',
            tr:{
              'teacher_home':{ar:'الصفحة الرئيسية للمدرس',en:'Teacher home'},
              'usertype':{ar:'نوع المستخدم',en:'User type'},
              'teacher_home':{ar:'الصفحة الرئيسية للمدرس',en:'Teacher home'},
              'students':{ar:'التلاميذ',en:'students'},
              'day':{ar:'يوم'   ,en:'day'   },
              'd1':{ar:'الاحد'   ,en:'sunday'   },
              'd2':{ar:'الاثنين' ,en:'monday'   },
              'd3':{ar:'الثلاثاء',en:'Tuseday'  },
              'd4':{ar:'الاربعاء',en:'Wedensday'},
              'd5':{ar:'الخميس' ,en:'Tuseday'  },
              '1':{ar:'الاحد'   ,en:'sunday'   },
              '2':{ar:'الاثنين' ,en:'monday'   },
              '3':{ar:'الثلاثاء',en:'Tuseday'  },
              '4':{ar:'الاربعاء',en:'Wedensday'},
              '5':{ar:'الخميس' ,en:'Tuseday'  },
            }
        }


    },
    mounted(){
  this.lang=this.$store.state.user.lang
  this.schedule()
  this.todayfun()
    },


  methods:{


todayfun(){
var today = new Date();
// var dd = today.getDay()+1;
this.todaynum= today.getDay()+1;
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();

this.today = mm + '/' + dd + '/' + yyyy;
return mm + '/' + dd + '/' + yyyy;
},











    
    lll(){
// alert('rrrrr')
console.log('testttttttttttt');

    },
ppp(){
  this.$moshaToast('Hmm..not as easy huh')
// var CustomComponent=" <button class='h-12 w-full bg-blue-600 text-white rounded hover:bg-blue-700, type=,submit,>Click to create Term <i class=,fa fa-long-arrow-right, aria-hidden=,true,></i></button>"
// // this.$moshaToast(CustomComponent,
// this.$moshaToast(classworkcomp,
// {
// timeout: 1000,
// hideProgressBar: 'true',
// showIcon: 'true',
// position: 'top-right',
// type: 'danger',
// transition: 'zoom',
// })

 



this.$moshaToast({
title: 'Some text',
description: 'description'
},
{
timeout: 2000,
hideProgressBar: false,
// hideProgressBar: true,
showIcon: false,
// showIcon: true,
position: 'top-right',
// position: 'bottom-right',
// position: 'bottom-center',
// position	'top-left', 'top-right', 'bottom-left', 'bottom-right', 'top-center', 'bottom-center'
type: 'success',
// type: 'danger',
// type: 'warning',
// type: 'default',
transition: 'zoom',
// transition: 'bounce',
// transition: 'slide',

showCloseButton: false,
toastBackgroundColor:'#8A2BE2',
// toastBackgroundColor:'linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1)',
// toastBackgroundColor:'background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);',
// onClose	:this.lll()
})
this.lll()








},

trans(txt){
  try {

  if(this.tr[txt])return this.tr[txt][this.lang]
      return txt
        } catch (error) {
     console.log('error');
     console.log(error);
  }
      //  return this.$store.state.trlang.tr[txt][this.$store.state.user.lang]
},


// async   
dataToClassworkFun( class_id,class_name,period,date){
this.thisclass.id=class_id
this.thisclass.name=class_name
this.thisclass.date=date
this.thisclass.period=period
// alert(this.ctsclasses[0].subject_id)
this.dataToClasswork={
                        class_id           :class_id,
                        // class_name           :class_name,
                        student_id         :null,
                        teacher_id         :8,
                        school_id         :1,
                        
                        scschoolschedule_id:this.ctsclasses[0].id,
                        period             :period,
                        date               :date,
                        week               :this.thisweek,
                        subject_id         :this.ctsclasses[0].subject_id,
                        notes              :null,
                        mark               :5,
                        round               :null,
                        type               :'+',
                        }
  // alert("this.thisdate=="+date)
  // return
// this.thisclass[0]=class_id
// this.thisclass[1]=class_name
// this.thisdate    =date    
// this.thisperiod  =period  
// if (this.thisdate=='') {
// alert("this.thisdate=='':"+date)
// }
this.$refs.myChild.createattendance()


},


async   teacher_get_classes_students(){
    var msgin='teacher_get_classes_students'
            this.datamsg = msgin+"...";
            this.loading = true;
            try{
            await axios.post("/api/teacher/teacher_get_classes_students" )
            .then((res) => {
            this.class_students = res.data.message;
          console.log('teacher_get_classes_students this.class_students');
          console.log(this.class_students);
          // console.log(this.class_students.mystudents);
            // this.class_students;
// "mystudents": [ { "id": 93, "name": "Faisal_Saud_Althomali-", "email": "1159824893@schooleverything.com", "email_verified_at": null, "usertype": "student", "schoolgroup_id": "1", "school_id": 1, "class_id": 7, "nid": "1159824893", "nameen": "Faisal Saud Hamdun Jamaan Althomali-", "namear": "", "classname": "4A", "parent_id": null, "subjects": null, "lang": "en", "active": 1, "createdby": 8, "notes": null, "created_at": "2022-08-03T09:40:09.000000Z", "updated_at": "2022-08-03T09:40:09.000000Z" },



// SELECT * FROM `users` WHERE `usertype` LIKE 'student' AND `class_id` = 11
const Toast = swal.mixin({toast: true,position: 'top-end',showConfirmButton: false,timer: 2000,timerProgressBar: true,
  didOpen: (toast) => {toast.addEventListener('mouseenter', swal.stopTimer)
                       toast.addEventListener('mouseleave', swal.resumeTimer)}})
Toast.fire({icon: 'success',title: 'Signed in successfully'})

            this.datamsg = msgin+"...Done";
            this.loading = false;});
            } catch (e) {
            this.datamsg = msgin+"...error";
            console.log(e);
            alert(msgin+" ... error");}

},
// scschoolschedules



async   scheduleuuu(){
  console.log('1schedule');

             
            await axios.post("/api/teacher/schedule" )
            .then((res) => {
              console.log(res);
            });

          },


async   schedule(){
  console.log('1schedule');
  
    var msgin='schedule'
            this.datamsg = msgin+"...";
            this.loading = true;
            try{
            await axios.post("/api/teacher/schedule" )
            .then((res) => {
            this.myschedules = res.data.message.schedule;
            console.log('this.myschedules');
            console.log(this.myschedules);
            

    this.thissubject.id=this.myschedules[0].mycts.mysubjects.id;
    this.thissubject.name=this.myschedules[0].mycts.mysubjects.name;
console.log('this.thissubject_id');
console.log(this.thissubject.id);
console.log(res.data.message);




            this.ctsclasses = res.data.message.cts;
            this.calenderthisweek = res.data.message.calenderthisweek;
            this.thisweek = res.data.message.calenderthisweek[0]['week'];
            
// calenderthisweek-------------------------------------------
//             created_at: "2022-08-17T07:37:48.000000Z"
// date: "2022-08-21"
// day: 1
// id: 327
// notes: null
// school_id: 1
// term: 1
// updated_at: "2022-08-17T07:37:48.000000Z"
// week: 4
// work: 1
// year: "2022-2023"
            console.log('this.calenderthisweek');
            console.log(this.calenderthisweek);
            console.log('res.data.message.cts');
            console.log(res.data.message.cts);            
            // console.log('this.thisweek');
            // console.log(this.thisweek);
            // console.log('res.data.message.calenderthisweek');
            // console.log(res.data.message.calenderthisweek);
          this.datadb2= res.data.message

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
  title: 'schedule loaded successfully'
})

            this.datamsg = msgin+"...Done";
            this.loading = false;});

// ------filter-----------------

let uuu =[]
let uuuday =[]
for (let indexday = 0; indexday < 6; indexday++) {
  uuuday =[]

if ( this.calenderthisweek[indexday]) {
  var daydate=this.calenderthisweek[indexday]['date']
  // console.log('daydate');
  // console.log(daydate);
}else{
  var daydate=""
  //   console.log('err daydate');
  // console.log(daydate);
}

    for (let indexperiod = 0; indexperiod < 15; indexperiod++) {
    uuuday.push({
    myschedule_id   :'',
    stc_id   :'',
    class_name  :'',
    class_id    :'',
    newclass_id :'',
    day   :indexday,
    period:indexperiod,
    date:daydate
    // date:kkk['date']
    // calenderthisweek:this.calenderthisweek[indexday].date
      })
    }

uuu.push(uuuday)
// console.log('uuu');
// console.log(uuu);
}

this.myschedules.forEach( function (element, i)  {

// this.myschedules.forEach( element => {
try {

  uuu[element.day][element.period].myschedule_id  =element.id                            
  uuu[element.day][element.period].stc_id=element.scschoolclassteachersubject_id
  uuu[element.day][element.period].class_name =element.mycts.myclasses.name          
  uuu[element.day][element.period].class_id   =element.mycts.myclasses.id            
  uuu[element.day][element.period].newclass_id=element.mycts.myclasses.id            





  // uuu[element.day][element.period]={
  //   myschedule_id   :element.id,
  //   stc_id :element.scschoolclassteachersubject_id,
  //   name  :element.mycts.myclasses.name,
  //   id    :element.mycts.myclasses.id,
  //   newid :element.mycts.myclasses.id,
  //   day   :element.day,
  //   period:element.period,
    

  //   }
  
} catch (error) {
  console.log(error)
}
});


this.uuu=uuu
// ------filter-----------------



            } catch (e) {
            this.datamsg = msgin+"...error----";
            console.log(e);
            alert(msgin+" ... error-----");}


},



async scedite(itemday,itemperiod){


if (this.uuu[itemday][itemperiod].class_id==this.uuu[itemday][itemperiod].newclass_id ) {
alert('no change')
  return
}


try{
 await axios.post('/api/teacher/scheduleupdate',this.uuu[itemday][itemperiod])
.then((res) => {
  console.log('scedite');
  console.log(this.uuu[itemday][itemperiod]);
  
  console.log(res.data);
    this.schedule()

});
} catch (e) {
  console.log(e);

}

},








  }
}
</script>
<style scoped>

</style>