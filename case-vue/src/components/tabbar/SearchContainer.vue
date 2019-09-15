<template>
  <div id="app">
		<mt-search
		  cancel-text="取消"
		  placeholder="搜索">
		</mt-search>
  </div>
</template>
 
<script>
export default {
  name: 'app',
  data () {
  	return {

		}
	}
}
</script>
 
<style>
	.mint-searchbar-core{
		margin-top: 13px;
		}
	input[type='search']{
		height: 25px;
		background-color: white;
		font-size: 12px;
		}
</style>
