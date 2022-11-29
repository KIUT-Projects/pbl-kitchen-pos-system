import './bootstrap';
import '../sass/app.scss';
import Router from './router';
import store from './store'

import { createApp } from 'vue';

const app = createApp({});

import MainApp from "./components/MainApp.vue";
app.component('main-app', MainApp);


// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

app.use(Router)
app.use(store)
app.mount('#app');
