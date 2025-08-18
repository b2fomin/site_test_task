import { createRouter, createWebHistory } from 'vue-router'
import Index from "@/components/Index.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
      {
          name: 'index',
          path: '/',
          component: Index
      }
  ],
})

export default router
