<template>
	
	<div class="ui container">
		
		<div class="left floated">
		<router-link :to="`/`">
			<button class="ui labeled icon button"><i class="left chevron icon"></i>Back</button>
			</router-link>
		</div>
		<br />
		<div class="ui internally celled two column grid">
		<div class="column">
			<div class="ui grid">
				
				<div class="eight wide column">
					<img class="ui top aligned medium image" src="/images/movie/godfather_poster.jpg">
					
				</div>

				<div class="six wide column">
					<h3 class="ui center aligned block header ">{{movie.title}}</h3>
					<h3 class="ui center aligned header">{{movie.genre}}</h3>
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
				movie:[]
				
			}
		},
		created(){
			this.getMovieDetails()
		},
		methods:{
			getMovieDetails(movieId){
				this.initializeURL = `/movies/${this.$route.params.id}`
				get(this.initializeURL)
					.then((res) => {
						console.log(res)
						Vue.set(this.$data, 'movie', res.data.movie)
						/*this.form.logo=res.data.form.logo
						this.form.cover=res.data.form.cover
						console.log(this.form.cover + " " + this.form.logo)*/
				})
			},
		},
	}
</script>