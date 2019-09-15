<template>
	<div class="good-list">
		<RouterLink class="good-item" v-for="item in goodslist" :key="item.id" :to="'/home/goodsinfo/'+ item.id" tag="div">
			<img :src="item.img_url" :alt="item.zhaiyao"/>
			<h2 class="title">{{ item.title }}</h2>
			<div class="info">
				
				<p class="price">
					
					<span class="now">¥{{ item.sell_price }}</span>
					<span class="old">¥{{ item.market_price }}</span>
				</p>
				<p class="sell">
					<span>热卖中</span>
					<span>剩{{ item.stock_quantity }}件</span>
				</p>
			</div>
		</RouterLink>
		<mt-button type="danger" size="large" @click="getMore">加载更多</mt-button>
	</div>
</template>

<script>
	export default {
		data(){
			return{
				pageindex:1,
				goodslist:[]
			}
		},
		created(){
			this.getGoodsList()
		},
		methods:{
			getGoodsList(){
				this.$http.get('api/getgoods?pageindex='+this.pageindex).then(result => {
					if ( result.body.status == 0 ){
						this.goodslist = this.goodslist.concat(result.body.message);
					}else{
						Toast('轮播图加载失败')
					}
				});
			},
			getMore(){
				this.pageindex++;
				this.getGoodsList();
			}
		}
	}
</script>

<style lang="scss" scoped="scoped">
.good-list{
		display: flex;
		flex-wrap: wrap;
		padding: 10px;
		justify-content:space-between;
		.good-item{
			width: 49%;
			border: 1px solid #ccc;
			box-shadow: 0 0 8px #ccc;
			margin: 5px 0 ;
			padding:2px;
			display:flex;
			flex-direction:column;
			justify-content:space-between;
			min-height:293px;
			img{
				width: 100%;
			}
			.title{
				font-size:14px;
			}
			.info{
				background-color:#eee;
				
				.price{
					.now{ 
						color: red;
						font-weight: bold;
						font-size: 16px;
					}
					.old{
						text-decoration: line-through;
					}
				}
				.sell{
					display:flex;
					justify-content:space-between;
				}
			}
		}
	}
</style>
