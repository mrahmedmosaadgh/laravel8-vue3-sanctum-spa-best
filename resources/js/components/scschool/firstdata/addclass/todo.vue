<template>
  <div>
    <div class="table-wrapper">
    <table class="fl-table">
        <tr>
            <th>#</th>
            <th>stage    </th>
            <th>classname</th>
            <th>nameLong </th>
            <th>notes1   </th>            
        </tr>
<tr v-for="(classitem,index) in classes" :key="index" >

<td @dblclick="caneditarray[index].a1=false">
 

    <div v-show="caneditarray[index].a1">
    {{classitem.stage}}
    {{caneditarray[index].a1}}
    {{caneditarraydata[index].a1}}

    </div>
 
    <div v-if="!caneditarray[index].a1">
    {{classitem.stage}}
    {{caneditarray[index].a1}}
    {{caneditarraydata[index].a1}}
    <input      type="text" name="dd" :id="index+classitem.id"
    @keyup.enter="caneditarray[index].a1=true"
    @dblclick="caneditarray[index].a1=true"
    
v-model="caneditarraydata[index].a1">
    </div>

</td>

<td @dblclick="caneditarray[index].a2=false">
 [index].a2:{{index}} <br>


    <div v-show="caneditarray[index].a2">
    {{classitem.classname}}
    <!-- {{caneditarray[index].a2}}
    {{caneditarraydata[index].a2}} -->

    </div>
 <button @click="newval(index)">ffff</button>
   

    <input      type="text" 
    @keyup.enter="caneditarray[index].a2=true;newval(index,'a2')"
    @dblclick="caneditarray[index].a2=true"
    
v-model="caneditarraydata[index].a2">
{{txt1[index]}}:
{{txt2[index]}}
<!-- <input type="text" class=" bg-red-500"  v-on:blur="caneditarray[index].a2=!caneditarray[index].a2" > -->
<input type="text" class=" bg-green-500" v-model="txt1[index]"  @keyup.enter="showide(txt1[index])" >
<input type="text" class=" bg-blue-500" v-model="txt2[index]"  @keyup.enter="showide(txt2[index])"  >
<input type="text" class=" bg-blue-500" v-model="txt2[index]"  @blur.self ="showide(txt2[index])"  >
<input type="text" class=" bg-blue-500" v-model="txt2[index]"  @blur.self ="txt2sh[index]=!txt2sh[index]"  >

<input v-show="txt2sh[index]" type="text" class=" bg-yellow-500" v-model="txt2[index]"  @blur.self ="txt2sh[index]=!txt2sh[index]"  >
 <span v-show="!txt2sh[index]" @dblclick="txt2sh[index]=!txt2sh[index]">{{txt2[index]}}</span>
 
 <div v-if="!caneditarray[index].a2">

    </div>

</td>



    </tr>    
    </table>
 
<br>
{{caneditarray }} <br>
{{caneditarraydata}}<br>



 
    </div>
  </div>
</template>

<script>
export default {
    data() {
        return {
            classes             :'',
            txtmsg1             :'',
            loading             :true,
            show1             :false,
            txtstage            :'d2',
            txtclassname        :'5A',
            txtnameLong         :'fgfdfg',
            txtnotes1           :'fgggggjjj',
            txt1:[],
            txt2:[],
            txt3:[],
            txt4:[],
            txt5:[],
             txt1sh:[],
            txt2sh:[],
            txt3sh:[],
            txt4sh:[],
            txt5sh:[],           
            classesarray:[],
            caneditarray:[],
            caneditarraydata:[],

            
        };
    },
            mounted() {
            // alert('ff');
            // this.menuall();
            this.loadclasses();
            // this.menu2();
},
    methods: {
        showide(index) {
this.txt2sh[index]=!this.txt2sh[index]
//update data

// alert(index)
        },
      datasend(e) {
        e.preventDefault();
alert('datasend'
+this.txtstage    
+this.txtclassname
+this.txtnameLong 
+this.txtnotes1   
)

      },
        
    async  loadclasses() {
               
            // this.txtmsg1 = '';
            this.loading = true;  
            try{
            await axios.post("/api/class/all" )
            .then((res) => {
            this.classes = res.data.message;

var arr = {
'a1':true,
'a2':true,
'a3':true,
'a4':true,
'a5':true,
'a6':true,
'a7':true,
'a8':true 
}
 ;

for(var i = 0; i < this.classes.length; i++){
 
    // var cls = this.classes[i];
    this.caneditarray.push(arr);


var arrdata = {
    'a1': this.classes[i].stage,
    'a2':this.classes[i].classname,
    'a3':this.classes[i].nameLong,
    'a4':this.classes[i].notes1,
    'a5':'',
    'a6':'',
    'a7':'',
    'a8':'',
};

this.caneditarraydata.push(arrdata);
this.txt1.push(this.classes[i].stage);
this.txt2.push(this.classes[i].classname);
this.txt1sh.push(true);
this.txt2sh.push(true);
// for(var u = 0; u < this.classes.length; u++){
//     this.caneditarraydata.push(arrdata);
// } 

} 
console.log('this.caneditarray')
console.log(this.caneditarray)
console.log( 'this.caneditarraydata')
console.log( this.caneditarraydata)
//     var arr = [];
// for(var r = 0; r <this.classes[i].length; r++){
//     this.classes[i].push(this.classes[r]);

//   }   

            this.loading = false;
            });
            } catch (e) {
             console.log(e);
            this.txtmsg1 = "data error";
            alert("loadclasses data error");
            alert(e.response.status);
            }
setTimeout(() => this.txtmsg1 = '', 2000);

      },//loadclasses

 newval(index){
 
alert(this.caneditarraydata[index].a1 )
alert(this.caneditarray[index].a1 )
 },


      async   classnew(){
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


                  async   deleteclass(id){
            this.txtmsg1 = '';
            this.loading = true;  
            try{
            await axios.post("/api/class/delete",{'id':id} )
            .then((res) => {
            this.txtmsg1 = res.data.message;
            this.loading = false;

            });
            } catch (e) {
            // console.log(e);
            this.txtmsg1 = "data error";
            alert("saveparticipations data error");
            alert(e.response.status);
            }
            //  alert(this.txtmsg1);
setTimeout(() => this.txtmsg1 = '', 2000);
this.loadclasses()
          },//deleteclass

                  async   updateclass(id,index){
            this.txtmsg1 = '';
            this.loading = true;  
            try{
            await axios.post("/api/class/update",{
                'id':id,
                'stage'    :this.txt1[index],
                'classname':this.txt2[index],
                'nameLong' :this.txt3[index],
                'notes1'   :this.txt4[index]
                
                } )
            .then((res) => {
            this.txtmsg1 = res.data.message;
            this.loading = false;

            });
            } catch (e) {
            // console.log(e);
            this.txtmsg1 = "data error";
            alert("saveparticipations data error");
            alert(e.response.message);
            }
            //  alert(this.txtmsg1);
setTimeout(() => this.txtmsg1 = '', 2000);
this.loadclasses()
          },//editclass




    },

}
</script>

<style>
 .mybtn1 {
  background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
</style>