<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta name="renderer" content="webkit">
		<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>启霖</title>
		<link href="style/main.css" rel="stylesheet" type="text/css" />
		<link href="style/index.css" rel="stylesheet" type="text/css" />
		<script language="javascript" type="text/javascript" src="script/jquery-1.7.1.min.js"></script>
		<script language="javascript" type="text/javascript" src="script/easing.js"></script>
		<script language="javascript" type="text/javascript" src="script/js.js"></script>
		<script language="javascript" type="text/javascript" src="script/fun.js"></script>
		<script language="javascript" type="text/javascript" src="script/jquery.SuperSlide.2.1.1.js"></script>
		<script language="javascript" type="text/javascript" src="script/jquery_scroll.js"></script>
		<script language="javascript" type="text/javascript" src="script/jquery.smoothScroll.js"></script>
		<script language="javascript" type="text/javascript" src="script/jquery.stellar.js"></script>
		<script language="javascript" type="text/javascript" src="script/jquery.scrollTo.js"></script>
		<!--[if lte IE 6]>
		<script src="script/png.js" type="text/javascript"></script>
		<script type="text/javascript">
		DD_belatedPNG.fix('div, ul, img, li, input , a');
		</script>
		<![endif]-->
	</head>

	<body onload="Vertical_scrollFun()" style="background:#f5f5f5">
		<a href="index.html" class="pageLogo"><img src="image/logo.png"/></a>
		<div class="nav">
			<div class="wal">
				<ul class="fr">
					<li>
						<a href="about.php" class="aNow sNavA">中心介绍</a>
					</li>
					<li>
						<a href="Curriculum.html">课程介绍</a>
					</li>
					<li>
						<a href="Training.html">体能训练</a>
					</li>
					<li>
						<a href="Recovery.html">康复与营养</a>
					</li>
					<li>
						<a href="news.html">资讯中心</a>
					</li>
					<li>
						<a href="login.html">会员中心</a>
					</li>
					<li>
						<a href="Mall.html">商城</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="navDiv"></div>
		<div class="sNav">
			<ul>
				<li>
					<a href="javascript:void(0)" data-target="zhongxingaikuang">中心介绍1</a>
				</li>
				<li>
					<a href="javascript:void(0)" data-target="last-parallax">中心介绍2</a>
				</li>
			</ul>
		</div>

		<div class="aboutPart1 parallax-view">
			<div class="box">
				<h1>启霖世纪是国内第一家</h1>
				<div class="msg">
					专业针对青少年身体健康的体能研究训练机构
				</div>
				<div class="btnDiv">
					<a href="javascript:prompt_fun('.videoLayer');"><img src="image/nimg238.png"/></a>
				</div>
			</div>
			<div class="bg" style="position: fixed; width: 100%; height: 100%;" data-stellar-ratio="0.5"><img src="image/nimg1280_3.jpg"/>
			</div>
		</div>
		<script type="text/javascript">
			$(function() {
				aboutPart1Fun();
			})
			function aboutPart1Fun() {
				$('.aboutPart1').height($(window).width() / 2 - 150);
			}
		</script>

		<div class="aboutPart3 parallax-view" id="zhongxingaikuang" style="position: fixed; width: 100%; z-index: 2;" data-stellar-ratio="1.5">
			<div class="wal">
				<div class="aboutTitle">
					<h1>中心概况</h1>GENERAL PROFILE
				</div>
				<div class="content">
					众所周知，我国青少年体质呈逐年下滑且未现好转之势。传统的方式注重结果，忽视过程，注重意志，忽视生长发育；注重单关节训练，忽视整体训练；注重技术训练，忽视基础训练。凡此种种与其他因素叠加，造成了我国青少年体质持续下降的现状。为改善我国青少年体质，我们引进了国际先进的体能训练经验和设备，整合多方面资源，在2012年7月创立了启霖世纪青少年体能中心。我们集研究、训练、教育于一体，认真分析中心积累的青少年体数据，制定了科学系统的训练课程。通过中心专业的体能训练，学员们不仅增强了体能，还变得宽容、开放、阳光。我们希望青少年通过参加我们精心设计的专业体能训练，迸发无穷的活力，增强孩子的柔韧性和力量，培养平衡与协调力，提高灵活性、节奏感和整体身体素质，让孩子养成受益终生的运动习惯。
				</div>
			</div>
		</div>

		<div class="parallax-view"  id="last-parallax" style="position: fixed; width: 100%;  z-index: 1;" data-stellar-ratio="1" data-stellar-vertical-offset="300">
			<div class="aboutTitle" style="background-color: #fff;">
				<h1>精英团队</h1>ELITE TEAM
			</div>
			<div class="aboutPart2">
				<div class="bigImg">
					<ul>
						<li>
							<div><img src="image/nimg1280_4.jpg"/>
							</div>
						</li>
						<li>
							<div><img src="image/nimg1280_42.jpg"/>
							</div>
						</li>
						<li>
							<div><img src="image/nimg1280_4.jpg"/>
							</div>
						</li>
						<li>
							<div><img src="image/nimg1280_42.jpg"/>
							</div>
						</li>
						<li>
							<div><img src="image/nimg1280_4.jpg"/>
							</div>
						</li>
						<li>
							<div><img src="image/nimg1280_42.jpg"/>
							</div>
						</li>
						<li>
							<div><img src="image/nimg1280_4.jpg"/>
							</div>
						</li>
						<li>
							<div><img src="image/nimg1280_42.jpg"/>
							</div>
						</li>
					</ul>
				</div>
				<!---->
				<div class="list2">
					<ul>
						<li>
							<div class="name">
								1张丽颖
							</div>
							<div class="scrollDiv">
								<div class="content">
									1毕业于河北师范大学体育学院，体育教育专业体能训练方向。曾在某医院康复科指导身体姿态异常（驼背、高低肩、脊柱侧弯、肌力不平衡）的青少年进行运动康复训练，在青少年体能康复方面有较丰富的经验。
									<br />
									<br />
									擅长领域：青少年身体姿态矫正，足球、羽毛球体能训练。
									<br />
									<br />
									曾在某医院康复科指导身体姿态异常（驼背、高低肩、脊柱侧弯、肌力不平衡）的青少年进行运动康复训练，在青少年体能康复方面有较丰富的经验。
									<br />
									<br />
									擅长领域：青少年身体姿态矫正，足球、羽毛球体能训练。
									<br />
									<br />
									曾在某医院康复科指导身体姿态异常（驼背、高低肩、脊柱侧弯、肌力不平衡）的青少年进行运动康复训练，在青少年体能康复方面有较丰富的经验
									<br />
									<br />
									擅长领域：青少年身体姿态矫正，足球、羽毛球体能训练。
									<br />
									<br />
									曾在某医院康复科指导身体姿态异常（驼背、高低肩、脊柱侧弯、肌力不平衡）的青少年进行运动康复训练，在青少年体能康复方面有较丰富的经验
								</div>
							</div>
						</li>
						<li>
							<div class="name">
								2张丽颖
							</div>
							<div class="scrollDiv">
								<div class="content">
									2毕业于河北师范大学体育学院，体育教育专业体能训练方向。曾在某医院康复科指导身体姿态异常（驼背、高低肩、脊柱侧弯、肌力不平衡）的青少年进行运动康复训练，在青少年体能康复方面有较丰富的经验。
									<br />
									<br />
									擅长领域：青少年身体姿态矫正，足球、羽毛球体能训练。
									<br />
									<br />
									曾在某医院康复科指导身体姿态异常（驼背、高低肩、脊柱侧弯、肌力不平衡）的青少年进行运动康复训练，在青少年体能康复方面有较丰富的经验。
									<br />
									<br />
									擅长领域：青少年身体姿态矫正，足球、羽毛球体能训练。
									<br />
									<br />
									曾在某医院康复科指导身体姿态异常（驼背、高低肩、脊柱侧弯、肌力不平衡）的青少年进行运动康复训练，在青少年体能康复方面有较丰富的经验
									<br />
									<br />
									擅长领域：青少年身体姿态矫正，足球、羽毛球体能训练。
									<br />
									<br />
									曾在某医院康复科指导身体姿态异常（驼背、高低肩、脊柱侧弯、肌力不平衡）的青少年进行运动康复训练，在青少年体能康复方面有较丰富的经验
								</div>
							</div>
						</li>
						<li>
							<div class="name">
								3张丽颖
							</div>
							<div class="scrollDiv">
								<div class="content">
									3毕业于河北师范大学体育学院，体育教育专业体能训练方向。曾在某医院康复科指导身体姿态异常（驼背、高低肩、脊柱侧弯、肌力不平衡）的青少年进行运动康复训练，在青少年体能康复方面有较丰富的经验。
									<br />
									<br />
									擅长领域：青少年身体姿态矫正，足球、羽毛球体能训练。
									<br />
									<br />
									曾在某医院康复科指导身体姿态异常（驼背、高低肩、脊柱侧弯、肌力不平衡）的青少年进行运动康复训练，在青少年体能康复方面有较丰富的经验。
									<br />
									<br />
									擅长领域：青少年身体姿态矫正，足球、羽毛球体能训练。
									<br />
									<br />
									曾在某医院康复科指导身体姿态异常（驼背、高低肩、脊柱侧弯、肌力不平衡）的青少年进行运动康复训练，在青少年体能康复方面有较丰富的经验
									<br />
									<br />
									擅长领域：青少年身体姿态矫正，足球、羽毛球体能训练。
									<br />
									<br />
									曾在某医院康复科指导身体姿态异常（驼背、高低肩、脊柱侧弯、肌力不平衡）的青少年进行运动康复训练，在青少年体能康复方面有较丰富的经验
								</div>
							</div>
						</li>
						<li>
							<div class="name">
								4张丽颖
							</div>
							<div class="scrollDiv">
								<div class="content">
									4毕业于河北师范大学体育学院，体育教育专业体能训练方向。曾在某医院康复科指导身体姿态异常（驼背、高低肩、脊柱侧弯、肌力不平衡）的青少年进行运动康复训练，在青少年体能康复方面有较丰富的经验。
									<br />
									<br />
									擅长领域：青少年身体姿态矫正，足球、羽毛球体能训练。
									<br />
									<br />
									曾在某医院康复科指导身体姿态异常（驼背、高低肩、脊柱侧弯、肌力不平衡）的青少年进行运动康复训练，在青少年体能康复方面有较丰富的经验。
									<br />
									<br />
									擅长领域：青少年身体姿态矫正，足球、羽毛球体能训练。
									<br />
									<br />
									曾在某医院康复科指导身体姿态异常（驼背、高低肩、脊柱侧弯、肌力不平衡）的青少年进行运动康复训练，在青少年体能康复方面有较丰富的经验
									<br />
									<br />
									擅长领域：青少年身体姿态矫正，足球、羽毛球体能训练。
									<br />
									<br />
									曾在某医院康复科指导身体姿态异常（驼背、高低肩、脊柱侧弯、肌力不平衡）的青少年进行运动康复训练，在青少年体能康复方面有较丰富的经验
								</div>
							</div>
						</li>
						<li>
							<div class="name">
								5张丽颖
							</div>
							<div class="scrollDiv">
								<div class="content">
									5毕业于河北师范大学体育学院，体育教育专业体能训练方向。曾在某医院康复科指导身体姿态异常（驼背、高低肩、脊柱侧弯、肌力不平衡）的青少年进行运动康复训练，在青少年体能康复方面有较丰富的经验。
									<br />
									<br />
									擅长领域：青少年身体姿态矫正，足球、羽毛球体能训练。
									<br />
									<br />
									曾在某医院康复科指导身体姿态异常（驼背、高低肩、脊柱侧弯、肌力不平衡）的青少年进行运动康复训练，在青少年体能康复方面有较丰富的经验。
									<br />
									<br />
									擅长领域：青少年身体姿态矫正，足球、羽毛球体能训练。
									<br />
									<br />
									曾在某医院康复科指导身体姿态异常（驼背、高低肩、脊柱侧弯、肌力不平衡）的青少年进行运动康复训练，在青少年体能康复方面有较丰富的经验
									<br />
									<br />
									擅长领域：青少年身体姿态矫正，足球、羽毛球体能训练。
									<br />
									<br />
									曾在某医院康复科指导身体姿态异常（驼背、高低肩、脊柱侧弯、肌力不平衡）的青少年进行运动康复训练，在青少年体能康复方面有较丰富的经验
								</div>
							</div>
						</li>
						<li>
							<div class="name">
								6张丽颖
							</div>
							<div class="scrollDiv">
								<div class="content">
									6毕业于河北师范大学体育学院，体育教育专业体能训练方向。曾在某医院康复科指导身体姿态异常（驼背、高低肩、脊柱侧弯、肌力不平衡）的青少年进行运动康复训练，在青少年体能康复方面有较丰富的经验。
									<br />
									<br />
									擅长领域：青少年身体姿态矫正，足球、羽毛球体能训练。
									<br />
									<br />
									曾在某医院康复科指导身体姿态异常（驼背、高低肩、脊柱侧弯、肌力不平衡）的青少年进行运动康复训练，在青少年体能康复方面有较丰富的经验。
									<br />
									<br />
									擅长领域：青少年身体姿态矫正，足球、羽毛球体能训练。
									<br />
									<br />
									曾在某医院康复科指导身体姿态异常（驼背、高低肩、脊柱侧弯、肌力不平衡）的青少年进行运动康复训练，在青少年体能康复方面有较丰富的经验
									<br />
									<br />
									擅长领域：青少年身体姿态矫正，足球、羽毛球体能训练。
									<br />
									<br />
									曾在某医院康复科指导身体姿态异常（驼背、高低肩、脊柱侧弯、肌力不平衡）的青少年进行运动康复训练，在青少年体能康复方面有较丰富的经验
								</div>
							</div>
						</li>
						<li>
							<div class="name">
								7张丽颖
							</div>
							<div class="scrollDiv">
								<div class="content">
									7毕业于河北师范大学体育学院，体育教育专业体能训练方向。曾在某医院康复科指导身体姿态异常（驼背、高低肩、脊柱侧弯、肌力不平衡）的青少年进行运动康复训练，在青少年体能康复方面有较丰富的经验。
									<br />
									<br />
									擅长领域：青少年身体姿态矫正，足球、羽毛球体能训练。
									<br />
									<br />
									曾在某医院康复科指导身体姿态异常（驼背、高低肩、脊柱侧弯、肌力不平衡）的青少年进行运动康复训练，在青少年体能康复方面有较丰富的经验。
									<br />
									<br />
									擅长领域：青少年身体姿态矫正，足球、羽毛球体能训练。
									<br />
									<br />
									曾在某医院康复科指导身体姿态异常（驼背、高低肩、脊柱侧弯、肌力不平衡）的青少年进行运动康复训练，在青少年体能康复方面有较丰富的经验
									<br />
									<br />
									擅长领域：青少年身体姿态矫正，足球、羽毛球体能训练。
									<br />
									<br />
									曾在某医院康复科指导身体姿态异常（驼背、高低肩、脊柱侧弯、肌力不平衡）的青少年进行运动康复训练，在青少年体能康复方面有较丰富的经验
									<br />
									<br />
									擅长领域：青少年身体姿态矫正，足球、羽毛球体能训练。
									<br />
									<br />
									曾在某医院康复科指导身体姿态异常（驼背、高低肩、脊柱侧弯、肌力不平衡）的青少年进行运动康复训练，在青少年体能康复方面有较丰富的经验。
									<br />
									<br />
									擅长领域：青少年身体姿态矫正，足球、羽毛球体能训练。
									<br />
									<br />
									曾在某医院康复科指导身体姿态异常（驼背、高低肩、脊柱侧弯、肌力不平衡）的青少年进行运动康复训练，在青少年体能康复方面有较丰富的经验
									<br />
									<br />
									擅长领域：青少年身体姿态矫正，足球、羽毛球体能训练。
									<br />
									<br />
									曾在某医院康复科指导身体姿态异常（驼背、高低肩、脊柱侧弯、肌力不平衡）的青少年进行运动康复训练，在青少年体能康复方面有较丰富的经验
								</div>
							</div>
						</li>
						<li>
							<div class="name">
								8张丽颖
							</div>
							<div class="scrollDiv">
								<div class="content">
									8毕业于河北师范大学体育学院，体育教育专业体能训练方向。曾在某医院康复科指导身体姿态异常（驼背、高低肩、脊柱侧弯、肌力不平衡）的青少年进行运动康复训练，在青少年体能康复方面有较丰富的经验。
									<br />
									<br />
									擅长领域：青少年身体姿态矫正，足球、羽毛球体能训练。
									<br />
									<br />
									曾在某医院康复科指导身体姿态异常（驼背、高低肩、脊柱侧弯、肌力不平衡）的青少年进行运动康复训练，在青少年体能康复方面有较丰富的经验。
									<br />
									<br />
									擅长领域：青少年身体姿态矫正，足球、羽毛球体能训练。
									<br />
									<br />
									曾在某医院康复科指导身体姿态异常（驼背、高低肩、脊柱侧弯、肌力不平衡）的青少年进行运动康复训练，在青少年体能康复方面有较丰富的经验
									<br />
									<br />
									擅长领域：青少年身体姿态矫正，足球、羽毛球体能训练。
									<br />
									<br />
									曾在某医院康复科指导身体姿态异常（驼背、高低肩、脊柱侧弯、肌力不平衡）的青少年进行运动康复训练，在青少年体能康复方面有较丰富的经验
								</div>
							</div>
						</li>
					</ul>
				</div>
				<!---->
				<a href="javascript:;" class="prev"><img src="image/nimg17_3.png"/></a>
				<a href="javascript:;" class="next"><img src="image/nimg17_4.png"/></a>
				<div class="list">
					<ul>
						<li class="liNow"><img src="image/img133_1.png"/><img src="image/img133.png" class="img2"/>
						</li>
						<li><img src="image/img133_1.png"/><img src="image/img133.png" class="img2"/>
						</li>
						<li><img src="image/img133_1.png"/><img src="image/img133.png" class="img2"/>
						</li>
						<li><img src="image/img133_1.png"/><img src="image/img133.png" class="img2"/>
						</li>
						<li><img src="image/img133_1.png"/><img src="image/img133.png" class="img2"/>
						</li>
						<li><img src="image/img133_1.png"/><img src="image/img133.png" class="img2"/>
						</li>
						<li><img src="image/img133_1.png"/><img src="image/img133.png" class="img2"/>
						</li>
						<li><img src="image/img133_1.png"/><img src="image/img133.png" class="img2"/>
						</li>
					</ul>
				</div>
				<div class="bg"></div>
			</div>
			<div class="footDiv">
				<div class="wal">
					<div class="fl">
						版权所有 © 启霖世纪  京ICP备13052113号
					</div>
					<div class="fr">
						Copyright © 2006-2013 minsheng. All Rights Reserved
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			$(".aboutPart2").slide({
				mainCell : ".list ul",
				autoPage : true,
				effect : "left",
				vis : 6,
				pnLoop : false
			});
			$(".aboutPart2").find('.bigImg').find('li:first').show();
			$(".aboutPart2").find('.list2').find('li').hide();
			$(".aboutPart2").find('.list2').find('li:first').show();
			$(".aboutPart2").find('.list').find('li').each(function(i) {
				$(this).click(function() {
					$(".aboutPart2").find('.list').find('li').removeClass('liNow');
					$(this).addClass('liNow');
					$(".aboutPart2").find('.bigImg').find('li').hide();
					$(".aboutPart2").find('.bigImg').find('li').eq(i).show();
					$(".aboutPart2").find('.list2').find('li').hide();
					$(".aboutPart2").find('.list2').find('li').eq(i).show();
					Vertical_scrollFun();
					$('.jscroll-e').show();
				});
			});
			
			
			

		</script>

		<div class="videoLayer"><img src="image/nimg753.jpg"/>
		</div>

		<div class="sideBar">
			<ul>
				<li class="li_01">
					<a href="#"></a>
				</li>
				<li class="li_03">
					<a href="" class="qqLayerA"><img src="image/nimg26_1.png"/></a>
				</li>
				<li class="li_02">
					<a href=""><img src="image/nimg26_2.png"/><em>进入淘宝商城</em></a>
				</li>
				<li class="li_02">
					<a href="book.html"><img src="image/nimg26_3.png"/><em>免费预约</em></a>
				</li>
				<li class="li_02">
					<i><a href=""><img src="image/nimg26_4.png"/></a></i>
					<dl>
						<dd>
							<a href=""><img src="image/img26_1.png"/></a>
						</dd>
						<dd>
							<a href=""><img src="image/img26_2.png"/></a>
						</dd>
						<dd>
							<a href=""><img src="image/img26_3.png"/></a>
						</dd>
					</dl>
				</li>
				<li class="ewmLayerA">
					<a href=""><img src="image/nimg26_5.png"/><em>进入淘宝商城</em></a>
				</li>
			</ul>
		</div>
		<!---->
		<div class="qqLayer">
			<ul>
				<li>
					<em>在线客服01：</em><a href=""><img src="image/qq.png"/></a>
				</li>
				<li>
					<em>在线客服02：</em><a href=""><img src="image/qq.png"/></a>
				</li>
				<li>
					<em>在线客服03：</em><a href=""><img src="image/qq.png"/></a>
				</li>
			</ul>
		</div>
		<!---->
		<div class="ewmLayer">
			<ul>
				<li>
					<div><img src="image/img101.jpg"/>
					</div><a href="">关注企业微博</a>
				</li>
				<li>
					<div><img src="image/img101.jpg"/>
					</div>
					关注企业微信
				</li>
			</ul>
		</div>

		<style>
			.parallax-view {
				width: 100%;
				z-index: 1;
			}
		</style>

		<script>
			$(document).ready(function() {
				function check_os() {
					windows = (navigator.userAgent.indexOf("Windows",0) != -1)?1:0;
					mac = (navigator.userAgent.indexOf("mac",0) != -1)?1:0;
					linux = (navigator.userAgent.indexOf("Linux",0) != -1)?1:0;
					unix = (navigator.userAgent.indexOf("X11",0) != -1)?1:0;
				 
				 	var os_type;
					if (windows) os_type = "MS Windows";
					else if (mac) os_type = "Apple mac";
					else if (linux) os_type = "Lunix";
					else if (unix) os_type = "Unix";
				 
					return os_type;
				}
				
				if(check_os() == "MS Windows") {
					$(window).smoothScroll({
						step : 50, //每次滚轮事件，页面滚动的距离
						during : 300,
						easing : 'easeOutCubic'
					});
				}
				
				// 解决position:fixed时滚动条的宽度对width的影响
				function clacSize() {
					$("body").height($(window).height() + 100);
					$(".aboutPart2").height($("body").width() * 578 / 1280);
	
					var documentHeight = 0;
					var reduceHeight = 0;
					$(".parallax-view").each(function(i, item) {
						$(this).css("top", documentHeight + "px");
						$(this).data('originTop', documentHeight);
						documentHeight += $(this).outerHeight();
					});
					
					$("body").height((parseInt($("#last-parallax").css("top").replace("px", "")) + $("#last-parallax").height() - $(window).height()) / 1 + $(window).height() - 300);

				}
				clacSize();
				
				$(window).on('resize', function(){
					clacSize();
				});

				$(window).stellar();
				
				//在php环境中下面的条件判断可以通过php代码来完成
				<?php
					if(isset($_REQUEST['index'])) {
						$index = $_REQUEST['index'];
				?>
					$(".aboutPart2").find('.list').find('li').eq(<?php echo $index ?>).click();
				<?php
					} 
				?>
				
				<?php
					if(isset($_REQUEST['target'])) {
						$target = $_REQUEST['target'];
				?>
					$(".sNav a[data-target='<?php echo $target ?>']").click();
				<?php
					} 
				?>
				
			});
		</script>
	</body>
</html>