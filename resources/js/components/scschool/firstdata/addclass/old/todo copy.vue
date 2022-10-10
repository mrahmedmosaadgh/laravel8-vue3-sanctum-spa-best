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
                <tr
           v-for="classitem in classes"
:key="classitem.id"     
                >
                #	name	stage	
<!-- { "id": 57, "schoolgroup_id": 1, "school_id": 1, "stage": null, 
"classname": "kg1A", "nameLong": null, "createdby": 2, "notes1 -->

<td>{{classitem.stage    }}</td>
<td>{{classitem.classname}}</td>
<td>{{classitem.nameLong }}</td>
<td>{{classitem.notes1   }}</td>
<td>
    <button @click="deleteclass(classitem.id )">delete</button>
    <button @click="editclass(classitem.id )">edit</button>

</td>
 </tr>
 <!-- v-html="newclasshtml" -->
 

<!-- <tr>
    <form>
    <table><tr><td>id</td><td>name</td>...</tr></table>
  </form>

</tr> -->




 <tr >
<!-- @submit="classnew" method="post" -->
<td colspan="6">
    <!-- <form > -->
 <table>


 <tr >
    
    <td>
 <input type="text" name="aa"   required v-model="txtstage">
    </td>
        <td>
 <input type="text" name="aa"   required v-model="txtclassname">
    </td>
        <td>
 <input type="text" name="aa"   required v-model="txtnameLong">
    </td>
        <td>
 <input type="text" name="aa"   required v-model="txtnotes1">
    
    </td>
    <td><button @click="classnew" >+</button></td>
 <!-- pb-2 pt-0 px-2 -->
 </tr>
 </table>
<!-- </form> -->
</td>
    </tr>    
    </table>

<!-- 
<div class="flex space-x-2 justify-center">
  <div>
    <button type="button" class="inline-block rounded-full bg-blue-600 text-white leading-normal uppercase shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-9 h-9">
     
    <svg ><rect fill="yellow"  /><line fill="none" stroke="#000000" stroke-miterlimit="10" stroke-width="4" x1="9" x2="41" y1="25" y2="25"/><line fill="none" stroke="#000000" stroke-miterlimit="10" stroke-width="4" x1="25" x2="25" y1="9" y2="41"/></svg> -->
      <!-- <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download"
        class="w-3 mx-auto" role="img" xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 512 512">
        <path fill="currentColor"
          d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
        </path>
      </svg>
<svg xmlns="http://www.w3.org/2000/svg" class="svg-icon" style="width: 1em; height: 1em;vertical-align: middle;fill: currentColor;overflow: hidden;" viewBox="0 0 1024 1024" version="1.1"><path d="M846.769231 177.230769C661.661538-5.907692 362.338462-5.907692 177.230769 177.230769-5.907692 362.338462-5.907692 661.661538 177.230769 846.769231c185.107692 185.107692 484.430769 185.107692 667.569231 0 185.107692-185.107692 185.107692-484.430769 1.969231-669.538462z m-19.692308 374.153846c0 11.815385-7.876923 19.692308-19.692308 19.692308H590.769231c-9.846154 0-19.692308 9.846154-19.692308 19.692308v216.615384c0 9.846154-9.846154 19.692308-19.692308 19.692308h-78.76923c-11.815385 0-19.692308-7.876923-19.692308-19.692308V590.769231c0-11.815385-7.876923-19.692308-19.692308-19.692308H216.615385c-11.815385 0-19.692308-7.876923-19.692308-19.692308v-78.76923c0-9.846154 9.846154-19.692308 19.692308-19.692308h216.615384c11.815385 0 19.692308-7.876923 19.692308-19.692308V216.615385c0-9.846154 9.846154-19.692308 19.692308-19.692308h78.76923c9.846154 0 19.692308 7.876923 19.692308 19.692308v216.615384c0 11.815385 7.876923 19.692308 19.692308 19.692308h216.615384c9.846154 0 19.692308 9.846154 19.692308 19.692308v78.76923z"/></svg>


    </button>
  </div>
</div>





<div class="flex space-x-2 justify-center">
  <div>
    <button type="button" class="inline-block rounded-full bg-blue-600 text-white leading-normal uppercase shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-9 h-9">
      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download"
        class="w-3 mx-auto" role="img" xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 512 512">
        <path fill="currentColor"
          d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
        </path>
      </svg>
    </button>
  </div>
</div>






 -->
txtmsg1:{{txtmsg1}}
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
            txtstage            :'d2',
            txtclassname        :'5A',
            txtnameLong         :'fgfdfg',
            txtnotes1           :'fgggggjjj',

            
        };
    },
            mounted() {
            // alert('ff');
            // this.menuall();
            this.loadclasses();
            // this.menu2();
},
    methods: {

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
            this.loading = false;
            });
            } catch (e) {
             console.log(e);
            this.txtmsg1 = "data error";
            alert("loadclasses data error");
            alert(e.response.status);
            }
setTimeout(() => this.txtmsg1 = '', 2000);

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

                  async   editclass(id){
            this.txtmsg1 = '';
            this.loading = true;  
            try{
            await axios.post("/api/class/edit",{'id':id} )
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