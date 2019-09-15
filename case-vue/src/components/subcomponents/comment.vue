<template>
	<div class="control">
		<h4>评论</h4>
		<textarea placeholder="请输入你的评论(最多120字)" maxlength="120" v-model="msg" ></textarea>
		<mt-button type="primary" size="large" @click="postComment">发表评论</mt-button>
		<div class="cmt-list">
			<div class="cmt-item" v-for="(item, i) in comments" :key="item.add_time">
				
				<p class="cmt-title">
					<span>第{{ i+1 }}楼</span><span>发表时间：{{ item.add_time | dateFormat }}</span>
					<span>{{ item.user_name }}</span>
				</p>
				<div class="cmt-body">
					{{ item.content === 'undefined' ? '该评论已被删除' : item.content }}
				</div>
				<hr>
			</div>
		</div>
		<mt-button type="primary" size="large" plain @click="getMore" >加载更多</mt-button>
		<p></p>
	</div>
</template>

<script>
	import { Toast } from 'mint-ui';
	export default {
		data(){
			return {
				pageIndex : 1,
				comments: [],
				msg:''
			}
		},
		created() {
			this.getComments();
		},
		methods:{
			getComments(){
				this.$http.get('api/getcomments/'+ this.id + '?pageindex='+this.pageIndex).then(result => {
					if (result.body.status === 0){
						this.comments = this.comments.concat(result.body.message)
					}else{
						Toast('获取评论失败')
					}
				})
			},
			getMore(){
				this.pageIndex++;
				this.getComments();
			},
			postComment(){
				if(this.msg.trim().length === 0 ){
					return Toast('评论内容不能为空')
				}
				this.$http.post('api/postcomment/' + this.$route.params.id, { content:this.msg.trim() })
				.then(function(result){
					if(result.body.status ===0 ){
						var cmt = {
							user_name : "匿名用户", 
							add_time : Date.now(),
							content : this.msg.trim()
						}
						this.comments.unshift(cmt)
						this.msg = ''
					}
				})
				
				
			}
		},
		props:["id"]
	}
</script>

<style lang="scss" scoped="">
	textarea{
		font-size: 12px;
		margin: 0;
	}
	
	.control{
		padding: 10px; 
		button{
			margin-top:5px ;
		}
		.cmt-list{
			.cmt-item{
				
				line-height:20px;
				.cmt-title{
					margin: 10px 0 5px;
					font-size:10px;
					display: flex;
					justify-content: space-between;
				}
				.cmt-body{
					font-size: 15px;
					margin-bottom: 20px;
				}
			}
			
		}
	}
</style>