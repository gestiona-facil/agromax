import { createApp } from 'vue/dist/vue.esm-bundler'
import axios from 'axios';
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
        'flow-input':Input,
        'my-input':Input
    }
})
