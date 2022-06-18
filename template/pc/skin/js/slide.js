
function imgSlideInit(sId,speed){
	var oSlider=$(sId),nav=oSlider.next(),id=sId.substr(1),count=1;	
	id=new Swipe(document.getElementById(id),{startSlide:0,auto:4000,speed:speed,callback:function(event,index,elem){var oImg=oSlider.find('img'),len=oImg.length,maxCount=len-2;	
	nav.find('.i_point').removeClass('active');	
	nav.find('.i_point').eq(index).addClass('active');	
	if(count<=maxCount){if(index>=1&&index<=maxCount){var currImg=oImg.eq(index+1),src=currImg.attr('data-src');	
	currImg.attr('src',src)}count++}}})
}

function tabSlideInit(sId){
	var oSlider=$(sId),nav=oSlider.prev(),id=sId.substr(1),obj=sId.substr(1);	
	obj=new Swipe(document.getElementById(id),{startSlide:0,speed:200,callback:function(event,index,elem){var oLi=nav.find('li');	
	if(oLi.length>1){nav.find('li.on').removeClass('on');	
	oLi.eq(index).addClass('on')}}});	
	nav.find('li').click(function(){var i=nav.find('li').index(this);	
	obj.slide(i,200)})
}
			
function addOnscroll(fn){
	if(typeof window.onscroll=='function'){
		var tempFn=window.onscroll;	
		window.onscroll=function(){
			tempFn();	
			fn()
		}
	}else{
		window.onscroll=function(){fn()}
	}
}

function TabBindEvent(index){
	setTimeout(function(){
		var id='#floor'+index;	
		tabSlideInit(id);	
		index=parseInt(index)+1;	
		var nextId='#floor'+index;	
		if(index<=13&&$(nextId).length>0){TabBindEvent(index)}},200)
}