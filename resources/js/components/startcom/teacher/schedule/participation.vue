<template>
  <div class="w-full mx-auto text-black ">
    <!-- <div class="flex">



    </div> -->
    
<!-- <div v-if="participations.plusAll"> -->

    <div class="flex">
  <div
  class="m-7  flex   text-xl text-white bg-blue-900 hover:bg-green-700   focus:bg-green-100 font-bold uppercase   px-4 py-2 rounded-full shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
  >
<!-- TA -->
    <span v-if="participations.plusAll" >
  {{(participations.plusAll -participations.minusAll)/5}}
  </span>
    
    <svg xmlns="http://www.w3.org/2000/svg" width="9.032" height="8.709" viewBox="0 0 9.032 8.709">
  <path id="Path_31597" data-name="Path 31597" d="M134.518,101.269l-1.2,3a.323.323,0,0,0,.479.387l2.724-1.815,2.724,1.816a.323.323,0,0,0,.479-.387l-1.2-3,2.383-1.787a.323.323,0,0,0-.194-.581H137.75l-.922-2.685a.322.322,0,0,0-.61,0l-.9,2.683h-2.993a.323.323,0,0,0-.194.581Z" transform="translate(-132.006 -95.998)" fill="#ffd800"/>
</svg>
  
  </div>
<!-- --------------------------------------------------- -->
  <div
  class="m-7  flex   text-xl text-white bg-blue-900 hover:bg-green-700   focus:bg-green-100 font-bold uppercase   px-4 py-2 rounded-full shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
  >
<!-- TW -->
    <span v-if="participations.plusAll_thisweek" >
  {{(participations.plusAll_thisweek -participations.minusAll_thisweek)/5}}
  </span>
    
    <svg xmlns="http://www.w3.org/2000/svg" width="9.032" height="8.709" viewBox="0 0 9.032 8.709">
  <path id="Path_31597" data-name="Path 31597" d="M134.518,101.269l-1.2,3a.323.323,0,0,0,.479.387l2.724-1.815,2.724,1.816a.323.323,0,0,0,.479-.387l-1.2-3,2.383-1.787a.323.323,0,0,0-.194-.581H137.75l-.922-2.685a.322.322,0,0,0-.61,0l-.9,2.683h-2.993a.323.323,0,0,0-.194.581Z" transform="translate(-132.006 -95.998)" fill="#ffd800"/>
</svg>
  
  </div>

<!-- --------------------------------------------------- -->
  <div
  class="m-7  flex   text-xl text-white bg-blue-900 hover:bg-green-700   focus:bg-green-100 font-bold uppercase   px-4 py-2 rounded-full shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
  >
<!-- TR -->
    <span v-if="participations.plusAll_thisweek" >
  {{(participations.plusAll_thisround -participations.minusAll_thisround)/5}}
  </span>
    
    <svg xmlns="http://www.w3.org/2000/svg" width="9.032" height="8.709" viewBox="0 0 9.032 8.709">
  <path id="Path_31597" data-name="Path 31597" d="M134.518,101.269l-1.2,3a.323.323,0,0,0,.479.387l2.724-1.815,2.724,1.816a.323.323,0,0,0,.479-.387l-1.2-3,2.383-1.787a.323.323,0,0,0-.194-.581H137.75l-.922-2.685a.322.322,0,0,0-.61,0l-.9,2.683h-2.993a.323.323,0,0,0-.194.581Z" transform="translate(-132.006 -95.998)" fill="#ffd800"/>
</svg>
  
  </div>

<!-- --------------------------------------------------- -->


  
  <div  @click="confirm_participationfun('+')"
  class="m-7 flex  cursor-pointer text-xl text-black bg-green-200 hover:bg-green-700   focus:bg-green-100 font-bold uppercase   px-4 py-2 rounded-full shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
  >
    <span v-if="participations.plusAll" >
  {{participations.plusAll/5}}
  </span>
  (+)
  </div>

  <span @click="confirm_participationfun('-')"
  class="flex ml-8 m-auto cursor-pointer text-xl  text-black bg-red-200 hover:bg-red-700   active:bg-red-100 font-bold uppercase   px-4 py-2 rounded-full shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
  >
    <span v-if="participations.plusAll" >
  {{participations.minusAll/5}}
  </span>
  (-)
  </span>

</div>

  <div v-if="participations.plusAll" class="flex">
 
<div  class="flex" v-if="(participations.plusAll -participations.minusAll)/5>0">
<span   v-for="(item,index) in (participations.plusAll -participations.minusAll)/5" :key='index' >
  <svg xmlns="http://www.w3.org/2000/svg" width="9.032" height="8.709" viewBox="0 0 9.032 8.709">
  <path id="Path_31597" data-name="Path 31597" d="M134.518,101.269l-1.2,3a.323.323,0,0,0,.479.387l2.724-1.815,2.724,1.816a.323.323,0,0,0,.479-.387l-1.2-3,2.383-1.787a.323.323,0,0,0-.194-.581H137.75l-.922-2.685a.322.322,0,0,0-.61,0l-.9,2.683h-2.993a.323.323,0,0,0-.194.581Z" transform="translate(-132.006 -95.998)" fill="#ffd800"/>
</svg>
</span>
</div>
<div v-if="(participations.plusAll -participations.minusAll)/5<0"  class="flex">
<span   v-for="(item,index) in (participations.minusAll - participations.plusAll )/5" :key='index' >
-
</span>
</div>

 </div>

</div>
<!-- total:{{(participations.plusAll -participations.minusAll)/5}}
participations:{{participations}} -->



<!-- </div> -->
</template>

<script>
import swal from 'sweetalert2'
export default {

props: ['data','student_id','dataFromSceduleInClasswork'],
    data() {
        return {
participations:'',

        }


    },
    mounted(){
this.get_participation_plus_marks_fun()
    },

  methods:{

// async confirm_participationfun(sign){
//  await swal.fire({//warning


 confirm_participationfun(sign){
  //warning
  swal.fire({title: "Are you sure?",text: "You won't be able to revert this!",
  icon: "warning",showCancelButton: true, confirmButtonText: "   "+sign+"5"})
    .then((result) => {
      if (!result.value) {this.$moshaToast('Canceled',{showIcon: false,hideProgressBar: true,timeout: 1000,type: 'info',transition: 'bounce',position: 'top-right',});return}
          this.participationfun(sign)
                      });

},


async  participationfun(sign){
    //change the sign
        sign=='-' ? this.dataFromSceduleInClasswork.type='-':this.dataFromSceduleInClasswork.type='+'
    //set student_id
        this.dataFromSceduleInClasswork.student_id=this.student_id

  try{

            await axios.post("/api/teacher/participation" ,{'data':this.dataFromSceduleInClasswork})
            .then((res) => {
             this.participations = res.data.data;
             console.log('participationfun');
             console.log(res.data);
             
        sign=='+' ?  swal.fire("Excellent you have extra 5 marks"  ,  "Good Job"  ,"success"):swal.fire("Sorry you have less 5 marks"  ,  "next time"  ,"warning");
             });} catch (e) {
              swal.fire( "failed",  "some thing went wrong",  "error"  )
              console.log(e);}

},


async  get_participation_plus_marks_fun(){
    //set student_id
        this.dataFromSceduleInClasswork.student_id=this.student_id

  try{

            await axios.post("/api/teacher/get_participation_plus_marks" ,{'data':this.dataFromSceduleInClasswork})
            .then((res) => {
             this.participations = res.data.data;
             console.log('async  get_participation_plus_marks_fun(){');
             console.log(res.data);

  });} catch (e) {
              swal.fire( "failed",  "get_participation_plus_marks_fun some thing went wrong",  "error"  )
              console.log(e);}

},



  }
}
</script>
<style scoped>

</style>