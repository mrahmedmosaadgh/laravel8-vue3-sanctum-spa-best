<template>
    <div class=" bg-gray-200" :dir="dir">

<!-- <button @click="recaptcha">Execute recaptcha</button> -->
<div class="grid place-items-center ">
<div class="w-full max-w-xs content-center">
  <div class=" bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4  ">
    <div class="mb-4 ">
          <div class=" text-center">

           
<p> {{trans['school_name'][lng]}} :{{school_name }}</p><br>
<p> {{school_grade}}</p><br>
<p> {{school_term }}</p><br>
 <p>{{trans['year'][lng]}}:{{school_year }}</p><br>
 <!-- <p>randcode_in{{randcode_in}}</p><br> -->
 
  <!-- {{loadmarksschooldata1.year}}</p> -->
<!-- <p>{{loadmarksschooldata1.name3}}</p> -->
      <!-- <label class="block text-gray-700 text-sm font-bold mb-2 h3" >
     {{trans['grade'][lng]}}:

      </label> -->
<div

>
<!-- =================================================================================== -->
<div class="flex justify-center">
  <div class="mb-3 xl:w-112" ><br> 

  </div>
</div>
<!-- =================================================================================== -->

</div>
 


<!-- =================================================== -->

     </div>


<div   v-if="new_search"  >

    <div   class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="text">
       {{trans['student_id'][lng]}}
      </label>
      <input    v-model="txt" @change="findmymark_fun()"
      class="shadow appearance-none border border-green-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="text" type="text" :placeholder="trans['student_id'][lng]">
      <p class="text-sm text-gray-700 select-none">write this code: {{randcode}}</p>
      <input    v-model="randcode_in" @change="findmymark_fun()"
      :class="(randcode_in==randcode)? 'bg-green-200':(randcode_msg==null)? '':'bg-red-100'"
      class="shadow appearance-none border border-green-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" 
      id="text" type="text" placeholder="code">
<p>{{randcode_msg}}</p>

      <!-- <p class="text-red-500 text-xs italic">  رقم الجلوس</p> -->
    </div>
    <div class="flex items-center justify-between">
      <button
      @click="findmymark_fun()"
      class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
 {{trans['search'][lng]}}     </button>
     
    </div>
</div>
</div>


  </div>
 
</div>
</div>































 <!-- t_head=[], -->
        <!-- t_body=[], -->
        <div class="tg-wrap" v-if="t_head1 != null" dir="rtl">
            <table class="tg">

                    <tr>
                        <th class="th-tg1">{{t_head2[1]}}</th>
                        <td class="td-tg2">
                            {{ Marks[t_head1[1]] }}
                        </td>
                    </tr>

                    <tr>
                        <th class="th-tg1">{{t_head2[0]}}</th>
                        <td class="td-tg1">
                            {{ Marks[t_head1[0]] }}
                        </td>
                    </tr>
                  <tr>
                        <th class="th-tg1">{{t_head2[2]}}</th>
                        <td class="td-tg1">
                            {{ Marks[t_head1[2]] }}
                        </td>
                    </tr>
            </table>
        </div>



        <div class="tg-wrap mob2" v-if="Marks != null" dir="rtl">
            <table class="tg">
                <thead>
                     
                    <tr>
                        <th v-for="(head2, index) in t_head2.slice(4)" :key="index" class="th-tg1">
                        {{ head2}}</th>
                    </tr>
                    <!-- <tr><th>#</th>
                        <th v-for="(head2, index) in t_head2" :key="index" class="th-tg1">
                            {{ head2}}
                        </th>
                    </tr>
                    <tr><th>#</th>
                        <th v-for="(head3, index) in t_head3" :key="index" class="th-tg1">
                            {{ head3}}
                        </th>
                    </tr>
                    <tr><th>#</th>
                        <th v-for="(head4, index) in t_head4" :key="index" class="th-tg1">
                            {{ head4}}
                        </th>
                    </tr>v-for="(item, index) in Marks" -->
                </thead>
                <tbody>
                    <tr class="tr1"  >

                        <td  v-for="(item2, index2) in t_head1.slice(4)" :key="index2" class="td-tg1">
                            {{ Marks[item2] }}
                            <!-- {{ Marks[`${t_head1[index2]}`] }} -->
                        </td>
                    </tr>
                </tbody>
            </table>


        </div>

      <button
      @click="new_search_fun()"
      class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-12 rounded focus:outline-none focus:shadow-outline" type="button">
 {{trans['new_search'][lng]}}     </button>


        <div class="tg-wrap mob1" v-if="Marks != null" dir="rtl">
            <table class="tg">
                <thead>
                    <tr>
                        <!-- <th>sub</th>
                        <th>mark</th> -->
                    </tr>

                </thead>
                <tbody>
                    <tr class="tr1"  v-for="(head2, index2) in t_head2.slice(4)" :key="index2" >
<th class="th-tg1">
{{head2}}
</th>
<td class="td-tg2">
{{ Marks[t_head1.slice(4)[index2]] }}
</td>


                    </tr>
                </tbody>
            </table>


        </div>



        <p><button @click="tble_MarksSetup_fromdb()">MarksSetup</button></p>



<!-- <p>lng:{{this.$route.path.split('/')[3]}}</p>
<p>id:{{this.$route.path.split('/')[4]}}</p>
<p>school_name:{{this.$route.path.split('/')[5]}}</p> -->

<p v-if="datadb=!null">datadb{{datadb.name}}</p>
<p> school_name :{{school_name }}</p>
<p> school_grade:{{school_grade}}</p>
<p> school_term :{{school_term }}</p>
school_datadb:{{school_datadb}} -->
<!-- school_datadb:{{school_datadb['name']}} -->
<!-- school_datadb:{{school_datadb.name}} -->


    </div>
</template>

<script>

import {useRoute} from 'vue-router'
export default {
    name: 'Laravel8Vue3SanctumSpaBest3Search',

    data() {
        return {
            txt:null,Marks:null,MarksSetup_id:null,MarksSetup_id:null,dir:'ltr',lng:'en',
            t_head1: null,
            t_head2: null,
            t_head3: null,
            t_head4: null,
            t_body: null,
            t_body3: null,
            datadb: null,
            school_datadb: null,
            school_name: null,
            school_grade: null,
            school_term: null,
            school_year: null,
            randcode_in: null,
            randcode: null,
            randcode_msg: null,
            new_search:true,
            trans:{
'year':{'en':'Year','ar':'العام'},
'grade':{'en':'Grade','ar':'الصف'},
'student_id':{'en':'Student ID','ar':'رقم الجلوس'},
'search':{'en':'search','ar':' بحث'},
'school_name':{'en':'School name ','ar':' مدرسة'},
'school_grade':{'en':'Grade','ar':' الصف'},
'school_term':{'en':'Term ','ar':' الفصل الدراسي'},//new_search
'new_search':{'en':'new_search ','ar':'بحث' },//new_search
            }
        };
    },

    mounted() {
        const route=useRoute()
        this.lng=route.params.lng
        alert(route.params.lng)
       this.randcode=this.randomIntFromInterval(1000, 9999)
this.lng_fun()
this.tble_MarksSetup_fromdb()
    },

    methods: {

new_search_fun(){
    this.new_search=true
    this.randcode_msg=null
    this.randcode_in=null
    this.txt=null

},


          randomIntFromInterval(min, max) { // min and max included 
  return Math.floor(Math.random() * (max - min + 1) + min)
},
        lng_fun(){
            try {
                this.lng=this.$route.path.split('/')[3]
                alert(this.lng)
            } catch (error) {
                alert(error)
            }
                    
                    
                    if (this.lng=='ar') {this.dir='rtl'}
                    if (this.lng=='en') {this.dir='ltr'}

        },
        async   tble_MarksSetup_fromdb(){

            
            // this.randcode=''

                    this.$store.state.loading = true;
                    this.MarksSetup_id=this.$route.path.split('/')[4]

                    try{
                    await axios.post("/api/marks/get_MarksSetup_search",{MarksSetup_id:this.MarksSetup_id} )
                    .then((res) => {
                    this.school_datadb = res.data.data;
this.school_name =this.school_datadb.name
this.school_grade=this.school_datadb.grade
this.school_term =this.school_datadb.term
this.school_year =this.school_datadb.year

                    console.log(res.data);

                    this.$store.state.loading = false;
                    return
                                        this.t_head = Object.keys(this.datadb[0]);

                    
                    });
                    } catch (e) {
                    console.log(e);
                                        this.$store.state.loading = false;
                    // alert(e.response.status);
                    }

                  },//fromdbfun


async recaptcha() {
      // (optional) Wait until recaptcha has been loaded.
      await this.$recaptchaLoaded()

      // Execute reCAPTCHA with action "login".
      const token = await this.$recaptcha('login')

      // Do stuff with the received token.
    },
        async   findmymark_fun(){


            // if (parseInt(this.randcode_in)=!parseInt(this.randcode)) {
            //   this.randcode_msg= 'wrong code'
            //     return
            // }
                        if (this.txt=='' || this.txt==null) {
    this.randcode_msg= 'Student id empty'
return
            }


            
                        if (parseInt(this.randcode_in)===parseInt(this.randcode)) {
    

            }else{
                              this.randcode_msg= 'wrong code'
                return
            }
 this.randcode=this.randomIntFromInterval(1000, 9999)
                // alert(this.randcode)
                // alert(this.randcode_in)
               try {
                // const componentName = getCurrentInstance()?.type.__name
                // const componentName = getCurrentInstance()?.type.__name
        // var network = new ActiveXObject('WScript.Network');
        // Show a pop up if it works
        // console.log(this.$parent.componentName);
        
        // console.log(getCurrentInstance());
        
        // alert(componentName);
//     }
//     catch (e) { }
// },
                    // this.loading = true;  
                    // try{
                    await axios.post("/api/marks/marks_search" ,{'txt':this.txt,school_id:'',id:''})
                    .then((res) => {
                    this.Marks = res.data.data.Marks;
                    this.t_head1=res.data.data.t_head1
                    this.t_head2=res.data.data.t_head2
                    console.log(res.data);
                    this.new_search=false
                    // this.loading = false;
                    });
                    } catch (e) {
                    console.log(e);
                    // alert(e.response.status);
                    }
// this.Marks
// this.t_head1
















                  },//fromdbfun

    },
};
</script>

<style   scoped>
.mob1{
    display: none;
}
.mob2{
    display: block;
}
@media screen and (max-width: 767px) {
.mob1{
    display: block;
}
.mob2{
    display: none;
}
}
</style>



