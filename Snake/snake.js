(function(){
	var elements=[];
		function Snake(width,height,direction){
			this.width=width||20;
			this.height=height||20;
			this.body=[
				{x:3,y:2,color:"red"},//头（以下都是初始值
				{x:2,y:2,color:"orange"},//身体
				{x:1,y:2,color:"orange"}
			]
			this.direction=direction||"right";
		}
		//类似于food的初始化
    Snake.prototype.init = function (map) {
        remove();
        for (var i = 0; i < this.body.length; i++) {
            var obj = this.body[i];
            var div = document.createElement("div");
            map.appendChild(div);
            div.style.position = "absolute";
            div.style.width = this.width + "px";
            div.style.height = this.height + "px";
            div.style.left = obj.x * this.width + "px";
            div.style.top = obj.y * this.height + "px";
            div.style.backgroundColor = obj.color;
            elements.push(div);
        }
    };
	//添加方法，另蛇动起来
		Snake.prototype.move=function(food,map){
			var i =this.body.length-1;
			//移动时改变蛇的身体坐标位置
			for(;i>0;i--){
				this.body[i].x=this.body[i-1].x;
				this.body[i].y = this.body[i - 1].y;
			}
			 switch (this.direction) {
            case "right":
                this.body[0].x += 1;
                break;
            case "left":
                this.body[0].x -= 1;
                break;
            case "top":
                this.body[0].y -= 1;
                break;
            case "bottom":
                this.body[0].y += 1;
                break;
        }

        //判断有没有吃到食物，蛇的头的坐标和食物的坐标一致
        var headX=this.body[0].x*this.width;
        var headY=this.body[0].y*this.height;
        //判断小蛇的头的坐标和食物的坐标是否相同
        if(headX==food.x&&headY==food.y){
            //获取小蛇的最后的尾巴
            var last=this.body[this.body.length-1];
            //把最后的蛇尾复制一个,重新的加入到小蛇的body中
            this.body.push({
                x:last.x,
                y:last.y,
                color:last.color
            });
            food.init(map);
        }
    }
		function remove() {
        //类似于food中删除子元素
        var i = elements.length - 1;
        for (; i >= 0; i--) {
            var ele = elements[i];
            ele.parentNode.removeChild(ele);
            elements.splice(i, 1);
        }
    }
	window.Snake = Snake;
}()
);