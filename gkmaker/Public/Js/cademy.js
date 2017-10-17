/* 
* 
* major在dom中创建省、市两级联动菜单，无数据库支持
* 区别academy.js
*/ 
(function($){
	var major = new Array(); 
	major[0] = new Array("汽车与交通学院","车辆工程|物流工程|汽车服务工程|工程力学|交通运输（交通规划与管理方向）|交通运输（汽车电子技术与检测诊断方向)"); 
	major[1] = new Array("土木建筑工程学院","土木工程(建筑工程)|土木工程(交通土建)|建筑学|工程管理"); 
	major[2] = new Array("机械工程学院","机械工程（模具设计与制造方向)|机械工程（数控技术方向）|工业设计"); 
	major[3] = new Array("电气与信息工程学院","电气工程及自动化|自动化|测控技术与仪器"); 
	major[4] = new Array("计算机学院","软件工程|物联网|通信工程|数字媒体"); 
	major[5] = new Array("国际教育学院","物联网"); 
	major[6] = new Array("职业技术教育学院","交通运输|机械工程（模具设计与制造方向)|机械工程（数控技术方向)|电子信息工程|电子科学与技术"); 
	major[7] = new Array("财经学院","财务管理|会计学|金融学|经济学|国际经济与贸易|国际商务"); 
	major[8] = new Array("医学院","临床医学|康复治疗技术|护理|助产|医学检验技术|口腔医学技术|药学|公共卫生管理"); 
	major[9] = new Array("理学院","数学与应用数学|信息与计算科学|应用统计学"); 
	major[10] = new Array("艺术与文化传播学院","汉语国际教育|视觉传达设计|环境设计|服装与服饰设计|音乐学"); 
	major[11] = new Array("社会科学学院","社会工作"); 
	major[12] = new Array("体育学院","社会体育指导与管理"); 
	major[13] = new Array("外国语学院","英语（商务英语方向）|英语（科技翻译方向）"); 
	major[14] = new Array("管理学院","工商管理|信息管理与信息系统|工业工程|公共事业管理|物流管理|人力资源管理|市场营销");

	
	
	
	$.fn.major=function(options){
		var defaults = { 
			a_width:152,
			a_name:"academy",
			a_val:"计算机学院", 
			m_width:150,
			m_name:"major",
			m_val:"软件工程" 
		} 
		var options = $.extend(defaults,options); 
		this.each(function(){
			var str='\
						<select name="'+options.a_name+'" id="'+options.a_name+'" style="width:'+options.a_width+'px;" >\
							<option value="">选择学院</option>\
						</select>\
						<select name="'+options.m_name+'" id="'+options.m_name+'" style="width:'+options.m_width+'px;" >\
							<option value="">选择专业</option>\
						</select>\
					';
			$(this).html(str);
			for(var i=0;i<major.length;i++){
				$("#"+options.a_name).append("<option value='"+major[i][0]+"'>"+major[i][0]+"</option>");
			};
			if(options.a_val!=""){
				$("#"+options.a_name+" option[value='"+options.a_val+"']").attr("selected","selected");
				var i=$("#"+options.a_name).get(0).selectedIndex;
				var arr=major[i-1][1].split("|");
				$("#"+options.m_name).empty().append("<option value=''>选择专业</option>");
				for(var n=0;n<arr.length;n++){
					$("#"+options.m_name).append("<option value='"+arr[n]+"'>"+arr[n]+"</option>");
				}
				if(options.m_val!=""){
					$("#"+options.m_name+" option[value='"+options.m_val+"']").attr("selected","selected");
				}
			}
			$("#"+options.a_name).bind("change",function(){
				var i=$(this)[0].selectedIndex;
				if(i>0){
					var arr=major[i-1][1].split("|");
					$("#"+options.m_name).empty().append("<option value=''>选择专业</option>");
					for(var n=0;n<arr.length;n++){
						$("#"+options.m_name).append("<option value='"+arr[n]+"'>"+arr[n]+"</option>");
					}
					if(options.m_val!=""){
						$("#"+options.m_name+" option[value='"+options.m_val+"']").attr("selected","selected");
					}
				}else{
					$("#"+options.m_name).empty().append("<option value=''>选择专业</option>");
				}
			});
		});
	}
})(jQuery);