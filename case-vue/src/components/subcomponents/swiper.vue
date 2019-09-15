<template>
	<mt-swipe :auto="4000">
	  <mt-swipe-item v-for="item in lunbotuList" :key="item.id">
			<img :src="item.img" alt="" :class="{full:isfull}">
		</mt-swipe-item>
	</mt-swipe>
</template>

<script>
	export default {
		props:['lunbotuList', "isfull"]
	}
</script>

<style lang="scss" scoped="scoped">
	.mint-swipe {
		width: 97%;
		height: 150px;
		margin: 5px auto;
		border-radius: 5px;
		text-align:center;
			img {
				height: 100%;
			}
	}
</style>
