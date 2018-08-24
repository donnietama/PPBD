import VueRouter from 'vue-router';

let routes = [
    {
        path: '/',
        component: require('./view/Home')
    },
    {
        path: '/about',
        component: require('./view/About')
    },
    {
        path: '/pricing',
        component: require('./view/Pricing')
    }
]

export default new VueRouter({
    routes,
    linkActiveClass: 'is-active'
});