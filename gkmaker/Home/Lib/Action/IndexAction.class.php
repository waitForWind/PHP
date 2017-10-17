<?php
class IndexAction extends Action {
    
    public function index(){
        
        $count=M("Clickcount")->where("id=1")->select();
        $count1=$count[0]["count"]+1;
        $infochy["id"]=1;
        $infochy["count"]=$count1;
        M("Clickcount")->save($infochy);
        $this->assign("count",$count1);
        $Relannounce = M("Relannounce")->field("`id`,`status`")->order("`id` DESC")->limit(6)->select();
        
        foreach ($Relannounce as $k => $v) {
            if ($v['status'] == 1) {
                $rel[] = M("Relannounce")->field("`id`,`title`,`status`,`updata_time`")->find($v['id']);
            }    
        }

        $this->assign("Relannounce",$rel);

        //科技达人
        $member=M("Member")->where("isvip=1")->limit(9)->select();
        $this->assign("vip",$member);
        $this->assign("nickname",$_SESSION['nickname']);
        $this->assign("uid",$_SESSION['uid']);

        //创意发表
        $chuangyi=M("Chuangyi")->where("status=1")->limit(9)->select();
        $this->assign("ideas",$chuangyi);

        //赛事管理 
        $game=M("Game")->order('id desc')->where("cid=1")->select();
        $this->assign("gamelist",$game);

        //科技动态
        $news=M("news")->order('id desc') ->where("status=1")->limit(6)->select();
        $this->assign("news",$news);

        //大屏广告
        $screen_news=M("news")->order('id desc') ->where("status=1  AND is_screen=1")->limit(7)->select();
        $this->assign("screen_news",$screen_news);

        //名师讲座
        $teachers=M("teacher")->where("status=1")->limit(8)->select();
        $this->assign("teachers",$teachers);
        
        $this->display();
    }
    
}