<template>
	<div class="ui container">
		

		<div class="sixteen wide column" >
			<div class="ui fluid icon input" >
		  		<input type="text" placeholder="Search" dir="ltr" v-model="searchQuery">
		  		<i class="search icon"></i>
			</div>
		</div>

		<div class="ui fluid three item menu">
		  <a tabindex="0" class="item active">Top Rated Movies</a>
		  <a tabindex="1" class="item">In Theaters</a>
		  <a tabindex="2" @click="fetchSeries()" class="item">Series</a>
		</div>

<div v-show="loading" class="ui active centered loader"></div>
		<div class="ui four stackable cards">

	    <div class="ui fluid card" v-for="(movie,index) in movies">
	 	<a class="ui red right corner label" >
	        <i class="inverted star icon"></i>
	      </a>
	      <div class="image">

	        <img class="ui medium image" style="height:350px;" :src="`${movie.cover}`">
	      </div>
	      <div class="content">
	      <router-link class="header"  :to="`/movie/${movie.id}`">
	        {{movie.title}}
	        </router-link>
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
import Vue from 'vue'
import { get,del } from '../../helpers/api'
	export default{
		data(){
			return {
				message:'Welcome to Movie Index',
				movies:[],
				searchQuery:'',
				loading:false
			}
		},
		created(){
				this.fetchMovies()
		},
		mounted(){

			
			$('.ui.fluid.three.item.menu .item').on('click', function(el) {
		        $('.ui .item').removeClass('active');
		        $(this).addClass('active');
		        var tabIndex=el.target.tabIndex;
		        switch(tabIndex){
		        	case 0:
		        		console.log("zero")
		        	break;
		        	case 1:
		        		console.log("one")
		        	break
		        	case 2:
		        		console.log("two")
		        	break;
		        	dafault:
		        		console.log("tab index is " + tabIndex)

		        }
		    }); 
		},
		
		methods:{
			fetchMovies(){
				this.loading=true
				get('/movies')
					.then((res) => {
						console.log("fetch movies")
						// this.movies=res.data.movies
						Vue.set(this.$data, 'movies', res.data.movies)
						this.loading=false
				})
			},
			fetchSeries(){
				this.movies=[]
				this.loading=true
				get('/movies')
					.then((res) => {
						console.log("fetch series")
						// this.movies=res.data.movies
						Vue.set(this.$data, 'movies', res.data.movies)
						this.loading=false
				})
				
			},
			fetchInTheaters(){

			}
			
		},
	}
</script>