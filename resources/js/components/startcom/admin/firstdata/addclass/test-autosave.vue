<template>
    <div > test
============================================================ <br>
============================================================ <br>
<table>
    <thead>
    <tr>
        <th>id</th>
        <th>classname</th>
        <th>stage</th>
    </tr>
    </thead>
    <tbody>
    <tr v-for=" (cl,index ) in alltxt" :key="index">
   
    
        <td>
            <input type="text" v-model.lazy="alltxt[index][1]" @change="change(dbcolnamesarray_edit[1],cl[1],cl[0])">
            <!-- change(col name,col data,col id data)" -->
            <p >{{cl[1]}} </p> 
        </td>

        <td>
            <input type="text" v-model.lazy="alltxt[index][2]" @change="change(dbcolnamesarray_edit[2],cl[2],cl[0])">
            <p >{{cl[2]}} </p> 
        </td>

        <td>
            <input type="text" v-model.lazy="alltxt[index][3]" @change="change(dbcolnamesarray_edit[3],cl[3],cl[0])">
            <p >{{cl[3]}} </p> 
        </td>
    <!-- @change.passive -->
    </tr>
    </tbody>
</table>
=============================================================




        <!--  -->


<div class="fixed p-2   top-0 right-0   bg-green-200">
{{dbdatamsg}}
</div>
     


    <!-- <div

     class="fixed inset-0 flex justify-center items-center z-10 pointer-events-none">
      <p
      :class="animate"
       class="bg-red-400 text-2xl font-bold ">
 
        {{msg1.val}}
        </p>
    </div> -->

<p>msg1.can{{msg1.can}}</p>
<p>msg1.val{{msg1.val}}</p>


    </div>
</template>

<script>
    // import { ref, reactive } from 'vue';

    export default {
        data() {
            return {

                msg1:{'can':true , 'val':'uuu'},
              dbcolnamesarray:[ `id`, `schoolgroup_id`, `school_id`, `stage`, `classname`, `nameLong`, `createdby`, `notes1`, `notes2`, `notes3`, `created_at`, `updated_at`],
              dbcolnamesarray_edit:[  `id`,`classname`, `stage`, `nameLong`, `notes1`, `notes2`, `notes3`, `created_at`, `updated_at`],
dbdataarray:[],
col1txt:[],
col1txtorigin:[],
alltxt:[],
alltxtorigin:[],
 
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


//         computed: {
//     // a computed getter
//     updatevalue() {
//       // `this` points to the vm instance

//       return col1txt[indx]
//     }
//   },
        methods:{

        async   loadclasses(){
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
// let dbcolnamesarray=[`stage`, `classname`, `nameLong`, `notes1`]

this.col1txt=[]
this.alltxt=[]
this.alltxtorigin=[]
this.col1txtorigin=[]
for(var i = 0; i < this.dbdataarray.length; i++){
    // let datain={
    //     'classname':this.dbdataarray[i].classname,
    //     'stage'    :this.dbdataarray[i].stage    ,
    //     'nameLong' :this.dbdataarray[i].nameLong ,
    //     'notes1'   :this.dbdataarray[i].notes1   ,
    //      }
           let datain=[
        this.dbdataarray[i].id,
        this.dbdataarray[i].classname,
        this.dbdataarray[i].stage    ,
        this.dbdataarray[i].nameLong ,
        this.dbdataarray[i].notes1   ,
        ]
this.alltxt.push(datain);
this.alltxtorigin.push(datain);


this.col1txt.push(this.dbdataarray[i].classname);

 this.col1txtorigin.push(this.dbdataarray[i].classname);
}
console.log(this.alltxt)
console.log(this.alltxt[0][1])
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
//     alert(
// colname+coldata+id
        
//     )
            this.dbdatamsg = '';
            if( coldata.trim()==this.col1txtorigin)return
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