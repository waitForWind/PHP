//学院 
var academyArr = [];  

academyArr[0] = ['机械工程学院'];  

academyArr[1] = ['汽车与交通学院'];

academyArr[2] = ['计算机学院'];  

academyArr[3] = ['外国语学院']; 

academyArr[4] = ['艺术与文化传播学院'];

academyArr[5] = ['理学院'];  

academyArr[6] = ['财经学院']; 

academyArr[7] = ['土木建筑工程学院'];  

academyArr[8] = ['电气与信息工程学院'];  

academyArr[9] = ['管理学院'];    

academyArr[10] = ['社会科学学院'];  

academyArr[11] = ['体育学院'];  

academyArr[12] = ['职业技术教育学院'];   

academyArr[13] = ['医学院'];  

academyArr[14] = ['国际教育学院'];

//专业,每个数组第一个元素为省份,其他的为这个学院下的专业

var majorArr = [];  

majorArr[0] = ['机械工程学院','机械工程（模具设计与制造方向)','机械工程（数控技术方向）', '工业设计']; 
majorArr[1] = ['汽车与交通学院','车辆工程','物流工程','汽车服务工程', '工程力学', '交通运输（交通规划与管理方向）','交通运输（汽车电子技术与检测诊断方向)'];    

majorArr[2] = ['计算机学院','软件工程','数字媒体','通信工程','物联网'];

majorArr[3] = ['外国语学院','英语（商务英语方向）','英语（科技翻译方向）'];   

majorArr[4] = ['艺术与文化传播学院','汉语国际教育', '视觉传达设计', '环境设计', '服装与服饰设计','音乐学'];   

majorArr[5] = ['理学院','数学与应用数学','信息与计算科学','应用统计学'];   

majorArr[6] = ['财经学院','财务管理','会计学','金融学','经济学','国际经济与贸易','国际商务'];     

majorArr[7] = ['土木建筑工程学院','土木工程(建筑工程)' ,'土木工程(交通土建)' ,'建筑学' ,'工程管理'];   

majorArr[8] = ['电气与信息工程学院','电气工程及自动化','自动化','测控技术与仪器'];      

majorArr[9] = ['管理学院','工商管理', '信息管理与信息系统','工业工程', '公共事业管理', '物流管理' ,'人力资源管理' ,'市场营销'];

majorArr[10] = ['社会科学学院','社会工作'];   

majorArr[11] = ['体育学院','社会体育指导与管理'];
majorArr[12] = ['职业技术教育学院','交通运输', '机械工程（模具设计与制造方向)','机械工程（数控技术方向)','电子信息工程','电子科学与技术'];   

majorArr[13] = ['医学院','临床医学', '康复治疗技术', '护理', '助产', '医学检验技术', '口腔医学技术', '药学', '公共卫生管理'];  
majorArr[14] = ['国际教育学院','物联网']; 

var academy = document.getElementById('academy');  
var major     = document.getElementById('major');  
//生成省份  

for(var key in academyArr) {  

        var academyOption = document.createElement('option');  

        academyOption.value = academyOption.text = academyArr[key];  

        academy.options.add(academyOption);  

}  

//生成专业  

//@current为当前选择的select节点，即父类节点  

//@child为子类点  

//@childArr为子节点数组  

function showChild(current, child, childArr) {  

        var currentValue = current.value;  

        var count = childArr.length;  

        //每次切换专业'把专业的子option长度设置专业',即清除专业的选择,DOM对象select元素是长度是子option的个专业'  

        child.length = 1;  

        for(var i = 0; i < count; i++) {  

                //判断所选的值即父类，与当前节点第一个数组元素是否相似  

                if(currentValue == childArr[i][0]) {  

                        //不取第一个数组元专业'因为第一个是父类，  

                        for(var j = 1; j < childArr[i].length; j++) {  

                                var childOption = document.createElement('option');  

                                //ie不支持option对象的value,所以加childOption.text  

                                childOption.value = childOption.text = childArr[i][j];  

                                child.options.add(childOption);   

                        }  

                }  

        }  

}  

//学院改变专业

academy.onchange = function() {  

       showChild(academy, major, majorArr);  


}  

showChild(academy, major, majorArr);//此句是用来在信息修改页面初始化已存的学院、专业名称
