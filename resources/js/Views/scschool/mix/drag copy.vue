<template>
  <div class="row">
    <div class="col-2">
      <div class="form-group">
        <div
          class="btn-group-vertical buttons"
          role="group"
          aria-label="Basic example"
        >
        <br>  
        <br>  
          <button class="btn btn-secondary" @click="add">Add</button>
        <br>  
          <button class="btn btn-secondary" @click="replace">Replace</button>
        <br>  
        </div>

        <div class="form-check">
          <input
            id="disabled"
            type="checkbox"
            v-model="enabled"
            class="form-check-input"
          />
          <label class="form-check-label" for="disabled">DnD enabled</label>
        </div>
      </div>
    </div>

    <div class="col-6">
      <h3>
        Draggable {{ draggingInfo }}</h3>

      <draggable
        :list="list"
        :disabled="!enabled"
        item-key="name"
        class="list-group"
        ghost-class="ghost"
        :move="checkMove"
        @start="dragging = true"
        @end="dragging = false"
      >
        <template #item="{ element }">
          <div class="list-group-item" :class="{ 'not-draggable': !enabled }">
            {{ element.name }}
          </div>
        </template>
      </draggable>
    </div>

    <!-- <rawDisplayer class="col-3" :value="list" title="List" /> -->
  </div>
</template>

<script>
import draggable from "vuedraggable";
let id = 1;
export default {
  name: "simple",
  display: "Simple",
  order: 0,
  components: {
    draggable
  },
  data() {
    return {
         drag: true,
      enabled: true,
      list: [
        { name: "John", id: 0 },
        { name: "Joao", id: 1 },
        { name: "Jean", id: 3 },
        { name: "Jeaddn", id: 4 },
        { name: "Jeaffn", id: 5 },
        { name: "Jeccggan", id: 6 },
      ],
      dragging: false
    };
  },
  computed: {
    draggingInfo() {
        console.log("computed draggingInfo")
      return this.dragging ? "under drag" : "";
    }
  },
  methods: {
    add() {
console.log("add")
      this.list.push({ name: "Juan " + id, id: id++ });
    },
    replace() {
console.log("replace")

      this.list = [{ name: "Edgard", id: id++ }];
    },
    checkMove(e) {
console.log("checkMove(e)")
        
       console.log("Future index: " + e.draggedContext.futureIndex);
    //   window.console.log("Future index: " + e.draggedContext.futureIndex);
    }
  }
};
</script>
<style scoped>
.buttons {
  margin-top: 35px;
}

.ghost {
  opacity: 0.5;
  background: #c8ebfb;
}

.not-draggable {
  cursor: no-drop;
}


/* ==================="" */

.list-group-item:first-child {
    border-top-left-radius: inherit;
    border-top-right-radius: inherit;
}
 
.list-group-item {
    position: relative;
    display: block;
    padding: .75rem 1.25rem;
    background-color: #fff;
    border: 1px solid rgba(0,0,0,.125);
}
 
.list-group-item {
    cursor: move;
}
 
.list-group-item {
    cursor: move;
}
 
*, ::after, ::before {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
div  {
    -webkit-user-drag: none;
}
user agent stylesheet
div {
    display: block;
}
 
.list-group {
    display: -ms-flexbox;
    display: -webkit-box;
    display: flex;
    -ms-flex-direction: column;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
    border-radius: .25rem;
}
 
body {
    margin: 0;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #fff;
}
 
:root {
    --blue: #007bff;
    --indigo: #6610f2;
    --purple: #6f42c1;
    --pink: #e83e8c;
    --red: #dc3545;
    --orange: #fd7e14;
    --yellow: #ffc107;
    --green: #28a745;
    --teal: #20c997;
    --cyan: #17a2b8;
    --white: #fff;
    --gray: #6c757d;
    --gray-dark: #343a40;
    --primary: #007bff;
    --secondary: #6c757d;
    --success: #28a745;
    --info: #17a2b8;
    --warning: #ffc107;
    --danger: #dc3545;
    --light: #f8f9fa;
    --dark: #343a40;
    --breakpoint-xs: 0;
    --breakpoint-sm: 576px;
    --breakpoint-md: 768px;
    --breakpoint-lg: 992px;
    --breakpoint-xl: 1200px;
    --font-family-sans-serif: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    --font-family-monospace: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;
}
 
html {
    font-family: sans-serif;
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent;
}
 
*, ::after, ::before {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
 
*, ::after, ::before {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}




</style>