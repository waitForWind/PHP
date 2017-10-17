/*
 * jquery动态生成队员信息
 * 样式需要与团队报名样式统一
 * design by    2012.9.27
 * */
 $(function(){
                var num=2;//变量必须在外定义
                $("#addmore").click(function(){
                    //第一个tr 姓名
                    var html='<tr>';
                    html+='<td>队员'+num+'  ';
                    html+='姓名：';
                    html+='</td><td><input name="name'+num+'" type="text" size="20" />';
                    html+='</td>';
                    html+='</tr>';
                    //第二个tr 学院班级
                    html+='<tr>';
                    html+='<td>学院班级:';
                    html+='</td><td><input name="academy'+num+'" type="text" size="30" />';
                    html+='</td>';
                    html+='</tr>';
                    //第三个tr 手机号码
                    html+='<tr>';
                    html+='<td>手机:';
                    html+='</td><td><input name="phone'+num+'" type="text" size="30" />';
                    html+='</td>';
                    html+='</tr>';
                    //追加元素
                    $(html).appendTo("#team_apply");
                    
                    num++;//队员增加
                    //将队员总数赋给页面元素，用于提交数据库的循环队员
                    $("#num").val(num);
                
                    });
            })