import { createWebHistory, createRouter } from 'vue-router'
import store from '../store'
/* Guest Component */
const Home = () => import('../components/Home.vue')
const Login = () => import('../components/Login.vue')
const Register = () => import('../components/Register.vue')
/* Guest Component */
/* Layouts */
const DashboardLayout = () => import('../components/layouts/Default.vue')
/* Layouts */
/* Authenticated Component */
const Dashboard = () => import('../components/Dashboard.vue')
/* Authenticated Component */
const routes = [
    {
        name: "home",
        path: "/",
        component: Home,
        meta: {
            middleware: "guest",
            title: `Online Kitchen`
        }
    },
    {
        name: "login",
        path: "/login",
        component: Login,
        meta: {
            middleware: "guest",
            title: `Login`
        }
    },
    {
        name: "register",
        path: "/register",
        component: Register,
        meta: {
            middleware: "guest",
            title: `Register`
        }
    },
    {
        path: "/dashboard",
        component: DashboardLayout,
        meta: {
            middleware: "auth"
        },
        children: [
            {
                name: "dashboard",
                path: '/dashboard',
                component: Dashboard,
                meta: {
                    title: `Dashboard`
                }
            }
        ]
    }
]
const router = createRouter({
    history: createWebHistory(),
    routes, // short for `routes: routes`
})
router.beforeEach((to, from, next) => {
    document.title = to.meta.title
    console.log(to.meta.middleware)
    console.log(store.state.auth)
    if (to.meta.middleware == "guest") {
        if (store.state.auth.authenticated) {
            next({ name: "dashboard" })
        }
        next()
    } else {
        if (store.state.auth.authenticated) {
            next()
        } else {
            next({ name: "login" })
        }
    }
})
export default router
