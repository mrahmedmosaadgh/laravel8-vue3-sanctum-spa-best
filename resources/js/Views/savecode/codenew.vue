<template>
    <div>


 <select class=" w-full" v-model="myindexdisplay" @change="display()" size="3">
 <option
 v-for="(item,index) in datadb" :key="index"
  :value="index"
  >{{item.name}}</option>
 </select>

 <!-- ----------------------------------------------------------------------- -->
 <div 
    class=" w-8 h-8 py-2  text-center select-none   rounded-full cursor-pointer text-blue-600  hover:text-blue-900 hover:bg-slate-300 active:text-blue-400 " 
    @click="updatecode()" >
      <span  v-html="msgupdate"></span>
    </div>

    <div 
    class=" w-8 h-8 py-2  text-center select-none   rounded-full cursor-pointer text-red-600  hover:text-red-900 active:text-red-400 hover:bg-slate-300" 
    @click="deletecode()" >
      <span v-html="msgdelete"></span>
    </div>
<!-- ------------------------------------------------------------------- -->
 <div class=" bg-blue-200 w-11/12  p-5 m-5">
<div class="flex">
    <h2>name:</h2> <input 
    v-model="data.name" type="text" />
    <h2>lang:</h2><input 
    v-model="data.lang" type="text" />
</div>



<details open>
  <summary >block1 name <input v-model="data.b1n" type="text" />
  
  
  </summary>
      <div 
    class=" w-8 h-8 py-2  text-center select-none   rounded-full cursor-pointer text-green-600  hover:text-green-900 active:text-green-400 hover:bg-slate-300" 
    @click="copyme(1)" type="button" v-clipboard:copy="message"
     v-clipboard:success="onCopy" v-clipboard:error="onError">
      <span v-html="msgcopy"></span>
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
      <span v-html="msgcopy"></span>
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
      <span v-html="msgcopy"></span>
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
      <span v-html="msgcopy"></span>
    </div>
    <div><MonacoEditor theme="vs" :language="lang"  :height="height"    :width="width"  :diffEditor="false"
    v-model:value="data.b4"></MonacoEditor></div>
</details>

<details>
  <summary>block5 name <input v-model="data.b5n" type="text" /></summary>
              <div 
    class=" w-8 h-8 py-2  text-center select-none   rounded-full cursor-pointer text-green-600  hover:text-green-900 active:text-green-400 hover:bg-slate-300" 
    @click="copyme(2)" type="button" v-clipboard:copy="message"
     v-clipboard:success="onCopy" v-clipboard:error="onError">
      <span v-html="msgcopy"></span>
    </div>
    <div><MonacoEditor theme="vs" :language="lang"  :height="height"    :width="width"  :diffEditor="false"
    v-model:value="data.b5"></MonacoEditor></div>
</details>

</div>

    </div>
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
    msgdelete:'<i class="fa-solid fa-trash "></i>',
    msgdelete2:'<i class="fa-solid fa-trash "></i>',
myid:'',myclipboard:'', txtfind:null,myindexdisplay:0,
    height:'300',
    width:'800',message:'',

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

copyme(txt){
this.message=this.data['b'+txt]
  this.onCopy = (e) => {
    setTimeout(() => this.msgcopy='<i class="fa-solid fa-copy"></i>', 1000);
        this.msgcopy='<i class="fa-solid fa-check animate-ping"></i>'
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
                        // this.loading = false;
                        });
                        } catch (e) {
                        console.log(e);
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
</style>