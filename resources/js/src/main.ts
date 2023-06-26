import { createApp } from 'vue/dist/vue.esm-bundler'
import { Input } from 'flowbite-vue'
import axios from 'axios';
import App from './App.vue'

let app = createApp({
    components:{
        'my-app':App,
        'my-input':Input
    }
})
