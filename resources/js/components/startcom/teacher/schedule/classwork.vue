<template>
  <div class="w-full mx-auto text-gray-900">
======================resources\js\components\startcom\teacher\schedule\classwork.vue + attendance============= <br>
<!-- <p>==class_id:{{classroom}}</p> -->
<!-- <p>==class_id:{{classroom.id}}</p> -->
<!-- <p>==class_name:{{classroom.name}}</p> -->
<p>==date    :{{date}}</p>
<p>==period  :{{period}}</p>
<p>==subject  :{{subject}}</p>
<!-- 'subject_id':this.subject, -->
         <!-- <p>   <button @click="getclass_students(classroom.id)" class="button">load class</button></p> -->
         <p>   <button @click="createattendance()" class="button">Take Attendance</button></p>

           <div v-if="class_students">
           <div v-if="class_students[0]">
           <div v-if="class_students[0].myschool">


          <p>myschool:{{class_students[0].myschool.name}}</p>
          <p>myteacher:{{class_students[0].myteacher.name}}</p>
          <p>myclass:{{class_students[0].myclass.name}}</p>
          <p>myschool:{{class_students[0].myschool.name}}</p>
           
            <button 
          :class="(can_change_attendence)?'text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-green-500 text-white rounded-full':''"
          class="button-73" @click="can_change_attendence=!can_change_attendence">
          Attendence
          </button>


<div class="flex flex-wrap">
            <button 
          :class="(can_change_attendence)?'text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-green-500 text-white rounded-full':''"
          class="button-73" @click="showstudents=2">
          All
          </button>



                      <button 
          :class="(can_change_attendence)?'text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-green-500 text-white rounded-full':''"
          class="button-73" @click="showstudents=1">

          present
          </button>


                      <button 
          :class="(can_change_attendence)?'text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-green-500 text-white rounded-full':''"
          class="button-73" @click="showstudents=0">
          Absent
          </button>

{{showstudentscom}}
</div>


          <br>
                      <button 
          :class="(hide_participation)?'text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-green-500 text-white rounded-full':''"
          class="button-73" @click="hide_participation=!hide_participation">
          Participation
          </button>

           <table class='tbl3 glass2'>
               <thead>
                   <tr>
                       <th>N</th>
                       <th v-show="can_change_attendence">attendance</th>
                       <th>name</th>
                       <!-- <th>datetime</th>
                       <th>attendence_status</th> -->
                       <!-- <th  v-show="hide_participation">participation</th> -->
                       <th>notes</th>
                   </tr>
               </thead>
               <tbody>
                <!-- class_students_filtered -->
                   <tr v-for="(class_student,index) in class_students_filtered" :key='class_student.id'>
                   <!-- <tr v-for="(class_student,index) in class_students" :key='class_student.id'> -->
<td>
    <span class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-blue-400 text-white rounded-full">
  {{index+1}}</span>
  </td>
<!--                        
<td><span 
       :class="(class_student.attendence_status)?'text-xs inline-block py-1 px-1.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-green-500 text-white rounded-full':'text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded-full'"
        >{{(class_student.attendence_status)?'Attendee':'Absent'}}</span></td> -->




<td v-show="can_change_attendence">
  <div class="form-check form-switch mb-4">
      <input type="checkbox" :disabled="(can_change_attendence)?false:true"
      @change="saveattendance(class_student.mystudent.id)"
      v-model="class_students[index].attendence_status"
      class="form-check-input appearance-none w-12 -ml-10 rounded-full float-left h-5 align-top bg-white bg-no-repeat bg-contain bg-gray-300 focus:outline-none cursor-pointer shadow-sm"  role="switch" >
  </div>
</td>

                       <td >
                        <div  class="flex flex-wrap">
<span class="text-xl"
:class="(!class_student.attendence_status)?'text-gray-400':'text-blue-900'"
>
                        {{class_student.mystudent.name}}

</span>
                        
                          <span :class="(class_student.attendence_status)?'text-xs inline-block py-1 px-1.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-green-500 text-white rounded-full':'text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded-full'"
                                  >{{(class_student.attendence_status)?'Attendee':'Absent'}}
                          </span>


                       <!-- </td> -->
                       <!-- <td>{{class_student.datetime}}</td> -->


<!-- <td v-show="hide_participation && class_students[index].attendence_status"> -->
<!-- <td v-show="hide_participation && class_students[index].attendence_status"> -->
<!-- <td v-show="hide_participation && !lass_students[index].attendence_status"> -->
  <!-- <participation v-show="class_students[index].attendence_status===true" -->
  <!-- <participation v-show="hide_participation && class_students[index].attendence_status" -->
 <div
  v-show="hide_participation && class_students[index].attendence_status" 
 
 >

  <participation  
:dataFromSceduleInClasswork='dataFromScedule' 
:student_id="class_student.mystudent.id"
>
participation err
</participation>
 </div>
</div>
</td>
 
                       <td>
                        typeof:{{typeof class_students[index].attendence_status}}
                        <p>
                     status:   {{class_students[index].attendence_status}}
                        </p>

                        <input type="text"  
                        class="text-black"
                         @change="saveattendance(class_student.mystudent.id)"
                         v-model="class_student.notes"
                         >
                        <!-- {{class_student.notes}} -->
                        </td>
                   </tr>
               </tbody>
           </table>
<p>-----------------absent list----------------------------------------------------------------</p>
<!-- <p>absentlist:{{absentlist}}</p> -->
           <table class='tbl3'>
               <thead>
                   <tr>
                       <th>N</th>
                       <th>name</th>
 

                   </tr>
               </thead>
               <tbody>
                   <tr v-for="(item,index) in absentlist" :key='index'>
                       <td>{{index+1}}</td>
                       <td>{{item.mystudent.name}}</td>

                   </tr>
               </tbody>
           </table>
 





 










                     </div>
           </div>
           </div>


 


</div>
</template>

<script>
import participation  from './participation'
export default {

props: ['classroom','date','period','subject','dataFromScedule'],
components:{participation},
    data() {
        return {
          datatoparticipation:{

class_id           :1,
student_id         :2,
teacher_id         :3,
scschoolschedule_id:4,
period             :5,
date               :6,
week               :7,
subject_id         :8,
notes              :9,
mark               :10,
type               :11,

          },
          uuu:null,editmood:false,can_change_attendence:false,hide_participation:false,showstudents:2,
          datetoday :new Date().getFullYear()+'-'+(new Date().getMonth()+1)+'-'+new Date().getDate(),
class_students:[],
          mystudents:[],
          attend:[],
absentlist:[],
class_students_filtered:[],
          ctsclasses:[],
          loading:false,
            lang:'en',
            tr:{
              'Unauthenticated':{ar:'   ',en:'Unauthenticated'},
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
computed:{
  showstudentscom(){
    if (this.showstudents==0) { this.class_students_filtered=this.class_students.filter((el) => el.attendence_status==0 || el.attendence_status==false ) ;}
if (this.showstudents==1) { this.class_students_filtered=this.class_students.filter((el) => el.attendence_status==1 || el.attendence_status==true ) ;}
if (this.showstudents==2) { this.class_students_filtered=this.class_students;}
return this.showstudents //this.class_students
  },

can_change_attendencecom(){
 setTimeout(() => this.can_change_attendence = false, 30000);
  return this.can_change_attendence

}

},
//  watch:{
//    classroom_id(newValue, oldValue){
//      console.log('newValue');
//      console.log(newValue);
//      console.log('oldValue');
//      console.log(oldValue);
//      console.log('this.classroom');
//      console.log(this.classroom);
// // this.getclass_students(this.classroom[0])
// this.getclass_students(this.classroom.id)
//      if (isNaN(newValue)){
//        alert("Enter valid mobile number");
//        this.mobile=oldvalue;
//      }
//      if (newValue.length == 11){
//        alert("An OTP has been sent");
//      }
//    },

//    },


    mounted(){
  this.lang=this.$store.state.user.lang

    },

  methods:{



trans(txt){
  try {if(this.tr[txt])return this.tr[txt][this.lang]
        return txt} catch (error) {console.log(error);}
},

async   createattendance(){

  var data={
// 'class_id':this.classroom[0],
'class_id':this.classroom.id,
// 'date':this.date,
// 'period':this.period,
'date':this.classroom.date,
'period':this.classroom.period,

// 'class_id':this.classroom[0],
'class_id':this.classroom.id,
'subject_id':this.subject.id,

  }
console.log("data");
console.log(data);

            try{
            await axios.post("/api/teacher/createattendance" ,data)
            .then((res) => {
              this.class_students=res.data.data;
            console.log(res.data.data);
            console.log(res.data);


this.class_students.forEach(element => {
  if (element.attendence_status==0) {
    element.attendence_status=false
  } else {
    element.attendence_status=true
  }

});


            // this.class_students = res.data.data;
            
            });} catch (e) {console.log(e);}



    try{
 this.absentlist= this.class_students.filter((el) => el.attendence_status==0 || el.attendence_status==false ) ;
        } catch (error) {console.log(error);}

},
async   saveattendance(id){
//  var array= this.class_students.filter((el) => el.toLowerCase().includes(query.toLowerCase()));
 var data= this.class_students.filter((el) => el.mystudent.id==id ) ;

// console.log(data);
// return
            try{
            await axios.post("/api/teacher/saveattendance" ,{'data':data})
            .then((res) => {
              // this.class_students=res.data.data;
            console.log(res.data.data);
            console.log(res.data);


this.class_students.forEach(element => {
  if (element.attendence_status==0) {
    element.attendence_status=false
  } else {
    element.attendence_status=true
  }

});



            // this.class_students = res.data.data;

            });} catch (error) {
              if (error.response.status==500) { alert('Internal Server Errors')}
              if (error.response.status==401) { alert('Unauthenticated')}
              if (error.response.status==419) { alert('CSRF token mismatch.')}


              //
// console.log(e);
// console.log(e.message);
// console.log(e.status);
if (error.response) {
      console.log('error.response.data');
      console.log(error.response.data);
      console.log(error.response.data.message);
      console.log('error.response.status');
      console.log(error.response.status);
      console.log('error.response.headers');
      console.log(error.response.headers);
    }


      console.log(error.response.data.message);
      Unauthenticated.
      console.log('error.response.status');
      console.log(error.response.status);
// 401

// error.response.status
// 500
// Internal Server Error
// No connection
// 500
// SERVER ERROR
              // if (e.state) {
// {message: 'CSRF token mismatch.'}
//               // }
// error.response.status
// 419
              console.log(e);}

              // alert(1)
    try{
 this.absentlist= this.class_students.filter((el) => el.attendence_status==0 || el.attendence_status==false ) ;
        } catch (error) {console.log(error);}

},
  }
}
</script>
<style scoped>

</style>