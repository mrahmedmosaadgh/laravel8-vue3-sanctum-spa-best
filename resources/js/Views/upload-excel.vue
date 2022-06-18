<template>
   
   <div>
     <vue-excel-XLSX
        :data="data"
        :columns="columns"
        :file-name="'filename'"
        :file-type="'XLSX'"
        :sheet-name="'sheetname'"
        >
        Download
    </vue-excel-XLSX>


 <!-- <input class="input" type="text" name="name" placeholder="File name" v-model="fileName" required>
    <input class="file-input" type="file" ref="file" name="file">

<button @click="submitForm">submitForm</button> -->
<!-- <input type="file" @change="onFileChange" /> -->

 <!-- <input
type="file"
accept=".xls,.XLSX"
class="upload-file"
@change="changeExcel($event)" /> -->
 <!-- <input 
          type="file" 
          @change="excelExport"
          accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"/> -->
<!-- <button @click="excelExport">@change="excelExport"</button>
<input type="file" id="input" /> -->


<v-file-input
    v-on:change="displayFile($event)"
    v-model="file">
    </v-file-input>
    <!-- <input type="file" name="xlfile" id="xlf" v-on:change="displayFile($event)" /> -->
    <input type="file" name="xlfile" id="xlf" v-on:change="fileToJson($event)" />




   </div>
</template>
<script>

import * as XLSX from 'XLSX'
export default {
  
  data() {
            return {
              excelData: [],
               tableData: [],
      tableHeader: [],

 fileName: '',
        attachment: '',

                columns : [
                    {
                        label: "Product",
                        field: "product",
                    },
                    {
                        label: "Price",
                        field: "price",
                        dataFormat: this.priceFormat
                    },
                    {
                        label: "Quantity",
                        field: "quantity",
                    },
                    {
                        label: "Country",
                        field: "address.country",
                    },
                    {
                        label: "City",
                        field: "address.city",
                    }
                ],
                data : [
                    {
                        product: "Beverage",
                        price: 10,
                        quantity: 2,
                        address: {
                            country: 'Armenia',
                            city: 'Yerevan',
                        }
                    },
                    {
                        product: "Snack",
                        price: 12,
                        quantity: 6,
                        address: {
                            country: 'Armenia',
                            city: 'Yerevan',
                        }
                    },
                    {
                        product: "Beverage",
                        price: 10,
                        quantity: 5,
                        address: {
                            country: 'Armenia',
                            city: 'Yerevan',
                        }
                    },
                    {
                        product: "Snack",
                        price: 12,
                        quantity: 3,
                        address: {
                            country: 'Armenia',
                            city: 'Yerevan',
                        }
                    }
                ],
            }
        },
        methods: {

// =============================================================



fileToJson (e) {
  const file = e.target.files[0]
  /* Boilerplate to set up FileReader */
  const reader = new FileReader()
  reader.onload = (e) => {
    /* Parse data */
    const bstr = e.target.result
    const wb = XLSX.read(bstr, { type: 'binary' })
    /* Get first worksheet */
    const wsname = wb.SheetNames[0]
    const ws = wb.Sheets[wsname]
    /* Convert array of arrays */
    const data = XLSX.utils.sheet_to_json(ws, { header: 1 })
    /* Update state */
    this.data = data
    const header = data.shift()
  }
  reader.readAsBinaryString(file)
},


// =============================================================






          
            priceFormat(value){
                return '$ ' + value;
            },



submitForm() {
    this.formData = new FormData();
    this.formData.append('name', this.fileName);
    this.formData.append('file', this.$refs.file.files[0])
    console.log(Array.from(this.$refs.file.files[0]))


// Array.from(this.$refs.selectedImages.files)

alert('ok')
return
    axios.post('files/add', this.formData, {
        headers: {
            'Content-Type': 'multipart/form-data'
        }
    }).then(response => {
            // handle success response
    }).catch(error => {
        // handle failed response
    });


        } ,


 
    onFileChange(event) {

      this.file = event.target.files ? event.target.files[0] : null;
      if (this.file) {
        const reader = new FileReader();

        reader.onload = (e) => {
          /* Parse data */
          const bstr = e.target.result;
          const wb = XLSX.read(bstr, { type: 'binary' , cellDates: true, dateNF: 'yyyy/mm/dd;@'});
          /* Get first worksheet */
          const wsname = wb.SheetNames[0];
          const ws = wb.Sheets[wsname];
          /* Convert array of arrays */
          const data = XLSX.utils.sheet_to_json(ws, { header: 1 });
          console.log(data)
        }

        reader.readAsBinaryString(this.file);
      }
      
      },
  //  =====================================
excelExport(event) {
      var input = event.target;
      var reader = new FileReader();
      reader.onload = () => {
        var fileData = reader.result;
        var wb = XLSX.read(fileData, {type : 'binary'});
        wb.SheetNames.forEach((sheetName) => {
	        var rowObj =XLSX.utils.sheet_to_json(wb.Sheets[sheetName]);	        
          this.excelData = JSON.stringify(rowObj)
        })
      };
      reader.readAsBinaryString(input.files[0]);
    }
   


}}
</script>