<template >
    <div><!-- loadingw-screen  overflow-auto-->
       <div
       :class="(loading)? animclassin:animclassout "
        class="flex top-0 text-center"><div class="m-auto"><p    class=" fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-50  text-sm font-medium     bg-green-100     text-blue-700 focus:z-10    inline-flex items-center"><svg role="status" class="inline w-4 h-4 mr-2 text-gray-200 animate-spin dark:text-gray-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/> <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="#1C64F2"/>  </svg>  Loading...{{errorsmsg}}</p> </div></div>

<button @click="loading=true" class="hvr-back-pulse hvr-float-shadow">loading=true</button>
<button @click="loading=false">loading=false</button>
        <!-- <h1 class="animate__animated animate__bounce">An animated element</h1> -->
        <button   class="  animate__animated      animate__animated     animate__jello" @click="txtmsg1 ='ss'; alert(txtmsg1);">hhhhhhhhh</button>
        <button
         class="   animate__animated     animate__flipInX"
        
        @click="alert(txtmsg1);">nnnnnnnnn</button>
        loaddb   
          <div  class="  animate__animated     animate__flipInX">
 <br> txtmsg1:{{txtmsg1}} <br>
 txtmsg2:{{txtmsg2}}<br> 
        </div>  
        <div v-if="txtmsg1"  class="  animate__animated     animate__flipInX">
 txtmsg1:{{txtmsg1}}
        </div>

<!-- classes from database======================================================= -->
<!-- {{gradesdb}} -->
<div class="flex flex-col   animate__animated animate__fadeIn">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="  bg-blue-500 overflow-hidden text-center">
        <table class="m-auto w-11">
        <!-- <table class="min-w-full"> -->
          <thead class="bg-white border-b border">
            <tr>
              <th scope="col" class="text-sm border font-medium text-gray-900 px-6 py-4 text-left">
                Grade
              </th>
              <th scope="col" class="text-sm border font-medium text-gray-900 px-6 py-4 text-left">
                long name
              </th>              <th scope="col" class="text-sm border font-medium text-gray-900 px-6 py-4 text-left">
                stage
              </th>
 
            </tr>
          </thead>
          <tbody>

<!-- 
   v-for="(menuitem,index) in gradesnames" :key="index"
  >
   <td>{{menuitem }}</td>
   <td>
               <input type="number"  
              min="0" max="11"  
             v-model="gradesnames_classcount[index]"  class=" text-center bg-green-200  w-9 h-7 "  :name="'radio'+index">
         -->


            <tr 
             v-for="(menuitem,index) in gradesdb" :key="index"
            
            class="bg-white border  transition duration-300 ease-in-out hover:bg-gray-100">
              
              
              <td class="px-6 py-4 border whitespace-nowrap text-sm font-medium text-gray-900">
                <!-- { "id": 54, "schoolgroup_id": 1, "school_id": 1, "stage": null, "classname": "4D", "nameLong": null, "createdby": 2, "notes1": null, "notes2": null, "notes3": null, "created_at": "2022-06-25T15:51:23.000000Z", "updated_at": "2022-06-25T15:51:23.000000Z" }	 -->
                
                {{menuitem.schoolgroup_id }} :
                {{menuitem.school_id }} 
                <button @click="deleteclass(menuitem.id )">delete</button>

              </td>

              <td class="px-6 py-4 border whitespace-nowrap text-sm font-medium text-gray-900">

                {{menuitem.stage }} 

              </td>

                           <td class="px-6 py-4 border whitespace-nowrap text-sm font-medium text-gray-900">

               <!-- <span v-show="showitem2[index]"></span> -->
               
               
               
                {{menuitem.classname }} 

<br>


 <input v-show="txt2sh[index]" type="text" class=" bg-yellow-500" v-model="txt2[index]"  @blur.self ="classupdateone('4',index)"  >
 <span v-show="!txt2sh[index]" @dblclick="txt2sh[index]=!txt2sh[index]">{{txt2[index]}}</span>

              </td>
                              <td class="px-6 py-4 border whitespace-nowrap text-sm font-medium text-gray-900">

                {{menuitem.nameLong }}
              </td>


            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

gradesdb:{{gradesdb}}









    </div>
</template>
<script>

import 'animate.css';
export default {

    data() {
        return {
              loading :false,
              gradesdb:[],
              dbcolnamesarray:[ `id`, `schoolgroup_id`, `school_id`, `stage`, `classname`, `nameLong`, `createdby`, `notes1`, `notes2`, `notes3`, `created_at`, `updated_at`],
              txt1sh:[],
              txt2sh:[],
              txt3sh:[],
              txt4sh:[],
              txt1:[],
              txt2:[],
              txt3:[],
              txt4:[],
              txtmsg1:'aaaa',
              txtmsg2:null,
              errorsmsg:null,
              animclassin :' animate__animated  animate__jackInTheBox',
              animclassout:' animate__animated  animate__bounceOut',


        }
    },
        mounted() {
            // alert('ff');
            // this.menuall();
            this.loadclasses();
            // this.menu2();
},
    methods: {
alert(val){
    //  alert(this.txtmsg1);
    //  setTimeout(() => alert(this.txtmsg1), 2000);
  //    setTimeout(
  //   _ =>  alert(val), // enable the input
  //   1000 // after 1 second
  // )
       setTimeout(
    _ =>  this.txtmsg1='', // enable the input
    1000 // after 1 second
  )
},

        async   loadclasses(){
            this.txtmsg1 = '';
            this.loading = true;  
            try{
            await axios.post("/api/class/all" )
            .then((res) => {
            this.gradesdb = res.data.message;
            this.loading = false;
            });
            } catch (e) {
            // console.log(e);
            this.txtmsg1 = "data error";
            alert("saveparticipations data error");
            alert(e.response.status);
            }
setTimeout(() => this.txtmsg1 = '', 2000);





// var arr = {
// 'a1':false,
// 'a2':false,
// 'a3':false,
// 'a4':false,
// 'a5':false,
// 'a6':false,
// 'a7':false,
// 'a8':false 
// }
//  ;

for(var i = 0; i < this.gradesdb.length; i++){
 
    // var cls = this.gradesdb[i];
    // this.caneditarray.push(arr);


var arrdata = {
    'a1': this.gradesdb[i].stage,
    'a2':this.gradesdb[i].classname,
    'a3':this.gradesdb[i].nameLong,
    'a4':this.gradesdb[i].notes1,
    'a5':'',
    'a6':'',
    'a7':'',
    'a8':'',
};

// this.caneditarraydata.push(arrdata);
this.txt1.push(this.gradesdb[i].stage);
this.txt2.push(this.gradesdb[i].classname);
this.txt1sh.push(true);
this.txt2sh.push(false);
// for(var u = 0; u < this.gradesdb.length; u++){
//     this.caneditarraydata.push(arrdata);
// } 

} 








 

          },//getclassesfromdb
        async   deleteclass(id){
            this.txtmsg1 = '';
            this.loading = true;  
            try{
            await axios.post("/api/class/delete",{'id':id} )
            .then((res) => {
            this.txtmsg2 = res.data.message;
            this.loading = false;

            });
            } catch (e) {
            // console.log(e);
            this.txtmsg1 = "data error";
            alert("saveparticipations data error");
            alert(e.response.status);
            }
             alert(this.txtmsg1);
setTimeout(() => this.txtmsg1 = '', 2000);
this.loadclasses();
          },//deleteclass

      async   classupdateone(col,index){

let mydata=''

if  (col==1){ mydata=this.txt1[index]}
if  (col==2){ mydata=this.txt2[index]}
if  (col==3){ mydata=this.txt3[index]}
if  (col==4){ mydata=this.txt4[index]}
if  (col==5){ mydata=this.txt5[index]}
if  (col==6){ mydata=this.txt6[index]}
if  (col==7){ mydata=this.txt7[index]}
if  (col==8){ mydata=this.txt8[index]}
if  (col==9){ mydata=this.txt9[index]}
      //  var    mycol =eval('this.txt'+2)[index]
        // var myVar = eval(varString)
// var val1=this.mycol[index]
let colname=this.dbcolnamesarray[col]
console.log(mydata)
console.log(index)
console.log(colname)
// console.log(val1)
// this.txt2sh[index]=!txt2sh[index]
return
         console.log('classnew')
                // e.preventDefault();
            this.loading = true;
            try{
            await axios.post("/api/class/createone",
            {
'stage':this.txtstage    ,
'classname':this.txtclassname,
'nameLong':this.txtnameLong ,
'notes1':this.txtnotes1

            } )
            .then((res) => {
                console.log(res.data)
            this.txtmsg1 = res.data;
            this.loading = false;
            });
            } catch (e) {
             console.log(e);
            this.errorsmsg = "data error";
            alert("saveparticipations data error");
            alert(e.response.status);
            }
this.loadclasses()
          },//classnew

    },
    
}
</script>
<style >
 


/* ------------------ */
 
</style>