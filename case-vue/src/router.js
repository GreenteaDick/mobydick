import VueRouter from 'vue-router'

import HomeContainer from './components/tabbar/HomeContainer.vue'
import MemberContainer from './components/tabbar/MemberContainer.vue'
import ShopcarContainer from './components/tabbar/ShopcarContainer.vue'
import SearchContainer from './components/tabbar/SearchContainer.vue'
import NewsList from './components/news/NewsList.vue'
import Newsinfo from './components/news/Newsinfo.vue'
import PhotoList from './components/photos/PhotoList.vue'
import PhotoInfo from './components/photos/Photoinfo.vue'
import GoodsList from './components/goods/GoodsList.vue'
import GoodsInfo from './components/goods/GoodsInfo.vue'
import GoodsDesc from './components/goods/GoodsDesc.vue'
import GoodsComment from './components/goods/GoodsComment.vue'

// 3. 创建路由对象
var router = new VueRouter({
  routes: [

		{ path: '/', component: HomeContainer },
		{ path: '/home', component: HomeContainer },
		{ path: '/member', component: MemberContainer },
		{ path: '/shopcar', component: ShopcarContainer },
		{ path: '/search', component: SearchContainer },
		{ path: '/home/news' , component: NewsList },
		{ path: '/home/newsinfo/:id' , component: Newsinfo },
		{ path: '/home/photolist', component: PhotoList},
		{ path: '/home/photoinfo/:id', component: PhotoInfo},
		{ path: '/home/goodslist', component: GoodsList},
		{ path: '/home/goodsinfo/:id', component: GoodsInfo},
		{ path: '/home/goodsdesc/:id', component: GoodsDesc, name: 'GoodsDesc'},
		{ path: '/home/goodsComment/:id', component: GoodsComment, name : 'GoodsComment'}
  ],
	linkActiveClass:'mui-active'
})

// 把路由对象暴露出去
export default router