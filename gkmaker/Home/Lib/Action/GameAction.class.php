<?php
class GameAction extends Action {

    public function index(){

        $id = $_GET['id'];
        $academyList=M("Academy");
        $gradeList=M("Grade");

        $game = M("Game")->where("cid=1 and id=".$id)->select();//读取比赛内容
     
        //用thinkphp join（）方法实现多表查询 请查看thinkphp3.1.2文档
     /*  $homeGameList = M("Home_game")-> 
                       join('INNER JOIN pa_grade on pa_home_game.grade = pa_grade.id')-> 
                       join('INNER JOIN pa_academy on pa_home_game.academy = pa_academy.id')->
                       field('pa_home_game.id,pa_home_game.relname,pa_grade.grade,pa_academy.academy')->
                       order('pa_home_game.id desc')->
                       limit(5)->select();
     */

        /*   使用视图模型的方法实现多变查询   */             
        $Dao = D("HomeGameView");
        $homeGameList = $Dao->order('home_game.id desc')->limit(5)->select();
         // 打印出执行的 SQL 语句
         // echo '执行的 SQL 语句为：'.$Dao->getLastSql();
         // print_r($homeGameList);exit();

        $num = count($list);
        $gameTitle = $game[0][title];
        $this->assign("gamelist",$game);
        $this->assign("nickname",$_SESSION['nickname']);
        $this->assign("uid",$_SESSION['uid']);
        $this->assign('applyList',$homeGameList);
        $this->assign('applyNumber',$num);  //参赛总人数:home_game的记录总数
        $this->display();

    }
    //赛事大厅
    public function game(){
        //$id=$_GET['id'];
        $game=M("Game")->where("cid = 1 ")->select();
        $this->assign("glist",$game);
        $this->assign("nickname",$_SESSION['nickname']);
        $this->assign("uid",$_SESSION['uid']);

        $this->display();
    }
    //更多赛事
    public function moregame(){
        // $id=$_GET['id'];
        $game=M("Game")->where("cid = 1 ")->select();

        $this->assign("morelist",$game);
        $this->assign("nickname",$_SESSION['nickname']);
        $this->assign("uid",$_SESSION['uid']);
        $this->display();
    }

    /*      个人报名       */
    public function registergame(){

        $id = $_GET['id']; //比赛id
        $game = M("Game")->where("cid=1 and id=".$id)->select();
        $academyList = M("Academy")->select();//读取学院列表
        $gradeList = M("Grade")->select();//读取年级列表
       
        $this->assign("registergame",$game);   //显示当前位置的路径
        $this->assign('academyList',$academyList); //select 中显示
        $this->assign('gradeList',$gradeList); //select 中显示

        //将数据写入数据库
        $M = M("HomeGame");

        if(IS_POST){
            //保存当前数据对象 
            $apply = $_POST['apply'];
            
            //判断是否重复报名
            $relname = $apply['relname'];
            $condiction['relname'] = $relname;
            $res=$M->where($condiction)->select();
            if($res!=NULL){
              $this->error('你已经报名!');
            }

            //写入数据
            $list = $M->add($apply);
            if ($list !== false) {
                $this->success('报名成功');
            } else {
                $this->error('报名失败!');
            }
        }else{
            $this->assign("nickname",$_SESSION['nickname']);
            $this->assign("uid",$_SESSION['uid']);

            $this->display();
        }
    }


    /*      团队报名     */
    public function teamregistergame(){
        $id=$_GET['id'];
        $game=M("Game")->where("cid=1 and id=".$id)->select();
        $this->assign("teamregister",$game);   //显示当前位置的路径
        
        $academyList = M("Academy")->select();//读取学院列表
        $gradeList = M("Grade")->select();//读取年级列表
        $this->assign('academyList',$academyList); //select 中显示
        $this->assign('gradeList',$gradeList); //select 中显示



        //将数据写入数据库
        $M=M("home_game");
        $T=M("home_pionner");

        if(IS_POST){
            //保存当前数据对象
            $teamapply=$_POST['teamapply'];
          //  print_r($teamapply);exit();
            $list = $M->add($teamapply);
             if (!$list) {
               $this->error("申请失败");
             }
          
            $num = $_POST['num'] - 1;
            for ($i=0; $i < $num ; $i++) {
                $name = "name".($i+1);
                $phone= "phone".($i+1);
                $class= "academy".($i+1);
                $temp['relname'] = $teamapply["relname"];
                $temp['teacher'] = $teamapply['teacher'];
                $t = $M->where($temp)->select();
                $tata["uid"] = $t[0]["id"];
                $tata["pionnername"] = $_POST[$name];
                $tata["pionnerphone"] = $_POST[$phone];
                $tata["pionnerclass"] = $_POST[$class];
                
                $info = $T->add($tata);
                if (!$info) {
                    $this->error("申请失败....");
                }
            }
           
            if ($list !== false && $info !==false) {
                $this->success('报名成功！');
            } else {
                $this->error('报名失败!');
            }
        }else{
            $this->assign("nickname",$_SESSION['nickname']);
            $this->assign("uid",$_SESSION['uid']);
            $this->display();
        }

    }

}