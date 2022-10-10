<template>
  <div >
 <p>{{tog}}</p>
<div v-if="loading" class="overlay_fullscrren  z-m-40"><div class="bg-black opacity-40 overlay_fullscrren z-48"></div><div class="bg_loading overlay_fullscrren z-50"></div></div>





  <!-- background: rgb(0, 0, 0, 0) url("/img/loadingfo.svg") repeat scroll 0% 0%; -->


<!-- <div class="bg-black opacity-25 w-screen h-screen" ></div>


 
 <div
 class=" absolute left-0 top-0 w-screen h-screen z-50 center-screen"
 
  style="  background: rgb(0, 0, 0, 0) url('/img/loadingev.svg') no-repeat fixed center;"> </div> -->


 <!-- <div style=" background: rgb(0, 0, 0, 0) url('/img/loadingev.svg') repeat scroll 0% 0%;"> -->
  <!-- <img class="w-80  absolute flex z-50 center-screen items-center content-center   " src="/img/loadingev.svg" alt=""> -->
 

<div class="">
  <button type="button" @click="tog=!tog" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
    Vertically centered modal
  </button>
  <button type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable">
    Vertically centered scrollable modal
  </button>
</div>
v-show="tog"
<div  :class="(tog)?'':'hidden'" class="overlay_fullscrren bg-gray-700 p-4 modal fade fixed top-0 left-0  w-screen h-screen outline-none overflow-x-hidden overflow-y-auto" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
  <div class="modal-dialog opacity-100 modal-dialog-centered relative w-80 left-1/2 pointer-events-none">
    <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
      <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
        <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
          Modal title
        </h5>
        <button type="button" @click="tog=false"
          class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
          data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body relative p-4">
        <p>This is a vertically centered modal.</p>
      </div>
      <div
        class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
        <button type="button" @click="tog=false"
          class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
          data-bs-dismiss="modal">
          Close
        </button>
        <button type="button" @click="tog=false"
          class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
          Save changes
        </button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="exampleModalCenteredScrollable" tabindex="-1" aria-labelledby="exampleModalCenteredScrollable" aria-modal="true" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable relative w-auto pointer-events-none">
    <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
      <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
        <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalCenteredScrollableLabel">
          Modal title
        </h5>
        <button type="button"
          class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
          data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body relative p-4">
        <p>This is some placeholder content to show a vertically centered modal. We've added some extra copy here to show how vertically centering the modal works when combined with scrollable modals. We also use some repeated line breaks to quickly extend the height of the content, thereby triggering the scrolling. When content becomes longer than the predefined max-height of modal, content will be cropped and scrollable within the modal.</p>
    <br><br><br><br><br><br><br><br><br><br>
    <p>Just like that.</p>
      </div>
      <div
        class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
        <button type="button"
          class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
          data-bs-dismiss="modal">
          Close
        </button>
        <button type="button"
          class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
          Save changes
        </button>
      </div>
    </div>
  </div>
</div>


-------------------------------------------


<!-- Button trigger modal -->
<button type="button" class="px-6
      py-2.5
      bg-blue-600
      text-white
      font-medium
      text-xs
      leading-tight
      uppercase
      rounded
      shadow-md
      hover:bg-blue-700 hover:shadow-lg
      focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
      active:bg-blue-800 active:shadow-lg
      transition
      duration-150
      ease-in-out" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto content-center items-center bg-red-800"
  id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog relative w-80 pointer-events-none ">
    <div
      class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
      <div
        class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
        <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">Modal title</h5>
        <button type="button"
          class="fa fa-window-close btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
          data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body relative p-4">
        Modal body text goes here.
      </div>
      <div
        class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
        <button type="button" class="px-6
          py-2.5
          bg-purple-600
          text-white
          font-medium
          text-xs
          leading-tight
          uppercase
          rounded
          shadow-md
          hover:bg-purple-700 hover:shadow-lg
          focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0
          active:bg-purple-800 active:shadow-lg
          transition
          duration-150
          ease-in-out" data-bs-dismiss="modal">Close</button>
        <button type="button" class="px-6
      py-2.5
      bg-blue-600
      text-white
      font-medium
      text-xs
      leading-tight
      uppercase
      rounded
      shadow-md
      hover:bg-blue-700 hover:shadow-lg
      focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
      active:bg-blue-800 active:shadow-lg
      transition
      duration-150
      ease-in-out
      ml-1">Save changes</button>
      </div>
    </div>
  </div>
</div>


-------------------------------------------


</div>

</template>



<script>

export default {
  data(){
  return{
tog:false,
loading:true,

  }
},
mounted(){
  setTimeout(() => this.loading=false, 500);

}

}
</script>
<style >

.overlay_white {
                     position:absolute;
                     top:50%;
                     left:50%;
                     background-color:white;
                     z-index:1002;
                     overflow:auto;
                     width:400px;
                     height:400px;
                     margin-left:-200px;
                     margin-top:-200px;

}


.overlay_black {
  position:fixed;
                     top:50%;
                     left:50%;
                     background-color:rgba(30, 17, 201);
                     z-index:1002;
                     overflow:auto;
                    width:400px;
                     height:100px;
                     /* padding: auto; */
                     margin-left:-200px;
                     margin-top:-200px;
  background: url('/img/loadingev.svg') no-repeat   center;
/* border-radius: 50%; */
}


 



.loadingfo{

 background: rgb(0, 0, 0, 0) url("/img/loadingfo.svg") repeat scroll 0% 0%;
}

/**/ @keyframes bounce-4e91f495-73b7-45d1-b3bb-e31cab146ca8
{
  0% {
    animation-timing-function: cubic-bezier(0.1361,0.2514,0.2175,0.8786);
    transform: translate(0,0px) scaleY(1);
  }
  37% {
    animation-timing-function: cubic-bezier(0.7674,0.1844,0.8382,0.7157);
    transform: translate(0,-39.96px) scaleY(1);
  }
  72% {
    animation-timing-function: cubic-bezier(0.1118,0.2149,0.2172,0.941);
    transform: translate(0,0px) scaleY(1);
  }
  87% {
    animation-timing-function: cubic-bezier(0.7494,0.2259,0.8209,0.6963);
    transform: translate(0,19.900000000000002px) scaleY(0.602);
  }
  100% {
    transform: translate(0,0px) scaleY(1);
  }
} 


</style>