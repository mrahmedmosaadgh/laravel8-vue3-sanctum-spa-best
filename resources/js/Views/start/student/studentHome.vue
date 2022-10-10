<template>
  <div class=" mx-auto text-gray-900">
    <div v-show="loading"   class="overlay_fullscrren2  "><div class=" overlay_fullscrren    z-40 bg_loading">
    <!-- <div class="overlay_fullscrren center-screen z-50  loading1"></div> -->
    

     <div class="  z-50   overlay_fullscrren  ">
  <div class=" w-8 h-8 fixed bg-black opacity-80 rounded-lg left-1/2 top-1/2 loading1"></div>
    </div>
</div><div class="overlay_fullscrren  bg-black opacity-70 "></div> </div>



resources\js\Views\start\student\studentHome.vue
<p>routepath:{{routepath}}</p>
<p> keys :{{keys}}</p>
<p>values:{{values}}</p>
<p>prevRoutePatch:{{prevRoutePatch}}</p>
<!-- <p>val:{{val}}</p> -->

<section><!-- all quizzes -->
<button class="button" @click="get_allquizzes_fun()">get_allquizzes_fun</button>

           <table class='tbl1'>
               <thead>
                   <tr>
                       <th>N</th>
                       <th>class</th>
                       <th>subjects</th>

                   </tr>
               </thead>
               <tbody>
                   <tr v-for="(item,index) in quizzes" :key='index'>
                       <td>{{index+1}}</td>
                       
                       <td>{{item.name}}</td>
<td>
  


       <!-- x-data="{ circumference: circumference, percent: 90 }" -->

    <!-- <div class="flex items-center flex-wrap max-w-md px-10 bg-white shadow-xl rounded-2xl h-20"
       >
          <div  class="flex items-center justify-center -m-6 overflow-hidden bg-white rounded-full"> -->
            <svg class="w-32 h-32 transform translate-x-1 translate-y-1" x-cloak aria-hidden="true">
              <circle
                class="text-gray-300"
                stroke-width="10"
                stroke="currentColor"
                fill="transparent"
                r="20"
                cx="60"
                cy="60"
                />
                <!-- :stroke-dashoffset="(50 * 2 * Math.PI) - timetopublishoff[index] * (50 * 2 * Math.PI)" -->
                <!-- class="text-red-600" -->
              <circle
              :class="(mypercent>50)?(mypercent>70)?'text-green-600':'text-blue-600':'text-red-600'"
                stroke-width="10"
                :stroke-dasharray="20 * 2 * Math.PI"
                :stroke-dashoffset=" timetopublishoff[index] /100* (50 * 2 * Math.PI)"
                stroke-linecap="round"
                stroke="currentColor"
                fill="transparent"
                r="20"
                cx="60"
                cy="60"
               />
            </svg>
            <!-- <span class="absolute text-2xl text-red-700" :x-text="timetopublishoff[index]+'%'"></span>
            <span class="absolute text-2xl text-red-700" x-text="`${percent}%`"></span>
          </div>
          <p class="ml-10 font-medium text-gray-600 sm:text-xl">Storage</p>

          <span class="ml-auto text-xl font-medium text-red-600   sm:block">20GB</span>
      </div> -->






















</td>
                       
<td>

 
    <!-- <button class="button" @click="isbetween(index)">isbetween</button> -->
    <button class="button" @click="timetopublishoff_fun(index)">timetopublishoff_fun</button>
    <p>timetopublishoff:{{timetopublishoff[index]}}</p>
    <flat-pickr v-model="quizzes[index].publish"
  @click="timetopublishoff_fun(index)"
  :config="{
                    wrap: true, // set wrap to true only when using 'input-group'
                    altFormat: 'Y-m-d H:i:S',
                    altInput: true,
                    // dateFormat: 'Y-m-d',
                    enableTime: true,
    dateFormat: 'Y-m-d H:i:S',
                    // locale: Hindi, // locale for this instance only          
                }"

>dd</flat-pickr>
    
    
    
    <!-- <input type="datetime" name="publish" id="" v-model="item.publish"></p> -->
 
  
      <flat-pickr v-model="quizzes[index].publishoff"  
  
  :config="{
                    wrap: true, // set wrap to true only when using 'input-group'
                    altFormat: 'Y-m-d H:i:S',
                    altInput: true,
                    // dateFormat: 'Y-m-d',
                    enableTime: true,
    dateFormat: 'Y-m-d H:i:S',
                    // locale: Hindi, // locale for this instance only          
                }"

>dd</flat-pickr>
  
  
  <!-- <input type="datetime" name="publishoff" id="" v-model="item.publishoff"></p> -->
</td>
                   </tr>
               </tbody>
           </table>
</section>
<!-- all quizzes -->
































    
    
 <!--  -->
 <!-- <div class="loading1 z-50   overlay_fullscrren  ">
  <div class=" w-8 h-8 fixed bg-black opacity-80 rounded-lg left-1/2 top-1/2 loading1"></div>
    </div> -->
  
  
<!-- @click="showmodal=!showmodal"
 -->


<!-- -----------modal  ---------------------------------------- -->


 <div class="">
  <!-- <button type="button" @click="tog=!tog" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
    Vertically centered modal
  </button> -->
  <button type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable">
    Vertically centered scrollable modal modal-------------------.
  </button>
</div>
v-show="tog" :class="(tog)?'':'hidden'" 
<div class=" hidden overlay_fullscrren bg-gray-700 p-4 modal fade fixed top-0 left-0  w-screen h-screen outline-none overflow-x-hidden overflow-y-auto" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
  <div class="modal-dialog opacity-100 modal-dialog-centered relative w-80 left-1/2 pointer-events-none">
    <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
      <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
        <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
          Modal title
        </h5>
        <button type="button" 
          class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
          data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body relative p-4">
        <p>modal-------------------.</p>
      </div>
      <div
        class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
        <button type="button" 
          class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
          data-bs-dismiss="modal">
          studentDatafun()-----
        </button>
        <button type="button"  
          class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
          Save changes ------2
        </button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="exampleModalCenteredScrollable" tabindex="-1" aria-labelledby="exampleModalCenteredScrollable" aria-modal="true" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable relative w-auto pointer-events-none">
    <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
      <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
        <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalCenteredScrollableLabel">
          Modal title
        </h5>
        <button type="button"
          class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
          data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body relative p-4">
        <!-- <p>This is some placeholder content to show a vertically centered modal. We've added some extra copy here to show how vertically centering the modal works when combined with scrollable modals. We also use some repeated line breaks to quickly extend the height of the content, thereby triggering the scrolling. When content becomes longer than the predefined max-height of modal, content will be cropped and scrollable within the modal.</p>
    <br><br><br><br><br><br><br><br><br><br> -->
    <p>Just like that.</p>
      </div>
      <div
        class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
        <button type="button" @click="studentDatafun()"
          class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
          data-bs-dismiss="modal">
          Close run
        </button>
        <button type="button"
          class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
          Save changes
        </button>
      </div>
    </div>
  </div>
</div>








<!-- -----------modal  ---------------------------------------- -->



  
    <div class="flex justify-center">
        <div class="flex-1">
            <div class="border w-auto">
 
                <div class="p-4 bg-white ">

<!-- <button @click="this.$router.push('studentHome')">this.$router.push('studentHome')</button> -->
<p>usertype:{{usertype}}</p>
<p>datamsg:{{datamsg}}</p>
<p>loading:{{loading}}</p>

  <p>myabsents:{{myabsents}}</p>
  <div  v-for="(item,index) in myabsents" :key='index' >
    <div>date     :{{item.date}}          </div>
    <div>period   :{{item.period}}        </div>
    <div>notes    :{{item.notes}}         </div>
    <div>subject  :{{item.mysubject.name}}</div>
    <div class="category">myteacher:{{item.myteacher.name}}</div>
    </div> 
    <!-- Absence -->
    <section>

<p>myabsentsum{{myabsentsum}}</p>
    <p v-if="myabsentsum=0">No Absence recorded</p>
    <div class="cont">
           <table class='tbl1' v-if="myabsentsum>0">
            <title>absents</title>
            <caption>Absents Table</caption>
               <thead>
                   <tr>
                       <th>N</th>
                       <th>date</th>
                       <th>period</th>
                       <th>myteacher</th>
                       <th>subject</th>
                       <th>notes</th>

                   </tr>
               </thead>
               <tbody>
                   <tr v-for="(item,index) in myabsents" :key='index'>
                       <td>{{index+1}}</td>
<td>{{item.date}}          </td>
<td>{{item.period}}        </td>
<td>{{item.notes}}         </td>
<td>{{item.mysubject.name}}</td>
<td>{{item.myteacher.name}}</td>
                   </tr>
               </tbody>
           </table>
</div>
    </section>
        <!-- Absence -->

    <br>
<!-- list student subjects -->
     <p v-for="(item,index) in subarray" :key='index' @click="filttersubfun(item.id)">{{item.name}}</p>
   <p>All</p>
<!-- list student subjects -->

    <br>
<p><button class="button-73" @click="studentDatafun()">studentData</button></p>
 <p><button class="button-73" @click="lastonlinefun()">last online</button></p>
 <p><button class="button-73" @click="get_lastloginfun()">get lastloginfun</button></p>

<!-- schedule -->
                <!-- -------------------------------table--------------------------------------- -->
          <div class="cont">
           <table class='tbl1'>
               <thead>
                   <tr>
                       <th>N</th>
                       <th>class</th>
                       <th class="dd">subjects</th>

                   </tr>
               </thead> 
               <tbody  class="dd">
                <!-- -------------------------------myschedule--------------------------------------- -->
                   <tr v-for="(myscheduleday,index) in myschedule" :key='index'>
                    
                    <td v-if="myscheduleday[0]" >day:{{myscheduleday[0]['day'] }}</td>
                <!-- -------------------------------period--------------------------------------- -->
                    <td  v-for="period in 8" :key='period'>
                <!-- -------------------------------period inside may be more than one--------------------------------------- -->
                    <div v-for="(md,index55) in myscheduleday" :key='index55' >

                    <div v-if="md">
                    <div v-if="period==md['period']" class="flex flex-wrap">
                   {{md['mycts']['mysubjects']['name']}}
                    {{md['mycts']['myteachers']['name']}}
                    <!-- {{md['mycts']['mysubjects']['name']mystudents.name}} -->
                    <!-- {{md['mycts']['myschedules']}} -->
                    {{md['period']}} 
                    </div>
                    </div>
                    </div>


                    </td>
                    </tr>


               </tbody>
           </table>

<!-- <flatpickr ></flatpickr>altFormat: 'M j, Y', H:i:S A/P :config="config"-->

<p>dateAmPm:{{dateAmPm}}</p>
<button class="button" @click="formatAMPM(date)">formatAMPM</button>
<flat-pickr v-model="date"  
  
  :config="{
                    wrap: true, // set wrap to true only when using 'input-group'
                    altFormat: 'Y-m-d H:i:S',
                    altInput: true,
                    // dateFormat: 'Y-m-d',
                    enableTime: true,
    dateFormat: 'Y-m-d H:i:S',
                    // locale: Hindi, // locale for this instance only          
                }"

>dd</flat-pickr>uu
 
<p>date:{{date}}</p>
                <!-- -------------------------------table--------------------------------------- -->
</div>
<!-- schedule -->
                </div>
            </div>
        </div>
    </div>
</div>
</template>



<script>

// import flatpickr from "flatpickr";
import Swal from 'sweetalert2'
// import { Datepicker, Timepicker, DatetimePicker, DateRangePicker } from '@livelybone/vue-datepicker';
// import 'node_modules/@livelybone/vue-datepicker/lib/css/index.css'
// import  cards  from '../components/cards';
// Local register
    import flatPickr from 'vue-flatpickr-component';
    import 'flatpickr/dist/flatpickr.css';
export default {
 components: {
            flatPickr
        },
        computed:{


              prevRoutePatch () {
                //  lastPath = this.$router.options.history.state.back
              var   lastPath = this.$router.options.history.state.back
      return lastPath ? lastPath : '/dashboard'
    },
          routepath(){
// $cookies.set(keyName, value[, expireTimes[, path[, domain[, secure[, sameSite]]]]])   //return this
//  return this.$cookies.set(keyName, value[, expireTimes[, path[, domain[, secure[, sameSite]]]]])   //return this
// var user = { id:1, name:'Journal',session:'25j_7Sl6xDq2Kc3ym0fmrSSk2xV2XkUkX' };
// this.$cookies.set('user',user);
 var user = {
  lastRoutPath:this.$route.path,
  id:1, name:'Journal',session:'25j_7Sl6xDq2Kc3ym0fmrSSk2xV2XkUkX' };
this.$cookies.set('user',user);
var user2= this.$cookies.get('user').lastRoutPath 
return user2 
return user2.lastRoutPath
return this.$cookies.get(user.lastRoutPath) 
            return this.$cookies.keys()
           return    this.$route.path
           return    this.$route.name
           getAllcookies=this.$cookies.keys()
          //  lastRoutPath=this.$cookies.keys()
           // set global cookie in component:
// this.$cookies.set('theme','default');
// this.$cookies.set('hover-time','1s');
// --------------------------------
// $cookies.set(keyName, value[, expireTimes[, path[, domain[, secure[, sameSite]]]]])   //return this
// Get a cookie
// $cookies.get(keyName)  // return value
// Set a cookie
// $cookies.set(keyName, value[, expireTimes[, path[, domain[, secure[, sameSite]]]]])   //return this
// Get a cookie
// $cookies.get(keyName)  // return value
// Remove a cookie
// $cookies.remove(keyName [, path [, domain]])  // return this
// Exist a cookie name
// $cookies.isKey(keyName)  // return false or true
// Get All cookie name
// $cookies.keys()  // return a array
// Example Usage
// set global config
// // 30 day after, expire
// app.use(VueCookies, {
//     expireTimes: "30d",
// });

// // set secure, only https works
// app.use(VueCookies, {
//     expireTimes: "7d",
//     secure: true,
// });

// // 2019-03-13 expire
// app.use(VueCookies, {
//     expireTimes: new Date(2019,03,13).toUTCString(),
// });

// // 30 day after, expire, '' current path , browser default
// app.use(VueCookies, {
//     expireTimes: 60 * 60 * 24 * 30,
//     path: "",
// });
// support json object
// var user = { id:1, name:'Journal',session:'25j_7Sl6xDq2Kc3ym0fmrSSk2xV2XkUkX' };
// this.$cookies.set('user',user);
// // print user name
// console.log(this.$cookies.get('user').name)
// set expire times
// Suppose the current time is : Sat, 11 Mar 2017 12:25:57 GMT

// Following equivalence: 1 day after, expire

// Support chaining sets together

//  // default expire time: 1 day
// this.$cookies.set("user_session","25j_7Sl6xDq2Kc3ym0fmrSSk2xV2XkUkX")
//         // number + d , ignore case
//         .set("user_session","25j_7Sl6xDq2Kc3ym0fmrSSk2xV2XkUkX","1d")
//         .set("user_session","25j_7Sl6xDq2Kc3ym0fmrSSk2xV2XkUkX","1D")
//         // Base of second
//         .set("user_session","25j_7Sl6xDq2Kc3ym0fmrSSk2xV2XkUkX",60 * 60 * 24)
//         // input a Date, + 1day
//         .set("user_session","25j_7Sl6xDq2Kc3ym0fmrSSk2xV2XkUkX", new Date(2017, 03, 12))
//         // input a date string, + 1day
//         .set("user_session","25j_7Sl6xDq2Kc3ym0fmrSSk2xV2XkUkX", "Sat, 13 Mar 2017 12:25:57 GMT")
// set expire times, input number type
// this.$cookies.set("default_unit_second","input_value",1);            // 1 second after, expire
// this.$cookies.set("default_unit_second","input_value",60 + 30);      // 1 minute 30 second after, expire
// this.$cookies.set("default_unit_second","input_value",60 * 60 * 12); // 12 hour after, expire
// this.$cookies.set("default_unit_second","input_value",60 * 60 * 24 * 30); // 1 month after, expire
// set expire times - end of browser session
// this.$cookies.set("default_unit_second","input_value",0);          // end of session - use 0 or "0"!
// set expire times , input string type
// Unit	full name
// y	year
// m	month
// d	day
// h	hour
// min	minute
// s	second
// Unit Names Ignore Case

// not support the combination

// not support the double value

// this.$cookies.set("token","GH1.1.1689020474.1484362313","60s");  // 60 second after, expire
// this.$cookies.set("token","GH1.1.1689020474.1484362313","30MIN");  // 30 minute after, expire, ignore case
// this.$cookies.set("token","GH1.1.1689020474.1484362313","24d");  // 24 day after, expire
// this.$cookies.set("token","GH1.1.1689020474.1484362313","4m");  // 4 month after, expire
// this.$cookies.set("token","GH1.1.1689020474.1484362313","16h");  // 16 hour after, expire
// this.$cookies.set("token","GH1.1.1689020474.1484362313","3y");  // 3 year after, expire

// // input date string 
// this.$cookies.set('token',"GH1.1.1689020474.1484362313", new Date(2017,3,13).toUTCString());
// this.$cookies.set("token","GH1.1.1689020474.1484362313", "Sat, 13 Mar 2017 12:25:57 GMT ");
// set expire support date
// var date = new Date;
// date.setDate(date.getDate() + 1);
// this.$cookies.set("token","GH1.1.1689020474.1484362313", date);
// set never expire
// this.$cookies.set("token","GH1.1.1689020474.1484362313", Infinity);  // never expire
// // never expire , only -1,Other negative Numbers are invalid
// this.$cookies.set("token","GH1.1.1689020474.1484362313", -1); 
// remove cookie
// this.$cookies.set("token",value); // domain.com and *.doamin.com are readable
// this.$cookies.remove("token"); // remove token of domain.com and *.doamin.com 

// this.$cookies.set("token", value, null, null, "domain.com"); // only domain.com are readable
// this.$cookies.remove("token", null, "domain.com"); // remove token of domain.com 
// set other arguments
// // set path
// this.$cookies.set("use_path_argument","value","1d","/app");  

// // set domain
// this.$cookies.set("use_path_argument","value",null, null, "domain.com");   // default 1 day after,expire

// // set secure
// this.$cookies.set("use_path_argument","value",null, null, null,true);

// // set sameSite - should be one of `None`, `Strict` or `Lax`. Read more https://web.dev/samesite-cookies-explained/
// this.$cookies.set("use_path_argument","value",null, null, null, null, "Lax");
// other operation
// // check a cookie exist
// this.$cookies.isKey("token")

// // get a cookie
// this.$cookies.get("token");

// // remove a cookie
// this.$cookies.remove("token");

// // get all cookie key names, line shows
// this.$cookies.keys().join("\n"); 

// // remove all cookie
// this.$cookies.keys().forEach(cookie => this.$cookies.remove(cookie))

// // vue-cookies global
// [this | Vue].$cookies.[method] 

// Warning
// $cookies key names Cannot be set to ['expires','max-age','path','domain','secure','SameSite']


// --------------------------------
          }
        },
    data() {
        return {
quizzes:null,
keys:null,
values:null,
date:null,dateAmPm:null,
config: {
                    wrap: true, // set wrap to true only when using 'input-group'
                    altFormat: 'M j, Y',
                    altInput: true,
                    // dateFormat: 'Y-m-d',
                    enableTime: true,
    dateFormat: "Y-m-d H:i",
                    // locale: Hindi, // locale for this instance only          
                },
timetopublishoff:[,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,],
// quizzes:null,
// quizzes:null,
// quizzes:null,
// quizzes:null,








          usertype:'',tog :false,
          datamsg :'',mysubjects:'',myabsents:'',myabsentsum:'',subarray:[],
          loading :false,studentData:'',
          myschedule:{
day1:'',
day2:'',
day3:'',
day4:'',
day5:'',
},
        }
    },
          // components:{cards  },
          mounted(){
       setInterval(() => {
        this.lastonlinefun()
    }, 30000);




// setInterval(    lastonlinefun(), 3000);
          },
 created: function() {
//   var set_lastonline = setInterval(function() {
//     this.lastonlinefun
// }, 3 * 1000); 
// }, 60 * 1000); 

// clearInterval(timerID); // The setInterval it cleared and doesn't run anymore.
        if(this.$store.getters.user) {
      this.usertype=   this.$store.getters.user.usertype

      //       let self = this ;   
      //       window.addEventListener('click', function(e){
      //           if ( self.$refs.dropMenu && !self.$refs.dropMenu.contains(e.target) ){
      //               self.drop = false
      //           } 
      //       })
         }
      // this.$router.push('markmain')

  },
  methods:{
    timetopublishoff_fun(index){
var start =this.quizzes[index].publish ;
var end = this.quizzes[index].publishoff;


start =new Date(start).getTime()
end   =new Date(end).getTime()

var tstampnow=new Date().getTime()
console.log((tstampnow-end)/(start-end)*100);

if((tstampnow-start)>0 && (tstampnow-end)<0) {
this.timetopublishoff[index]=(tstampnow-end)/(start-end)*100
  // alert("date contained isbetween---  ");
}
    },
    isbetween(index){
// var dateFrom = "02/05/2013";
// var dateTo = "02/09/2013";
// var dateCheck = "02/07/2013";

var dateFrom =new Date(this.quizzes[index].publish) ;
var dateTo = new Date(this.quizzes[index].publishoff);
var start =this.quizzes[index].publish ;
var end = this.quizzes[index].publishoff;


start =new Date(start).getTime()
end   =new Date(end).getTime()

var tstampnow=new Date().getTime()



// var d1 = start.split(" ")[0]
// var d2 = end.split(" ")[0]
// d1=new Date(d1)
// d2=new Date(d2)
// if((tstampnow-end)>0) {

//   alert("date contained >0");
// }else{
//   alert("date not <0");

// }
if((tstampnow-start)>0 && (tstampnow-end)<0) {

  alert("date contained isbetween---  ");
}else{
  alert("date not isbetween----");



}
console.log(end-tstampnow);
console.log(start-end);
console.log('percent');

console.log((tstampnow-end)/(start-end)*100);
console.log('pup off');

console.log(this.quizzes[index].publish);
console.log(this.quizzes[index].publishoff);

console.log('tstampnow: '+tstampnow);
console.log('end: '+end);
console.log('(tstampnow-d1): '+(tstampnow-end));
return





function getCurrentTimestamp () {
  return Date.now()
}

function getTimestampInSeconds () {
  return Math.floor(Date.now() / 1000)
}

// var timestamp = new Date().getTime();







var dateCheck = new Date();
console.log('new Date()');
console.log(new Date());
// console.log(start);/
// console.log('start: '+start);
// console.log('end: '+end);
var from = Date.parse(dateFrom);
var to   = Date.parse(dateTo);
var check = Date.parse(dateCheck );

if((check <= to && check >= from)) {

  alert("date contained");
}else{
  alert("date not");

}
    // console.log('isbetween: ');
    },





    formatAMPM(date){
date=new Date(date)
// const formatAMPM = (date) => {
  let hours = date.getHours();
  let minutes = date.getMinutes();
  let ampm = hours >= 12 ? 'pm' : 'am';
  hours = hours % 12;
  hours = hours ? hours : 12;
  minutes = minutes.toString().padStart(2, '0');
  let strTime = hours + ':' + minutes + ' ' + ampm;
 this.dateAmPm=strTime
  // return strTime;
// }

// console.log(formatAMPM(new Date(2021, 1, 1)));


    },
    // setInterval(lastonlinefun, 2000),
async   get_allquizzes_fun(){
 

// this.randorder=res.data.data.order
// this.scschoolQuizall=res.data.data.scschoolQuizall
//                 console.log(res.data);


            try{

            await axios.post("/api/student/get_quizzes",{id:this.$store.getters.user.id} )
            .then((res) => {
              console.log('get_quizzes:');
              console.log(res.data.message);
              console.log(res.data.data);
              this.quizzes=res.data.data
             this.keys= Object.keys(this.quizzes[0])  
            this.values=Object.values(this.quizzes[0])  
              });

            } catch (e) {
            console.log('get_lastlogin erro');
            console.log(e);
                        }
},


async   get_lastloginfun(){
            try{

            await axios.post("/api/student/get_lastlogin",{id:this.$store.getters.user.id} )
            .then((res) => {
              console.log('get_lastlogin:');
              console.log(res.data.message);
              });

            } catch (e) {
            console.log('get_lastlogin erro');
            console.log(e);
                        }
},


async   lastonlinefun(){
            try{

            await axios.post("/api/student/lastonline" )
            .then((res) => {
              console.log('lastonline:');
              console.log(res.data.message);
              });

            } catch (e) {
            console.log('lastonline erro');
            console.log(e);
                        }
},

// var timerID = setInterval(function() {
//     // your code goes here...
// }, 60 * 1000); 

// clearInterval(timerID); // The setInterval it cleared and doesn't run anymore.



filttersubfun(item){
this.myschedule.filter(e => e.subject_id==item)
// this.mysubjects=this.studentData.mysubjects.filter(e => e.subject_id)

},
    async   studentDatafun(){
        var msgin='studentData'
                this.datamsg = msgin+"...";
                this.loading = true;
    
                var datadb
                try{
    
                await axios.post("/api/student/studentData" )
                .then((res) => {
                datadb = res.data.message;
                console.log('res.data.message');
                console.log(res.data.message);
                this.studentData=res.data.data;
                this.datamsg = msgin+"...Done";
                this.loading = false;});
    
                } catch (e) {
                  this.loading = false
                      Swal.fire("error!", "some thing went wrong!", "error");
                  // Swal.fire(title='error' ,text="sorry")
                this.datamsg = msgin+"...error:"+e;
                console.log(e);
                // alert(msgin+" ... error");
                }

// this.mysubjects=this.studentData.mysubjects.filter(e => e.subject_id)
console.log('this.studentData.mysubjects');
console.log(this.studentData.mysubjects);


this.myabsents=this.studentData.myabsents
this.myabsentsum=this.studentData.myabsentsum
this.subarray=[]
this.mysubjects=this.studentData.mysubjects
this.studentData.mysubjects.forEach(element => {
  var array={
        id:element.subject_id,
    name:element.mysubjects.name,
  }

 
this.subarray.push(array)
});
 
this.studentData.schedule

// this.alldbarray.filter(c => c.class.indexOf(search) > -1)

var day1=this.studentData.schedule.filter(e => e.day==1)
var day2=this.studentData.schedule.filter(e => e.day==2)
var day3=this.studentData.schedule.filter(e => e.day==3)
var day4=this.studentData.schedule.filter(e => e.day==4)
var day5=this.studentData.schedule.filter(e => e.day==5)


this.myschedule={
day1:day1,
day2:day2,
day3:day3,
day4:day4,
day5:day5,
}





    },
    async  get_participation_plus_marks_fun(){
//       $store.getters.user.school_id
// $store.getters.user.class_id
// $store.getters.user.id

this.dataToClasswork={
                        // class_id           :class_id,
                        // class_name           :class_name,
                        // student_id         :this. $store.getters.user.id,
                        teacher_id         :8,
                        scschoolschedule_id:this.ctsclasses[0].id,
                        period             :period,
                        date               :date,
                        week               :this.thisweek,
                        subject_id         :this.ctsclasses[0].subject_id,
                        // school_id         :1,
                        
                        // notes              :null,
                        // mark               :5,
                        // round               :null,
                        // type               :'+',
                        }





    //set student_id
        this.dataFromSceduleInClasswork.student_id=this.student_id

  try{

            await axios.post("/api/teacher/get_participation_plus_marks" ,{'data':this.dataFromSceduleInClasswork})
            .then((res) => {
             this.participations = res.data.data;
             console.log('async  get_participation_plus_marks_fun(){');
             console.log(res.data);

  });} catch (e) {
              swal.fire( "failed",  "get_participation_plus_marks_fun some thing went wrong",  "error"  )
              console.log(e);}

},
  }
}
</script>
<style>
.dd{

border-color: #a94442;
-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
}
</style>