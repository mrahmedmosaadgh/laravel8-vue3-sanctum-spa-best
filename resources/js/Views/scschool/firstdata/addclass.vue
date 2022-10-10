<template>
    <div>
       <!-- loadingw-screen  overflow-auto--><div class="flex top-0 text-center"><div class="m-auto"><p v-show="loading"   class=" fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-50  text-sm font-medium     bg-green-100     text-blue-700 focus:z-10    inline-flex items-center"><svg role="status" class="inline w-4 h-4 mr-2 text-gray-200 animate-spin dark:text-gray-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/> <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="#1C64F2"/>  </svg>  Loading...{{errorsmsg}}</p> </div></div>
 





<button @click="canreload=!canreload" @keyup="canreload=!canreload" >reload</button>
<div v-if="canreload==true" class="   animate__animated animate__fadeIn">




<button @click="compview(1)" :class="(compviewarray[1])? 'bg-blue-300':''"  class="   animate__animated animate__fadeIn">cangenerate</button>
<button @click="compview(2)" :class="(compviewarray[2])? 'bg-blue-300':''"  class="   animate__animated animate__fadeIn">canloaddb</button>
<button @click="compview(3)" :class="(compviewarray[3])? 'bg-blue-300':''"  class="   animate__animated animate__fadeIn">todo</button>
<button @click="compview(4)" :class="(compviewarray[4])? 'bg-blue-300':''"  class="   animate__animated animate__fadeIn">test auto save</button>
<button @click="compview(5)" :class="(compviewarray[6])? 'bg-blue-300':''"  class="   animate__animated animate__fadeIn">test   save all</button>
<div v-show="compviewarray[1]"  class="   animate__animated animate__fadeIn">
<generate>---</generate>
</div>


<div v-show="compviewarray[2]"  class="   animate__animated animate__fadeIn">
<loaddb>---</loaddb>
</div>


<div v-show="compviewarray[3]"  class="   animate__animated animate__fadeIn">
<todo>---</todo>
 
</div>
<div v-show="compviewarray[4]"  class="   animate__animated animate__fadeIn">
 
<test>---</test>
</div>
<div v-show="compviewarray[5]"  class="   animate__animated animate__fadeIn">
 
<testsaveall>---</testsaveall>
</div>

</div>
compviewarray:{{compviewarray}}
 <!-- ======================================================= -->

<!-- <Addclassviewdb></Addclassviewdb> -->
<!-- <circle-svg class="w-6 h-6" /> -->
      <!-- -------------------------------------------------------------------- -->
    </div>
</template>
<script>
// import CircleSvg from '../components/';
// import CircleSvg from 'components/CircleSvg.vue';
// import Success from '../components/Success.vue'  //  Addclassviewdb ,
// import  addclassviewdb from '../'resources\js\components/scschool/firstdata
import  loaddb  from '../../../components/scschool/firstdata/addclass/loaddb.vue';
import  generate  from '../../../components/scschool/firstdata/addclass/generate.vue';
import  todo  from '../../../components/scschool/firstdata/addclass/todo.vue';
import  test  from '../../../components/scschool/firstdata/addclass/test-autosave.vue';
import  testsaveall  from '../../../components/scschool/firstdata/addclass/test-saveall.vue';
// import 'animate.css';testsaveall
export default {
  components:{
loaddb,generate,todo,test,testsaveall
  },
   data() {

            return {
              compviewarray:[false,false,false,false,false,false,false,false,false,false,false],
              canreload:true,
              // cangenerate:false,
// yyyy:'',
              textclass:" shadow-lg shadow-indigo-500/50 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500",
              gradesnames: [1,2,3,4,5,6,7,8,9,10,11,12,'kg1','kg2','prekg'],
              gradesnames_classcount: [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
              classesnamesletters: ['A','B','C','D','E','F','G','H','I'],
              name: '',

              setall: false,
              description: '',
              output: '',
              items: '',
              catalog1: 'grades',
              catalog2: 'classes',
              catalog3: 'classes',
              menuitems1: '',
              menuitems2: '',
              menuitems3: '', 
              errorsmsg: '', 
              loading:false,
              // gradesdb:[],
              menuAllData:null

            };

        },
 
        methods: {
          compview(index){
let val= this.compviewarray[index]
                this.compviewarray=[false,false,false,false,false,false,false,false,false,false,false]
                this.compviewarray[index]=!val
          },
// async   getclassesfromdb(){
//             this.loading = true;  
//             try{
//             await axios.post("/api/class/all" )
//             .then((res) => {
//             this.saveparticipations_returneddata = res.data;
//             this.loading = false;
//             });
//             } catch (e) {
//             // console.log(e);
//             this.errorsmsg = "data error";
//             alert("saveparticipations data error");
//             alert(e.response.status);
//             }

//           },//getclassesfromdb




async menuall() {    

  const response = await axios.post("api/menupost");

  const collection = response.data;
  this.items = collection;//filter menusall
      this.menuitems1 = collection.filter(f => f.catalog === this.catalog1);//filter menusall
 
  // console.log(this.menuitems1)
      this.menuitems2 = collection.filter(f => f.catalog === this.catalog2);//filter menusall
 
   // console.log(this.menuitems2)
      this.menuitems3 = collection.filter(f => f.catalog === this.catalog3);//filter menusall

  return;

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

} ,//menu12
}
}
</script>
<style>
        
</style>