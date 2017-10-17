<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 14-8-24
 * Time: 下午1:04
 */
class MyzoneAction extends Action {
public function index() {
    if($_SESSION["uid"]==NULL)
    {
        $this->
error("你还没有登陆,请先登录",U("Member/login"));
    }
    $chy=$_SESSION['nickname'];
    $member=M("Member")->where("nickname='$chy'")->select();
    $zonenotice=M("Zonenotice")->where("status=1")->select();

    $count = M("Zonenotice")->where("status=1")->count();
    import("ORG.Util.Page");       //载入分页类
    $page = new Page($count, 12);
    $showPage = $page->show();
    $this->assign('page',$showPage);//赋值分页输出
    $this->assign("news",$zonenotice);
    $this->assign("info",$member);
    $this->assign("nickname",$_SESSION['nickname']);
    $this->assign("uid",$_SESSION['uid']);
    if($member[0]['isteacher']==1)
    {


        $this->redirect("Myzone/teacher");

    }
    else
    {
        $this->display();

    }

}
    public function download()
    {
        $uploadpath='./Public/Uploads/';
        $id=$_GET['id'];
        if($id='')
        {
            $this->error("下载失败");
        }
        $file=M("File")->where("$id")->select();
        if($file==false)
        {
            $this->error("下载失败");
        }
        $savename=$file[0]['filename'];
        $showname=$file[0]['title'];
        $filename=$uploadpath.$savename;
        import('ORG.Net.Http');
        Http::download($filename,$showname);
    }
    public function image()
    {
        $id=$_GET['id'];
        $chy=$_SESSION['uid'];
        $idd=M("Advice")->where("pid='$id'AND uid='$chy'")->select();
            $data['id']=$idd[0]['id'];
            $data['status']=$_GET['status'];
            $data['time']=time();
            $sa=M("Advice")->save($data);
            if($sa)
            {
                $this->success("评定成功",U("Myzone/index"));
            }
            else{
                $this->error("评定失败");
            }
    }

 public  function teacher()
 {
     $chy=$_SESSION['nickname']; //教师名
     $member=M("Member")->where("nickname='$chy'")->select();
     $teacher=M("Major")->where("teacher1='$chy'or teacher2='$chy'or teacher3='$chy'or teacher4='$chy'or teacher5='$chy' ")->select();
     for ($i=0; $i
<count($teacher); $i++) { 
         $id=$teacher[$i]['uid'];    //立项ID
         $state[]=M("Advice")->
    where("name='$chy' AND pid='$id'")->select();//查询是否已添加教师建议
         $file[]=M("File")->where("id='$id'")->select();
         $s[$i+1]=$state[$i][0];
         $f[$i]=$file[$i][0];
     }


     $this->assign("status",$s);
     $this->assign("info",$member);
     $this->assign("file",$f);
     $this->assign("nickname",$_SESSION['nickname']);
     $this->assign("uid",$_SESSION['uid']);
     $this->display();
 }
 /*
    2014-09-18 10:38:54
    添加老师对项目的建议
 */
 public function addAdvice(){
    $chy=$_SESSION['nickname']; //教师名
    $M = M("Advice");
    $data = $_POST['info'];
    $data['state'] = 1;
    $id=$data['id'];    //立项ID
    $getid=M("Advice")->where("name='$chy' AND pid='$id'")->select();//得到Advice ID
    $data['id'] = $getid[0]['id'];
    
    if($M->save($data))
    {

        $this->success('添加评价成功！',U("Myzone/teacher"));
    } else {

        $this->error('添加评价失败!');
    }
 }



public function zone() {
    if($_SESSION["uid"]==NULL)
    {
        $this->error("你还没有登陆,请先登录",U("Member/login"));
    }
    $chy=$_SESSION['nickname'];
    $member=M("Member")->where("nickname='$chy'")->select();
    $zonenotice=M("Zonenotice")->where("status=1")->select();

    $count = M("Zonenotice")->where("status=1")->count();
    import("ORG.Util.Page");       //载入分页类
    $page = new Page($count, 12);
    $showPage = $page->show();
    $this->assign('page',$showPage);//赋值分页输出
    $this->assign("news",$zonenotice);
    $this->assign("info",$member);

    $this->assign("nickname",$_SESSION['nickname']);
    $this->assign("uid",$_SESSION['uid']);
     $this->display();

}
public function edit() {//编辑个人信息
    if($_SESSION["uid"]==NULL)
    {
        $this->error("你还没有登陆,请先登录",U("Member/login"));
    }
    if (IS_POST) {
//        $data=$_POST['my'];
//        $aaa=M("Member");
        if(!empty($_FILES['file']['name'])){
            import('ORG.Net.UploadFile');
            $upload = new UploadFile();
            $upload->maxSize  = 3145728 ;
            $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg','ico');
            $upload->savePath =  './Public/Uploads/';
            $upload->thumb = true;
            $upload->thumbMaxWidth = '120';
            $upload->thumbMaxHeight = '120';
            $upload->thumbPrefix = 's_';   //缩略图前缀
            $upload->thumbPath = ''; //留空表示存在在savePath
            $upload->thumbRemoveOrigin=true;//如果生成缩略图，是否删除原图

            if(!$upload->upload()) {
                $this->error($upload->getErrorMsg());
            }else{
                $info =  $upload->getUploadFileInfo();
            }
            $data = $_POST['my'];
//            $data['avatar'] = $info[0]['savepath'] . $info[0]['savename'];
            $data['avatar'] =$info[0]['savename'];
            $data['province']=$_POST['province'];
            $data['city']=$_POST['city'];
            $data['academy']=$_POST['academy'];
            $data['major']=$_POST['major'];
          //  $data['isphoto']=1;

                    $aaa=M("Member");

                    if($aaa->save($data))
                    {

                        $this->success('你的信息编辑成功！',U("Myzone/index"));
                    }
                    else
                    {

                        $this->error('信息编辑失败!');
                    }
        }else{
            $data = $_POST['my'];
            $data['province']=$_POST['province'];
            $data['city']=$_POST['city'];
            $data['academy']=$_POST['academy'];
            $data['major']=$_POST['major'];
            $aaa=M("Member");
                    if($aaa->save($data)!=false)
                    {

                        $this->success('你的信息编辑成功！',U("Myzone/index"));
                    }
                    else
                    {
 
                        $this->error('信息编辑失败!!!');
                        
                    }
        }

    }else{
    $chy=$_SESSION['nickname'];
    $this->assign("uid",$_SESSION['uid']);
    $id=$_GET['id'];
    $member=M("Member")->where("uid='$id'")->select();
    $this->assign("info",$member);
    $this->assign("name",$chy);
    $this->assign("id",$id);
    $this->assign("nickname",$_SESSION['nickname']);
    $this->assign("uid",$_SESSION['uid']);
    $this->display();
    }
}

public function state() {//个人组队情况
    if($_SESSION["uid"]==NULL)
    {
        $this->error("你还没有登陆,请先登录",U("Member/login"));
    }
    if(IS_POST)
    {
    $id=$_POST['id'];
    $state=$_POST['state'];
    $member=M("Member")->where("uid='$id'")->select();
    $member[0]['state']=$state;
    M("Member")->save($member[0]);
    $this->success('状态修改成功！',U('Myzone/state','id='.$id));
    }
    else{

        $id=$_GET['id'];
        $member=M("Member")->where("uid='$id'")->select();
        $this->assign("nickname",$_SESSION['nickname']);
        $this->assign("uid",$_SESSION['uid']);
        $this->assign("info",$member);
        $this->display();

    }


}
 public function getdel() {//个人组队情况
     $id=$_GET['id'];
     $uid=$_GET['uid'];
     $sa=M("nickname")->where("id='$id'")->select();
     if ($sa) {
         $sa[0]['getisdel']=1;
         M("nickname")->save($sa[0]);
         $this->success("成功删除",U('Myzone/letter','id='.$uid));
     } else {
         $this->error("删除失败，可能是不存在该ID的记录");
     }


 }
public function mbdel() {//个人组队情况
        $id=$_GET['id'];
        $sa=M("Messageboard")->where("id='$id'")->delete();
        if ($sa) {
            $sa[0]['getisdel']=1;
            M("nickname")->save($sa[0]);
            $this->success("成功删除",U('Myzone/messageboard'));
        } else {
            $this->error("删除失败，可能是不存在该ID的记录");
        }


 }
public function postdel() {//个人组队情况
        $id=$_GET['id'];
    $uid=$_GET['uid'];
        $sa=M("nickname")->where("id='$id'")->select();
        if ($sa) {
            $sa[0]['postisdel']=1;
            M("nickname")->save($sa[0]);

            $this->success("成功删除",U('Myzone/outletter','id='.$uid));
        } else {
            $this->error("删除失败，可能是不存在该ID的记录");
        }


 }
public function letter() {//收信箱
    if($_SESSION["uid"]==NULL)
    {
        $this->error("你还没有登陆,请先登录",U("Member/login"));
    }

    $id=$_GET['id'];
    $nickname=M("nickname")->where("get='$id'and getisdel=0")->select();
    $count=count($nickname);
    import("ORG.Util.Page");       //载入分页类
    $page = new Page($count, 12);
    $showPage = $page->show();
    $this->assign('page',$showPage);//赋值分页输出
    $member=M("Member")->where("uid='$id'")->select();
    $this->assign("info",$member);//主人信息
    $this->assign("info1",$nickname);//主人信件
    $this->assign("nickname",$_SESSION['nickname']);
    $this->assign("uid",$_SESSION['uid']);
    $this->display();

}

public function outletter() {
    if($_SESSION["uid"]==NULL)
    {
        $this->error("你还没有登陆,请先登录",U("Member/login"));
    }
//    $id=$_GET['id'];
    $id=$_SESSION['uid'];
    $nickname=M("nickname")->where("post='$id' and postisdel=0")->select();
    $count=count($nickname);
    import("ORG.Util.Page");       //载入分页类
    $page = new Page($count, 12);
    $showPage = $page->show();
    $this->assign('page',$showPage);//赋值分页输出
    $member=M("Member")->where("uid='$id'")->select();
    $this->assign("info",$member);//主人信息
    $this->assign("info1",$nickname);//主人信件
    $this->assign("nickname",$_SESSION['nickname']);
    $this->assign("uid",$_SESSION['uid']);
    $this->display();

}
public function sendmsg() {
    if($_SESSION["uid"]==NULL)
    {
        $this->error("你还没有登陆,请先登录",U("Member/login"));
    }
    if(IS_POST)
    {
        $info=$_POST['msg'];
        $id=$info['get'];
//        $uid=$_SESSION['uid'];
        $uid=$_SESSION['uid'];
        $memberget=M("Member")->where("uid='$id'")->select();
        $memberpost=M("Member")->where("uid='$uid'")->select();
        $data['post']=$memberpost[0]['uid'];
        $data['postname']=$memberpost[0]['nickname'];
        $data['postphoto']=$memberpost[0]['avatar'];
        $data['get']=$id;
        $data['getname']=$memberget[0]['nickname'];
        $data['getphoto']=$memberget[0]['avatar'];
        $data['time']=time();
        $data['content']=$info['content'];
        M("nickname")->add($data);
        $this->success("您的私信发送成功",U("Myzone/outletter"));

    }
    else{

        $id=$_GET['id'];//发给谁的
        $uid=$_SESSION['uid'];
        $member1=M("Member")->where("uid='$id'")->select();
        $this->assign("name",$member1);
        $member2=M("Member")->where("uid='$uid'")->select();
        $this->assign("info",$member2);
        $this->assign("nickname",$_SESSION['nickname']);
        $this->assign("uid",$_SESSION['uid']);
        $this->display();

    }



 }
public  function mymessage(){
    $id=$_GET['id'];
    if($id==0)
    {
        $this->error("此人为匿名留言者,不能查看他的信息");
    }
    else{
    $uid=$_SESSION['uid'];
    $member=M("Member")->where("uid='$uid'")->select();
    $member1=M("Member")->where("uid='$id'")->select();
    $this->assign("info1",$member1);
    $this->assign("info",$member);
    $this->assign("nickname",$_SESSION['nickname']);
    $this->assign("uid",$_SESSION['uid']);
    $this->display();
    }

}
public function messageboard() {
    if($_SESSION["uid"]==NULL)
    {
        $this->error("你还没有登陆,请先登录",U("Member/login"));
    }
    if(IS_POST)
    {
   $id=$_POST['id'];
   $data['content']=$_POST['content'];
    $data['time']=time();
    $data['owner']=$id;
    $uid=$_SESSION['uid'];
    $member=M("Member")->where("uid='$uid'")->select();
    $data['postname']=$member[0]['nickname'];
    $data['postphoto']=$member[0]['avatar'];
    if(M("Messageboard")->add($data))
    {
        $this->success("您的留言发送成功",U("Myzone/messageboard"));
    }
 else{
     $this->error("您的留言发送失败");

 }
    }
    else
    {
        $uid=$_SESSION['uid'];
        $member1=M("Member")->where("uid='$uid'")->select();
        $member=M("Messageboard")->where("owner='$uid'")->select();
        $count=count($member);
        import("ORG.Util.Page");       //载入分页类
        $page = new Page($count, 12);
        $showPage = $page->show();
        $this->assign('page',$showPage);//赋值分页输出

        $this->assign("liuyan",$member);
        $this->assign("info",$member1);
        $this->assign("nickname",$_SESSION['nickname']);
        $this->assign("uid",$_SESSION['uid']);
        $this->display();
    }


}
public function myidea() {
    $uid=$_SESSION['uid'];
    $member=M("Member")->where("uid='$uid'")->select();
    $chuangyi=M("Chuangyi")->select();
    $this->assign("ideas",$chuangyi);
    $this->assign("nickname",$_SESSION['nickname']);
    $this->assign("uid",$_SESSION['uid']);
    $this->assign("info",$member);
    $this->display();

}
public function secureqa() {
    if(IS_POST){
    $data=$_POST["info1"];

    $chy=$_SESSION['uid'];
    $member=M("member")->where("uid='$chy'")->select();
    if($member['pwd']==$data['oldpwd'])
    {
        $info['uid']=$_SESSION['uid'];
        $info['pwd']=encrypt($data['pwd']);
        if( M("member")->save($info))
        {
            $this->success("修改密码成功，请重新登录",U("Member/login"));
        }
        else{
            $this->error("修改密码失败");
        }


    }
    else{
        $this->error("您输入旧密码有误");
    }
    }
    else{
        $chy=$_SESSION['uid'];
        $member=M("member")->where("uid='$chy'")->select();
        $this->assign("info",$member);
        $this->assign("nickname",$_SESSION['nickname']);
        $this->assign("uid",$_SESSION['uid']);
        $this->display();

    }

}
public function bind() {
    $this->assign("nickname",$_SESSION['nickname']);
    $this->assign("uid",$_SESSION['uid']);

    $this->display();


}

}