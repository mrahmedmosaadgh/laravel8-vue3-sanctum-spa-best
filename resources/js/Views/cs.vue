<template>
  <div class="m-2 p-2  bg-green-200 ">   <!-- loadingw-screen  overflow-auto--><div class="flex top-0 text-center"><div class="m-auto"><p v-show="loading"   class=" fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-50  text-sm font-medium     bg-green-100     text-blue-700 focus:z-10    inline-flex items-center"><svg role="status" class="inline w-4 h-4 mr-2 text-gray-200 animate-spin dark:text-gray-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/> <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="#1C64F2"/>  </svg>  Loading...{{errorsmsg}}</p> </div></div>






<!-- =============================w-screen absolute left-0======= -->
 


<!-- ==================================== -->

















 
 

<!-- {{uploadfilereturndata.name}} -->

 



<!-- ================fixed top-0 left-10===============================:class="vtable==true?'visible':'invisible'" -->
<div 

class=" bg-blue-200  animate__animated  animate__animated_hover   animate__flipInX_hover  animate__flipInX"
v-if="vtable"

>


<button class="m-1 p-1"
v-for="(daynn,daynnx) in 5" :key="daynnx"
      @click="setdayfun(daynn,tablearray[daynn][0].date)"
      
      
        :class="daynn==setdaynum?'bg-blue-600 textshadow2 text-white   border-2 border-blue-700':'bg-gray-300 text-gray-500 hover:bg-blue-400'"
        
        >day {{daynn}}  
          <!-- <input type="radio" name="day" :value='daynn' v-model="setdaynum" :id="daynn">   -->
            <!-- {{Array.isArray([1])   }} -->

<!-- {{Array.isArray(  tablearray[daynn])  }} -->
</button>
<!-- ============================================= -->

Day :{{setdaynum}}
date:{{date}}
<!-- <p>
  checkedNames{{checkedNames}}
</p>
<p>
  students_id_array{{students_id_array}}
</p> -->
<!-- <p>tablearray{{tablearray}}</p> -->
<!-- ============================================= v-if="tablearray[setdaynum][0]"-->
<div >
<!-- <p>tablearray[setdaynum][0]:{{tablearray[setdaynum][0]}}</p> -->

<table v-if="date" class="  animate__animated     animate__flipInX">
<tr>
  <td v-for="(per,indexe) in 8" :key="indexe"
  
  :class="per==period?'  bg-blue-600 textshadow2 text-white':' bg-green-200  text-gray-600'"
  >
    <label 
          :for="'perdata'+setdaynum+per"
          class="  inline-block cursor-pointer w-full h-full"
         
          v-if="tablearray[setdaynum][0].sorder.split(',')[per] && tablearray[setdaynum][0].sorder.split(',')[per]!='-'"
          > <!-- :class="per==period?'bg-green-200':'bg-green-500'" -->
<!-- {{tablearray[setdaynum].class_name.split(",")[indexe]   }} :class="tablearray[setdaynum][0].sorder.split(',')[indexe]=='-'?'bg-red-400':''" -->
<span 

 

>
{{tablearray[setdaynum][0].class_name.split(",")[per]    }}
</span>



<small
:class="per==period?'text-yellow-200':' text-blue-600'"

>{{  tablearray[setdaynum][0].sorder.split(",")[per]    }}</small>
           <input type="radio"  
           :name="'periodd'+setdaynum" 
           :value='per' 
           hidden
           v-model="period" 
           :id="'perdata'+setdaynum+per"
          @change="loadclass(tablearray[setdaynum][0].class_name.split(',')[per],per,tablearray[setdaynum][0].date)"
           
           
           >  


 
</label>
 


<!-- <p>{{tablearray[setdaynum][0].start}}</p> -->
<!-- <p>{{teachermaindataget.Periodtime[period].start }}</p> -->
  </td>
</tr>
<tr>
  <td>
    
  </td>
</tr>
</table>
</div>

                        <p v-if="loadclass_done">
<button class="button-33" @click="resetnew_fun_all">reset New stars</button>

                          <button  class="button-33" @click="attend_all()">attend all</button>
                          <button  class="buttonred-33" @click="attend_none()">attend none</button>          
                        
  <!-- ]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]] -->
    
<input type="checkbox" style="width:55px;height:55px" :value="canregattend" v-model="canregattend">canregattend

 <input type="checkbox" style="width:25px;height:25px" :value="canminus" v-model="canminus">canminus
<input type="checkbox" style="width:25px;height:25px" :value="canquizmark" v-model="canquizmark">canquizmark
</p>

<!-- canregattend{{canregattend}} -->

   </div>
   <p>
   vtable<input type="checkbox" style="width:25px;height:25px" :value="vtable" v-model="vtable"> 
   </p> 
        <button class="button-33" v-show="canquizmark" @click="saveparticipations">save marks</button>




<div>
<!-- <p>weeknum:{{weeknum}}</p>
<p>setdaynum:{{setdaynum}}</p>
<p>period:{{period}}</p>
<p>date:{{date}}</p> -->
<!-- <p>date:{{teachermaindataget.datesforweek[0]}}</p>
<p>marks_arrayob{{marks_arrayob}}</p> -->
<!-- <p>absence_array:{{absence_array}}</p> -->
<!-- <input type="text" v-model="teachermaindataget.datesforweek[0].day"> -->
<!-- <p>date:{{date}}</p>

<p>date:{{date}}</p> -->

</div>











<!-- ==================================================== -->
    <div class="main-container">
 
  <div class="cardnews">
    <div 
    
              v-for="(student, index) in marks_arrayob"
    :class="checkedNames.includes(student.student_id)?'cardnew cardnew-1':'cardnew cardnew-absent'"   
          :key="index"
    >
      <!-- <div class="cardnew__icon"><i class="fas fa-bolt"></i></div>
      <p class="cardnew__exit"><i class="fas fa-times"></i></p> -->
      <span class="cardnew__title  ">
         
              <!-- ============================================================== -->


                <span  class="text-3xl   capitalize truncate" :class="checkedNames.includes(student.student_id)?'txtanm1 bg-purple-800 rounded-sm':''"
               >{{ student.name.split(" ")[0] }}</span>
                 <span> {{ student.name.split(" ")[1] }} </span>
                    <span class="text-3xs text-black">{{ student.name.split(" ").slice(-1).join(" ") }} </span>  
                  
                
               
                  
               
<!-- ============================================================== @change="updatemarkquiz1(index,student.quiz1)"-->
        
        
        </span>

<div v-show="canquizmark" class="flex">
   
      <select   class=" w-12 h-8 border-gray-600 "  v-model="student.quiz1"
      
      :class="student.quiz1>12?'bg-green-400':'bg-red-200'"
      >
        <option value=""></option>
        <option value="A">A</option>
        <option value="0">0</option>
      <option v-for="mark in 15" :key="mark">{{mark}}</option>
      </select>
      <select   class=" w-12 h-8 border-gray-600 "  v-model="student.quiz2">
                <option value=""></option>
        <option value="A">A</option>
        <option value="0">0</option>
      <option v-for="mark in 15" :key="mark">{{mark}}</option>
      </select>
      <select   class=" w-12 h-8 border-gray-600 "  v-model="student.project">
                <option value=""></option>
        <option value="A">A</option>
        <option value="0">0</option>
      <option v-for="mark in 20" :key="mark">{{mark}}</option>
      </select>
     











                        <form @submit="formSubmit" enctype="multipart/form-data">
                        <input type="file" class="form-control" v-on:change="onFileChange" hidden accept=".png, .jpg, .jpeg" :id="'avatar'+index">
                       <select name="catogry"  >
<option value="quiz1">quiz1</option>
<option value="quiz2">quiz2</option>
<option value="project">project</option>
<option value="more">more</option>

                       </select>
                       
                       
                        <button class="btn btn-success">Submit</button>
                        <label :for="'avatar'+index">open</label>
                        </form>
                      



{{index}}




       <button @click="document.getElementById(index).click()">save</button>
     </div> 
     <div v-show="!canregattend">
       
      
         <div
        v-show="checkedNames.includes(student.student_id)"
        >

       
        <!-- ========================================== -->
                      <div class="m-0 p-0 flex flex-row flex-wrap bg-blue-500 w-full ">
                <span 
                v-show="student.plusnew>0"
                class=" rounded-full bg-red-500 h-6 p-1 text-white">
{{ student.plusnew }}
                </span>
                <span v-show="student.score>0"
                  class="flex"
               >
                    <span  class=" rounded-full bg-blue-900   text-white flex"> 

                    
                    <!-- </span>
                    <span  style="top:-22px;" > -->
                    <!-- <img src="star.gif" style="width: 44px" alt=""  @click="plus_fun(index)"/> -->







<svg class="w-5 h-5 m-0 p-0" viewBox="0 0 264 260" fill="none" xmlns="http://www.w3.org/2000/svg">
  
  <defs>
    <clipPath id="star-face">
      <path d="M132.491 0.0131836L172.856 80.0907L263.772 93.311L198.509 156.391L214.73 247.045L132.491 203.984L50.2512 247.045L66.4728 156.391L0.832031 93.311L91.7482 80.0907L132.491 0.0131836Z"/>
    </clipPath>
  </defs>
  <path d="M263.772 93.311L256.982 113.708L195.114 173.766L198.509 156.391L263.772 93.311Z" fill="#DCB857"/>
  <path d="M66.4727 156.391L69.8679 173.766L7.62243 113.708L0.832031 93.311L66.4727 156.391Z" fill="#CDAC52"/>
  <path d="M214.73 247.045L210.58 259.887L132.49 219.093V203.984L214.73 247.045Z" fill="#CDAC52"/>
  <path d="M132.491 203.984V219.093L54.4012 259.887L50.2515 247.045L132.491 203.984Z" fill="#DCB857"/>
  <path class="star--shimmer" d="M132.491 0.0131836L172.856 80.0907L263.772 93.311L198.509 156.391L214.73 247.045L132.491 203.984L50.2512 247.045L66.4728 156.391L0.832031 93.311L91.7482 80.0907L132.491 0.0131836Z" fill="#F8D062"/>
  <g clip-path="url(#star-face)">
    <g class="star--1 star--shine">
      <path transform="translate(-30, -150)" d="M11.7361 117.996L342.579 3.78997L361.831 59.5607L30.9879 173.766L11.7361 117.996Z" fill="white"/>
      <path transform="translate(-30, -150)" d="M5.06783 82.4489L335.911 -31.7567L342.579 -12.4394L11.7361 101.766L5.06783 82.4489Z" fill="white"/>
    </g>
  </g>
</svg>






















                    </span>


                      <span class="   bg-green-900 h-6 p-1 text-white">
score {{ student.score }}
                      </span>

                   <!-- class=" p-0 m-0 float-right txtanm1" -->
                      
                    </span>

              
           <span v-show="student.score>4" class="p-0 m-0"   style="top:-22px;" >
                          <img class="  float-right" src="medal2.gif" style="width: 44px" alt="" />
           </span>
                        <span v-show="student.score>9"  class="p-0 m-0">
                          <img class="  float-right" src="medal2.gif" style="width: 44px" alt="" />
           </span >   
                        <span v-show="student.score>19"  class="p-0 m-0">
                          <img class="  float-right" src="medal2.gif" style="width: 44px" alt="" />
           </span>
           
                <!-- <div v-for="ee in student.score" :key="ee">
                  <img src="star.gif" style="width: 33px" alt="" />
                </div> -->

                              <div v-show="!canregattend">
                    <button @click="plus_fun(index)">+ </button>
                     <div v-show="canminus">
                     <button    class=" buttonred-33" @click="minus_fun(index)" >- </button>
                      <button    @click="reset_fun(index)" > reset</button>
                   </div>
                    </div>

              </div> 
              
              
              
              
              
              
              
              
              <!-- ========================================== -->
              
              
              

                   
                     
                   
                      
                   
                    
                      
                     
                   
                     
                     

               <!-- ========================================== -->             
              
              
              
              
              
              
              </div> </div>   
        <!-- =============================================== -->

                    <input
                      type="checkbox"
                      v-if="canregattend"
                      class="w-6 h-6 cursor-pointer"
                      :value="student.student_id"
                      v-model="checkedNames"
                      @change="saveabsence()"
                    />
        <!-- =============================================== -->



        <!-- =============================================== -->

      <!-- <p class="cardnew__apply">
        <a class="cardnew__link" href="#">Apply Now <i class="fas fa-arrow-right"></i></a>
      </p> -->
    </div>
     
    </div>
  </div>



 
      <!-- ]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]] -->

 <div v-show="vtable">



  {{counter}}  
 
  
  students_id_array  {{students_id_array  }}
 <p><button @click="loadparticipations()">loadparticipations()</button></p>
 
  <input type="text"
  :value="textapi"
  >
  <button @click="history=''">clear history</button>
<div class="bg-red-200" v-html="history">
 

</div>
 </div>
          <!-- <notification ref="success">
            {{ $t('password_updated') }}
          </notification> -->

<!-- <circle-progress :percent="40" /> -->

  </div>
</template>

<script>
import axios from "axios";
// import 'animate.css';
// import Button from '../components/Button.vue';
// import CircleProgress from "vue3-circle-progress";
// import Notification from '../components/Notification'
// import Notification from '../components/Notification'

export default {
  // components: { CircleProgress },
    // components: { Notification },
  middleware: 'auth',

  metaInfo () {
    return { title: this.$t('class system') }
  },

  data()  {
    return{
      loadparticipationsdata: "",
teachermaindataget:'',
loading:false,
errorsmsg:'',
count1:1,
setdaynum:1,
weeknum:1,
datesarray:[,,,,,,,,,,,],
tablearray:[{
             'day'       : 0,
             'period'    :',,,,,,,,',
             'class_name': 0,
             'sorder'    : ',,,,,,,,',
             'date'      : 0,
             'start'      : 0,
             'end'      : 0,
         }],
period:'',
daynumber:'',
teacherdata:'',
date:'',
abs_db:'',
textapi:'',
history:'',
absence_db:'',
counter:0,
starsnum:1,
      marks_arrayob: [],
      students_id_array: [],
      checkedNames: [],
   canregattend: true,
 absence_array:[],
canregattend: true,
canminus: false,
canquizmark: false,
vtable: true,
              name: '',
              file: '',
              success: '',
filename: '',
// file: '',
// success: '',
  selectedFile: null,
  progvalue: 1,
    uploadfilereturndata: [{'name':''}],
loadclass_done:false,












}  },
 watch: {




    //    absence_array: function () {
    //   // this.loadstudents();
    //   // this.loadclass();
    //   this.loadparticipations();
    //   // this.cansave = true;
    // },

    // counter: function () {
    //   this.saveparticipations();
    // },

    // checkedNames: function () {
    //   this.saveabsence();
    // },

    setdaynum: function () {
      this.period='';
    },


 },
 computed: {
    // countercom: function () {
    //   return  this.counter += 1 ;
    //   // return this.products.filter(product => product.onSale)
    // },
    absent_arry_com: function () {
      // let arr1=[1,2,3,4,5];
      // let arr2=[1,2];
      let arr1 = this.students_id_array;
      let arr2 = this.checkedNames;
      let difference = arr1.filter((x) => !arr2.includes(x));
      return difference;
    
    },
    
    
    },
     mounted()  {

        this.loadteachermaindataarray   ();

            },    
  methods:{
        playSound(sound) {
          // this.history= this.history+'<br/>'+'plus_fun(index)';
      if (sound) {
        var audio = new Audio(sound);
        audio.play();
      }
    },
        plus_fun(index) {
          this.history= this.history+'<br/>'+'plus_fun(index)';
      // this.$iosConfirm( "Are you sure! Add"+ this.starsnum +" stars");
// this.loadparticipations();,date

      if (!confirm("Are you sure! Add" + this.starsnum + " stars")) {
        return;
      }
      this.marks_arrayob[index].plus += this.starsnum;
      this.marks_arrayob[index].plusnew += this.starsnum;
      this.marks_arrayob[index].score =
        this.marks_arrayob[index].plus - this.marks_arrayob[index].minus;
      this.playSound("p.ogg");
      // this.counter += 1;
      this.marks_arrayob[index].participatedetails =
        this.marks_arrayob[index].participatedetails + "||+" + this.starsnum;
   
   
   this.saveparticipations();
   
   },

        updatemarkquiz1(index,mark) {
          this.history= this.history+'<br/>'+'updatemark(index)';
      if (!confirm("Are you sure! updatemark")) {
        return;
      }
      this.marks_arrayob[index].quiz1 = mark;
    },

    

    plus_fun_all() {
      if (
        !confirm(
          "Are you sure! Add" + this.starsnum + " stars foe All the class"
        )
      ) {
        return;
      }
      for (let index = 0; index < this.marks_arrayob.length; index++) {
        // const element = array[index];
        if (this.checkedNames.includes(this.marks_arrayob[index].student_id)) {
          this.marks_arrayob[index].plus += this.starsnum;
          this.marks_arrayob[index].plusnew += this.starsnum;
          this.marks_arrayob[index].score =
            this.marks_arrayob[index].plus - this.marks_arrayob[index].minus;
          this.marks_arrayob[index].participatedetails =
            this.marks_arrayob[index].participatedetails +
            "||+" +
            this.starsnum;
        }
      }

      this.playSound("p.ogg");
      // this.counter += 1;
 this.saveparticipations();

      
    },

    minus_fun(index) {
      if (!confirm("Are you sure! Minus" + this.starsnum + " stars")) {
        return;
      }
      this.marks_arrayob[index].minus += this.starsnum;
      this.marks_arrayob[index].score =
        this.marks_arrayob[index].plus - this.marks_arrayob[index].minus;
      this.playSound("m.ogg");
      // this.counter += 1;
 this.saveparticipations();

      // let total=this.students_array[index][5]-this.students_array[index][6]
      // if ( total>0) {
      //                this.students_array[index][6] += this.starsnum;
      //             this.students_array[index][7]         =this.students_array[index][5]-this.students_array[index][6];
      // }
      this.marks_arrayob[index].participatedetails =
        this.marks_arrayob[index].participatedetails + "||-" + this.starsnum;
      this.$iosAlert("sorry you have less stars");
    },





    minus_fun_all() {
      if (
        !confirm(
          "Are you sure! minus" + this.starsnum + " stars foe All the class"
        )
      ) {
        return;
      }
      for (let index = 0; index < this.marks_arrayob.length; index++) {
        // const element = array[index];
        if (this.checkedNames.includes(this.marks_arrayob[index].student_id)) {
          this.marks_arrayob[index].minus += this.starsnum;
          this.marks_arrayob[index].score =
            this.marks_arrayob[index].plus - this.marks_arrayob[index].minus;
          this.marks_arrayob[index].participatedetails =
            this.marks_arrayob[index].participatedetails +
            "||-" +
            this.starsnum;
        }
      }

      this.playSound("m.ogg");
 this.saveparticipations();
      // this.counter += 1;
    },

    reset_fun(index) {
      // this.counter += 1;
      if (!confirm("Are you sure! reset")) {
        return;
      }
      this.marks_arrayob[index].score = 0;
      this.marks_arrayob[index].plus = 0;
      this.marks_arrayob[index].plusnew = 0;
      this.marks_arrayob[index].minus = 0;
      this.marks_arrayob[index].participatedetails = "";
      this.playSound("m.ogg");
 this.saveparticipations();

    },
    resetnew_fun_all() {
      this.counter += 1;
      //  if(!confirm("Are you sure! reset")){return} ;

      if (
        !confirm(
          "Are you sure! reset" + this.starsnum + " stars new for All the class"
        )
      ) {
        return;
      }
      for (let index = 0; index < this.marks_arrayob.length; index++) {
        // const element = array[index];


 this.marks_arrayob[index].plusnew = 0;

        // if (this.checkedNames.includes(this.marks_arrayob[index].student_id)) {
           
        //   this.marks_arrayob[index].plusnew = 0;
          
           
        // }
      }

      this.playSound("m.ogg");
 this.saveparticipations();

    },
    reset_fun_all() {
      // this.counter += 1;
      //  if(!confirm("Are you sure! reset")){return} ;

      if (
        !confirm(
          "Are you sure! reset" + this.starsnum + " stars foe All the class"
        )
      ) {
        return;
      }
      for (let index = 0; index < this.marks_arrayob.length; index++) {
        // const element = array[index];
        if (this.checkedNames.includes(this.marks_arrayob[index].student_id)) {
          this.marks_arrayob[index].score = 0;
          this.marks_arrayob[index].plus = 0;
          this.marks_arrayob[index].minus = 0;
          this.marks_arrayob[index].participatedetails = "";
        }
      }

      this.playSound("m.ogg");
 this.saveparticipations();

    },



















// =================================================
setdayfun(daynn,date) {
this.setdaynum=daynn;
this.date=date;

},

    async saveparticipations() {
      // alert('saveparticipations');
      // console.log("this.marks_arrayob");
      // console.log(this.marks_arrayob);
      this.history= this.history+'<br/>'+'saveparticipations()';
      // if (this.cansave != true) {
      //   return;
      // }


      //  return;
      if (!this.absence_array) {
        alert('!this.absence_array');
        return;
      }
 
      this.loading = true;
      try {

        // this.linkapi =
        //   "/api/saveparticipations/" +
        //   JSON.stringify(this.marks_arrayob) +
        //   "/" +
        //   JSON.stringify(this.absence_array);
        console.log("/api/saveparticipations/" +
              JSON.stringify(this.marks_arrayob) +
              "/" +
              JSON.stringify(this.absence_array));

        await axios
          .get(
            "/api/saveparticipations/" +
              JSON.stringify(this.marks_arrayob) +
              "/" +
              JSON.stringify(this.absence_array)
          )
          .then((res) => {

            this.saveparticipations_returneddata = res.data;
            this.loading = false;

          });
      } catch (e) {
console.log(e.response.status);

        console.log('saveparticipations error');
        console.log(e);
        this.errorsmsg = "data error";
        alert("saveparticipations data error");
        alert(e.response.status);
      }
    },

    async Newparticipations() {
      this.history= this.history+'<br/>'+'Newparticipations()';
      
      if (!confirm("Are you sure! Add" + this.starsnum + " stars")) {
        return;
      }

      this.loading = true;
      try {

        //  this.linkapi="/api/loadparticipations/"+ JSON.stringify(this.marks_arrayob)+"/"+ JSON.stringify(this.absence_array)
        this.linkapi =
          "/api/Newparticipations/" + JSON.stringify(this.absence_array);
        await axios
          .get("/api/Newparticipations/" + JSON.stringify(this.absence_array))
          .then((res) => {
            //  this.loadparticipationsdata = res.data;
            this.loading = false;
            // if(this.loadparticipationsdata.length>1){

            //   this.marks_arrayob = this.loadparticipationsdata;
            // }
      this.history= this.history+ ' Newparticipations() and this.loadparticipations();';

            this.loadparticipations();
          });
      } catch (e) {
        this.errorsmsg = "data error";
        alert("Newparticipations data error");
        alert(e.response.status);

      }
    },
attend_all(){
        if (!confirm("Are you sure attend_all!")) {return; }
        
     
  this.checkedNames =this.students_id_array
 this.saveabsence();
},
attend_none(){
        if (!confirm("Are you sure attend_none!")) {return; }

  this.checkedNames =[]
 this.saveabsence();
 
},

    async loadparticipations() {
      this.history= this.history+'<br/>'+'loadparticipations()';

      this.loading = true;
      try {

        //JSON.stringify(this.students_array)
        //  this.linkapi="/api/loadparticipations/"+ JSON.stringify(this.marks_arrayob)+"/"+ JSON.stringify(this.absence_array)
        this.linkapi =
          "/api/loadparticipations/" + JSON.stringify(this.absence_array);
        await axios
          .get("/api/loadparticipations/" + JSON.stringify(this.absence_array))
          .then((res) => {

            this.loadparticipationsdata = res.data;
            this.loading = false;
            if (this.loadparticipationsdata.length > 1) {
              this.marks_arrayob = this.loadparticipationsdata;
              // this.marks_arrayob = this.loadparticipationsdata.sort((a, b) =>
              //   a.plus < b.plus ? 1 : -1
              // );

              //              this.marks_arrayob.sort(function (x, y) {
              //     return x.total - y.total;

              // });
              // this.marks_arrayob = this.loadparticipationsdata.sort();
              // objs.sortBy('name');
            }

          });
      } catch (e) {
        this.errorsmsg = "data error";
        alert("loadparticipations data error");
        alert(e.response.status);


      }
    },
   async getparticipate() {
      this.history= this.history+'<br/>'+'getparticipate()';

      this.errorsmsg = "getparticipate";
      this.loading = true;
      //  let data=[

      //  ],

      try {
        // alert(JSON.stringify(this.absence_array));
        //  console.log("/api/getbsence/"+JSON.stringify(this.absence_array));
        await axios
          .get(
            "/api/getparticipate/" +
              JSON.stringify(this.absence_array) +
              "/" +
              JSON.stringify(this.students_array)
          )
          .then((res) => {
            // console.log("getbsence3");
            this.abs_db = res.data;
            this.errorsmsg = "abs_db";
            this.loading = false;
            // console.log("/api/getbsence/"+JSON.stringify(this.absence_array)  );
          });
      } catch (e) {
        this.errorsmsg = "data error";
        alert("getparticipate data error");
        alert(e.response.status);

        
      }
      if (this.abs_db.absent) {
        this.abs_db_array = this.abs_db.absent.split`,`.map((x) => +x);
        let arr1 = this.students_id_array;
        // let arr2=this.checkedNames;
        let arr2 = this.abs_db_array;

        this.checkedNames = arr1.filter((x) => !arr2.includes(x));
      }
      // =======================================================================
    },



    // =================================================
   async loadclass(class_name,period,date) {
     this.loading = true;
    //  alert(date);
    
      this.history= this.history+'<br/>'+'loadclass(class_name,period,date)'+'||'+class_name+'||'+period+'||'+date;

        this.errorsmsg = "loadclass";
// alert(class_name);
// alert(period);
// alert(date);

let students_data='';
      try {


        await axios
          .get("/api/students/" +  class_name)
          .then((res) => {

             students_data = res.data;
            this.loading = false;
          

            this.errorsmsg = "students_data";
          });
      } catch (e) {
        this.errorsmsg = "data error";
        alert("loadclass students data error");
        alert(e.response.status);
        alert(e.response.statusText);
        console.log('e.response');
        console.log(e.response);


      }
      this.loadclass_done=true
      // =======================================================================
      // =======================================================================
      this.students_id_array = [];
      this.marks_arrayob = [];
  // alert(students_data);
      for (let index = 0; index < students_data.length; index++) {
// alert(students_data[index].school_id);
            this.students_id_array.push(students_data[index].id);
            this.marks_arrayob.push(
                          {
                            "date"              : this.date                ,
                        "school_id"         : students_data[index].school_id         ,
                        "participate_id"    : ''                                        ,
                        "student_id"        : students_data[index].id              ,
                        "present"           : true                                      ,
                        "name"              : students_data[index].name            ,
                        "class_name"        : students_data[index].class_name      ,
                        "subject"           : students_data[index].subject         ,
                        "period"            : period              ,
                        "day"               :  this.setdaynum                ,
                        "week"              :  this.weeknum               ,
                        "participate"       : 0                                         ,
                        "plusnew"              : 0                                         ,
                        "plus"              : 0                                         ,
                        "minus"             : 0                                         ,
                        "score"             : 0                                         ,
                        "total"             : 0                                         ,
                        "quiz1"             : ''                                         ,
                        "quiz2"             : ''                                         ,
                        "quiztotal"             : 0                                         ,
                        "project"             :''                                         ,
                        "participatedetails": ''                                        ,
                        "notes"             : ''                                        ,
                      });
      }


this.absence_array=[{
 'school_id':  this.teachermaindataget.teacherdata[0].school_id    ,
'class_name': class_name,
'date'     :  this.date    ,
'period'   : period    ,
'day'      : this.setdaynum       ,
'week'      : this.weeknum        ,
'subject'  :     this.teachermaindataget.teacherdata[0].subject  ,
'teacher_id'  :  this.teachermaindataget.teacherdata[0].teacher_id      ,
'teacher'  :   this.teachermaindataget.teacherdata[0].name     ,
'absent'   : ''    ,
'notes'    : ''    , 
 }];

// alert(this.absence_array);






      // this.history= this.history+ '|| and this.getbsence();' ;

   this.getbsence();
   
   },
    // getbsence=======================================================================

    async getbsence() {
      this.history= this.history+'<br/>'+' getbsence()';

      this.errorsmsg = "getbsence";
      this.loading = true;
      try {

        await axios
          .get("/api/getbsence/" + JSON.stringify(this.absence_array))
          .then((res) => {
            this.abs_db = res.data;
            this.loading = false;
          });
      } catch (e) {
        this.errorsmsg = "data error";
        alert("getbsence data error");
        alert(e.response.status);

      }
      if (this.abs_db.absent) {
        this.abs_db_array = this.abs_db.absent.split`,`.map((x) => +x);
        let arr1 = this.students_id_array;
        // let arr2=this.checkedNames;
        let arr2 = this.abs_db_array;

        this.checkedNames = arr1.filter((x) => !arr2.includes(x));
      }
      // =======================================================================
    
     this.loadparticipations();
    
    },


    
   async loadteachermaindataarray() {
      this.history= this.history+'<br/>'+'loadteachermaindataarray()';
     
            this.errorsmsg = "loadteachermaindataarray";

this.loading = true;
                        try {
                          await axios.get("/api/teachermaindataget").then((res4) => {
                            this.teachermaindataget = res4.data;
                            this.loading = false;
                          });
                        } catch (e) {
                          this.errorsmsg = "loadschedule data error";
        alert("loadteachermaindataarray data error");
        alert(e.response.status);
                       
                       };

// this.schedule_array=[{
// 'day'       : day       ,
// 'period'    : period    ,
// 'class_name': class_name,
// 'order'     : order     ,
// 'date'      : date      ,

// }];
// Periodtime":8,"school_id":1,"period":"7","stage":"prim","start":"12:15:00","end":"13:00:00","Periodtime":"45","active":1,"notes":"
// datesforweek
// {"id":15,"school_id":1,"term_name":"s3","day":"1","week":"3","date":"2022-04-03","active":1,"notes":null,"created_at":null,"updated_at":null},
   
//   schedule
//    {"id":1,"school_id":1,"day":"1","period":"1","class_name":"5B","sorder":1,"teacher_id":"4","subject":"Math","color":"green","active":1,"notes":null,"created_at":null,"updated_at":null}
 
let date      ='';
 

    
    // let tablearray_day1=[
        let period1    = ',,,,,,,';
let class_name1= '';
let sorder1    = ',,,,,,,'; 
    //      ];
       let tablearray_day1=[
         {
             'day'       : 1,
             'period'    : period1,
             'class_name': class_name1,
             'sorder'    :  sorder1,
             'date'      : '',
             'start'      : 0,
             'end'      : 0,
         },
        {
             'day'       : 1,
             'period'    : period1,
             'class_name': class_name1,
             'sorder'    :  sorder1,
             'date'      : '',
             'start'      : 0,
             'end'      : 0,
         },
        {
             'day'       : 1,
             'period'    : period1,
             'class_name': class_name1,
             'sorder'    :  sorder1,
             'date'      : '',
             'start'      : 0,
             'end'      : 0,
         },
        {
             'day'       : 1,
             'period'    : period1,
             'class_name': class_name1,
             'sorder'    :  sorder1,
             'date'      : '',
             'start'      : 0,
             'end'      : 0,
         },
        {
             'day'       : 1,
             'period'    : period1,
             'class_name': class_name1,
             'sorder'    :  sorder1,
             'date'      : '',
             'start'      : 0,
             'end'      : 0,
         },
        {
             'day'       : 1,
             'period'    : period1,
             'class_name': class_name1,
             'sorder'    :  sorder1,
             'date'      : '',
             'start'      : 0,
             'end'      : 0,
         },
         
         


         ];      
      let   tabledaysarray=[,,,,,,,] ;
 

for (let daynum = 1; daynum < 7; daynum++) {
 period1 = '';
 class_name1 = '';
 sorder1     = '';
        tabledaysarray[daynum]=   this.teachermaindataget.schedule.filter(function (el) {return el.day  ==daynum;});
  let day1=tabledaysarray[daynum];


for (let index = 0; index < day1.length; index++) {
  if (day1[index].sorder==null) {


 sorder1      =  sorder1    +',-';  

  }else{

     sorder1      =  sorder1    +','+ day1[index].sorder;  


  }
    period1        =period1      +','+ day1[index].period;
      class_name1  =  class_name1+','+ day1[index].class_name;  
     

 date= this.teachermaindataget.datesforweek[daynum-1].date;


    this.weeknum=this.teachermaindataget.datesforweek[0].week;
    // return;
tablearray_day1[daynum]=[
         {
             'day'       : daynum,
             'week'       : this.weeknum,
             'period'    : period1,
             'class_name': class_name1,
             'sorder'    : sorder1,
             'date'      : date,
            //  'start'      : 'start',
             'end'      :  'end',

             'start'      : this.teachermaindataget.Periodtime[index].start,
            //  'end'      : this.teachermaindataget.Periodtime[period1-1].end,

         }  
         ];
 console.log(this.teachermaindataget.Periodtime[index].start);
 console.log(this.teachermaindataget.Periodtime);
//  console.log('aa');
//   period    = ',,,,,,,,,,';
//   class_name= ',,,,,,,,,,';
//   sorder    = ',,,,,,,,,,';


    
}



this.tablearray =tablearray_day1


 console.log(this.teachermaindataget.Periodtime);



         

   
}
   
   }  ,
   
   

       async saveabsence() {
          this.history= this.history+'<br/>'+'saveabsence()';
         
        //  this.$refs.success.show();
      this.errorsmsg = "saveabsence";
      this.loading = true;
      //  alert(this.absence_array.absent)
      this.absence_array.absent = this.absent_arry_com.toString();
      let absent = this.absent_arry_com.toString();
      
      //  alert(absent)
      
      //  alert(absent);
      if (absent == "") {
        // alert('empty');
        absent = "-";
      }

      try {
   
        // this.textapi =
        //   "/api/saveabsence/" +
        //   JSON.stringify(this.absence_array) +
        //   "/" +
        //   absent;
        await axios
          .get(
            "/api/saveabsence/" +
              JSON.stringify(this.absence_array) +
              "/" +
              absent
          )
          .then((response) => {
            // await axios.get("/api/saveabsence/"+ this.absence_array).then((response) => {

            this.absence_db = response.data;
            this.loading = false;

          });
      } catch (e) {
        this.errorsmsg = "data error";
        alert("saveabsence data error");
        alert(e.response.status);

      }
      // =======================================================================
      this.errorsmsg = "";
      // =======================================================================
    
    
    
    
    
    
    },
    
    
    
    
    onfilechanged (event) {
           this.history= this.history+'<br/> event.target.files[0]:'+event.target.files[0];

    this.selectedFile = event.target.files[0];
   console.log(event.target.files[0]);
  },
  onuploadf2() {
           this.history= this.history+'<br/> onUpload()' ;

    // upload file, get it from this.selectedFile
  },
  onuploadf() {
    console.log('onUploadf')
  const formData = new FormData()
  formData.append('myFile', this.selectedFile, this.selectedFile.name)
   console.log('/api/fileupload'+ formData);
   console.log(formData);
    // axios.get('/api/fileupload/'+formData, {
    // axios.post('/api/fileupload', formData, {

      axios.post('/api/store_file', formData,{
      
      onUploadProgress: progressEvent => {
        console.log(progressEvent.loaded / progressEvent.total)
        // console.log(Math.round(progressEvent.loaded / progressEvent.total*100))
      }
    })
  },
    
    
    
    
    


















// ==============================================

onFileChange(e){
                // console.log(e.target.files[0]);
                this.file = e.target.files[0];





                
            },
            formSubmit(e) {
              if (this.file=='') {
                alert("this.file==''");
                retutn;
              }
                e.preventDefault();
                let currentObj = this;
   
                const config = {
                    headers: { 'content-type': 'multipart/form-data' }
                }
    
                let formData = new FormData();
                formData.append('file', this.file);
                formData.append('student_id', '5');
                formData.append('catogry', 'quiz1');
   let dataall;
                // axios.post('/api/formSubmit', formData, config)
                axios.post('/api/formSubmit', formData,{
      
      onUploadProgress: progressEvent => {
        // console.log()
        this.progvalue=Math.round(progressEvent.loaded / progressEvent.total*100)
        // console.log(Math.round(progressEvent.loaded / progressEvent.total*100))
      }
    })

                
                .then(function (response) {
                    currentObj.success = response.data.success;
                    // console.log(response.data);
                    dataall=response.data  ;
                    // alert(response.data.name);
                    // console.log(response.data.name);
                    this.uploadfilereturndata.name=response.data.name;
                    // console.log(this.uploadfilereturndata);

                    // dataall=response.data.name  ;
                })
                .catch(function (error) {
                    currentObj.output = error;
        alert("onFileChange data error");
        // alert(e.response.status);

                });

              
                
            }
    },




  }
 
</script>

<style>
    .star--shine {
      animation: star-shine 3s 0.5s infinite;
    }

    @keyframes star-shine {
      0%, 100% {
        transform: translateY(0);
        opacity: 0.6;
      }
      50% {
        transform: translateY(200%);
        opacity: 0;
      }
      51% {
        transform: translateY(0);
      }
    }

    .star--shimmer {
      animation: star-shimmer 3s 0.5s infinite;
      stroke-width: 15px;
      stroke-dasharray: 50px 910px;
      stroke-linecap: round;
    }

    @keyframes star-shimmer {
      0% {
        stroke: #fff;
      }
      20% {
        stroke-dashoffset: -316px;
      }
      30% {
        stroke: transparent;
      }
      31% {
        stroke-dashoffset: 0;
      }
      100% {
        stroke: transparent;
      }
    }
  </style>