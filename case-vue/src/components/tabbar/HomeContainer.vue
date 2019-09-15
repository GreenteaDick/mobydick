<template>
	
	<div>
		<mt-swipe :auto="4000">
		  <mt-swipe-item >
				<img src="../../images/banner1.jpg" alt="" >
			</mt-swipe-item>
			<mt-swipe-item>
				<img src="../../images/banner2.jpg" alt="">
			</mt-swipe-item>
			<mt-swipe-item>
				<img src="../../images/banner3.jpg" alt="">
			</mt-swipe-item>
		</mt-swipe>
		<ul class="mui-table-view mui-grid-view mui-grid-9">
		    <li class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-3"><RouterLink to= '/home/news'>
		            <img src="../../images/menu1.png" alt="">
		            <div class="mui-media-body">新闻资讯</div></RouterLink></li>
		    <li class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-3"><RouterLink to = '/home/photolist'>
		            <img src="../../images/menu2.png" alt="">
		            <div class="mui-media-body">图片分享</div></RouterLink></li>
		    <li class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-3"><RouterLink to = '/home/goodslist'>
		            <img src="../../images/menu3.png" alt="">
		            <div class="mui-media-body">商品购买</div></RouterLink></li>
		    <li class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-3"><RouterLink to = '#'>
		            <img src="../../images/menu4.png" alt="">
		            <div class="mui-media-body">留言反馈</div></RouterLink></li>
		    <li class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-3"><RouterLink to = '#'>
		            <img src="../../images/menu5.png" alt="">
		            <div class="mui-media-body">视频专区</div></RouterLink></li>
		    <li class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-3"><RouterLink to = '#'>
		            <img src="../../images/menu6.png" alt="">
		            <div class="mui-media-body">联系我们</div></RouterLink></li>
		</ul>
	</div>
	
	
</template>

<script>
	import { Toast } from "mint-ui";
	import swiper from "../subcomponents/swiper.vue"
	
	export default {
		data(){
			return{
				lunbotuList:[]
			};
		},
		created(){
			this.getLunbotu();
		},
		methods: {
			getLunbotu(){
				this.$http.get('api/getlunbo').then(result => {
					if ( result.body.status == 0 ){
						this.lunbotuList = result.body.message;
					}else{
						Toast('轮播图加载失败')
					}
				});
			}
		},
		components:{
			swiper
		}
	}
</script>

<style lang="scss" scoped>

	.mui-grid-view.mui-grid-9 {
		border: none;
		background-color: white;
		img {
			width: 40px;
			height: 40px;
		}
		.mui-media-body{
			font-size: 13px;
		}
	}
	.mui-grid-view.mui-grid-9 .mui-table-view-cell{
		border: none;
	}
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
