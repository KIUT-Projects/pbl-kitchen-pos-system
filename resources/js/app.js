import './bootstrap';
import '../sass/app.scss'

import { createApp } from 'vue';

const app = createApp({});

import MainApp from './components/MainApp.vue';
app.component('main-app', MainApp);

app.mount('#app');
