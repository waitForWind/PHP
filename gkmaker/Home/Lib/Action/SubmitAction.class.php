<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 14-8-24
 * Time: 下午1:04
 */
class SubmitAction extends Action {
public function index() {

    $this->assign("email",$_SESSION['email']);
    $this->assign("uid",$_SESSION['uid']);
    $this->display();
}

public function submit() {//编辑个人信息
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
            $upload->allowExts  = array('doc', 'gif', 'png', 'jpeg','ico');
            $upload->savePath =  './Public/Uploads/';
            if(!$upload->upload()) {
                $this->error($upload->getErrorMsg());
            }else{
                $info =  $upload->getUploadFileInfo();
            }

//            $data['avatar'] = $info[0]['savepath'] . $info[0]['savename'];
            $data['filename'] =$info[0]['savename'];
            $data['time']=time();
            $data['title']=$_POST['title'];

            $aaa=M("File");

        if($aaa->add($data))
        {

            $this->success('文件上传成功！',U("Myzone/index"));
        }
        else
        {

            $this->error('文件上传失败!');
        }
        }






        else{
            $data = $_POST['my'];
            $data['province']=$_POST['province'];
            $data['city']=$_POST['city'];
            $data['academy']=$_POST['academy'];
            $data['major']=$_POST['major'];
            $aaa=M("Member");
            if($aaa->save($data))
            {

                $this->success('你的信息编辑成功！',U("Myzone/index"));
            }
            else
            {

                $this->error('信息编辑失败!');
            }


        }

    }
    else{

    $chy=$_SESSION['email'];
    $id=$_SESSION['uid'];
    $member=M("Member")->where("uid='$id'")->select();
    $this->assign("info",$member);
    $this->assign("name",$chy);
    $this->assign("id",$id);
        $this->assign("email",$_SESSION['email']);
        $this->assign("uid",$_SESSION['uid']);

    $this->display();
    }


}



}
