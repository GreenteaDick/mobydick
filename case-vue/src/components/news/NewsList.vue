<template>
		<div class="mui-content">
			<ul class="mui-table-view">
				<li class="mui-table-view-cell mui-media" v-for="item in newsList" :key="item.id">
					<RouterLink :to="'/home/newsinfo/'+ item.id " >
						<img class="mui-media-object mui-pull-right" :src="item.img_url">
						<div class="mui-media-body">
							<h2>{{ item.title }}</h2>
							<p class="mui-ellipsis">
							<span>时间：{{ item.add_time | dateFormat }}</span>
							<span>点赞：{{ item.click }}</span>
							</p>
						</div>
					</RouterLink>
				</li>
				
			</ul>
		</div>
</template>

<script>
	import { Toast } from 'mint-ui';
	export default {
		data(){
			return {
				newsList : []
			}
		},
		created(){
			this.getNewsList()
		},
		methods:{
			getNewsList(){
				this.$http.get('api/getnewslist').then(result => {
					if ( result.body.status === 0 ){
						this.newsList = result.body.message
					}else{
						Toast('获取失败')
					}
				})
			}
		}
	}
</script>

<style lang="scss" scoped="scoped">
	.mui-content > .mui-table-view:first-child {
		margin-top: 0;
	}
	.mui-table-view{
		li{
			h2{
				font-size: 14px;
				overflow: hidden;
				text-overflow: ellipsis;
			}
			.mui-ellipsis{
				font-size: 12px;
				display: flex;
				justify-content: space-between;
			}
		}
	}
</style>
