<template>
    <div>
        savecode' <br>
        <p>
          find:
          <input  type="text" v-model="txtfind" @change="find()">
        </p>
                <p><button @click="savecode()">savecode</button></p>
        <p><button @click="getcode()">getcode</button></p>
        <p><button @click="newcode()">newcode</button></p>
        <p><button @click="data=datadb[myindex++]">myindex++</button></p>
        <p><button @click="data=datadb[myindex--]">myindex--</button></p>
        <!-- <p><button @click="updatecode()">updatecode</button></p> -->
 <!-- {{data}} -->
 <select v-model="myindexdisplay" @change="display()" size="5">
 <option
 v-for="(item,index) in datadb" :key="index"
  :value="index"
  >{{item.name}}</option>
 </select>
<br><button @click="pastme()">pastme()</button>
<br><textarea  cols="30" rows="10" v-model="mytxt1"></textarea>
<br><textarea  cols="30" rows="10" v-model="mytxt4" ></textarea>

    <div 
    class=" w-8 h-8 py-2  text-center select-none   rounded-full cursor-pointer text-green-600  hover:text-green-900 active:text-green-400 hover:bg-slate-300" 
    @click="copymemytxt4()" type="button" v-clipboard:copy="message"
     v-clipboard:success="onCopy" v-clipboard:error="onError">
      <span v-html="msgcopy"></span>
    </div>





find:<input type="text" v-model="mytxt2">
replace:<input type="text" v-model="mytxt3" @change="replaceAll(mytxt1, mytxt2, mytxt3)">

<button @click="replaceAll(mytxt1, mytxt2, mytxt3)">replaceAll</button>
{{mytxt1}}
{{mytxt2}}
{{mytxt3}}
{{mytxt4}}













 <div v-for="(item,index) in datadb" :key="index">
  <div class="flex">
    <span @click="display(index,item.id)">{{item.name}}</span>

    <div 
    class=" w-8 h-8 py-2  text-center select-none   rounded-full cursor-pointer text-blue-600  hover:text-blue-900 hover:bg-slate-300 active:text-blue-400 " 
    @click="display(index,item.id)" >
      <i class="fa-solid fa-pen"></i>
    </div>


    </div>
 </div>
 <p>this.myid:{{myid}}</p>
        <p><button @click="myid=null">myid=null</button></p>

    <table class=" w-full">
      <tr>
        <th colspan="2" v-if="myid!=null">    
          <button class="  w-44 p-2 m-3" @click="updatecode()">
            <i class="fa-solid fa-pen"></i>
            <i class="fa-solid fa-floppy-disk"></i>
            updatecode</button>
         <button class=" w-44 p-2 m-3" @click="deletecode()">
          <i class="fa-solid fa-trash"></i>
          <i class="fa-solid fa-trash-can-xmark"></i>
          <i class="fa-solid fa-trash-check"></i>
          <i class="fa-solid fa-delete-left"></i>

          deletecode</button>
         </th>
      </tr>
<tr><td>{{data.name}}--name:<input v-model="data.name" type="text" /></td></tr>
<tr><td>lang:
              <select v-model="lang" >
              <option
              v-for="(item,index) in langs" :key="index"
               :value="item"
               >{{item}}</option>
              </select>
              <p>{{lang}}</p>
              </td></tr>





        <tr><td>b1 name:<input v-model="data.b1n" type="text" /></td>
        </tr>
            <tr><td>
replace


    <div 
    class=" w-8 h-8 py-2  text-center select-none   rounded-full cursor-pointer text-green-600  hover:text-green-900 active:text-green-400 hover:bg-slate-300" 
    @click="copyme()" type="button" v-clipboard:copy="message"
     v-clipboard:success="onCopy" v-clipboard:error="onError">
      <span v-html="msgcopy"></span>
    </div>

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



<input type="text" v-model="textreplace" >
with:<input type="text" v-model="textreplacewith" @change="textreplacefun()">
<button @click="textreplacefun()">textreplace</button><input v-model="data.b1" type="text" />
    <MonacoEditor
    theme="vs"

    :language="lang"
      :height="height"    :width="width" 

    :diffEditor="false"

    v-model:value="data.b1"
  ></MonacoEditor>
                </td>
        </tr>
                <tr><td>b2 name:<input v-model="data.b2n" type="text" /></td>
        </tr>
            <tr><td>

    <MonacoEditor
    theme="vs"

    :language="lang"
      :height="height"    :width="height" 

    :diffEditor="false"

    v-model:value="data.b2"
  ></MonacoEditor>
                </td>
        </tr>
                <tr><td>b3 name:<input v-model="data.b3n" type="text" /></td>
        </tr>
            <tr><td>

    <MonacoEditor
    theme="vs"

    :language="lang"
      :height="height"    :width="height" 

    :diffEditor="false"

    v-model:value="data.b3"
  ></MonacoEditor>
                </td>
        </tr>
                <tr><td>b4 name:<input v-model="data.b4n" type="text" /></td>
        </tr>
            <tr><td>

    <MonacoEditor
    theme="vs"

    :language="lang"
      :height="height"    :width="height" 

    :diffEditor="false"

    v-model:value="data.b4"
  ></MonacoEditor>
                </td>
        </tr>

    </table>
   












<div class="flex flex-wrap">
    <div class="w-full">
      <ul class="flex mb-0 list-none flex-wrap pt-3 pb-4 flex-row">
        <li v-for="(item,index) in tabstitle" :key="index" class="-mb-px mr-2 last:mr-0 flex-auto text-center">
          <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal" v-on:click="toggleTabs(index+1)" v-bind:class="{'text-pink-600 bg-white': openTab !== index+1, 'text-white bg-pink-600': openTab === index+1}">
            {{item}}
          </a>
        </li>







        <!-- <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
          <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal" v-on:click="toggleTabs(2)" v-bind:class="{'text-pink-600 bg-white': openTab !== 2, 'text-white bg-pink-600': openTab === 2}">
            Settings
          </a>
        </li>
        <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
          <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal" v-on:click="toggleTabs(3)" v-bind:class="{'text-pink-600 bg-white': openTab !== 3, 'text-white bg-pink-600': openTab === 3}">
            Options
          </a>
        </li> -->




      </ul>
      <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
        <div class="px-4 py-5 flex-auto">
          <div class="tab-content tab-space">
            <div v-bind:class="{'hidden': openTab !== 1, 'block': openTab === 1}">
              <p>
                Collaboratively administrate empowered markets via
                plug-and-play networks. Dynamically procrastinate B2C users
                after installed base benefits.
                <br />
                <br />
                Dramatically visualize customer directed convergence
                without revolutionary ROI.
              </p>
            </div>
            <div v-bind:class="{'hidden': openTab !== 2, 'block': openTab === 2}">
              <p>
                Completely synergize resource taxing relationships via
                premier niche markets. Professionally cultivate one-to-one
                customer service with robust ideas.
                <br />
                <br />
                Dynamically innovate resource-leveling customer service for
                state of the art customer service.
              </p>
            </div>
            <div v-bind:class="{'hidden': openTab !== 3, 'block': openTab === 3}">
              <p>
                Efficiently unleash cross-media information without
                cross-media value. Quickly maximize timely deliverables for
                real-time schemas.
                <br />
                <br />
                Dramatically maintain clicks-and-mortar solutions
                without functional solutions.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>








    </div>
</template>

<script>
import MonacoEditor from 'monaco-editor-vue3'

export default {
  components: {
    MonacoEditor
  },
    name: 'Laravel8Vue3SanctumSpaBest3Savecode',

  data() {
    return {
      tabstitle:[
        'search',
        'new',
        'replace',
        // 'search',
      ],
// mytxt1:'',
// mytxt2:'',
// mytxt3:'',
// mytxt4:'',
openTab: 1,
      
      code: 'const noop = () => {}',
    myid:'',myclipboard:'',
    msgcopy:'<i class="fa-solid fa-copy "></i>',
    msgupdate:'<i class="fa-solid fa-floppy-disk "></i>',
    msgdelete:'<i class="fa-solid fa-trash "></i>',
    message:'',onCopy:'onCopy txt',onError:'onError txt',
    txtfind:null,
    textreplace:null,textreplacewith:null,
    options:null,
    height:'300',
    width:'800',
    myindex:0,myindexdisplay:0,
    langs:['json', 'javascript', 'html', 'xml'],lang:'javascript',
    languages: ['json', 'javascript', 'html', 'xml'],
    original:'ffff',
    value:'tt',
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
      // data: {
      //           id: "",
      //   name: "new code",lang: "javascript",
      //   b1n: "",
      //   b1: "",
      //   b2n: "",
      //   b2: "",
      //   b3n: "",
      //   b3: "",
      //   b4n: "",
      //   b4: "",
      //   b5n: "",
      //   b5: "",
      //   notes: "",

      // },

      // SELECT 'id', 'school_id', 'calender_id', 'name', 'year', 'date', 'input_start', 'input_end', 'display_start', 'display_end', 'sub_names', 'sub_max', 'sub_min', 'created_at', 'updated_at' FROM 'forqan_controlmarks_setups' WHERE 1;
    };
  },
// setup() {
//       const message = 'message done22'
//       var msgcopy = 'copied'
//       const onCopy = (e) => {
//         // alert('You just copied: ' + e.text)
//         this.msgcopy='copied'
        
//         // setInterval(this.msg='Copy!', 2000);
// // setTimeout(() => this.basketAddSuccess = false, 2000);
// setTimeout(() => this.msgcopy='copied', 2000);
// // this.msgcopy='Copy!'
//       }
//       const onError = (e) => {
//         alert('Failed to copy texts')
//       }

//       return { message, onCopy, onError }
//     },
    mounted() {
 
    },
computed:{

},
    methods: {
 toggleTabs(tabNumber){
//  toggleTabs: function(tabNumber){
      this.openTab = tabNumber
    },




      replaceAll(string, search, replace) {
         alert(this.mytxt4) 
  this.mytxt4= string.split(search).join(replace);
  alert(this.mytxt4)
},
      pastme(){
// var text = await navigator.clipboard.readText();
// console.log(text);

navigator.clipboard.readText()
  .then(text => {
    this.mytxt1=text
    this.myclipboard=text
    console.log('Pasted content: ', text);
  })
  .catch(err => {
    console.error('Failed to read clipboard contents: ', err);
  });

      },
//     pastepasdfftext = await navigator.clipboard.readText();  onCopy(){
// alert('You just copied: ')
//         this.msgcopy='copied'
//       },
copyme(){
  
// alert('1 ' )
this.message=this.data.b1
//  this.onCopy() = (e) => {
  this.onCopy = (e) => {
    // alert('2 ' )
        // alert('You just copied: ' + e.text)
        
        // setInterval(this.msg='Copy!', 2000);
// setTimeout(() => this.basketAddSuccess = false, 2000);
setTimeout(() => this.msgcopy='<i class="fa-solid fa-copy"></i>', 1000);
        // this.msgcopy='<i class="fa-solid fa-check origin-top-left"></i>'
        // this.msgcopy='<i class="fa-solid fa-check animate-bounce"></i>'
        // this.msgcopy='<i class="fa-solid fa-check animate-spin"></i>'
        // this.msgcopy='<i class="fa-solid fa-check animate-pulse"></i>'
        this.msgcopy='<i class="fa-solid fa-check animate-ping"></i>'
// this.msgcopy='Copy!'//animate-pulse
      }
      this.onError = (e) => {
        alert('Failed to copy texts')
      }

},
copymemytxt4(){
  
// alert('1 ' )
this.message=this.mytxt4
//  this.onCopy() = (e) => {
  this.onCopy = (e) => {
    // alert('2 ' )
        // alert('You just copied: ' + e.text)
        
        // setInterval(this.msg='Copy!', 2000);
// setTimeout(() => this.basketAddSuccess = false, 2000);
setTimeout(() => this.msgcopy='<i class="fa-solid fa-copy"></i>', 1000);
        // this.msgcopy='<i class="fa-solid fa-check origin-top-left"></i>'
        // this.msgcopy='<i class="fa-solid fa-check animate-bounce"></i>'
        // this.msgcopy='<i class="fa-solid fa-check animate-spin"></i>'
        // this.msgcopy='<i class="fa-solid fa-check animate-pulse"></i>'
        this.msgcopy='<i class="fa-solid fa-check animate-ping"></i>'
// this.msgcopy='Copy!'//animate-pulse
      }
      this.onError = (e) => {
        alert('Failed to copy texts')
      }

},


textreplacefun(){
var text=this.data.b1
var result = text.replace(this.textreplace, this.textreplacewith);
// let result = text.replace('/'+this.textreplace+'/gi', this.textreplacewith);
this.data.b2n= result;
console.log(this.textreplace);
console.log(this.textreplacewith);
console.log(result);
console.log(text);
var txt1=this.data.b1
var txt2=this.textreplace
var txt3=this.textreplacewith
var txt4=txt1.replace(txt2, txt3);
console.log(txt1);
console.log(txt4);



},

async   find(){
 this.emptydata()
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
 newcode(){
  this.myid=''
  this.emptydata()
 },
      
            async   savecode(){

                        // this.loading = true;  
                        try{
                        await axios.post("/api/savecode",{data:this.data,method:''} )
                        // await axios.post("/api/savecode",{'data':this.data,'method':method} )
                        .then((res) => {
                        this.datadb = res.data;
                        // this.data = res.data[0];
        console.log(res.data);
this.emptydata()
                        });
                        } catch (e) {
                        console.log(e);
                        // alert(e.response.status);
                        }
                      this.getcode()},//savecode
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
    },
};
</script>

<style  scoped>
input {
border-width: 2px;
 margin: 0.5rem;
 padding: 0.5rem;
}

</style>