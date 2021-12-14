import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)


const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  scrollBehavior: (to, from, savePosition) => {
    if (to.hash) return { selector: to.hash }
    if (savePosition) return savePosition

    return { x: 0, y: 0 }
  },
  routes: [
    {
      path: '/',
      component: () => import('@/layouts/home/Index.vue'),
      children: [
        {
          path: '',
          name: 'Inicio',
          component: () => import('@/views/Home.vue')
        },
        {
          path: 'Perro',
          name: 'perro',
          component: () => import('@/views/Home.vue')
        },
        {
          path: 'Gato',
          name: 'gato',
          component: () => import('@/views/Home.vue')
        },
        {
          path: 'Ofertas',
          name: 'ofertas',
          component: () => import('@/views/Home.vue')
        },
        {
          path: 'Servicios',
          name: 'servicios',
          component: () => import('@/views/Home.vue')
        },
        {
          path: 'Blog',
          name: 'blog',
          component: () => import('@/views/Home.vue')
        },
        {
          path: '*',
          name: 'FourOhFour',
          component: () => import('@/views/Home.vue'),
        },
      ]
    }
  ],
})


export default router
