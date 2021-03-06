<!DOCTYPE html>
 
<html lang="en">
 
	<head>
	 
		<meta charset="UTF-8">
		 
		<title>Title</title>
		 
		<style>
		 
		#banner{
		 
		width: 460px;
		 
		height: 250px;
		 
		margin: 10px auto;
		 
		}
		 
		#content{
		 
		width: 460px;
		 
		height: 250px;
		 
		overflow: hidden;
		 
		position: relative;
		 
		}
		 
		#ul{
		 
		height: 250px;
		 
		position: absolute;
		 
		left: 0;
		 
		}
		 
		#ul li{
		 
		list-style: none;
		 
		width: 420px;
		 
		height: 250px;
		 
		float: left;
		 
		}
		 
		#ul img{
		 
		width: 420px;
		 
		height: 250px;
		 
		}
		
		.b{
		 
		width: 20px;
		 
		height: 20px;
		 
		position: absolute;
		 
		cursor: pointer;
		 
		}
		 
		.b img{
		 
		width: 20px;
		 
		height: 20px;
		 
		}
		 
		#left{
		position: absolute;
		
		top: 140px;
		 
		left: 40px;
		 
		}
		 
		#right{
		 
		top: 140px;
		 
		right: 0px;
		
		position: absolute;
		 
		}
		 
		#dotul{
		 
		width: 300px;
		 
		position: absolute;
		 
		left: 50px;
		 
		top: 210px;
		 
		}
		 
		#dotul li{
		 
		list-style: none;
		float: left;
		width: 8px;
		height: 8px;
		border-radius: 8px;
		background-color: lightgray;
		margin-left: 20px;
		cursor: pointer;
		position: relative;
		 
		}
		 
		.active{
		 
		background-color: white  !important;
		 
		}
		 
		</style>
	 
	</head>
	 
	<body>
	 
	<div id="banner">
	 
		<div id="content">
		 
			<ul id="ul">
			 
				<li><a href="###"><img src="images/广告1.jpg" /></a> </li>
				 
				<li><a href="###"><img src="images/广告2.jpg" /></a> </li>
				 
				<li><a href="###"><img src="images/广告3.jpg" /></a> </li>
				 
				<li><a href="###"><img src="images/广告1.jpg" /></a> </li>
				 
				<li><a href="###"><img src="images/广告2.jpg" /></a> </li>
				 
				<li><a href="###"><img src="images/广告3.jpg" /></a> </li>
				 
				<li><a href="###"><img src="images/广告1.jpg" /></a> </li>
				 
				<li><a href="###"><img src="images/广告2.jpg" /></a> </li>
				 
				<li><a href="###"><img src="images/广告3.jpg" /></a> </li>
				 
				<li><a href="###"><img src="images/广告1.jpg" /></a> </li>
			 
			</ul>
			<div id="btn">
	 
				<div id="left" class="b"><img src="img/prev.png"/></div>
				 
				<div id="right" class="b"><img src="img/next.png"/></div>
			 
			</div>
		 
			<div class="dot" id="dot">
			 
				<ul id="dotul">
				 
				<li></li>
				 
				<li></li>
				 
				<li></li>
				 
				<li></li>
				 
				<li></li>
				 
				<li></li>
				 
				<li></li>
				 
				<li></li>
				 
				<li></li>
				 
				<li></li>
				 
				</ul>
			 
			</div>
			 
		</div>
		 
	
	 
	</div>
	 
	<script>
	//定义所有需要用到的数据
	var animationSpeed = 1;//一次切换的图片数（就是下一张图片的间隔）
	var minSpeed = 5;//就是每次left增加或减少的数
	var stopTime = 5000;//要隔多少秒开始切换下一张图片
	//页面元素
	var prev = document.getElementById("left"); 
	var next = document.getElementById("right"); 
	var banner = document.getElementById("banner");
	var content = document.getElementById("content");
	var imgul = document.getElementById("ul");
	var imgli = document.getElementById("ul").getElementsByTagName("li");
	var liwidth = document.getElementById("ul").getElementsByTagName("li")[0].offsetWidth;
	var dot = document.getElementById("dot");
	var dotul = document.getElementById("dotul");
	var dotli = document.getElementById("dotul").getElementsByTagName('li');
	var length = document.getElementById("dotul").getElementsByTagName('li').length;
	var type = true;//是否可以渲染
	var nextTimer = null;
	var prevTimer = null;
	var mainTimer = null;

	imgul.style.width = liwidth*length+"px";//将ul的宽度设置为所有照片宽度的总和
	//给每一个dotli添加一个index属性，方便改变小圆点的背景颜色
	for (var i = 0;i<length;i++){
	imgli[i].index = i;
	dotli[i].index = i;
	}
	//给第一个小圆点加上背景
	changeColor(imgli[0]);
	next.onclick = function (ev) {
	if (type){
	liwidth = 0;
	clearInterval(nextTimer);//先把上一次留下来的定时器清除（确保清除干净—）
	 
	nextTimer = setInterval(nextImg,animationSpeed);
	 
	type = false;
	 
	changeColor(imgli[1]);//改变原点颜色
	 
	}
	 
	};
	 
	function nextImg() {
	 
	imgul.style.left = "-"+liwidth+"px";
	 
	liwidth += minSpeed;
	 
	if (liwidth >= imgli[0].offsetWidth){
	 
	clearInterval(nextTimer);
	 
	imgul.appendChild(imgli[0]);//先删除imgli[0],然后加到末尾来，这样实现了循环
	 
	imgul.style.left = 0;
	 
	type = true;
	 
	}
	 
	}
	 
	prev.onclick = function (ev) {
	 
	if (type){//如果可以渲染
	 
	imgul.insertBefore(imgli[length-1],imgli[0]);//因为当前图片的位置一直都是imgli[0]，所以按照循环的思想，上一张就是imli[length-1]
	 
	clearInterval(prevTimer);
	 
	liwidth = imgli[0].offsetWidth;
	 
	prevTimer = setInterval(prevImg,animationSpeed);
	 
	type = false;//因为设置了定时器，定时器在渲染，所以这时不能被渲染
	 
	changeColor(imgli[1]);//改变原点颜色
	 
	}
	 
	};
	 
	 
	 
	function prevImg() {
	 
	imgul.style.left = "-"+liwidth+"px";
	 
	liwidth -= minSpeed;
	 
	if (liwidth <=-1){
	 
	clearInterval(prevTimer);
	 
	imgul.style.left = 0;
	 
	type = true;//定时器已经完成渲染了，所以此时可以渲染
	 
	}
	 
	}
	 
	mainTimer = setInterval(next.onclick,5000);
	 
	 
	 
	function changeColor(target) {
	 
	for (var j = 0;j<length;j++){
	 
	dotli[j].className = "";
	 
	}
	 
	dotli[target.index].className = "active";
	 
	}
	 
	 
	 
	//为每个小圆点添加点击事件
	 
	dot.onclick = function(ev){
	 
	var ev = ev || window.event;
	 
	var target = ev.target || ev.srcElement;
	 
	if(target.nodeName.toLowerCase() == "li"){
	 
	if(type){
	 
	showImg(target.index);
	 
	changeColor(target);
	 
	type = true;
	 
	}
	 
	}
	 
	};
	 
	//根据参数显示对应的图片。
	function showImg(inde){ 
		var this_li = imgli[0].index;

		//把第一个元素放到最后面。
		if(inde>this_li){
			var x = inde-this_li;
			for(var y = 0;y<x;y++){
			imgul.appendChild(imgli[0]);
			}
		}
		//把最后一个元素放到第一的位置
		if(inde<this_li){
			var x_x = this_li-inde;
			for(var g = 0;g<x_x;g++){
				imgul.insertBefore(imgli[length-1],imgli[0]);
			}
		}
	}
	//当鼠标移入图片区域时，清除定时器。鼠标移出时恢复定时器
	content.onmouseover = function (ev) {
		clearInterval(mainTimer);
	};
	content.onmouseout = function (ev) {
		mainTimer = setInterval(next.onclick,stopTime);
	};
	</script>
	 
	</body>

</html>