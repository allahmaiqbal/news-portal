import {createApp} from "vue/dist/vue.esm-bundler.js";
import DemoComponent from "@/components/DemoComponent.vue";
import CategorySelectSubcategory from "./components/vue/category/CategorySelectSubcategory.vue"
// import Select2 from 'vue3-select2-component'


const vueApp = createApp({})

// register demo component
vueApp.component('DemoComponent', DemoComponent)
// register other components here
vueApp.component('CategorySubcategory', CategorySelectSubcategory)
// vueApp.component('Select2', Select2)

// mount if exists vueRoot id
if(document.getElementById('vueRoot')){
    vueApp.mount('#vueRoot')
}


