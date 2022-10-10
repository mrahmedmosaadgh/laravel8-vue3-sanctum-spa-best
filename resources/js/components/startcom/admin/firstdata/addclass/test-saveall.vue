<template>
    <div>
test-saveall
<button @click="saveall()">saveall</button>
<table>
    <thead>
    <tr>
        <th>id</th>
        <th>classname</th>
        <th>stage</th>
    </tr>
    </thead>
    <tbody>
    <tr v-for=" (cl,index ) in alltxt" :key="index">
   
     <!-- @change="change(dbcolnamesarray_edit[1],cl[1],cl[0])" -->
        <td>
            <input type="text" v-model.lazy="alltxt[index][1]" 
           
            >
            <!-- change(col name,col data,col id data)" -->
            <p >{{cl[1]}} </p> 
        </td>
<!-- @change="change(dbcolnamesarray_edit[2],cl[2],cl[0])" -->
        <td>
            <input type="text" v-model.lazy="alltxt[index][2]" 
            
            >
            <p >{{cl[2]}} </p> 
        </td>
 <!-- @change="change(dbcolnamesarray_edit[3],cl[3],cl[0])" -->
        <td>
            <input type="text" v-model.lazy="alltxt[index][3]" 
           >
            <p >{{cl[3]}} </p> 
        </td>
    <!-- @change.passive -->
    </tr>
    </tbody>
</table>

<div class="fixed p-2   top-0 right-0   bg-green-200">
{{datamsg}}
</div>

    </div>
</template>

<script>


    export default {
            data() {
                return {
                        dbcolnamesarray     :[ `id`, `schoolgroup_id`, `school_id`, `stage`, `classname`, `nameLong`, `createdby`, `notes1`,`notes2`, `notes3`, `created_at`, `updated_at`],
                        dbcolnamesarray_edit:[ `id`,`classname`, `stage`, `nameLong`, `notes1`, `notes2`, `notes3`, `created_at`,`updated_at`],
                        alltxt              :[],
                        alltxtorigin        :[],
                        datamsg:'',


                };
            },
mounted(){this.loadclasses();},

methods:{

async   loadclasses(){
            this.datamsg = "loading calsses ...";  
            try{
            await axios.post("/api/class/all" )
            .then((res) => {
            this.dbdataarray = res.data.message;
            this.datamsg = "Done";  
            });
            } catch (e) {
            this.datamsg = "data error";  
            }
        setTimeout(() => this.datamsg = '', 5000);

        this.alltxt=[]
        this.alltxtorigin=[]
        for(var i = 0; i < this.dbdataarray.length; i++){
                let datain=[
                        this.dbdataarray[i].id,
                        this.dbdataarray[i].classname,
                        this.dbdataarray[i].stage    ,
                        this.dbdataarray[i].nameLong ,
                        this.dbdataarray[i].notes1   ,
                        ]
        this.alltxt.push(datain);
        this.alltxtorigin.push(datain);
        }
},//loadclasses

async saveall(){
            this.datamsg = "saving calsses ...";  
            try{
            await axios.post("/api/class/updateall",{data:this.alltxt})
            .then((res) => {
                this.datamsg =res.data.message;
            });
            } catch (e) {
            this.datamsg = "data error";
            }

}


}
    }
</script>

<style scoped>

</style>