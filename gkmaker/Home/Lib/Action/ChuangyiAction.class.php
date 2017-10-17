<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 14-8-24
 * Time: 下午1:04
 */
class ChuangyiAction extends Action {
public function index() {

    if(IS_POST)
    {
        $id=$_SESSION['uid'];
        $data=$_POST['idea'];
        $data['time']=time();
        $data['member']=$id;
        $memberchy=M("Member")->where("uid='$id'")->select();
        $data['author']=$memberchy[0]['nickname'];

        $chuangyi=M("Chuangyi")->add($data);
        if ($chuangyi){
           $this->success("发表创意成功!",U('Myzone/myidea'));
        }
        else{
            $this->error("创意发表失败!");
        }


    }
    else{
        if($_SESSION["uid"]==NULL)
        {
            $this->error("你还没有登陆,请先登录",U("Member/login"));
        }

    $id=$_SESSION['uid'];
    $member1=M("Member")->where("uid='$id'")->select();
    $this->assign("info",$member1);
    $this->assign("nickname",$_SESSION['nickname']);
    $this->assign("uid",$_SESSION['uid']);
    $this->display();
    }

   
}
 public  function displayidea()
 {

     $id=$_GET['id'];
     $chuangyi=M('Chuangyi')->where("id='$id'")->select();
     $chuangyi[0]['count']=$chuangyi[0]['count']+1;
     $data['id']=$id;
     $data['count']=$chuangyi[0]['count'];
     $data['title']=$chuangyi[0]['title'];
     $data['content']=$chuangyi[0]['content'];
     $data['time']=$chuangyi[0]['time'];
     $data['author']=$chuangyi[0]['author'];
     $chy=M("Chuangyi")->save($data);
     
     $news=M("News")->select();
     $about_news=M("Relannounce")->select();
     $this->assign("news", $news);
     $this->assign("about_news", $about_news);
     $this->assign("news",$news);
     $this->assign("idea",$data);
     $this->display();

 }


}
