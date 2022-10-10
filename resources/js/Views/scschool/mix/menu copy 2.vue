<template>
  <model-list-select :list="options1"
                     v-model="objectItem"
                     option-value="code"
                     option-text="name"
                     placeholder="select item">
  </model-list-select>
  <model-list-select :list="options2"
                     v-model="stringItem"
                     option-value="code"
                     :custom-text="codeAndNameAndDesc"
                     placeholder="select item">
  </model-list-select>
</template>

<script>
  import { ModelListSelect } from 'vue-search-select'

  export default {
    data () {
      return {
        options1: [
          { code: '01', name: 'aa', desc: 'desc01' },
          { code: '02', name: 'ab', desc: 'desc02' },
          { code: '03', name: 'bc', desc: 'desc03' },
          { code: '04', name: 'cd', desc: 'desc04' },
          { code: '05', name: 'de', desc: 'desc05' },
          { code: '06', name: 'ef', desc: 'desc06' }
        ],
        objectItem: {},
        options2: [
          { code: '01', name: 'aa', desc: 'desc01' },
          { code: '02', name: 'ab', desc: 'desc02' },
          { code: '03', name: 'bc', desc: 'desc03' },
          { code: '04', name: 'cd', desc: 'desc04' },
          { code: '05', name: 'de', desc: 'desc05' },
          { code: '06', name: 'ef', desc: 'desc06' }
        ],
        stringItem: ''
      }
    },
    methods: {
      codeAndNameAndDesc (item) {
        return `${item.code} - ${item.name} - ${item.desc}`
      },
      reset1 () {
        this.objectItem = {}
      },
      selectFromParentComponent1 () {
        // select option from parent component
        this.objectItem = this.options[0]
      },
      reset2 () {
        this.stringItem = ''
      },
      selectFromParentComponent2 () {
        // select option from parent component
        this.stringItem = this.options[0].code
      }
    },
    components: {
      ModelListSelect
    }
  }
</script>