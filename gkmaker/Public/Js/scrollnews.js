/*创意园区定时滚动*/
$(function(){
        var $this = $(".scrollNews");
		var scrollTimer;
		$this.hover(function(){
			//取消scrollTimer
			  clearInterval(scrollTimer);
		 },function(){
			 //setInterval周期调用函数
		   scrollTimer = setInterval(function(){
                var $ul = $(".scrollNews ul");
                var liHeight = $ul.find("li:last").height();
                $ul.animate({marginTop : liHeight+30 +"px"},1000,function(){
                
                $ul.find("li:last").prependTo($ul)
                $ul.find("li:first").hide();
                $ul.css({marginTop:0});
                $ul.find("li:first").fadeIn(1000);
                });        
        },4000);
		}).trigger("mouseleave");//用户进入页面后触发hover的第二个函数，从而使内容滚动
});
//核心函数
function scrollNews(obj){
	var $ul = obj.find("ul");
   var $self = obj.find("ul:first"); 
   var lineHeight = $self.find("li:first").height(); //获取行高
/*   $self.animate({ "marginTop" : -lineHeight +"px" }, 600 , function(){
         $self.css({marginTop:0}).find("li:first").appendTo($self); //appendTo能直接移动元素
   })
*/

}


/*********

        var scrtime;
         $("#con").hover(function(){
                clearInterval(scrtime);
        
        },function(){
        
        scrtime = setInterval(function(){
                var $ul = $("#con ul");
                var liHeight = $ul.find("li:last").height();
                $ul.animate({marginTop : liHeight+40 +"px"},1000,function(){
                
                $ul.find("li:last").prependTo($ul)
                $ul.find("li:first").hide();
                $ul.css({marginTop:0});
                $ul.find("li:first").fadeIn(1000);
                });        
        },3000);
        
        }).trigger("mouseleave");
        


***********/