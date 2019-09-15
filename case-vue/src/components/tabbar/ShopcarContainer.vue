<template>
	<div class="shopcar-container">
		<div class="mui-card" v-for="(item,i) in goodslist" :key="item.id">
			<div class="mui-card-content">
				<div class="mui-card-content-inner">
					<mt-switch v-model="$store.getters.getGoodsSelected[item.id]" @change="selectedChanged(item.id,$store.getters.getGoodsSelected[item.id])" style="margin-right: 10px;"></mt-switch>
					<img :src="item.thumb_path" alt="">
					<div class="info">
						<h3 class="title">{{item.title}}</h3>
						<p>
							<span class="price">￥{{ item.sell_price }}</span>
						</p>
						<numbox :initcount="$store.getters.getGoodsCount[item.id]" :goodsid="item.id" :max="$store.getters.getGoodsCount[item.sell_price]"></numbox>
						<mt-button @click="remove(item.id,i)" type="danger"  size="small" style="height: 25px;">删除{{ $store.getters.getGoodsCount[item.sell_price] }}</mt-button>
					</div>
				</div>
			</div>
		</div>
		<div class="mui-card">
			<div class="mui-card-content">
				<div class="mui-card-content-inner jiesuan">
					<div class="left">
						<p>总计（不包含运费）</p>
						<p>已勾选商品<span class="red">{{$store.getters.getGoodsCountAndAmount.count}}</span>件，总价<span class="red">￥{{$store.getters.getGoodsCountAndAmount.amount}}</span></p>
					</div>
					<mt-button type="danger">去结算</mt-button>
				</div>
			</div>
		</div>
	</div>
	
</template>

<script>
	import numbox from "../subcomponents/shopcar_numbox.vue"
	import { Toast } from 'mint-ui';
	export default {
		data(){
			return {
				goodslist:[],
				selectedCount:1,
			}
		},
		created(){
			this.getGoodsList()
		},
		methods:{
			getGoodsList(){
				var idArr = []
				this.$store.state.car.forEach(item=>{
					idArr.push(item.id)
				})
				if(idArr.length <= 0){
					return;
				}
				this.$http.get('api/goods/getshopcarlist/' + idArr.join(",")).then(result => {
					if ( result.body.status === 0 ){
						this.goodslist = result.body.message
						
					}else{
						Toast('获取失败')
					}
			})
		},
		remove(id,index){
			this.goodslist.splice(index,1);
			this.$store.commit("removeFormCar",id)
		},
		selectedChanged(id,val){
			this.$store.commit("updateGoodsSelected",{id,selected:val})
		}
	},
		components:{
			numbox
		}
	}
</script>

<style lang="scss" scoped="scoped">
	.shopcar-container{
		background-color: #eee;
		overflow: hidden;
		.mui-card-content-inner{
			display: flex;
			align-items:center;
			img{
				width: 60px;
				height: 60px;
			}
			
			.info{
				margin-left: 10px;
				flex-direction:column;
				justify-content:space-between;
				.price{
					color: red;
					font-weight: 700;
				}
				.title{
					font-size: 14px;
					
				}
			}
		}
		.jiesuan{
			display: flex;
			justify-content: space-between;
			align-items: center;
			.red{
				color: red;
				font-weight: 700;
				font-size: 16px;
			}
		}
	}
</style>
