import { createApp } from 'vue/dist/vue.esm-bundler'
import { Input } from 'flowbite-vue'
import App from './App.vue'

let app = createApp({
    components:{
        'my-app':App,
        'myinput':Input
    }
})