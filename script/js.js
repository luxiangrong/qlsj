$(function(){
	var parseToMatrix = function(str) {
		console.log(str);
		var reg = /^matrix\((-?\d+),\s*(-?\d+),\s*(-?\d+),\s*(-?\d+),\s*(-?\d+),\s*(-?\d+)\)$/;
		var matches = str.match(reg);
		if ($.isArray(matches) && matches.length == 7) {
			matches.splice(0, 1);
			return matches;
		}
		return [0, 0, 0, 0, 0, 0];
	};
	//--右侧悬浮按钮
	$('.sideBar').find('.li_02').each(function(i){
	$(this).hover(
	   function(){
		   $('.sideBar').stop().animate({width: 150}, 200);
		   $(this).stop().animate({width: 135}, 200);
		   $(this).css('background','#da2143');
		   $(this).find('i').hide();
		   },
	   function(){
		   $(this).stop().animate({width: 45}, 200);
		   $('.sideBar').stop().animate({width: 45}, 200);
		   $(this).css('background','#1b1b1d');
		   $(this).find('i').show();
		   }
	)
	})
	//--分享按钮
	$('.pageShare').find('a').hover(
	  function(){
		  $(this).fadeTo(100,1);
		  },
	  function(){
		  $(this).fadeTo(100,1);
		  }
	)
	//--二维码弹出层
	$('.ewmLayerA').hover(
	   function(){
		   $(this).css('background','#da2143');
		   $('.ewmLayer').show();
		   },
	   function(){
		   $(this).css('background','#1b1b1d');
		   $('.ewmLayer').hide();
		   }
	)
	$('.ewmLayer').hover(
	   function(){
		   $('.ewmLayerA').css('background','#da2143');
		   $(this).show();
		   },
	   function(){
		   $('.ewmLayerA').css('background','#1b1b1d');
		   $(this).hide();
		   }
	)
	//--学习记录
	$('.memberPart2').find('.on').each(function(i){
		$(this).hover(
		   function(){
			   $('.memberPart2Layer').eq(i).css('left',$(this).offset().left-75);
			   $('.memberPart2Layer').eq(i).css('top',$(this).offset().top-172);
			   $('.memberPart2Layer').eq(i).show();
			   },
		   function(){
			   $('.memberPart2Layer').hide();
			   }
		)
		})
	//--消息
	$('.memberMsg').find('li').each(function(i){
		$(this).find('.btn').click(function(){
			if($('.memberMsg').find('li').eq(i).attr('class')=="liNow"){
				$('.memberMsg').find('li').removeClass('liNow');
				}else{
					$('.memberMsg').find('li').removeClass('liNow');
					$('.memberMsg').find('li').eq(i).addClass('liNow');
					}
			})
		})
	//--消息鼠标经过
	$('.memberMsg').find('li').hover(
	   function(){
		   $(this).addClass('liNow1');
		   },
	   function(){
		   $(this).removeClass('liNow1');
		   }
	)
	//--图片库	
	$('.photo').find('li').each(function(i){
		$(this).hover(
		   function(){
			   $(this).find('.imgDiv2').fadeIn(200);
			   $(this).find('.name').find('a').fadeIn(200);
			   $(this).find('.btn').fadeIn(200);
			   },
		   function(){
			   $(this).find('.imgDiv2').fadeOut(200);
			   $(this).find('.name').find('a').fadeOut(200);
			   $(this).find('.btn').fadeOut(200);
			   }
		)
		})
	//--图片库自适应
	if($('.photo').length>0){
		photoFun();
		$(window).resize(function(){
			photoFun();
			})
		}	
	//--视频弹出层
	$('.video').find('li').each(function(i){
		$(this).click(function(){
			prompt_fun('.videoLayer');
			})
		})
	//--图片库弹出层
	$('#photo').find('li').each(function(i){
		$(this).click(function(){
			prompt_fun('.CurriculumLayer');
			})
		})
	//--关于我们视频	
	//--精英团队(复杂特效)	
	//--课程介绍(复杂特效)	
	if($('.Curriculum_02').length>0){
	$('.Curriculum_02').find('.bigImg').fadeTo(10,0.6);
	//$('.Curriculum_02').find('.bigImg').find('li').eq(CurriculumNow).fadeIn(500);
	}
	$('.Curriculum_01').find('li').each(function(i){
		$(this).click(function(){
			CurriculumFun(i,false);
			})
		})
	$('.Curriculum_02').find('.rightBtn').click(function(){
		if(CurriculumNow<$('.Curriculum_01').find('li').length-1){
			CurriculumNow++;
			$('.Curriculum_01').find('li').removeClass('liNow');
			$('.Curriculum_01').find('.imgDiv').removeClass('imgDivNow');
			$('.Curriculum_01').find('li').eq(CurriculumNow).addClass('liNow');
			$('.Curriculum_01').find('.imgDiv').eq(CurriculumNow).addClass('imgDivNow');
			$('.Curriculum_02').find('.bigImg').find('li').hide();
			$('.Curriculum_02').find('.bigImg').find('li').eq(CurriculumNow).show();
			$('.Curriculum_02').find('.list').stop().animate({scrollLeft: 985*CurriculumNow}, 500,'easeOutQuint');
			}
		})
	$('.Curriculum_02').find('.leftBtn').click(function(){
		if(CurriculumNow>0){
			CurriculumNow--;
			$('.Curriculum_01').find('li').removeClass('liNow');
			$('.Curriculum_01').find('.imgDiv').removeClass('imgDivNow');
			$('.Curriculum_01').find('li').eq(CurriculumNow).addClass('liNow');
			$('.Curriculum_01').find('.imgDiv').eq(CurriculumNow).addClass('imgDivNow');
			$('.Curriculum_02').find('.bigImg').find('li').hide();
			$('.Curriculum_02').find('.bigImg').find('li').eq(CurriculumNow).show();
			$('.Curriculum_02').find('.list').stop().animate({scrollLeft: 985*CurriculumNow}, 500,'easeOutQuint');
			}
		})
	//--课程弹出层
	$('.Curriculum_02').find('.btn2').click(function(){
		prompt_fun('.CurriculumLayer');
		})
	//--顶部下拉菜单
	$('.sNav').find('ul').find('a:last').css('border','0px');
	$('.sNavA').each(function(i){
		$(this).hover(
		   function(){
			   $('.sNav').eq(i).css('left',$(this).offset().left);
			   $('.sNav').eq(i).show();
			   },
		   function(){
			   $('.sNav').hide();
			   }
		)
		})	
	$('.sNav').each(function(i){
		$(this).hover(
		   function(){
			   $('.sNavA').eq(i).addClass('aNow1');
			   $(this).show();
			   },
		   function(){
			   $('.sNavA').removeClass('aNow1');
			   $(this).hide();
			   }
		)
		})	
	//--相关文章	
	//--康复	
	//--中心动态
	//--首页焦点图
	var fadeFlashTime=new Array();
	$('.fadeFlash').find('li:first').fadeIn(1000);
	$('.fadeFlash').each(function(i){
		fadeFlashTime[i] = setInterval("fadeFlashFun("+i+")",5000);
		$(this).find('.btnDiv').find('span').each(function(ii){
			$(this).hover(
			function(){
				clearInterval(fadeFlashTime[i]);
				$('.fadeFlash').eq(i).find('.btnDiv').find('span').removeClass('spanNow');
				$(this).addClass('spanNow');
				$('.fadeFlash').eq(i).find('li').eq(fadeFlashNow[i]).hide();
				fadeFlashNow[i]=ii;
				$('.fadeFlash').eq(i).find('li').eq(fadeFlashNow[i]).fadeIn(1000);
				fadeFlashTime[i] = setInterval("fadeFlashFun("+i+")",5000);
				},
			function(){}	
				)
			})
		$(this).find('.rightBtn').click(function(){
			clearInterval(fadeFlashTime[i]);
			$('.fadeFlash').eq(i).find('.btnDiv').find('span').removeClass('spanNow');
			$('.fadeFlash').eq(i).find('li').eq(fadeFlashNow[i]).fadeOut(500);
			if(fadeFlashNow[i]<$('.fadeFlash').eq(i).find('li').length-1){
				fadeFlashNow[i]++;
				}else{
					fadeFlashNow[i]=0;
					}
			$('.fadeFlash').eq(i).find('.btnDiv').find('span').eq(fadeFlashNow[i]).addClass('spanNow');
			$('.fadeFlash').eq(i).find('li').eq(fadeFlashNow[i]).fadeIn(500);
			fadeFlashTime[i] = setInterval("fadeFlashFun("+i+")",5000);
			})	
		$(this).find('.leftBtn').click(function(){
			clearInterval(fadeFlashTime[i]);
			$('.fadeFlash').eq(i).find('.btnDiv').find('span').removeClass('spanNow');
			$('.fadeFlash').eq(i).find('li').eq(fadeFlashNow[i]).fadeOut(500);
			if(fadeFlashNow[i]>0){
				fadeFlashNow[i]--;
				}else{
					fadeFlashNow[i]=$('.fadeFlash').eq(i).find('li').length-1;
					}
			$('.fadeFlash').eq(i).find('.btnDiv').find('span').eq(fadeFlashNow[i]).addClass('spanNow');
			$('.fadeFlash').eq(i).find('li').eq(fadeFlashNow[i]).fadeIn(500);
			fadeFlashTime[i] = setInterval("fadeFlashFun("+i+")",5000);
			})	
		})
	//--选项卡
	$('.tabContentDiv').find('.tabContent:first').show();
	$('.tab').each(function(i){
		$(this).find('li').each(function(ii){
			$(this).hover(
			function(){
				$('.tab').eq(i).find('li').removeClass('liNow');
				$(this).addClass('liNow');
				$('.tabContentDiv').eq(i).find('.tabContent').hide();
				$('.tabContentDiv').eq(i).find('.tabContent').eq(ii).show();
				$('.tabIco').find('li').removeClass('liNow');
				$('.tabIco').find('li').eq(ii).addClass('liNow');
				$('.tabIco').find('li').stop().animate({top: 18,height:18}, 200);
				$('.tabIco').find('li').eq(ii).stop().animate({top: 0,height:36}, 200);
				},
			function(){}	
				)
			})
		})
	//--首页资讯中心
	//--课程介绍复杂特效
	//--首页客户评价复杂特效
	//--首页精英团队
	//--输入框文本消失
	//--顶部登录
	$('.loginLayerA').hover(
	   function(){
		   $(this).addClass('aNow2');
		   $('.loginLayer').css('left',$(this).offset().left);
		   $('.loginLayer').show();
		   },
	   function(){
		   $(this).removeClass('aNow2');
		   $('.loginLayer').hide();
		   }
	)
	$('.loginLayer').hover(
	   function(){
		   $('.loginLayerA').addClass('aNow2');
		   $(this).show();
		   },
	   function(){
		   $('.loginLayerA').removeClass('aNow2');
		   $(this).hide();
		   }
	)
	//--商城
	$('.mall').find('.wal').stop().animate({width: 985,left:0}, 600);
	//--右侧QQ弹出层
	$('.qqLayerA').hover(
	   function(){
		   $('.qqLayer').show();
		   },
	   function(){
		   $('.qqLayer').hide();
		   }
	)
	$('.qqLayer').hover(
	   function(){
		   $(this).show();
		   },
	   function(){
		   $(this).hide();
		   }
	)
	//--首页顶部视差滚动
	//--关于我们顶部视差滚动
	//--底部位置
	if($(window).height()>$('body,html').height()){
		}
	//
	})