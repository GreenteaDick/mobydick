<template>
  <div class = "app-container">
		
		<!-- header部分 -->
<!-- 		<header class="mui-bar mui-bar-nav">
			<router-link class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left" to="" slot="left" @click="$router.back(-1)" >
			</router-link>
				<h1 id="title" class="mui-title">首页</h1>
		</header> -->
		
		<mt-header fixed title="Vue案例">
			<span slot="left">
			    <mt-button icon="back" size="small" type="default" v-show="flag" @click="$router.go(-1)">返回</mt-button>
			</span>
		</mt-header>
		
		<!-- main 部分 -->

		<transition>
			<router-view></router-view>
		</transition>

		
		<!-- bottom 部分 -->
		<nav class="mui-bar mui-bar-tab">

			<router-link class="mui-tab-item-s" to="/home">
				<span class="mui-icon mui-icon-home"></span>
				<span class="mui-tab-label">首页</span>
			</router-link>
			<router-link class="mui-tab-item-s" to="/member">
				<span class="mui-icon mui-icon-contact mui-icon-icon-contact"></span>
				<span class="mui-tab-label">会员</span>
			</router-link>
			<router-link class="mui-tab-item-s" to="/shopcar">
				<span class="mui-icon mui-icon-extra mui-icon-extra-cart"><span class="mui-badge" id="badge">{{ $store.getters.getAllCount }}</span></span>
				<span class="mui-tab-label">购物车</span>
			</router-link>
			<router-link class="mui-tab-item-s" to="/search">
				<span class="mui-icon mui-icon-search"></span>
				<span class="mui-tab-label">搜索</span>
			</router-link>
		</nav>
		
		
  </div>
</template>

<script>
export default{
	data(){
		return {
			flag : false
		}
	},
	watch:{
		'$route.path':function(newVal){
			if(newVal === "/home"){
				this.flag = false
			}else{
				this.flag = true
			}
		}
	}
}
</script>



<style lang="scss" scoped>

.mint-header{
	color: #333;
	background-color: white;
	box-shadow: 0 1px 6px #ccc;
	-webkit-box-shadow: 0 1px 6px #ccc;
}
.mint-header.is-fixed {
    z-index: 9;
}
.mui-bar{
	box-shadow: 0 1px 6px #ccc;
	-webkit-box-shadow: 0 1px 6px #ccc;
}
.app-container{
	padding-top: 40px ;
	padding-bottom: 50px ;
	overflow: hidden;
}
.v-enter {
	opacity: 0;
	transform: translateX(100%);
}
.v-leave-to {
	opacity: 0;
	transform: translateX(-100%);
	position: absolute;
}
.v-enter-active,
.v-leave-active{
	transition: all 0.3s ease;
}
.mui-bar-tab .mui-tab-item-s.mui-active {
    color: #007aff;
}
.mui-bar-tab .mui-tab-item-s {
    display: table-cell;
    overflow: hidden;
    width: 1%;
    height: 50px;
    text-align: center;
    vertical-align: middle;
    white-space: nowrap;
    text-overflow: ellipsis;
    color: #929292;
}
.mui-bar-tab .mui-tab-item-s .mui-icon {
    top: 3px;
    width: 24px;
    height: 24px;
    padding-top: 0;
    padding-bottom: 0;
}
.mui-bar-tab .mui-tab-item-s .mui-icon ~ .mui-tab-label {
    font-size: 11px;
    display: block;
    overflow: hidden;
    text-overflow: ellipsis;
}
</style>
