<template>
	<div class="goodsdes-container">
		<h4>
		{{info.title}}
		</h4>
		<hr>
		<div class="content" v-html="info.content"></div>
	</div>
</template>

<script>
	export default{
		data(){
			return {
				info:{}
			}
		},
		created() {
			this.getGoodsDesc();
		},
		methods:{
			getGoodsDesc(){
				this.$http.get('api/goods/getdesc/' + this.$route.params.id,).then(result => {
					if ( result.body.status === 0 ){
						this.info = result.body.message[0]
					}else{
						Toast('获取失败')
					}
				})
			}
		}
	}
</script>

<style lang="scss">
	.goodsdes-container{
		padding:10px;
		h4{
			font-size: 14px;
			text-align: center;
			margin: 20px 5px;
		}
		.content {
			p{
				img{
					
					width: 100%;
				}
			}
			
			
		}
	}
</style>
