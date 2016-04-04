$(document).ready(function(){
    $('.photos div').hover(function(){
        $(this).find('img.normal').stop().animate({'opacity':0},200);
	},function(){
		$(this).find('img.normal').stop().animate({'opacity':1},200);
	});
}); 

var timer;
var slides=7;
var timeLen=4000;
function nextSlide(){
	clearTimeout(timer);
	var current=parseInt($("#counter").html());
	
	if(current<slides){
		var nextSlide=current+1;
	}else{
		var nextSlide=1;
	}
	
	$("#slide_back img").attr("src","slider/images/Slides/slides"+nextSlide+".png");
	$("slide_front").stop(true,true);
	$("#slide_front").animate({opacity:"0"},700,"linear",function(){
		$("#slide_front img").attr("src","slider/images/Slides/slides"+nextSlide+".png");
		$("#slide_front").css("opacity","1");
		$("#jumpers li.current").removeAttr("class");
		$("#jumpers #"+nextSlide).attr("class","current");
		$("#counter").html(nextSlide);
		timer=setTimeout("nextSlide()",timeLen);
	});
}

function prevSlide(){
	clearTimeout(timer);
	var current=parseInt($("#counter").html());
	
	if(current==1){
		var nextSlide=7;
	}else{
		var nextSlide=current-1;
	}
	
	$("#slide_back img").attr("src","slider/images/Slides/slides"+nextSlide+".png");
	$("slide_front").stop(true,true);
	$("#slide_front").animate({opacity:"0"},700,"linear",function(){
		$("#slide_front img").attr("src","slider/images/Slides/slides"+nextSlide+".png");
		$("#slide_front").css("opacity","1");
		$("#jumpers li.current").removeAttr("class");
		$("#jumpers #"+nextSlide).attr("class","current");
		$("#counter").html(nextSlide);
		timer=setTimeout("nextSlide()",timeLen);
	});
}

function jump(slide){
	$("#slide_back img").attr("src","slider/images/Slides/slides"+slide+".png");
	$("slide_front").stop(true,true);
	$("#slide_front").animate({opacity:"0"},700,"linear",function(){
		$("#slide_front img").attr("src","slider/images/Slides/slides"+slide+".png");
		$("#slide_front").css("opacity","1");
		$("#jumpers li.current").removeAttr("class");
		$("#jumpers #"+slide).attr("class","current");
		$("#counter").html(slide);
		timer=setTimeout("nextSlide()",timeLen);
	});
}

$(document).ready(function(){
	timer=setTimeout("nextSlide()",timeLen);
});

