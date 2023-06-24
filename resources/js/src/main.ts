import { createApp } from 'vue/dist/vue.esm-bundler'
import App from './App.vue'
//---- componentes
import {
    Input,
    Button
} from "flowbite-vue";

let app = createApp({
    components:{
        'my-app':App,
        'flow-button':Button,
        'flow-input':Input
    }
}).mount('#app')
