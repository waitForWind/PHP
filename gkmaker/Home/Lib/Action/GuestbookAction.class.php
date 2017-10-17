<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 14-8-27
 * Time: 下午1:33
 */
class GuestbookAction extends Action {

    public function index(){
       
        $guest = M("Guestbook");
        $count = $guest->count();
        import("ORG.Util.Page");       
        $page = new Page($count, 10);
        $showPage = $page->show(); 
        $this->assign("page", $showPage);
        $data = $guest->order("`time` DESC")->limit("$page->firstRow , $page->listRows")->select();
    
        $this->assign("info",$data);
        $this->assign("nickname",$_SESSION['nickname']);
        $this->assign("uid",$_SESSION['uid']);
        $this->display();
     
    }

    public function add(){
      if(IS_POST){

         if($_SESSION['verify'] != md5($_POST['verifycode'])) {
               $this->error('验证码错误！');
            }
        $data=$_POST['guestbook'];
        $data['time']=time();
        if($_SESSION['uid']!=NULL)
        {

            $data['uid']=$_SESSION['uid'];
            $chy=$data['uid'];
            $member=M("Member")->where("uid='$chy'")->select();
            $data['photo']=$member[0]['avatar'];

        }

        if(M("Guestbook")->add($data))
        {
            $this->success("留言成功",U("Guestbook/index"));
        }
        else{
            $this->error("提交失败");

        }
      }
    }

}