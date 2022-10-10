<template>
    <div>

        <br>
        <div class="w-full ">

        
        <div class="myclass m-auto ">
        
         <!-- v-for="(item1,index1) in $store.state.user.classname.split(',')" :key="index1"> -->
            <!-- <p class=" text-3xl">{{item1}}</p>
                    <div v-for="(item2,index2) in $store.state.user.subjects.split(',')" :key="index2">
            <div>
                        <p><button  class=" text-3xl m-2 p-2" @click="getclassstudentsfromdbfun(item1)">{{item2}}</button></p>
                
                </div>
        </div> -->
        
         
<p> 
     <label>  <select v-model="classname" 
         @change="getclassstudentsfromdbfun(classname)"
        
        >
        <option value="">choose class</option>
        <option
        v-for="(item1,index1) in $store.state.user.classname.split(',')" :key="index1"
         :value="item1"
        selected >{{item1}}</option>
        </select></label> </p>
 
<p v-if="classname != ''">
        <label><select v-model="subjectname" ><option value="">choose subject</option>
        <option
        v-for="(item2,index2) in $store.state.user.subjects.split(',')" :key="index2"
         :value="item2"
         >{{item2}}</option>
        </select></label></p>
<p  v-if="classname != '' && subjectname != '' ">
     
        <label><select v-model="tabletitle" ><option value="">choose </option>
        <option
        v-for="(item,index) in marksheadlist" :key="index"
         :value="item"
         >{{item}}</option>
        </select></label>
</p>

        
</div></div>

<div class="w-full"  v-if="classname != '' && subjectname != '' && tabletitle != '' ">
<div class=" m-auto w-1/2  text-3xl">
    First trimesrer marks
     Grade :{{classname}}  <br>
     subject: {{subjectname}}<br>
     teacher: {{$store.state.user.nameen}}<br>

     <!-- {{datadbclass}} -->
 


 <!-- t_head=[], -->
        <!-- t_body=[],  v-if="t_head != ''"-->
        <div class="tg-wrap">
            <table class="tg">
                <thead>
                    <tr>
                        <th class="th-tg1">#</th>
                        <!-- <th
                            v-for="(item, index) in t_head"
                            :key="index"
                            class="th-tg1"
                        >
                            {{ item }}
                        </th> -->

                                    
            <th class="th-tg2">Student name</th>
            <th>  {{tabletitle}}        </th>
<th class="th-tg1">notes</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(item,index) in datadbclass" :key="index"> 
                        <td :class="index % 2 == 0 ? 'td-tg1' : 'td-tg2'">
                            {{ index + 1 }}
                        </td>

                        <td :class="index % 2 == 0 ? 'td-tg1' : 'td-tg2'">
                            {{item.nameen}}
                        </td>
                        <td :class="index % 2 == 0 ? 'td-tg1' : 'td-tg2'">
                             <input type="number" min="0" max="20" name="" id="">
                        </td>
                        <td :class="index % 2 == 0 ? 'td-tg1' : 'td-tg2'">
                             <input type="text"  >
                        </td>

                    </tr>
                </tbody>
            </table>
                    <p><button class=" w-full p-4">save</button></p>
        </div>
 <!-- @click="tble_MarksSetup_fromdb()" -->
</div>

</div>


    </div>
</template>

<script>

export default {
    name: 'Laravel8Vue3SanctumSpaBest3Teacherhome',

    data() {
        return {
            classname:'',subjectname:'',tabletitle:'',
            markshead:'',datadbclass:'',
            marksheadlist:[
'Participation /درجات المشاركة / 20	     ',
'Homework / الواجبات / 15	                 ',
'Attendance/ الحضور / 10	                     ',
'Quizz1 / الاختبارات الفترية / 15	         ',
'Quizz2 / الاختبارات الفترية / 15	         ',
'Quizz total / الاختبارات الفترية / 15	     ',
'Projects - activities/المشاريع -الانشطة / 20',
'Quarter Test /الاختبار الربعي / 20	         ',
'Total/ المجموع / 100	                     ',
'Grade التقدير ',
'all كل الدرجات ',
            ],
        };
    },

    mounted() {
        
    },

    methods: {
            async   getclassstudentsfromdbfun(classname){
                // alert(classname)
                        // this.loading = true;  
                         this.classname = classname;  
                        try{
                        await axios.post("/api/teacher/getclassstudentsforqan" ,{'classname':this.classname})
                        .then((res) => {
                        this.datadbclass = res.data.data;
        console.log(res.data);
                        // this.loading = false;
                        });
                        } catch (e) {
                        console.log(e);
                        // alert(e.response.status);
                        }
                      },//fromdbfun
    },
};
</script>
<style  scoped>
.myclass{
    background-color: bisque;
width: 500px;
/* height: 200px; */
text-align: center;
}
label {
  position: relative;
  display: inline-block;
}
label:before {
  content: "";
  height: 31px;
  position: absolute;
  right: 7px;
  top: 3px;
  width: 22px;
  background: #fff;
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
  pointer-events: none;
  display: block;
}
label:after {
  content: " ";
  position: absolute;
  right: 15px;
  top: 46%;
  margin-top: -3px;
  z-index: 2;
  pointer-events: none;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 6.9px 4px 0 4px;
  border-color: #aaa transparent transparent transparent;
  pointer-events: none;
}
label select {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  padding: 0 30px 0 10px;
  border: 1px solid #e0e0e0;
  border-radius: 3px;
  line-height: 36px;
  height: 36px;
  background: #fff;
  margin: 0 5px 5px 0;
}

select::-ms-expand {
  display: none;
}
</style>