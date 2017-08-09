import Vue from 'vue'
import VueRouter from 'vue-router'
import MovieIndex from '../views/movie/index.vue'
import MovieShow from '../views/movie/show.vue'
Vue.use(VueRouter)

const router = new VueRouter({
	mode: 'history',
	routes: [
		{ path: '/', component: MovieIndex },
		{ path:'/movie/:id',component:MovieShow}
	]
})

export default router
