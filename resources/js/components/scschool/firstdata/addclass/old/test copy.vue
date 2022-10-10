<template>
    <div >
        
        <!--  -->
        test

<div
class=" position-fixed top-0 right-0   bg-green-400"
>
    {{dbdatamsg}} 
</div>

    <div
   
   
     class="fixed inset-0 flex justify-center items-center z-10 pointer-events-none">
      <p
      :class="animate"
       class="bg-red-400 text-2xl font-bold ">
        <!-- This should be on top of the map -->
        <!-- {{dbdatamsg}}  -->
        {{msg1.val}}
        </p>
    </div>

<p>msg1.can{{msg1.can}}</p>
<p>msg1.val{{msg1.val}}</p>


<!-- <div class="w-full h-screen bg-gray-200 flex justify-center items-center">
  <div class="bg-gray-400 w-96 h-96 relative z-0">
    <p class="italic text-bold bd-red-100 font-serif">Map</p>
    <div class="absolute inset-0 flex justify-center items-center z-10">
      <p class="text-2xl font-bold">This should be on top of the map</p>
    </div>
  </div>
</div> -->
<div  v-for=" (coldata,indx ) in dbdataarray" :key="coldata.id" >


{{coldata.classname}}
<input 
type="text"
 
v-model="col1txt[indx]" 
@blur.self="change('classname',col1txt[indx],coldata.id)"
>
<button @click="change('classname',coldata.classname,coldata.id)">change</button>
<button @click="change('classname','ttttt',coldata.id)">change tttt



</button>
        </div>
    </div>
</template>

<script>
    // import { ref, reactive } from 'vue';

    export default {
        data() {
            return {
                property: 'value',
                msg1:{'can':true , 'val':'uuu'},
              dbcolnamesarray:[ `id`, `schoolgroup_id`, `school_id`, `stage`, `classname`, `nameLong`, `createdby`, `notes1`, `notes2`, `notes3`, `created_at`, `updated_at`],
dbdataarray:[],
col1txt:[],
dbdatamsg:'',
animate:'',
              animclassin:' animate__animated  animate__jackInTheBox',
              animclassout:' animate__animated  animate__bounceOut',

dbdataarraynew:[],
loading : false,
                // property: 'value',
                // property: 'value',
                // property: 'value',
                // property: 'value',
                // property: 'value',
                // property: 'value',
                // property: 'value',
            };
        },
                mounted() {
            // alert('ff');
            // this.menuall();
            this.loadclasses();
            // this.menu2();
},
        // setup(props, context) {
        //     const featureRef = ref(value);
        //     const featureState = reactive({ property: 'value' });

        //     return {
        //         featureRef,
        //         featureState
        //     }
        // }
        methods:{

        async   loadclasses(){
            // this.dbdatamsg = '';
            this.loading = true;  
            try{
            await axios.post("/api/class/all" )
            .then((res) => {
            this.dbdataarray = res.data.message;
            console.log("this.dbdataarray" )
            console.log(this.dbdataarray )
            this.dbdataarraynew = this.dbdataarray;
            this.loading = false;
            });
            } catch (e) {
            // console.log(e);
            this.dbdatamsg = "data error";
            alert("saveparticipations data error");
            // alert(e.response.status);
            }
setTimeout(() => this.dbdatamsg = '', 5000);

this.col1txt=[]
for(var i = 0; i < this.dbdataarray.length; i++){
this.col1txt.push(this.dbdataarray[i].classname);
}
// var arrdata = {
//     'a1': this.dbdataarray[i].stage,
//     'a2':this.dbdataarray[i].classname,
//     'a3':this.dbdataarray[i].nameLong,
//     'a4':this.dbdataarray[i].notes1,
//     'a5':'',
//     'a6':'',
//     'a7':'',
//     'a8':'',
// };

 
// this.txt1.push(this.dbdataarray[i].stage);
// this.txt2.push(this.dbdataarray[i].classname);
// this.txt1sh.push(true);
// this.txt2sh.push(false);
 

// } 








 

          },//getclassesfromdb
async change(colname,coldata,id){
            this.dbdatamsg = '';
            if( coldata.trim()=='')return
            
            this.loading = true;  



// var key = "happyCount";
// var obj = {};

// obj[key] = someValueArray;
// myArray.push(obj);
            var predata={
                'id':id,
                [colname] : coldata
            };
            console.log('predata')
            console.log(predata)
//             return
// var obj = {};

// obj[colname] = coldata;
// predata.push(obj);




// Object.assign({}, ['a','b','c']);



// console.log('predata')
// console.log(predata)
            // this.animate =this.animclassout
            try{
            await axios.post("/api/class/updatecolval",predata)
             
            .then((res) => {

                this.dbdatamsg =res.data.message;
                
                this.msg1.val =res.data.message;
                this.animate =this.animclassin
            // this.dbdataarray = res.data.message;
            // console.log("this.dbdataarray" )
            // console.log(this.dbdataarray )
            // this.dbdataarraynew = this.dbdataarray;
            this.loading = false;
            });
            } catch (e) {
            // console.log(e);
            this.dbdatamsg = "data error";
            alert("saveparticipations data error");
            // alert(e.response.status);
            }
            animclassin:

setTimeout(() => this.animate =this.animclassout, 3000);

this.loadclasses()

},
        }
    }
</script>

<style lang="scss" scoped>

</style>