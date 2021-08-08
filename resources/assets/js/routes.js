import VueRouter from 'vue-router';

let routes = [

    {

        path: '/',
        component: require('./components/Home').default

    }

];

export default new VueRouter({

    routes

});