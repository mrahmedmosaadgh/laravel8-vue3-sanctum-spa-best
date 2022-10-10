import { defineStore } from 'pinia'

export const useCounterStore = defineStore('counter', {
  state: () => {
    return {
      countme:77,
      data2:55,
    }
  },
  getters: {},
  actions: {
    plus(){
      this.countme++
    }
  }
})