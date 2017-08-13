<template>
	
	<div class="ui container">
		
		<div class="left floated">
		<router-link :to="`/`">
			<button class="ui labeled icon button"><i class="left chevron icon"></i>Back</button>
			</router-link>
		</div>
		<div v-show="loading" class="ui active centered loader"></div>
		<br />
		<div class="ui internally celled two column grid">
		<div class="column">
			<div class="ui grid">
				
				<div class="eight wide column">
					<img class="ui top aligned medium image" :src="`${movie.cover}`">
					
				</div>

				<div class="six wide column">
					<h3 class="ui center aligned block header ">{{movie.title}}</h3>
					<h3 class="ui center aligned header">Genre : {{movie.genre}}</h3>
					<h3 class="ui center aligned header">Year : {{movie.year}}</h3>
					<h3 class="ui center aligned header">Rate : {{movie.rate}}</h3>
				</div>
			</div>
		</div>
		 
		<div class="column" >
				<h4 class="ui header">{{movie.summary}}</h4>

		</div>
		
			
		</div>

	</div>

</template>

<script type="text/javascript">

import { get, post } from '../../helpers/api'
import Vue from 'vue'
	export default{
		data(){
			return {
				initializeURL:'',
				movie:[],
				loading:false
				
				
			}
		},
		mounted(){
		console.log(this.$parent.name)	
		},
		created(){
			this.getMovieDetails()
		},
		methods:{
			getMovieDetails(movieId){
				this.initializeURL = `/movies/${this.$route.params.id}`
				this.loading=true
				get(this.initializeURL)
					.then((res) => {
						console.log(res)
						Vue.set(this.$data, 'movie', res.data.movie)
						this.loading=false
						/*this.form.logo=res.data.form.logo
						this.form.cover=res.data.form.cover
						console.log(this.form.cover + " " + this.form.logo)*/
				})
			},
		},
	}
</script>