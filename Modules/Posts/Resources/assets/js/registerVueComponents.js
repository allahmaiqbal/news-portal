import {createApp} from "vue/dist/vue.esm-bundler.js";
import DemoComponent from "./components/DemoComponent.vue";
import Select2 from 'vue3-select2-component';


const vueApp = createApp({})

// register demo component
vueApp.component('DemoComponent', DemoComponent)
vueApp.component('Select2', Select2)
// register other components here

// mount if exists vueRoot id
if(document.getElementById('vueRoot')){
    vueApp.mount('#vueRoot')
}
