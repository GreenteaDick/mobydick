
import Vue from 'vue'

import VueRouter from 'vue-router'
// 1.2 安装路由
Vue.use(VueRouter)

import VueResource from 'vue-resource'
Vue.use(VueResource)

import moment from 'moment'
Vue.filter('dateFormat',function(dataStr,pattern = "YYYY-MM-DD HH:mm:ss"){
	return moment(dataStr).format(pattern)
})
import MintUI from 'mint-ui'
Vue.use(MintUI)



import Vuex from 'vuex'
Vue.use(Vuex)
var car = JSON.parse( localStorage.getItem('car')|| '[]')
const store = new Vuex.Store({
	state:{
		car:car
	}, 
	mutations:{
		addToCar(state,goodsinfo){
			var flag = false;
			state.car.some(item=>{
				if(item.id==goodsinfo.id){
					item.count += parseInt(goodsinfo.count)
					flag = true
					return true
				}
			})
			if(flag == false){
				state.car.push(goodsinfo)
			}
			localStorage.setItem('car',JSON.stringify(state.car))
		},
		updateGoodsInfo(state,goodsinfo){
			state.car.some(item=>{
				if(item.id == goodsinfo.id){
					item.count = parseInt(goodsinfo.count)
					return true
				}
			})
			localStorage.setItem('car',JSON.stringify(state.car))
		},
		removeFormCar(state,id){
			state.car.some((item,i)=>{
				if(item.id == id){
					state.car.splice(i,1)
					return true
				}
			})
			localStorage.setItem('car',JSON.stringify(state.car))
		},
		updateGoodsSelected(state,info){
			state.car.some(item=>{
				if(item.id == info.id){
					item.selected = info.selected
				}
			})
			localStorage.setItem('car',JSON.stringify(state.car))
		}
		
	},
	getters:{
		getAllCount(state){
			var c = 0 ;
			state.car.forEach(item=>{
				c += item.count	
			})
		return c
		},
		getGoodsCount(state){
			var a = {};
			state.car.forEach(item=>{
				a[item.id] = item.count	
				a[item.price] = item.selectedCount
			})
			return a;
			console.log(a)
		},
		getGoodsSelected(state){
			var o = {}
			state.car.forEach(item=>{
				o[item.id] = item.selected
			})
			return o
		},
		getGoodsCountAndAmount(state){
			var o = {
				count:0,
				amount:0
			}
			state.car.forEach(item=>{
				if(item.selected){
					o.count += item.count
					o.amount += item.count*item.price
				}
			})
			return o
		},
	},
	
})

Vue.http.options.root = 'http://www.liulongbin.top:3005'
Vue.http.options.emulateJSON = true


	
import app from './App.vue'
//导入router路由模块
import router from './router.js'
// 入口文件
import './lib/mui/css/mui.css'
import './lib/mui/css/icons-extra.css'

import VuePreview from 'vue-preview'
// defalutinstall
Vue.use(VuePreview)


import 'mint-ui/lib/style.css'

var vm = new Vue({
	el: '#app',
	render: c => c(app),
	router,
	store
})