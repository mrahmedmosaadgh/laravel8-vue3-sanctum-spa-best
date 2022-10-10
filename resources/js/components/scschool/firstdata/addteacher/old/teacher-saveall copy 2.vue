<template>
  <div>
<Multiselect
  v-model="value"
  mode="tags"
  max="3"
  :close-on-select="false"
  :searchable="true"
  :create-option="false"
  :options="options1"
/>

<Multiselect
  v-model="value2"
   mode="tags"
  max="3"
  :close-on-select="false"
  :searchable="true"
  :create-option="false"
  :options="options2"
  :classes="{
  container: 'relative mx-auto w-full flex items-center justify-end box-border cursor-pointer border border-gray-300 rounded bg-white text-base leading-snug outline-none',
 tag: 'bg-blue-500 text-white text-sm font-semibold py-0.5 pl-2 rounded mr-1 mb-1 flex items-center whitespace-nowrap rtl:pl-0 rtl:pr-2 rtl:mr-0 rtl:ml-1',
}"
/>

<p>{{value}}</p>
<p>{{value2}}</p>
  </div>
</template>

<script>
  import Multiselect from '@vueform/multiselect'

  export default {
    components: {
      Multiselect,
    },
    data() {
      return {
        value: null,
        value2: null,
        options1: [
          'Batman',
          'Robin',
          'Joker',
        ],
        options2:[
    { value: 'batman', label: 'Batman' },
    { value: 'robin', label: 'Robin' },
    { value: 'env', label: 'en' },
    { value: 'arv', label: 'ar' },
    { value: 'joker', label: 'Joker' },
  ],


  


      }
    }
  }
</script>

<style src="@vueform/multiselect/themes/default.css"></style>