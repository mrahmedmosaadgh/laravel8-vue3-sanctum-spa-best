<template>
    <div>
              <div
        :class="(animationMsg)?'animate__animated   animate__jello animate__animated animate__swing  ':' animate__animated  animate__flipOutX'"
          class="fixed p-2 top-0 right-0   bg-green-200">
            <span  ><span v-show="loading"  ><svg xmlns='http://www.w3.org/2000/svg' height='16' width='16' class='loadingsvg'><path d='M7 3V1s0-1 1-1 1 1 1 1v2s0 1-1 1-1-1-1-1z'/><path d='M4.63 4.1l-1-1.73S3.13 1.5 4 1c.87-.5 1.37.37 1.37.37l1 1.73s.5.87-.37 1.37c-.87.57-1.37-.37-1.37-.37z' fill-opacity='.93'/><path d='M3.1 6.37l-1.73-1S.5 4.87 1 4c.5-.87 1.37-.37 1.37-.37l1.73 1s.87.5.37 1.37c-.5.87-1.37.37-1.37.37z' fill-opacity='.86'/><path d='M3 9H1S0 9 0 8s1-1 1-1h2s1 0 1 1-1 1-1 1z' fill-opacity='.79'/><path d='M4.1 11.37l-1.73 1S1.5 12.87 1 12c-.5-.87.37-1.37.37-1.37l1.73-1s.87-.5 1.37.37c.5.87-.37 1.37-.37 1.37z' fill-opacity='.72'/><path d='M3.63 13.56l1-1.73s.5-.87 1.37-.37c.87.5.37 1.37.37 1.37l-1 1.73s-.5.87-1.37.37c-.87-.5-.37-1.37-.37-1.37z' fill-opacity='.65'/><path d='M7 15v-2s0-1 1-1 1 1 1 1v2s0 1-1 1-1-1-1-1z' fill-opacity='.58'/><path d='M10.63 14.56l-1-1.73s-.5-.87.37-1.37c.87-.5 1.37.37 1.37.37l1 1.73s.5.87-.37 1.37c-.87.5-1.37-.37-1.37-.37z' fill-opacity='.51'/><path d='M13.56 12.37l-1.73-1s-.87-.5-.37-1.37c.5-.87 1.37-.37 1.37-.37l1.73 1s.87.5.37 1.37c-.5.87-1.37.37-1.37.37z' fill-opacity='.44'/><path d='M15 9h-2s-1 0-1-1 1-1 1-1h2s1 0 1 1-1 1-1 1z' fill-opacity='.37'/><path d='M14.56 5.37l-1.73 1s-.87.5-1.37-.37c-.5-.87.37-1.37.37-1.37l1.73-1s.87-.5 1.37.37c.5.87-.37 1.37-.37 1.37z' fill-opacity='.3'/><path d='M9.64 3.1l.98-1.66s.5-.874 1.37-.37c.87.5.37 1.37.37 1.37l-1 1.73s-.5.87-1.37.37c-.87-.5-.37-1.37-.37-1.37z' fill-opacity='.23'/></svg></span></span>
            <span>{{datamsg}}</span>
        </div>
test2
 <!--   
    -->   
    <!-- generalteachersarraynameid     :options="generalteachersarraynameid"  -->
     <!-- <img :src="option.image"> -->
<Multiselect
    v-model="teachersarrayidtodb"
    mode="tags"
    placeholder="Select employees"
    track-by="value"
    label="name"
    :close-on-select="false"
    :searchable="true"
    :options="generalteachersarraynameid"
  >
      <template v-slot:tag="{ option, handleTagRemove, disabled }">
        <div
          class="multiselect-tag is-user"
          :class="{
            'is-disabled': disabled
          }"
        >

          {{ option.name }}
          <span
            v-if="!disabled"
            class="multiselect-tag-remove"
            @click="handleTagRemove(option, $event)"
          >
            <span class="multiselect-tag-remove-icon"></span>
          </span>
        </div>
      </template>
  </Multiselect>




<p>{{generalteachersarraynameid}}
</p>
<p>
{{teachersarrayidtodb}}</p>












    </div>
</template>

<script>
 import Multiselect from '@vueform/multiselect'


export default {
    data() {
        return {
            options773: [
      { value: 'judy', name: 'Judy', image: 'https://randomuser.me/api/portraits/med/women/1.jpg' },
      { value: 'jane', name: 'Jane', image: 'https://randomuser.me/api/portraits/med/women/2.jpg' },
      { value: 'john', name: 'John', image: 'https://randomuser.me/api/portraits/med/men/1.jpg' },
      { value: 'joe', name: 'Joe', image: 'https://randomuser.me/api/portraits/med/men/2.jpg' }
    ],

options77: [ { "value": 141, "name": "أحمد السيد على محمود موسي" }, { "value": 142, "name": "احمد انيس محمود عبد العزيز الساعي" }, { "value": 143, "name": "احمد جبريل السيد سيد احمد عبد السميع" }, { "value": 144, "name": "احمد سامح عبد المنعم حسين عبدالله سرور" }, { "value": 145, "name": "احمد سليمان محمد عبد الغنى الشوربجى" }, { "value": 146, "name": "احمد شريف اسماعيل احمد رزق" }, { "value": 147, "name": "أحمد عبد اللاه بسيونى عبد اللآه عمار" }, { "value": 148, "name": "أحمد عبد الله ابراهيم عبد الله جبر" }, { "value": 149, "name": "احمد عبدالعزيز عمران عمران ابوشهيه" }, { "value": 150, "name": "أحمد عصام أحمد محمد السايس" }, { "value": 151, "name": "احمد على عبد الفضيل سيد أحمد الشافعي" }, { "value": 152, "name": "أحمد محمد علواني سكر" }, { "value": 153, "name": "أحمد محمود محمد محمود الشاذلى" }, { "value": 154, "name": "أحمد ناصر أحمد أحمد ابو طريه" }, { "value": 155, "name": "أحمد نبيل احمد محمد ابوغربيه" }, { "value": 156, "name": "ادهم محمد فتحى محمد على دعبوس" }, { "value": 157, "name": "اسلام حاتم محمد راضي عمار" }, { "value": 158, "name": "إسلام عطيه محمد عبد اللاه عوض" }, { "value": 159, "name": "اسلام محمود عبد الحليم اسماعيل يوسف" }, { "value": 160, "name": "اسماعيل فتح الله اسماعيل محمد عبد السلام" } ],


    
            datamsg: '',
            datamsg2: '',
            loading:false,
            animationMsg:true,
subarray_ids: [],
teacheridsarray: [],
            classchoosed: [],
            classSujectsArray: [],
            subjectchoosed:[],
            subjectsarray: [],
generalsubjectsarray: [],
generalsubjectsarrayid: [],
generalteachersarray: [],
generalteachersarrayid: [],
teachersarrayidtodb: [],
            // classes: '',
            datadb: [],
            generalteachersarraynameid: [],
        };
  
    },
    components: {
      Multiselect,
    },
mounted() {
// this.loadclasses()
// this.loadsubjects()
// this.loadteachers()
this.loadmix()
    },
// computed:{

// com(){
// return value

//   },
   methods: {
async   loadmix(){
    var msgin='loadmix'
            this.datamsg = msgin+"...";
            this.loading = true;

            // var datadb
            try{
// this.classSujectsArray
            await axios.post("/api/classSujects/loadmix" ,)
            .then((res) => {
            this.datadb = res.data.message;
            //  // console.log(datadb);
            this.datamsg = "...Done:";
            // console.log('Done');
            // // console.log(datadb);
            
            this.loading = false;});

            } catch (e) {
            this.datamsg = msgin+"...error";
            // console.log(e);
            alert(msgin+" ... error");}
// ----------------------------------------------------------
this.subarray_ids=[]
this.teacheridsarray=[]
this.generalsubjectsarray=[]
this.generalsubjectsarrayid=[]
this.generalteachersarray=[]
this.generalteachersarrayid=[]
this.generalteachersarraynameid=[]
this.teachersarrayidtodb=[]
for (let index = 0; index < this.datadb[1].length; index++) {
     this.generalsubjectsarray.push(this.datadb[1][index].name);
     this.generalsubjectsarrayid.push(this.datadb[1][index].id);
this.teachersarrayidtodb.push([]);
 }

 for (let index = 0; index < this.datadb[2].length; index++) {

          this.generalteachersarray.push(this.datadb[2][index].namear);
          var uu={value:this.datadb[2][index].id,
                name:this.datadb[2][index].namear}
     
     this.generalteachersarrayid.push(this.datadb[2][index].id);
     this.generalteachersarraynameid.push(uu);
 }
for (let index = 0; index < this.datadb[3].length; index++) {
    // subarray_ids = this.datadb[3][index].subject_ids;

    // // console.log(this.datadb[3][index].subject_ids=='null');
    
    if (this.datadb[3][index].subject_ids=='null') {
         this.subarray_ids.push([]);
    }else{

   
  //  var  array=this.datadb[3][index].subject_ids.split(",")
    
    // for (let index2 = 0; index2 < array.length; index2++) {
//    var  array
//  this.subarray_ids.push(array);
    }
   
    this.teacheridsarray.push([]); 
    // }
}
// ----------------------------------------------------------
//             var arrayOfWords = []; // Create the array to store words
// arrayOfWords = words.split(" ");
            // this.datamsg = datadb
 setTimeout(() => this.datamsg = '', 4000);
// this.subjectsarray=[]
// var array1=[]
// var array2=[]
// var array3=[]

// for(var i = 0; i < datadb.length; i++){
//   array1.push(datadb[i].id);
//   array2.push(datadb[i].name);
//   array3.push(datadb[i].namecut);
// }
//   this.subjectsarray.push(
//         array1,
//         array2,
//         array3);


},//loadmix


   }





}
 </script >