<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 14-8-24
 * Time: 下午1:04
 */
class ListmemberAction extends Action {
public function index() {
//    $id=$_GET['id'];
    if(IS_POST)
    {

        $id=$_SESSION['uid'];
        $where['tag']=array('like',"%{$_POST['tag']}%");
        $where['isteacher']=0;
        $member1=M("Member")->where("uid='$id'")->select();
        $this->assign("info",$member1);
      // $member = M("Member")->where($where)->select();
        $M=M("Member");
        $count =$M->count();
        $count =count($member);
        import("ORG.Util.Page");       //载入分页类
        $page = new Page($count, 12);
        $showPage = $page->show();
        $this->assign('page',$showPage);//赋值分页输出
        $member=M("Member")->where($where)->order("`uid` DESC")->limit("$page->firstRow, $page->listRows")->select();
        $this->assign('info1',$member);//赋值数据集 
        $this->assign("nickname",$_SESSION['nickname']);
        $this->assign("uid",$_SESSION['uid']);
        if ($member){
            $this->display('index');//输出模板
        }
        else{
            echo "<script language='javascript'>window.alert('暂无此人信息');</script>";
            $this->redirect('index');
        }
    }
    else{

    $id=$_SESSION['uid'];
    $M=M("Member");
    $count =$M->count();
    import("ORG.Util.Page");       //载入分页类
    $page = new Page($count, 12);
    $showPage = $page->show();
    $this->assign('page',$showPage);//赋值分页输出
    $member=M("Member")->order("`uid` DESC")->limit("$page->firstRow, $page->listRows")->select();
    $this->assign("info1",$member);//赋值数据集 
    $member1=M("Member")->where("uid='$id'")->select();
    $this->assign("info",$member1);
    $this->assign("nickname",$_SESSION['nickname']);
    $this->assign("uid",$_SESSION['uid']);
    $this->assign("flag",0);
    $this->display();
    }
}

    public function teacher()
    {
        if(IS_POST)
        {
            $id=$_SESSION['uid'];
            $where['tag']=array('like',"%{$_POST['tag']}%");
            $where['isteacher']=1;
            $member1=M("Member")->where("uid='$id'")->select();
            $this->assign("info",$member1);
            $member = M("Member")->where($where)->select();
            $count =count($member);
            import("ORG.Util.Page");       //载入分页类
            $page = new Page($count, 12);
            $showPage = $page->show();
            $this->assign('page',$showPage);//赋值分页输出
            $this->assign('info1',$member);//赋值数据集
            $this->assign("nickname",$_SESSION['nickname']);
            $this->assign("uid",$_SESSION['uid']);
            if ($member){
                $this->display('index');//输出模板
            }
            else{
                echo "<script language='javascript'>window.alert('暂无此人信息');</script>";
                $this->redirect('index');
            }


        }
        else{
        $id=$_SESSION['uid'];
        $member=M("Member")->where("isteacher=1")->select();
        $count =count($member);
        import("ORG.Util.Page");       //载入分页类
        $page = new Page($count, 12);
        $showPage = $page->show();
        $this->assign('page',$showPage);//赋值分页输出
        $this->assign("info1",$member);
        $member1=M("Member")->where("uid='$id'")->select();
        $this->assign("info",$member1);
        $this->assign("nickname",$_SESSION['nickname']);
        $this->assign("uid",$_SESSION['uid']);
         $this->assign("flag",1);
        $this->display("Listmember:index");
    }
    }
public function search()
{
    $i=$_GET['flag'];
    $id=$_SESSION['uid'];
    $member1=M("Member")->where("uid='$id'")->select();
    $this->assign("info",$member1);
    $data = $_POST['data'];
    foreach ($data as $key => $value) {

        if ($value!="") {
            break;
        }

        if ($key == isvalid )
            if($value== "")
                $this->error("失败");
    }

    if ($data['sex'] != "") {
        $condition['sex'] = $data['sex'];
    }
    if ($data['grade'] != "") {
        $condition['grade'] = $data['grade'];
    }
    if ($data['academy'] != "") {
        $condition['academy'] = $data['academy'];
    }
    if ($data['major'] != "") {
        $condition['major'] = $data['major'];
    }
    if ($data['isphoto'] != "") {
        $condition['isphoto'] = $data['isphoto'];
    }
    $condition['isteacher']=$i;

    $M=M(Member);
    $count =$M->count();
    import("ORG.Util.Page");       //载入分页类
    $page = new Page($count, 12);
    $showPage = $page->show();
    $this->assign('page',$showPage);//赋值分页输出
    $member = M("Member")->where($condition)->order("`uid` DESC")->limit("$page->firstRow, $page->listRows")->select();
    $this->assign('info1',$member);//赋值数据集
    $this->assign("nickname",$_SESSION['nickname']);
    $this->assign("uid",$_SESSION['uid']);
    $this->assign("flag",$i);
    if ($member){
        $this->display('index');//输出模板
    }
    else{
      $this->error("暂无符合要求的查找");
        $this->redirect('index');
    }

}

}
