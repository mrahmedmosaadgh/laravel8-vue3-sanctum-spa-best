<template>
  <div class="w-full mx-auto text-gray-900">

calender

start date end date 
date range selector

<div class="fa-3x">
  <i class="fa-solid fa-circle-plus fa-beat"></i>
  <i class="fa-solid fa-heart fa-beat"></i>
  <i class="fa-solid fa-heart fa-beat" style="--fa-animation-duration: 0.5s;" ></i>
  <i class="fa-solid fa-heart fa-beat" style="--fa-animation-duration: 2s;"></i>
  <i class="fa-solid fa-heart fa-beat" style="--fa-beat-scale: 2.0;"></i>
</div>



<div class="py-20 h-screen px-1">
            <form @submit.prevent="createterm()" class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-md">
                <div class="md:flex">
                    <div class="w-full p-3 px-6 py-10">

                      <div class="text-center">
                        <span class="text-xl text-gray-700"> Create Term</span>
                      </div>

                       <div class="mt-3 relative">
                        <span class="absolute p-1 bottom-8 ml-2 bg-white text-gray-400 ">year </span>

                        <input v-model="formdata.year"

                        required type="text" disabled

                         class="h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-blue-600">
                       </div>
                       <!-- </div> -->

                       <div class="mt-3 relative">
                        <span class="absolute p-1 bottom-8 ml-2 bg-white text-gray-400 ">Term </span>
                            <select 
                            v-model="formdata.term" 
                            @change="showtermcalender()"
                            required name="" class="h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-blue-600">

                                <option  v-for="(item,index) in 5" :key='index'  :value="item">{{item}}</option>
                            </select>
                       </div>
                       <div class="mt-3 relative">
                        <span class="absolute p-1 bottom-8 ml-2 bg-white text-gray-400 ">Start data</span>
                        <input  v-model="formdata.startdate"
                    
                        required type="date" class="h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-blue-600">
                       </div>

<!-- min='1899-01-01' max='2000-01-01' -->
                       <div class="mt-4 relative">
                        <span class="absolute p-1 bottom-8 ml-2 bg-white text-gray-400 ">End date</span>
                        <input  v-model="formdata.enddate"
                         :min='formdata.startdate'
                        
                         required type="date" class="h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-blue-600">
                       </div>


                       <div class="mt-4">

                        <button class="h-12 w-full bg-blue-600 text-white rounded hover:bg-blue-700" type="submit">Click to create Term <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>

                       </div>


                    </div>
                </div>
            </form>
        </div>

           <table class='tbl1'>
               <thead>
                   <tr>
                       <th>N</th>
                       <th>year</th>
                       <th>term</th>
                       <th>date</th>
                       <th>work</th>
                       <th>day</th>
                       <th>week</th>

                   </tr>
               </thead>
               <tbody>
                   <tr v-for="(item,index) in termcalender" :key='index'>
                       <td>{{index+1}}</td>
                       <td>{{item.year}}</td>
                       <td>{{item.term}}</td>
                       <td>{{item.date}}</td>
                       <td>{{item.work}}</td>
                       <td>{{item.day}}</td>
                       <td>{{item.week}}</td>

                   </tr>
               </tbody>
           </table>
<!-- <p>1:<input type="date" :value="dateinputvaluetoday"></p> -->
<p>2:<input type="date" value="2022-8-14"></p>
</div>


</template>



<script>

// import  teacomhome  from '../../../components/startcom/teacher/teacomhome.vue';

export default {
          // components:{teacomhome},//cards,
    data() {
        return {
          lang:'ar',
          myclass:[],

dbshow  :null,
dbedit  :null,
dbstore :null,
dbupdate:null,
date :null,

termcalender:null,
formdata:{
              year :(new Date().getFullYear())+'-'+(new Date().getFullYear()+1),
              term:null,
              week :1,
              day  :1,
              startdate:null,
              enddate:null,
              // startdate:new Date( new Date().getFullYear()+'-'+(new Date().getMonth()+1)+'-'+new Date().getDate()),
              // enddate:new Date().getFullYear()+'-'+(new Date().getMonth()+1)+'-'+new Date().getDate(),
              dates:null
              },


// date('d/M/Y h:i:s', $date);
          datamsg:null,
          loading:false,
          start:'',
          end:'',
          arrayofdates:[],
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

computed:{
// dateinputvaluetodaycom(){
//   var date = new Date();

// var day = date.getDate(),
//     month = date.getMonth() + 1,
//     year = date.getFullYear(),
//     hour = date.getHours(),
//     min  = date.getMinutes();

// month = (month < 10 ? "0" : "") + month;
// day = (day < 10 ? "0" : "") + day;
// hour = (hour < 10 ? "0" : "") + hour;
// min = (min < 10 ? "0" : "") + min;

// var today = year + "-" + month + "-" + day,
//     displayTime = hour + ":" + min; 
//     this.formdata.startdata=today
//     this.formdata.enddata=today
//     alert(today)
// return today
// // document.getElementById('formdate').value = today;      
// // document.getElementById("formtime").value = displayTime;
// }
},
  mounted(){
//  this.dateinputvaluetoday;
 this.dateinputvaluetoday()
  },
  methods:{
    dateinputvaluetoday(){
  var date = new Date();

var day = date.getDate(),
    month = date.getMonth() + 1,
    year = date.getFullYear(),
    hour = date.getHours(),
    min  = date.getMinutes();

month = (month < 10 ? "0" : "") + month;
day = (day < 10 ? "0" : "") + day;
hour = (hour < 10 ? "0" : "") + hour;
min = (min < 10 ? "0" : "") + min;

var today = year + "-" + month + "-" + day,
    displayTime = hour + ":" + min; 
    this.formdata.startdata=today
    this.formdata.enddata=today
    // alert(today)
// return today
// document.getElementById('formdate').value = today;      
// document.getElementById("formtime").value = displayTime;
},


 async showtermcalender(){

    try{
await axios.post('/api/admin/showtermcalender',{term:this.formdata.term})
      .then((res) => {
          console.log(res.data.message);
          this.termcalender=res.data.message
          // console.log(res.data.data);
          // this.termcalender=res.data.data
                    });
        } catch (e){console.log(e);}
},


 async createterm(){
console.log(this.formdata);

    for(var arr=[],dt=new Date(this.formdata.startdate); dt<=new Date(this.formdata.enddate); dt.setDate(dt.getDate()+1)){
     var dateformate=new Date(dt).getDate()+'-'+(new Date(dt).getMonth()+1)+'-'+new Date(dt).getFullYear()
        arr.push(dateformate);
    }
    this.formdata.dates=arr
if (arr.length>300) {
alert('Too many col')
return
}
if (this.formdata.startdate>this.formdata.enddate) {
alert('>')
return
}
// if (this.formdata.startdate<this.formdata.enddate) {
// alert('<')
// return
// }
if (this.formdata.startdate==this.formdata.enddate) {
alert('=')
return
}

    try{
await axios.post('/api/admin/scschoolcalenders',this.formdata)////store
      .then((res) => {
          console.log(res.data.message);
          console.log(res.data.data);
          this.termcalender=res.data.data
                    });
        } catch (e){console.log(e);}

 },



    trans(txt){
 return this.$store.state.trlang.tr[txt][this.$store.state.trlang.lang]
},


 }//methods
}
</script>
<style scoped>

</style>