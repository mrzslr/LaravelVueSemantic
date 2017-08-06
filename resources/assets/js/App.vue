<template>
<div>
  
        <div class="ui top fixed menu" dir="rtl">
  <router-link to="/">
  <div class="item">
    <i class="home large icon"></i>
  </div>
  </router-link>
<router-link to="/" class="item">لینک 1</router-link>
<router-link to="/" class="item">لینک 2</router-link>
</div>
<br />
<br />
<br />
<br />
<div class="ui container">
        <router-view></router-view>
</div>
</div>
</template>

<script>
    export default {
	     data() {
		      return {
		 
		      }
	    }
    }
</script>

