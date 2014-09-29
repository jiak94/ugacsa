/* script file meta
TITLE: common interactive function for alibado.com
AUTHOR: xiaoxi.zhouxx[at]alibaba.com | xiao.jiangx[at]alibaba.com
DATA: 2010-07-03
VERSION: 0.1
THE END */
/**/
/* show hidden content */
function showHidden(s) {
	var objStyle = "." + s;
	var obj = jQuery(objStyle);
	if (obj.length) {
		obj.parent().mouseover(function(){
			jQuery(this).addClass("show-expand");
		}).mouseout(function(){
			jQuery(this).removeClass("show-expand");
		});
	}
}

/* slide text on homepage */
(function(jQuery){

	jQuery.fn.kxbdMarquee = function(options){
		var opts = jQuery.extend({},jQuery.fn.kxbdMarquee.defaults, options);
		
		return this.each(function(){
			var jQuerymarquee = jQuery(this);//滚动元素容器
			var _scrollObj = jQuerymarquee.get(0);//滚动元素容器DOM
			var scrollW = jQuerymarquee.width();//滚动元素容器的宽度
			var scrollH = jQuerymarquee.height();//滚动元素容器的高度
			var jQueryelement = jQuerymarquee.children(); //滚动元素
			var jQuerykids = jQueryelement.children();//滚动子元素
			var scrollSize=0;//滚动元素尺寸
			var _type = (opts.direction == 'left' || opts.direction == 'right') ? 1:0;//滚动类型，1左右，0上下

			//防止滚动子元素比滚动元素宽而取不到实际滚动子元素宽度
			jQueryelement.css(_type?'width':'height',10000);
			//获取滚动元素的尺寸
			if (opts.isEqual) {
				scrollSize = jQuerykids[_type?'outerWidth':'outerHeight']() * jQuerykids.length;
			}else{
				jQuerykids.each(function(){
					scrollSize += jQuery(this)[_type?'outerWidth':'outerHeight']();
				});
			}
			//滚动元素总尺寸小于容器尺寸，不滚动
			if (scrollSize<(_type?scrollW:scrollH)) return; 
			//克隆滚动子元素将其插入到滚动元素后，并设定滚动元素宽度
			jQueryelement.append(jQuerykids.clone()).css(_type?'width':'height',scrollSize*2);
			
			var numMoved = 0;
			function scrollFunc(){
				var _dir = (opts.direction == 'left' || opts.direction == 'right') ? 'scrollLeft':'scrollTop';
				if (opts.loop > 0) {
					numMoved+=opts.scrollAmount;
					if(numMoved>scrollSize*opts.loop){
						_scrollObj[_dir] = 0;
						return clearInterval(moveId);
					} 
				}
				if(opts.direction == 'left' || opts.direction == 'up'){
					var newPos = _scrollObj[_dir] + opts.scrollAmount;
					if(newPos>=scrollSize){
						newPos -= scrollSize;
					}
					_scrollObj[_dir] = newPos;
				}else{
					var newPos = _scrollObj[_dir] - opts.scrollAmount;
					if(newPos<=0){
						newPos += scrollSize;
					}
					_scrollObj[_dir] = newPos;
				}
			};
			//滚动开始
			var moveId;
			if(opts.delay>0){
				setTimeout(function(){
					moveId = setInterval(scrollFunc, opts.scrollDelay);
				},opts.delay*1000);
			}else{
				moveId = setInterval(scrollFunc, opts.scrollDelay);
			}
			
			//鼠标划过停止滚动
			jQuerymarquee.hover(
				function(){
					clearInterval(moveId);
				},
				function(){
					clearInterval(moveId);
					moveId = setInterval(scrollFunc, opts.scrollDelay);
				}
			);
			
			//控制加速运动
			if(opts.controlBtn){
				jQuery.each(opts.controlBtn, function(i,val){
					jQuery(val).bind(opts.eventA,function(){
						opts.direction = i;
						opts.oldAmount = opts.scrollAmount;
						opts.scrollAmount = opts.newAmount;
					}).bind(opts.eventB,function(){
						opts.scrollAmount = opts.oldAmount;
					});
				});
			}
		});
	};
	jQuery.fn.kxbdMarquee.defaults = {
		delay:0,
		isEqual:true,//所有滚动的元素长宽是否相等,true,false
		loop: 0,//循环滚动次数，0时无限
		direction: 'left',//滚动方向，'left','right','up','down'
		scrollAmount:1,//步长
		scrollDelay:30,//时长
		newAmount:3,//加速滚动的步长
		eventA:'mousedown',//鼠标事件，加速
		eventB:'mouseup'//鼠标事件，原速
	};
	
	jQuery.fn.kxbdMarquee.setDefaults = function(settings) {
		jQuery.extend( jQuery.fn.kxbdMarquee.defaults, settings );
	};
	
})(jQuery);

/*
 * moveControl v1.5
 * http://www.yao018.com/
 * Copyright (c) 2010 Rudder.D.Zhang
 * Date: 2010-03-10 11:23
 * 参数：外容器ID，容器ID，默认显示个数，每次移动个数
 */

var MoveControl = {
	iniUnit : function(wrapId, id, dftNum, intStep) {
		var obj = jQuery(id).find(".moveUnit");
		var objNum = obj.length;
		if (objNum > dftNum) {
			MoveControl.addEvent(wrapId, id, dftNum, "next", intStep)
		}
	},
	addEvent : function(wrapId, id, dftNum, strPN, intStep) {
		var strTitle;
		var objClick = jQuery(wrapId + " ." + strPN + "View");
		var objNumHref = objClick.find("a").length;
		objClick.removeClass(strPN + "Stop");
		
		if (objNumHref != 0)
			objClick = objClick.find("a");
		
		strTitle =  objClick.text();
		objClick.attr("title", strTitle);
		objClick.click(function(){
			MoveControl.moveUnit(wrapId, id, dftNum, strPN, intStep);
			return false;
		});
	},
	moveUnit : function(wrapId, id, dftNum, strPN, intStep) {
		if (jQuery(wrapId).data("currSubName") != null)
			id = jQuery(wrapId).data("currSubName");
		var n = jQuery(id).data("nowUnit");
		if (isNaN(n) || n == null) n = 0;
		
		var objClick = jQuery(wrapId + " ." + strPN + "View");
		var objNumHref = objClick.find("a").length;
		objClick.removeClass(strPN + "Stop");
		if (objNumHref != 0)
			objClick = objClick.find("a");
	
		var obj = jQuery(id).find(".moveUnit");
		var objNum = obj.length;
		
		if (strPN == "next") {
			for (var i = 0; i < intStep; i++) {
				jQuery(obj[n]).hide("fast");
				if (n == 0) {
					jQuery(wrapId + " .prevView").removeClass("prevStop");
					MoveControl.addEvent(wrapId, id, dftNum, "prev", intStep);
				}
				n++;
				if (n == (objNum - dftNum)) {
					n = objNum - dftNum;
					jQuery(wrapId + " .nextView").addClass("nextStop");
					objClick.unbind("click").attr("title", "");
					break;
				}
			}
		}else {
			for (var i = 0; i < intStep; i++) {
				n--;
				if (n >= 0){
					jQuery(obj[n]).show("fast");
				}
				if (n + dftNum + intStep == objNum) {
					jQuery(wrapId + " .nextView").removeClass("nextStop");
					MoveControl.addEvent(wrapId, id, dftNum, "next", intStep);
					if (n < 0) {
						n = 0;
						break;
					}
				}
				if (n <= 0) {
					jQuery(wrapId + " .prevView").addClass("prevStop");
					objClick.unbind("click").attr("title", "");
					if (i + 1 == intStep) n = 0;
				}
			}
		}
		
		jQuery(id).data("nowUnit", n);
	}
}

/*  |xGv00|de1288d4854c8e86fb47f52b983af23a */