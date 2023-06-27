import { createApp } from 'vue/dist/vue.esm-bundler'
import axios from 'axios';
import App from './App.vue'
//---- componentes
import {
    Input,
    Button,
    Sidebar,
    Navbar, NavbarLogo, NavbarCollapse, NavbarLink,
    Accordion, AccordionPanel, AccordionHeader, AccordionContent,
    Footer, Carousel
} from "flowbite-vue";

let app = createApp({
    components:{
        'my-app':App,
        'flow-button':Button,
        'flow-input':Input,
        'flow-sidebar':Sidebar,
        'flow-navbar':Navbar,
        'flow-navLogo':NavbarLogo,
        'flow-navLink':NavbarLink,
        'flow-navCol':NavbarCollapse,
        'flow-accordion':Accordion,
        'flow-footer':Footer,
        'flow-carousel':Carousel
    }
})
