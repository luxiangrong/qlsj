//--
function Vertical_scrollFun(){
	$('.scrollDiv').jscroll({ W:"6px"
	,BgUrl:"url(image/scroll.gif)"
	//,Bg:"#eee"
	,Bar:{  Bd:{Out:"#373737",Hover:"#373737"}
			,Bg:{Out:"-6px center repeat-y",Hover:"-6px center repeat-y",Focus:"-6px center repeat-y"}
			}
	,Btn:{  btn:false
			,uBg:{Out:"-0px center repeat-y",Hover:"-0px center repeat-y",Focus:"-0px center repeat-y"}
			,dBg:{Out:"none",Hover:"none",Focus:"none"}
			}
	,Fn:function(){}
	});
	}
//-------弹出对话框	
function prompt_fun(a){
	              $(a).after("<div id='Layer1'></div>"); 
				  if($('body').height()>$(window).height()){
				      $('#Layer1').height($('body').height());
				  }else{
					  $('#Layer1').height($(window).height());
					  }
				  $('#Layer1').width($('body').width());
				  $(a).css({left:($('body').width()-$(a).width())/2,top:$(window).scrollTop()+($(window).height()-$(a).height())/2});
				  $('#Layer1').fadeTo("fast",0.6); 
				  $(a).show();
				  //$(a).fadeIn("slow"); 
				  $('#Layer1').click(function(){
					  close_prompt_fun(a);
					  })	
	}
function close_prompt_fun(a){
	              //$(a).fadeOut("fast"); 
				  $(a).hide();
				  $('#Layer1').fadeOut("slow",function(){
					  $('#Layer1').remove();
					  }); 
	}
//--
function photoFun(){
	$('.photo').width(249*parseInt($(window).width()/249));
	}
//--
var imgScrollNum2=new Array();
for(i=0;i<50;i++){
  imgScrollNum2[i]=0;	
}
function imgScrollRight2(a,b,c,d){
	    //a.stop();
		if(imgScrollNum2[d]<b){
			imgScrollNum2[d]++;
			a.animate({scrollLeft: imgScrollNum2[d]*c}, 200);
			}
	}	
function imgScrollLeft2(a,b,c,d){
	    //a.stop();
		if(imgScrollNum2[d]>0){
			imgScrollNum2[d]--;
			a.animate({scrollLeft: imgScrollNum2[d]*c}, 200);		
			}
	}	
//--
var fadeFlashNow=new Array();
for(i=0;i<50;i++){
  fadeFlashNow[i]=0;	
}	
function fadeFlashFun(i){
	$('.fadeFlash').eq(i).find('.btnDiv').find('span').removeClass('spanNow');
	$('.fadeFlash').eq(i).find('li').eq(fadeFlashNow[i]).hide();
	if(fadeFlashNow[i]<$('.fadeFlash').eq(i).find('li').length-1){
		fadeFlashNow[i]++;
		}else{
			fadeFlashNow[i]=0;
			}
	$('.fadeFlash').eq(i).find('li').eq(fadeFlashNow[i]).fadeIn(1000);
	$('.fadeFlash').eq(i).find('.btnDiv').find('span').eq(fadeFlashNow[i]).addClass('spanNow');
	}
//--
var CurriculumNow=0;
function CurriculumFun(i,b){
	$('.Curriculum_01').find('li').removeClass('liNow');
	$('.Curriculum_01').find('.imgDiv').removeClass('imgDivNow');
	$('.Curriculum_01').find('li').eq(i).addClass('liNow');
	$('.Curriculum_01').find('li').eq(i).find('.imgDiv').addClass('imgDivNow');
	CurriculumNow=i;
	$('.Curriculum_02').find('.bigImg').find('li').hide();
	$('.Curriculum_02').find('.bigImg').find('li').eq(CurriculumNow).show();
	if(b){
		$('.Curriculum_02').find('.list').stop().animate({scrollLeft: 985*CurriculumNow}, 1,'easeOutQuint');
		}else{
			$('.Curriculum_02').find('.list').stop().animate({scrollLeft: 985*CurriculumNow}, 500,'easeOutQuint');
			}
	}					