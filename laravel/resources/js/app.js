import './bootstrap';
import { createApp, defineComponent } from 'vue';
import Main from './components.vue/main.vue'

const app = createApp({})

app.component('mainapp', Main);
app.mount('#app');
