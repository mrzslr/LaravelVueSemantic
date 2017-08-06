import Vue from 'vue'
import VueRouter from 'vue-router'
import MovieIndex from '../views/movie/index.vue'

Vue.use(VueRouter)

const router = new VueRouter({
	mode: 'history',
	routes: [
		{ path: '/', component: MovieIndex }
	]
})

export default router
