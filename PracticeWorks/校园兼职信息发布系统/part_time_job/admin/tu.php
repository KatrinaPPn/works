
		<script src="js/jquery.min.js"></script>
		<script src="js/echarts-en.common.js"></script>
	
	<style>
		.visitor-company {
			width: 600px;
			height: 300px;
		}
		.header-title {
			width: 500px;
			margin:0 auto;
		}
		
		.visitor-data {
			width: 600px;
			height: 300px;
			margin:0 auto;
		}
		/*显示的具体的日期*/
		
		.select-box {
			float: right;
		}
		
		.Search {
			float: left;
		}
		
		.selectBox {
			float: left;
			margin-left: 7px;
			width: 100px;
		}
		
		.selectBox a i {
			padding-left: 8px;
		}
		/*搜索的内容*/
		
		.selectBox a {
			text-decoration: none;
			font-size: 14px;
			color: #2f353b;
		}
		
		.selectBox .but {
			padding: 3px;
			padding-left: 10px;
			padding-right: 10px;
			border: solid 1px #2f353b;
			border-radius: 14px;
		}
		
		.selectBox ul {
			list-style: none;
			display: none;
			width: 80px;
			margin-top: 4px;
			box-shadow: 3px 3px 3px 3px #888888;
			padding-left: 3px;
			margin-left: 6px;
			background-color: #ffffff;
			border-radius: 3px;
			position: absolute;
			z-index: 10;
		}
		/*鼠标移动事件*/
		
		.selectBox .but:hover {
			background: #ddd;
		}
		
		.selectBox li:hover {
			background: #ddd;
		}
		
		.changeNone {
			display: none;
		}
	</style>

	
		<h4 class="header-title mb-3 echarts-title">
                    本年度兼职职位发布数量统计
                    <div class="select-box">
                        <div class="Search">
                            <samp id="Visitor-SearchYear"></samp>年
                            
                        </div>
                      
                    </div>
            </h4>
		<div id="visitor-data" class="visitor-data"></div>
	

	<script>
		
		$(function() {
			VisitorData();
			SerrchEcharts();
		})

		function SerrchEcharts() {
			Search("Visitor-");
			MouseHover();
		}
		/*type：可以为多个不同的Echarts图*/
		function Search(type) {
			/*初始化数据 */
			var myDate = new Date();
			var year = myDate.getFullYear(); //获取当前年
			var month = myDate.getMonth() + 1; //获取当前月
			$("#" + type + "SearchYear").html(year);
			

			//循环当前年
			for(var i = 0; i < 5; i++) {
				$("<li value='" + (year - i) + "'><a href='javascript:void(0)'>" + (year - i) + "</a></li>").appendTo($("#" + type + "Year"));
			}
			//循环当前月
			for(var i = 01; i < 13; i++) {
				$("<li value='" + i + "'><a href='javascript:void(0)'>" + i + "</a></li>").appendTo($("#" + type + "Month"));
			}

			
		}

		// 鼠标移入移出事件
		function MouseHover() {
			$('.selectBox a').hover(function() {
				$(this).next().toggle();
			}, function() {
				$(this).next().hide();
			});
			$('.selectBox ul').hover(function() {
				$(this).toggle();
			}, function() {
				$(this).hide();
			});
		}

		/**
		 * 获取当年当月多少天 
		 */
		function getday(year, month) {
			var day = new Date(year, month, 0);
			var daycount = day.getDate();
			return daycount;
		}

		function VisitorData() {
			var myChart = echarts.init(document.getElementById('visitor-data'));
			var day = new Array();
			var day2 = new Array();
		
			dayval = 12;
			for(var i = 0; i < dayval; i++) {
				day[i] = (i + 1)+'月';
			}
			
			<?php 
			foreach($item as $k=>$v){
				$i = $k-1;
				echo 'day2['.$i.']='.$v.';';
			}
			?>
			
			option = {
				tooltip: {
					trigger: 'axis',
					axisPointer: { // 坐标轴指示器，坐标轴触发有效
						type: 'shadow' // 默认为直线，可选为：'line' | 'shadow'
					}
				},
				legend: {
					data: ['职位数']
				},
				grid: {
					left: '3%',
					right: '4%',
					bottom: '3%',
					containLabel: true
				},
				xAxis: [{
					type: 'category',
					data: day
				}],
				yAxis: [{
					type: 'value'
				}],
				series: [{
						name: '职位数',
						type: 'bar',
						stack: 'person',
						data: day2
					}
				]
			};
			myChart.setOption(option);
		}
	</script>