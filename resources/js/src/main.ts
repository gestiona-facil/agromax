import { createApp, ref } from 'vue/dist/vue.esm-bundler'
import axios from 'axios';
import App from './App.vue';

//---- componentes
// import {
//     Input,
//     Badge, Button,
//     Sidebar,
//     Navbar, NavbarLogo, NavbarCollapse, NavbarLink,
//     Accordion, AccordionPanel, AccordionHeader, AccordionContent,
//     Footer, Carousel,
//     Table, TableHead, TableBody, TableHeadCell, TableRow, TableCell,
//     ListGroup, ListGroupItem
// } from "flowbite-vue";

let app = createApp({
    data(){
        //variables para acciones dinamicas en el sitio
        //usar snake_case, especificando la ruta a la que pertenece la variable, aunque también es posible usar el mismo
        //nombre de varable si la funcionalidad desea es similar en diferentes secciones del sitio
        return {
            vaca_gestando:false
        };
    },
    // components:{
    //     'my-app':App,
    //     'flow-badge':Badge,
    //     'flow-button':Button,
    //     'flow-input':Input,
    //     'flow-sidebar':Sidebar,
    //     'flow-nav-bar':Navbar,
    //     'flow-nav-logo':NavbarLogo,
    //     'flow-nav-link':NavbarLink,
    //     'flow-nav-collapse':NavbarCollapse,
    //     'flow-accordion':Accordion,
    //     'flow-accordion-header':AccordionHeader,
    //     'flow-accordion-panel':AccordionPanel,
    //     'flow-accordion-content':AccordionContent,
    //     'flow-footer':Footer,
    //     'flow-carousel':Carousel,
    //     'flow-table':Table,
    //     'flow-table-head':TableHead,
    //     'flow-table-head-cell':TableHeadCell,
    //     'flow-table-body':TableBody,
    //     'flow-table-cell':TableCell,
    //     'flow-table-row':TableRow,
    //     'flow-listg':ListGroup,
    //     'flow-listgi':ListGroupItem
    // }
})

app.mount('#app');
