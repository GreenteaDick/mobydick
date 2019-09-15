<template>
	<commentBox :id="this.$route.params.id"></commentBox>
</template>

<script>
	import commentBox from '../subcomponents/comment.vue'
	export default{
		components:{
			commentBox
		}
	}
</script>

<style>
</style>
