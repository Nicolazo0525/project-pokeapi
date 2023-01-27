import { createRouter,createWebHistory } from "vue-router";
import IndexPokemonVue from "@/Pages/Auth/IndexPokemon.vue";
import InformationCharacter from '../Pages/Auth/InformationCharacter.vue'



const routes = [
    // {
    //   path: '/',
    //   name: 'Home',
    //   component: Home
    // },
    // {
    //   path: '/about',
    //   name: 'About',
    //   // route level code-splitting
    //   // this generates a separate chunk (about.[hash].js) for this route
    //   // which is lazy-loaded when the route is visited.
    //   component: () => import(/* webpackChunkName: "about" */ '../views/About.vue')
    // },
    {
        path: '/index-pokemon',
        name: '/index-pokemon',
        component:IndexPokemonVue
    },
    {
        path: '/info-character/:id',
        name: 'profile',
        component:InformationCharacter,
        props: true
    }

  ]

  const router = createRouter({
    history: createWebHistory(),
    routes
  })

  export default router
