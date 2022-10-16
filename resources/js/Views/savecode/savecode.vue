<template>
  <div>
<div class="flex flex-wrap">
    <div class="w-full">
      <ul class="flex mb-0 list-none flex-wrap pt-1 pb-1 flex-row">
        <li v-for="(item,index) in tabstitle" :key="index" class="-mb-px mr-2 last:mr-0 flex-auto text-center">
          <a class="text-xs font-bold uppercase px-2 py-2 shadow-lg rounded block leading-normal" v-on:click="toggleTabs(index+1)" v-bind:class="{'text-pink-600 bg-white': openTab !== index+1, 'text-white bg-pink-600': openTab === index+1}">
            {{item}}
          </a>
        </li>






      </ul>
      <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
        <div class="px-4 py-5 flex-auto">
          <div class="tab-content tab-space">
            <div v-bind:class="{'hidden': openTab !== 1, 'block': openTab === 1}">
<!-- -------------------------------------------------------------------- -->
<codesearch>codesearch error</codesearch>
<!-- -------------------------------------------------------------------- -->
            </div>
            <div v-bind:class="{'hidden': openTab !== 2, 'block': openTab === 2}">
<!-- -------------------------------------------------------------------- -->
<codereplace>codereplace error</codereplace>

<!-- -------------------------------------------------------------------- -->

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>


  </div>
</template>

<script>
import codesearch from "./codesearch.vue"
import codereplace from "./codereplace.vue"
// import codenew from "./codenew.vue"
export default {
  name: 'Laravel8Vue3SanctumSpaBest3Savecode',
  components: {
    // MonacoEditor,
    codesearch,
    codereplace,
    // codenew,

  },
  data() {
    return {openTab: 1,
      tabstitle:[
        'search',
        'replace',
        // 'new',
        // 'search',
      ],
    };
  },

  mounted() {
    
  },

  methods: {
 toggleTabs(tabNumber){
//  toggleTabs: function(tabNumber){
      this.openTab = tabNumber
    },
  },
};
</script>

<style scoped>

</style>