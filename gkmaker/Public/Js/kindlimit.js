/*
 * kindeditor编辑器及其字数限制
 * 
 * */	
var editor;
	KindEditor.ready(function(K) {
	editor=K.create('#reply_content', {
		resizeType : 1,
		allowPreviewEmoticons : false,
		allowImageUpload : false,
		items : [
							 'fontname', 'fontsize', 'forecolor','hilitecolor','bold',
							 'justifyleft', 'justifycenter', 'justifyright','italic', 
							 'emoticons' ,'image','link' ,'insertfile'
				],
	//以下是限制字数的功能代码，至于是否可以把函数移植到其他页面，自己试试。。
		afterChange : function() {
			this.sync();
		    var limitCount=200;
			$("#msg").html("您能输入<span class='num'>"+limitCount+"</span>个文字");
			var content=$("#reply_content").val();
			var contentLength = content.length;
            if(limitCount >= contentLength){
           var flag = limitCount - contentLength;
           $("#msg").html("您还能输入<span class='num'>"+flag+"</span>个文字");
           }else{
		   $("#msg").html("<font color=red>您的输入超出了限制!</font>");
		   
		   
		    //editor.text((editor.text.substring(0,limitCount)));
			//截取内容不正常
			 //$(this).val($(this).val().substring(0,limitCount));
           $("#reply_content").val($(this).val().substring(0,limitCount));
           $("#msg").html(msg);
           }
       },
	});
	
});
