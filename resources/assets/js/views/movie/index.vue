<template>
	<div class="ui container">
		
		<div align="center" class="ui inverted segment">{{message}}</div>
<!-- // -->	
		<div class="ui four stackable cards">

	    <div class="ui fluid card" v-for="(movie,index) in movies">
	 <a class="ui red right corner label" >
	        <i class="inverted star icon"></i>
	      </a>
	      <div class="image">

	        <img class="ui medium image" style="height:350px;" :src="`${movie.cover}`">
	      </div>
	      <div class="content">
	        <a class="header">{{movie.title}}</a>
	        <div class="meta">
      <span class="date">{{movie.year}}</span>
    </div>

	      </div>
	      <div class="extra content">
    <span class="left floated">
      <i class="star icon"></i>
      {{movie.rate}}
    </span>

     <span class="right floated">
     
      {{movie.genre}}
    </span>
    
  </div>
	    </div>
	 </div>

<!-- // -->
	</div>

</template>

<script type="text/javascript">
import { get,del } from '../../helpers/api'
	export default{
		data(){
			return {
				message:'Welcome to Movie Index',
				movies:[]
			}
		},
		created(){
			this.fetchMovies()
		},
		mounted(){
			console.log("mounted")
		},
		methods:{
			fetchMovies(){
				get('/movies')
					.then((res) => {
						this.movies=res.data.movies
				})
			},
		},
	}
</script>