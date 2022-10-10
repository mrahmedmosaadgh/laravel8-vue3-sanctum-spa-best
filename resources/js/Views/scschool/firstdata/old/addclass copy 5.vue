<template>
    <div>
       <!-- loadingw-screen  overflow-auto--><div class="flex top-0 text-center"><div class="m-auto"><p v-show="loading"   class=" fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-50  text-sm font-medium     bg-green-100     text-blue-700 focus:z-10    inline-flex items-center"><svg role="status" class="inline w-4 h-4 mr-2 text-gray-200 animate-spin dark:text-gray-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/> <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="#1C64F2"/>  </svg>  Loading...{{errorsmsg}}</p> </div></div>
 

<table class="w-44">
  <tr>
    <th>Grade</th>
    <th>Classes number</th>
  </tr>

  <tr
   v-for="(menuitem,index) in gradesnames" :key="index"
  >
   <td>{{menuitem }}</td>
   <td>
               <input type="number"  
              min="0" max="11"  
             v-model="gradesnames_classcount[index]"  class=" text-center bg-green-200  w-9 h-7 "  :name="'radio'+index">
        
    </td>
  </tr>
</table>





   <div v-for="(menuitem,index) in gradesnames" :key="index">

       <div class=" flex items-stretch p-3 m-2">
     <span  class=" w-7   text-sm font-medium text-gray-900 dark:text-gray-400">
       {{menuitem }}</span>
                   <!-- <label class=" bg-green-200 w-12       mx-1 text-center cursor-pointer rounded"  :for="'radio00'+index"
                   @click="gradesnames_classcount[index]=0"
                   >{{0}}
             <input type="radio"    class=" bg-green-200   " :id="'radio00'+index" :name="'radio'+index">
           </label> -->
         <!-- <div class=" flex items-stretch  ">  -->
         
        
         
 <!-- v-for="index2 in 10" :key="index2" -->
           <!-- <label class=" bg-green-200  px-2  mx-1 text-center cursor-pointer rounded" > 
                </label> -->
             
             <input type="number"  
              min="0" max="11"  
             v-model="gradesnames_classcount[index]"  class=" text-center bg-green-200  w-9 h-7 "  :name="'radio'+index">
        
         <!-- </div> -->
       </div>
       <!-- <select v-model="gradesnames_classcount[index]" size="10">
         <option v-for="index2 in 10" :key="index2">
           {{index2}}</option>
       </select> -->
     
   </div>
<br> <button @click="classescreate">classescreate</button><br> 

<div v-if="this.classessnamesarray!=[]">
  {{this.classessnamesarray}}
  <div v-for="(grade,index) in gradesnames" :key="index">
    <span v-for="(gradenum,index2)  in parseInt(gradesnames_classcount[index])"
      :key="index2">{{grade}}{{classesnamesletters[index2]}}
      {{ (parseInt(gradesnames_classcount[index])!=index2+1) ? '-' : ''}}</span>
    <br>
  </div>
  <button @click="saveclasses">save class</button>
</div> 

<!-- classes from database======================================================= -->





 <!-- ======================================================= -->



      <!-- -------------------------------------------------------------------- -->
    </div>
</template>
<script>
export default {
   data() {

            return {
                
                 
              textclass:" shadow-lg shadow-indigo-500/50 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
,
              gradesnames: [1,2,3,4,5,6,7,8,9,10,11,12,'kg1','kg2','prekg'],
              gradesnames_classcount: [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
              classesnamesletters: ['A','B','C','D','E','F','G','H','I'],
              name: '',
              classessnamesarray: [],
setall: false,
              description: '',

              output: '',
items: '',
aaraytrue: [true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true],
        menu1arrayid      : [false,false,false,false,false,false,false,false,false,false,false,false,false,false,false,false,false,false,false],
        aarayfalse     : [false,false,false,false,false,false,false,false,false,false,false,false,false,false,false,false,false,false,false],
              
              catalog1: 'grades',
              catalog2: 'classes',
              catalog3: 'classes',
              menuitems1: '',
              menuitems2: '',
              menuitems3: '', 
              errorsmsg: '', 
              loading:false,
              menuAllData:null

            };

        },
 mounted() {
            // alert('ff');
            this.menuall();
            // this.menu1();
            // this.menu2();
        },

        methods: {
       async   getclassesfromdb(){
            try{
//  await axios
          // .get(
          //   "/api/class/all" +
          //     JSON.stringify(this.marks_arrayob) +
          //     "/" +
          //     JSON.stringify(this.absence_array)
          // )

          await axios.post("/api/class/all" )
            
         
          
          .then((res) => {

            this.saveparticipations_returneddata = res.data;
            this.loading = false;

          });
      } catch (e) {
// console.log(e.response.status);

        // console.log('saveparticipations error');
        // console.log(e);
        this.errorsmsg = "data error";
        alert("saveparticipations data error");
        alert(e.response.status);
      }

          },


                classescreate() {    
                 
// v-for="(grade,index) in gradesnames" :key="index"
// >


// <span
// v-for="(gradenum,index2)  in parseInt(gradesnames_classcount[index])" :key="index2"

// >{{grade}}{{classesnamesletters[index2]}} {{ (parseInt(gradesnames_classcount[index])!=index2+1) ? '-' : ''}}</span>
//  gradesnames.forEach(element => {
//   element

  
// for (let i = 0; i < cars.length; i++) {
//   text += cars[i] + "<br>";
// }



//  });
    //  =========== 
     this.classessnamesarray   =[]        
for (let i = 0; i < this.gradesnames.length; i++) {
  // text += cars[i] + "<br>";

for (let ii = 0; ii < parseInt(this.gradesnames_classcount[i]); ii++) {
  // text += cars[i] + "<br>";
let yy=this.gradesnames[i]+ this.classesnamesletters[ii]
this.classessnamesarray.push(yy )
}
// console.log(this.classessnamesarray);
    //  ===========             

}

},
            formSubmit(e) {

                e.preventDefault();

                let currentObj = this;
                // console.log([this.name, this.description,this.output  ])
return},
                
  async createPost()  {
    let url='api/class/all'
     const payload = {
          // userid: 42,
          // firstName: 'John',
          // lastName: 'Doe'
     }

     try {
          // axios automatically serializes the payload to JSON.
          // no need to JSON.stringify({ userid: 42, ...})
          const res = await axios.post(url, payload)
     } catch(error) {
          // console.log(error)
     }
},

menu1() { 
      this.menuitems1 = response.data.filter(f => f.catalog === this.catalog1);//filter menusall
},
menu2() { 
      this.menuitems2 = response.data.filter(f => f.catalog === this.catalog2);//filter menusall
},
menu3() { 
      this.menuitems3 = response.data.filter(f => f.catalog === this.catalog3);//filter menusall
},


async menuall() {    
  // GET request using axios with async/await
  // const response = await axios.post("api/menu");
  const response = await axios.post("api/menupost");
  //  const response =               await axios.get("api/menu", {
                    // catalog: 'classes',
                    // description: this.description
                // })
  // const response = await axios.get("api/menu");
 
//   this.menus = response.data;
  // this.menusall = response.data;
  //   this.catalogs = [...new Set(response.data.map(item => item.catalog))];//uniqe values
    // this.menus = response.data.filter(f => f.catalog === this.catalog);//filter menusall
    // this.items = response.data;//filter menusall
const collection = response.data;
  this.items = collection;//filter menusall
      this.menuitems1 = collection.filter(f => f.catalog === this.catalog1);//filter menusall
 
  // console.log(this.menuitems1)
      this.menuitems2 = collection.filter(f => f.catalog === this.catalog2);//filter menusall
 
   // console.log(this.menuitems2)
      this.menuitems3 = collection.filter(f => f.catalog === this.catalog3);//filter menusall
   // console.log(this.menuitems3)
  // console.log('response.data')
  // console.log(response.data)

    // this.items = response.data.filter(f => f.catalog === this.catalog1);//filter menusall
return;
// const unique = [...new Set(array.map(item => item.age))];//uniqe values
// this.users =
//         val != "All"
//           ? this.fetchedUsers.filter(f => f.mainLanguage === val)
//           : this.fetchedUsers;


// foreach (   itemee  in  this.items) {

//   // this.itemsarray=item.id
// this.itemsarray.push( itemee.id)
//   // if (Object.hasOwnProperty.call(object, key)) {
//   //   // const element = object[key];
   
//   // }
// }

// const initialBoard = []
// for (var i = 1; i <= 50; i++) {
//   initialBoard.push({number: i, isclicked: false});
// }

// const initialBoard = []
// for (var i = 1; i <= 50; i++) {
//   initialBoard.push({number: i, isclicked: false});
// }
//  var index = 0;
// for (const key in user) {
//   if (user.hasOwnProperty(key)) {
//         console.log(`Index: ${index}, ${key}: ${user[key]}`);
//         index++;
//     }
// }



this.itemsarray=[];
var index = 0;
for (const key in this.items) {
  if (this.items.hasOwnProperty(key)) {

// this.itemsarray.push(this.items[key].item)
this.itemsarray.push({
  id:this.items[key].id,
  item:this.items[key].item,
})

        // console.log(`Index: ${index}, ${key}: ${user[key]}`);
        // console.log(`Index: ${index}, ${key}: ${user[key]}`);
        index++;
    }

   
}
// this.itemsarraydrag=this.itemsarray

 // console.log(this.itemsarray);
},








           async menu12() {    
            //    await axios.post('http://localhost:8000/yourPostApi', {
            //         name: this.name,
            //         description: this.description
            //     })
            //     .then(function (response) {
            //         currentObj.output = response.data;
            //     })
            //     .catch(function (error) {
            //         currentObj.output = error;
            //     });


// api/class/all'   
// api/class/create'
// api/class/update'
// api/class/delete'
// console.log('this.menuitems1')

     try {

              //  await axios.get('/api/menu') 
               await axios.post('/api/menu', {}) 
              
              //       // name: this.name,
              //       // description: this.description
              //  console.log('this.menuitems1') })
                .then(function (response) {
                    // this.menuitems1  = response.data;
                    // console.log(this.menuitems1)
                    // console.log(response.data)
                })
                // .catch(function (error) {
                //     this.output = error;
                // });
          // axios automatically serializes the payload to JSON.
          // no need to JSON.stringify({ userid: 42, ...})
          // const res = await axios.post(url, payload)
     } catch(error) {
          console.log(error)
     }
  // GET request using axios with async/await
//   const response = await axios.get("api/menu");
// //   this.menus = response.data;
//   this.menusall = response.data;
//     this.catalogs = [...new Set(response.data.map(item => item.catalog))];//uniqe values
    // this.menus = response.data.filter(f => f.catalog === this.catalog);//filter menusall
    // this.menuitems1 = this.menuitems1.filter(f => f.catalog === this.catalog1);//filter menusall
// const unique = [...new Set(array.map(item => item.age))];//uniqe values
// this.users =
//         val != "All"
//           ? this.fetchedUsers.filter(f => f.mainLanguage === val)
//           : this.fetchedUsers;


// foreach (   itemee  in  this.items) {

//   // this.itemsarray=item.id
// this.itemsarray.push( itemee.id)
//   // if (Object.hasOwnProperty.call(object, key)) {
//   //   // const element = object[key];
   
//   // }
// }

// const initialBoard = []
// for (var i = 1; i <= 50; i++) {
//   initialBoard.push({number: i, isclicked: false});
// }

// const initialBoard = []
// for (var i = 1; i <= 50; i++) {
//   initialBoard.push({number: i, isclicked: false});
// }
//  var index = 0;
// for (const key in user) {
//   if (user.hasOwnProperty(key)) {
//         console.log(`Index: ${index}, ${key}: ${user[key]}`);
//         index++;
//     }
// }



// this.itemsarray=[];
// var index = 0;
// for (const key in this.items) {
//   if (this.items.hasOwnProperty(key)) {

// // this.itemsarray.push(this.items[key].item)
// this.itemsarray.push({
//   id:this.items[key].id,
//   item:this.items[key].item,
// })

//         index++;
//     }

   
// }
 
} 
}
}
</script>
<style>
    
</style>