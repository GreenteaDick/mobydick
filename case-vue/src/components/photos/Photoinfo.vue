<template>
	<div class="photoinfo-container">
		<h3>{{photoinfo.title}}</h3>
		<p class="subtitle">
			<span>发表时间：{{ photoinfo.add_time | dateFormat }}</span>
			<span>点赞：{{ photoinfo.click }}</span>
		</p>
		<hr>
		<div class="thumbs">
			<vue-preview :slides="list" @close="handleClose"></vue-preview>
		</div>
		<div class="content" v-html="photoinfo.content"></div>
		<comment-box :id="id"></comment-box>
		
	</div>
</template>

<script>
	import comment from '../subcomponents/comment.vue'
	
	export default {
		data() {
			return {
				id : this.$route.params.id,
				photoinfo:{},
				list : []
			}
		},
		created() {
			this.getPhotoInfo()
			this.getThumbs()
		},
		methods:{
			getPhotoInfo(){
				this.$http.get('api/getimageInfo/'+ this.id).then(result=>{
					if(result.body.status === 0){
						this.photoinfo = result.body.message[0]
					}
				})
			},
			getThumbs(){
				this.$http.get('api/getthumimages/'+ this.id).then(result=>{
					if(result.body.status === 0){
						result.body.message.forEach(item=>{
							item.w = 400;
							item.h = 400;
							item.msrc = item.src;
						})
						this.list = result.body.message
					}
				})
			},
			handleClose () { 
			   console.log('close event')
			}
		},
		components:{
			'comment-box' : comment
		}
		
	}
</script>

<style lang="scss" scoped="scoped">
	.photoinfo-container{
		padding: 5px;
		h3{
			font-size: 15px;
			text-align: center;
			margin: 15px 0;
		}
		.subtitle{
			display: flex;
			justify-content: space-between;
			font-size: 13px;
		}
		.content{
			font-size: 14px;
			line-height: 30px;
		}
	};
	 .thumbs{
		/deep/ .my-gallery{   //deep深层作用选择器
				display: flex;
				flex-wrap:wrap;//默认换行
				figure{
							width: 30%;  
							margin: 5px; 
							img{
							width: 100%;
							box-shadow: 0 0 8px #999;  
							border-radius: 5px;
						}
					}
			}
		}

</style>
