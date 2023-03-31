import {createApp} from "vue/dist/vue.esm-bundler.js";
import DemoComponent from "./components/DemoComponent.vue";

const vueApp = createApp({})

// register demo component
vueApp.component('DemoComponent', DemoComponent)
// register other components here

// mount if exists vueRoot id
if(document.getElementById('vueRoott')){
    vueApp.mount('#vueRoott')
}
