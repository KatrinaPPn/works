<!DOCTYPE html>
 
<html lang="en">
 
<head>
 
    <meta charset="UTF-8">
 
    <title>原生js实现幻灯片</title>
 
</head>
 
<style>
 
    .container{
 
        width: 100%;
 
        height: 500px;
 
        position: relative;
 
    }
 
    .content{
 
        width: 900px;
 
        height: 450px;
 
        position: relative;
 
        overflow: hidden;
 
        border: 1px solid seagreen;
 
        margin: 0 auto;
 
    }
 
    .slider-img{
 
        width: 900px;
 
        height: 450px;
 
        margin: 10px auto;
 
    }
 
    .slider-img img{
 
        vertical-align: top;
 
        width: 800px;
 
        height: 400px;
 
        margin: 10px 50px;
 
        display: block;
 
    }
 
    .left{
 
        margin-top: -300px;
 
        margin-left: 50px;
 
        width: 100px;
 
        height: 100px;
 
 
 
    }
 
    .left img,.right img{
 
        width: 100px;
 
        height: 100px;
 
    }
 
    .right{
 
        margin-top: -100px;
 
        margin-right: 50px;
 
        float: right;
 
        width: 100px;
 
        height: 100px;
 
    }
 
 
 
    .dot{
 
        position: relative;
 
        top: 23%;
 
        left: 43%;
 
        width: 50%;
 
    }
 
    .dotul{
 
        width: 450px;
    }
 
    .dotul li{
 
        width: 20px;
 
        height: 20px;
 
        background-color: seagreen;
 
        list-style: none;
 
        float: left;
 
        border-radius: 20px;
 
        margin-left: 15px;
 
        z-index: 999;
 
        cursor: pointer;
 
    }
 
    .active{
 
        background-color: orangered !important;
 
    }
 
 
 
</style>
 
<body>
 
    <div class="container" id="contaner">
 
        <div class="content" id="content">
 
            <div class="slider-img" id="slider" >
 
                <a href="javascript:;">
 
                    <img src="images/广告1.jpg" alt="1.jpg" id="img">
 
                </a>
 
            </div>
 
        </div>
 
        <div class="btn">
 <!--左右按钮-->
            <div class="left" id="left">
 
                <a href=" ###"><img src="images/广告2.jpg"></a>
 
            </div>
 
            <div class="right" id="right">
 
                <a href=" ###"><img src="images/广告3.jpg"></a>
 
            </div>
 
        </div>
 
        <div class="dot">
 
            <ul id="ul" class="dotul">
 
                <li class="active"></li>
 
                <li></li>
 
                <li></li>
 
                <li></li>
 
                <li></li>
 
            </ul>
 
        </div>
 
 
 
    </div>
 
<script>
 
    //首先要获取元素
 
    var container = document.getElementById("container");
 
    var content = document.getElementById("content");
 
    var slider = document.getElementById("slider");
 
    var img = document.getElementById("img");
 
    var ul = document.getElementById("ul");
 
    var li = document.getElementsByTagName("li");
 
    var left = document.getElementById("left");
 
    var right = document.getElementById("right");
 
    var num = 0;
 
    var timer = null;
 
 
 
 
 
    //图片位置
 
    var arrUrl = ["images/广告2.jpg","images/广告1.jpg","images/广告3.jpg","images/广告2.jpg","images/广告1.jpg"];
 
    left.onclick = function (ev) {
 
        num--;
 
        if (num == -1){
 
            num = arrUrl.length-1;//如果到了第一张，返回最后一张
 
        }
 
        changeImg();
 
    };
 
    right.onclick = function (ev) {
 
        num++;
 
        if (num == arrUrl.length){
 
            num = 0;//如果是最后一张，则返回第一张
 
        }
 
        changeImg();
 
    };
 
    //点击小圆点跳转到对应的图片
 
    for (var i=0;i<arrUrl.length;i++){
 
           li[i].index = i;
 
           li[i].onclick = function (ev) {
 
               num = this.index;
 
               changeImg();
 
           }
 
    }
 
 
 
    setTimeout(autoPlay(),1000);//延迟1秒执行自动切换
 
 
 
    //鼠标移入清除定时器，鼠标移出恢复
 
    content.onmouseover = function (ev) {
 
        clearInterval(timer);
 
    };
 
    content.onmouseout = autoPlay;
 
 
 
    //图片切换函数
 
    function changeImg() {
 
        img.src = arrUrl[num];//改变图片src位置
 
        for (var i = 0;i< li.length;i++){//改变原点样式
 
            li[i].className = "";
 
        }
 
        li[num].className = "active";
 
    }
 
    //设置定时器
 
    function autoPlay() {
 
        timer = setInterval(function () {
 
            num++;
 
            num %= arrUrl.length;
 
            changeImg();
 
        },2000);
 
    }
 
</script>
 
</body>
 
</html>