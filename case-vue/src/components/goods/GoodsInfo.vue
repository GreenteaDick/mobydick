<template>
	<div class="goodsinfo-container">
		
		<transition @before-enter="beforeenter" @enter="enter" @after-enter="afterenter" mode="out-in" >
			<!-- 如果使用v-show ，使用mode="out-in"无效果，换成v-if即可 -->
			<div class="ball" v-if="ballFlag" ref="ball"></div>
		</transition>
		
		
		<div class="mui-card">
			<div class="mui-card-content">
				<div class="mui-card-content-inner">
					<swiper :lunbotuList="lunbotu" :isfull="true"></swiper>
				</div>
			</div>
		</div>
		<div class="mui-card">
			<div class="mui-card-header">{{goodsinfo.title}}</div>
			<div class="mui-card-content">
				<div class="mui-card-content-inner">
					<P>
						市场价：<del> ¥{{goodsinfo.market_price}}</del>
						销售价：<span class="now_price"> ¥{{goodsinfo.sell_price}}</span>
					</P>
					<p>购买数量:
					<numbox @getcount="getSelectCound" :max="goodsinfo.stock_quantity"></numbox>
					</p>
					
					<p>
						<mt-button type="primary" size="small">立即购买</mt-button>
						<mt-button type="danger" size="small" @click = "addToShopCar">加入购物车</mt-button>
					</p>
				</div>
			</div>
		</div>
		<div class="mui-card">
				<div class="mui-card-header">商品参数</div>
				<div class="mui-card-content">
					<div class="mui-card-content-inner">
						<p>商品货号：{{goodsinfo.goods_no}}</p>
						<p>库存情况：{{goodsinfo.stock_quantity}}</p>
						<p>上架时间：{{goodsinfo.add_time | dateFormat}}</p>
					</div>
				</div>
				<div class="mui-card-footer">
					<mt-button type="primary" size="large" plain @click="goDesc(id)">图文介绍</mt-button>
					<mt-button type="danger" size="large" plain @click="goComment(id)">商品评论</mt-button>
				</div>
		</div>
	</div>
</template>

<script>
	import swiper from "../subcomponents/swiper.vue"
	import numbox from "../subcomponents/goodsinfo_numbox.vue"
	export default {
		data(){
			return {
				id : this.$route.params.id,
				lunbotu:[],
				goodsinfo:{},
				ballFlag:false,
				selectedCount: 1
 			}
		},
		created() {
			this.getLunbotu();
			this.getGoodsInfo();
		},
		methods:{
			getLunbotu(){
				this.$http.get('api/getthumimages/'+this.id).then(result => {
					if ( result.body.status == 0 ){
						result.body.message.forEach(item=>{
							item.img = item.src
						})
						this.lunbotu = result.body.message;
						
					}else{
						Toast('轮播图加载失败')
					}
				});
			},
			getGoodsInfo(){
				this.$http.get('api/goods/getinfo/'+ this.id).then(result=>{
					if(result.body.status === 0){
						this.goodsinfo = result.body.message[0]
						}
					})
				},
			goDesc(id){
				this.$router.push( {name :'GoodsDesc', params:{id} } );
			},
			goComment(id){
				this.$router.push( {name :'GoodsComment', params:{id} } );
			},
			addToShopCar(){
				this.ballFlag = !this.ballFlag;
				//保存到vuex
				var shopinfo = {
					id:this.id , 
					count:this.selectedCount,
					price:this.goodsinfo.sell_price,
					selected: true,
					selectedCount:this.goodsinfo.stock_quantity
				};
				this.$store.commit("addToCar",shopinfo)
			},
			beforeenter(el){
				el.style.transform = "translate(0,0)";
			},
			enter(el,done){
				el.offsetWidth;
				const ballPosition = this.$refs.ball.getBoundingClientRect();
				const badgePosition = document.getElementById("badge").getBoundingClientRect();
				const xDist = badgePosition.left - ballPosition.left;
				const yDist = badgePosition.top - ballPosition.top;
				el.style.transform = `translate(${xDist}px,${yDist}px)`;
				el.style.transition = "all 0.5s cubic-bezier(.61,.09,.54,1)";
				done();
			},
			afterenter(){
				this.ballFlag = !this.ballFlag;
			},
			getSelectCound(count){
				this.selectedCount = count ;
			}
		},
		
		components:{
			swiper,
			numbox
		}
	}
</script>

<style lang="scss" scoped="scoped">
	.goodsinfo-container{
		background-color: #eee;
		overflow: hidden;
	}
.now_price{
	color: red;
	font-size: 16px;
	font-weight: 700;
}
.mui-card-footer{
	
	display: block;
	button{
		margin: 20px 0;
	}
}
.ball{
	width: 15px;
	height: 15px;
	border-radius: 50%;
	background-color: red;
	position: absolute;
	z-index: 99;
	top: 355px;
	left: 142px;
}
</style>
