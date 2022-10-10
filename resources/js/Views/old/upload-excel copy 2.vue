<template>
   
   <div>
     <vue-excel-xlsx
        :data="data"
        :columns="columns"
        :file-name="'filename'"
        :file-type="'xlsx'"
        :sheet-name="'sheetname'"
        >
        Download
    </vue-excel-xlsx>


 <!-- <input class="input" type="text" name="name" placeholder="File name" v-model="fileName" required>
    <input class="file-input" type="file" ref="file" name="file">

<button @click="submitForm">submitForm</button> -->
<!-- <input type="file" @change="onFileChange" /> -->

 <input
type="file"
accept=".xls,.xlsx"
class="upload-file"
@change="changeExcel($event)" />



   </div>
</template>
<script>

import * as XLSX from 'xlsx'
export default {
  
  data() {
            return {
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
          const wb = xlsx.read(bstr, { type: 'binary' , cellDates: true, dateNF: 'yyyy/mm/dd;@'});
          /* Get first worksheet */
          const wsname = wb.SheetNames[0];
          const ws = wb.Sheets[wsname];
          /* Convert array of arrays */
          const data = xlsx.utils.sheet_to_json(ws, { header: 1 });
          console.log(data)
        }

        reader.readAsBinaryString(this.file);
      }
      
      }
   



}}
</script>