import { createApp } from 'vue/dist/vue.esm-bundler'
import App from './App.vue'

let app = createApp({
    components:{
        'my-app':{
            template: '<div>Hola mundo Wonderfull</div>'
        }
    }
}).mount('#app')
