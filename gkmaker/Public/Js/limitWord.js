/**
  * @author 王洋 2012.10.1
  * @description 该控件用于对输入的内容进行字数统计和字数限制。
  * @property {int} [limitCount] [限制的字数]
  * @property {string} [msg] [超过限制的字数所提示的文字]
  *可以共用，所有的文字提醒都可以
  */
 jQuery.fn.extend({
 limitWord:function(limitCount,msg){
 var flag = 0;
 $("#msg").html("您能输入<span class='num'>"+limitCount+"</span>个文字");
 $(this).children().filter(".limitedContent").bind('keyup input paste',function(){
 var contentLength = $(this).val().length;
 if(limitCount >= contentLength){
 flag = limitCount - contentLength;
 $("#msg").html("您还能输入<span class='num'>"+flag+"</span>个文字");
 }else{
 $(this).val($(this).val().substring(0,limitCount));
 $("#msg").html(msg);
 }
 
});
 }
 });
 
 //初始化
 $(function(){
 $(".wrap").limitWord(600,"<font color=red>您的输入超出了限制!</font>");
 });

