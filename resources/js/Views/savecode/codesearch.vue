<template>
    <div>
<div class="flex">
    <h2 class=" p-2 m-2 ">name:</h2> <input class="wf sm:min-w-max  active:w-52 z-10 "
    v-model="data.name" type="text" />
    

      <div     class="absolute  top-0 w-8 h-8 py-2  text-center select-none   rounded-full cursor-pointer text-green-600  hover:text-green-900 active:text-green-400 hover:bg-slate-300" 
    @click="pastme(0)" >
      <span v-html="msgpast0"></span>
    </div>

</div>

<div class="flex">
      
<div>
        <div class="flex">
          <input   type="text" class="wf h-5" v-model="txtfind" @change="find()">
    <div 
    class="mp relative top-0 z-10 w-8 h-8 py-2  text-center select-none   rounded-full cursor-pointer text-blue-600  hover:text-blue-900 hover:bg-slate-300 active:text-blue-400 " 
    @click="find('')" >
      <i class="fa-solid fa-magnifying-glass"></i>
    </div>

    <div 
    class="mp w-8 h-8 py-2  text-center select-none   rounded-full cursor-pointer text-blue-600  hover:text-blue-900 hover:bg-slate-300 active:text-blue-400 " 
    @click="find('all')" >
      <i class="fa-solid fa-globe"></i>
    </div>
</div>
 <select  class=" w-full " v-model="myindexdisplay" @change="display()" @click="display()" size="15">
 <option
 v-for="(item,index) in datadb" :key="index"
  :value="index"
  >{{item.name}}</option>
 </select>
</div>









<div class="flex">






 <div class=" bg-blue-200 w-11/12  p-3 m-2">




 <!-- ----------------------------------------------------------------------- -->




 <div class="flex">

<div class="flex bg-amber-300 p-2 m-1">
     <div    class="w-8 h-8 py-2  text-center select-none   rounded-full cursor-pointer text-blue-600  hover:text-blue-900 hover:bg-slate-300 active:text-blue-400 " 
    @click="newcode()" >
    <i class="fa-solid fa-plus"></i></div>



<!-- up del------------------------------------------- -->
    
    
      <div
      class=" w-8 h-8 py-2  text-center select-none   rounded-full cursor-pointer text-blue-600  hover:text-blue-900 hover:bg-slate-300 active:text-blue-400 " 
      @click="updatecode()" >
        <span  v-html="msgupdate"></span>
      </div>
    <div class="flex"  v-if="myid!=''">

    


      <div
      class=" w-8 h-8 py-2  text-center select-none   rounded-full cursor-pointer text-red-600  hover:text-red-900 active:text-red-400 hover:bg-slate-300" 
      @click="deletecode()" >
        <span v-html="msgdelete"></span>
      </div>
  </div></div>
<!-- up del------------------------------------------- -->
<div class="flex">

    <h2>lang:</h2><input class=" w-5"
    v-model="data.lang" type="text" />
</div>
 </div>


<!-- ------------------------------------------------------------------- -->





<details open>
  <summary >
<div class="flex">
   <div class=" p-2 m-2">
    block1 name
    </div>  <input class="wf" v-model="data.b1n" type="text" />

</div>
  

  </summary>

        <div class=" relative top-0 z-10   flex">
      <div  class=" w-8 h-8 py-2  text-center select-none   rounded-full cursor-pointer text-green-600  hover:text-green-900 active:text-green-400 hover:bg-slate-300" 
    @click="copyme(1)" type="button" v-clipboard:copy="message"
     v-clipboard:success="onCopy" v-clipboard:error="onError">
      <span v-html="msgcopy1"></span>
    </div>
    
      <div     class=" w-8 h-8 py-2  text-center select-none   rounded-full cursor-pointer text-green-600  hover:text-green-900 active:text-green-400 hover:bg-slate-300" 
    @click="pastme(1)" >
      <span v-html="msgpast1"></span>
    </div>    
</div>
    
    <div><MonacoEditor theme="vs" :language="lang"  :height="height"    :width="width"  :diffEditor="false"
    v-model:value="data.b1"></MonacoEditor></div>
</details>






<details>
  <summary>block2 name <input v-model="data.b2n" type="text" /></summary>
    
          <div 
    class=" w-8 h-8 py-2  text-center select-none   rounded-full cursor-pointer text-green-600  hover:text-green-900 active:text-green-400 hover:bg-slate-300" 
    @click="copyme(2)" type="button" v-clipboard:copy="message"
     v-clipboard:success="onCopy" v-clipboard:error="onError">
      <span v-html="msgcopy2"></span>
    </div>
      <div 
    class=" w-8 h-8 py-2  text-center select-none   rounded-full cursor-pointer text-green-600  hover:text-green-900 active:text-green-400 hover:bg-slate-300" 
    @click="pastme(2)" >
      <span v-html="msgpast2"></span>
    </div>
    <div><MonacoEditor theme="vs" :language="lang"  :height="height"    :width="width"  :diffEditor="false"
    v-model:value="data.b2"></MonacoEditor></div>
</details>

<details>
  <summary>block3 name <input v-model="data.b3n" type="text" /></summary>
              <div 
    class=" w-8 h-8 py-2  text-center select-none   rounded-full cursor-pointer text-green-600  hover:text-green-900 active:text-green-400 hover:bg-slate-300" 
    @click="copyme(3)" type="button" v-clipboard:copy="message"
     v-clipboard:success="onCopy" v-clipboard:error="onError">
      <span v-html="msgcopy3"></span>
    </div>
         <div 
    class=" w-8 h-8 py-2  text-center select-none   rounded-full cursor-pointer text-green-600  hover:text-green-900 active:text-green-400 hover:bg-slate-300" 
    @click="pastme(3)" >
      <span v-html="msgpast3"></span>
    </div>
   
   
    <div><MonacoEditor theme="vs" :language="lang"  :height="height"    :width="width"  :diffEditor="false"
    v-model:value="data.b3"></MonacoEditor></div>
</details>

<details>
  <summary>block4 name <input v-model="data.b4n" type="text" /></summary>
              <div 
    class=" w-8 h-8 py-2  text-center select-none   rounded-full cursor-pointer text-green-600  hover:text-green-900 active:text-green-400 hover:bg-slate-300" 
    @click="copyme(4)" type="button" v-clipboard:copy="message"
     v-clipboard:success="onCopy" v-clipboard:error="onError">
      <span v-html="msgcopy4"></span>
    </div>
   
         <div 
    class=" w-8 h-8 py-2  text-center select-none   rounded-full cursor-pointer text-green-600  hover:text-green-900 active:text-green-400 hover:bg-slate-300" 
    @click="pastme(4)" >
      <span v-html="msgpast4"></span>
    </div>

   <div><MonacoEditor theme="vs" :language="lang"  :height="height"    :width="width"  :diffEditor="false"
    v-model:value="data.b4"></MonacoEditor></div>
</details>

<details>
  <summary>block5 name <input v-model="data.b5n" type="text" /></summary>
              <div 
    class=" w-8 h-8 py-2  text-center select-none   rounded-full cursor-pointer text-green-600  hover:text-green-900 active:text-green-400 hover:bg-slate-300" 
    @click="copyme(5)" type="button" v-clipboard:copy="message"
     v-clipboard:success="onCopy" v-clipboard:error="onError">
      <span v-html="msgcopy5"></span>
    </div>
          <div 
    class=" w-8 h-8 py-2  text-center select-none   rounded-full cursor-pointer text-green-600  hover:text-green-900 active:text-green-400 hover:bg-slate-300" 
    @click="pastme(5)" >
      <span v-html="msgpast5"></span>
    </div>
    
    <div><MonacoEditor theme="vs" :language="lang"  :height="height"    :width="width"  :diffEditor="false"
    v-model:value="data.b5"></MonacoEditor></div>
</details>









<details>
  <summary @click="alltxtfun()" >All</summary>


    
    <div><MonacoEditor theme="vs" :language="lang"  :height="height"    :width="width"  :diffEditor="false"
    v-model:value="alltxt"></MonacoEditor></div>
</details>







</div>
</div>
    </div></div>
</template>

<script>
import MonacoEditor from 'monaco-editor-vue3'


export default {
    name: 'Laravel8Vue3SanctumSpaBest3Newcode',
  components: {
    MonacoEditor
  },
    data() {
        return {


    langs:['json', 'javascript', 'html', 'xml'],lang:'javascript',
    languages: ['json', 'javascript', 'html', 'xml'],
    original:'ffff',
    value:'tt',









    msgcopy:'<i class="fa-solid fa-copy "></i>',
    msgupdate:'<i class="fa-solid fa-floppy-disk "></i>',
    msgdelete:'<i class="fa-solid fa-x "></i>',
    msgdelete2:'<i class="fa-solid fa-trash "></i>',
myid:'',myclipboard:'', txtfind:null,myindexdisplay:0,
    height:'300',
    width:'800',
   
        message:'',onCopy:'onCopy txt',onError:'onError txt',
    msgpast0:'<i class="fa-solid fa-paste"></i>',
    msgpast1:'<i class="fa-solid fa-paste"></i>',
    msgpast2:'<i class="fa-solid fa-paste"></i>',
    msgpast3:'<i class="fa-solid fa-paste"></i>',
    msgpast4:'<i class="fa-solid fa-paste"></i>',
    msgpast5:'<i class="fa-solid fa-paste"></i>',
    msgcopy1:'<i class="fa-solid fa-copy"></i>',
    msgcopy2:'<i class="fa-solid fa-copy"></i>',
    msgcopy3:'<i class="fa-solid fa-copy"></i>',
    msgcopy4:'<i class="fa-solid fa-copy"></i>',
    msgcopy5:'<i class="fa-solid fa-copy"></i>',
mytxt1:'',
mytxt2:'',
mytxt3:'',
mytxt4:'',
mytxt5:'',
alltxt:'',
      datadb: null,
            data: {
        'id': null,
        'name': "new code",lang: "javascript",
        'b1n': null,
        'b1': null,
        'b2n': null,
        'b2': null,
        'b3n': null,
        'b3': null,
        'b4n': null,
        'b4': null,
        'b5n': null,
        'b5': null,
        'notes': null,

      },
              };
    },

    mounted() {
        
    },

    methods: {
alltxtfun(){
this.alltxt=
// this.data.b1n+'\n'
this.data.b1+'\n '
// +'\n //'+this.data.b2n+'\n'
+this.data.b2+'\n'
// +'\n //'+this.data.b3n+'\n'
+this.data.b3+'\n'
+this.data.b4+'\n'
+this.data.b5+'\n'
},

      pastme(num){
// this['mytxt'+num]="11111111111111"
// alert(this['mytxt'+num])

navigator.clipboard.readText()


  .then(text => {
    if (num==0) {
          this.data['name']=text
    } else {
         this.data['b'+num]=text
    }
 
    // this['mytxt'+num]=text
    this.myclipboard=text

   setTimeout(() => this['msgpast'+num]='<i class="fa-solid fa-paste"></i>', 1000);
        this['msgpast'+num]='<i class="fa-solid fa-check animate-ping"></i>'



    console.log('Pasted content: ', text);
  })
  .catch(err => {
    console.error('Failed to read clipboard contents: ', err);
  });

      },









 newcode(){
  this.myid=''
  this.emptydata()
 },
copyme(num){
this.message=this.data['b'+num]
  this.onCopy = (e) => {
    setTimeout(() => this['msgcopy'+num]='<i class="fa-solid fa-copy"></i>', 1000);
        this['msgcopy'+num]='<i class="fa-solid fa-check animate-ping"></i>'
      }
      this.onError = (e) => {
        alert('Failed to copy texts')
      }

},











async   find(txt){

 this.emptydata()
    if (txt=='all') {
        this.txtfind=''
    }
    // this.loading = true;  
                        try{
                        await axios.post("/api/savecode",{data:this.data,method:'find',txt:this.txtfind} )
                        // await axios.post("/api/savecode",{'data':this.data,'method':method} )
                        .then((res) => {
                        this.datadb = res.data;
                        this.data = this.datadb[0];
        console.log(this.datadb);
             console.log('res.status');
             console.log(res.status);
      console.log('res.data.message');
      console.log(res.data.message);
      console.log('res.data');
      console.log(res.data);
      if( res.data.message.search("No connection")){
       console.log('No connection');
      }
                        // this.loading = false;
                        });
                        } catch (e) {
                        console.log(e);
             console.log(e.status);
      console.log(e.headers);
                        // alert(e.response.status);
                        }
                      },//savecode


      emptydata(){
        // alert('emptydata')
        this.data= {
        'id': null,
        'name': "new code",lang: "javascript",
        'b1n': '',
        'b1': '<>',
        'b2n': '',
        'b2': '<>',
        'b3n': '',
        'b3': '<>',
        'b4n': '',
        'b4': '<>',
        'b5n': '',
        'b5': '<>',
        'notes': '',

      }



},
// display(myindex,id){
display(){
  this.emptydata()
      this.data= this.datadb[this.myindexdisplay]
  this.myid=this.datadb[this.myindexdisplay].id

this.alltxtfun()
if (this.data.b1==null) {
this.data.b1='<>'
}
if (this.data.b2==null) {
this.data.b2='<>'
}
if (this.data.b3==null) {
this.data.b3='<>'
}if (this.data.b4==null) {
this.data.b4='<>'
}if (this.data.b5==null) {
this.data.b5='<>'
}

},

// --------------------------------------

            async   updatecode(){
              if (this.data.name=='' || this.data.name==null ||this.data.name.length<3  ) {
                return
                
              }
              var method
                          this.data.id = this.myid;  
                        try{
                          if(this.myid==''){
                            if (confirm("are you sure save!") != true) {return}
                            method=''
                          }else{
                            if (confirm("are you sure update!") != true) {return}
                            method='update'
                          }
                        await axios.post("/api/savecode",{data:this.data,method:method} )
                        // await axios.post("/api/savecode",{'data':this.data,'method':method} )
                        .then((res) => {
                        this.datadb = res.data;
                            setTimeout(() => this.msgupdate='<i class="fa-solid  fa-floppy-disk "></i>', 1000);

        this.msgupdate='<i class="fa-solid fa-check animate-ping"></i>'








                        // this.data = res.data[0];
        console.log(res.data);
                        // this.loading = false;
                        });
                        } catch (e) {
                        console.log(e);
                        // alert(e.response.status);
                        }
                        this.getcode()
                      },//updatecode
            async   deletecode(){
              if(this.myid=='')return
                            if (confirm("are you sure delete!") != true) {return}

                          this.data.id = this.myid;
                        try{
                        await axios.post("/api/savecode",{data:this.data,method:'dalete'} )
                        // await axios.post("/api/savecode",{'data':this.data,'method':method} )
                        .then((res) => {
                        this.datadb = res.data;

   setTimeout(() => this.msgdelete='<i class="fa-solid fa-x"></i>', 1000);
        this.msgdelete='<i class="fa-solid fa-check animate-ping"></i>'


                        // this.data = res.data[0];
        console.log(res.data);
                        // this.loading = false;
                        });
                        } catch (e) {
                        console.log(e);
                        // alert(e.response.status);
                        }
                      this.getcode()},//deletecode
            async   getcode(){
 this.emptydata()
                        // this.loading = true;  
                        try{
                        await axios.post("/api/savecode",{data:this.data,method:'get'} )
                        // await axios.post("/api/savecode",{'data':this.data,'method':method} )
                        .then((res) => {
                        this.datadb = res.data;
                        this.data = this.datadb[0];
        console.log(this.datadb);
                        // this.loading = false;
                        });
                        } catch (e) {
                        console.log(e);
                        // alert(e.response.status);
                        }
                      },//getcode





// --------------------------------------


    },
};
</script>

<style  scoped>
input {
border-width: 2px;
 margin: 0.5rem;
 padding: 0.5rem;
 width: 50%;
}
.mp{
   margin: 0.5rem;
 padding: 0.5rem;
}
.wf{
 width: 100%;
}
</style>