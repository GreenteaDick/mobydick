// document.write("<script language=javascript src='jquery-1.12.4.js'></script>");
// $(function(){
// 	var bannerNum = 0;
// 	$(".bannerR").click(function(){
// 		bannerNum++;
// 		$(".banner>ul>li").eq(bannerNum).fadeIn().siblings("li").fadeOut();
// 	})
// })
$(function() {
	// 给banner创建点击跳转的小圆点
			var bannerli = $(".banner-nav>li").length;
			var bannerIndex = 0;
			var autoTime = null;
			for (var i=0;i<bannerli;i++) {
				($(".circle>ul")).append("<li></li>");	
			};
			$(".circle>ul>li").eq(bannerIndex).addClass("liClick").siblings().removeClass("liClick");
			//banner在被左右点击和小圆点点击时交互的函数,下面是分别注册点击事件
			function bannerRun () {
				$(".banner>ul>li").eq(bannerIndex).stop().fadeIn().siblings("li").stop().fadeOut();
				$(".circle>ul>li").eq(bannerIndex).addClass("liClick").siblings().removeClass("liClick");
			};
			$(".circle>ul>li").on("click", function(){
				bannerIndex = $(this).index();
				bannerRun();
			})
			
			var bannerIndex = 0;
			$(".bannerR").click(function() {
				bannerIndex++;
				 clearInterval("autoTime");
				if (bannerIndex == $(".banner>ul>li").length) {
					bannerIndex = 0;
				}
				bannerRun();
			});
			$(".bannerL").click(function() {
				bannerIndex--;
				if (bannerIndex == -1) {
					bannerIndex = $(".banner>ul>li").length - 1;
				}
				bannerRun();
			});
			function auto() {
				clearInterval(autoTime);
				 autoTime = setInterval(function(){
					bannerIndex++;
					if (bannerIndex == bannerli ) {
						bannerIndex = 0;
					};
					bannerRun();
					console.log("aaa")
				},3000)};
			auto();
			$(".banner").mouseenter(function(){
				$(".bannerL,.bannerR").css("opacity","0.4");
				clearInterval(autoTime);
			});
			$(".banner").mouseleave(function(){
				$(".bannerL,.bannerR").css("opacity","0.1");
				auto();
			});
			$(".top-s").load("common.php");
})
