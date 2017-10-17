<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 14-8-22
 * Time: 下午2:03
 */
class MemberAction extends Action {

    public function auth($datas) {
        $datas = $_POST;
        $M = M("Member");
        $chy=$datas['nickname'];
        if ($M->
where("`nickname`='" . $datas['nickname'] . "'")->count() >= 1) {
            $info = $M->where("`nickname`='" . $datas["nickname"] . "'")->find();

            if ($info['pwd'] == encrypt($datas['pwd'])) {

                $_SESSION['nickname'] = $info['nickname'];
                $_SESSION['uid'] = $info['uid'];
                $this->success("登录成功",U("__GROUP__/Myzone/index"));

            } else {
                $this->error('账号或密码错误');

            }
        } else {
            $this->error('账号不存在');

        }
    }


    public function loginout() {

        $_SESSION['nickname']=array();
        $_SESSION['uid']=0;
        $this->redirect("Member/login");

    }
//    public function ajxregforword()
//    {
//
//    }
    public function login() {
        if($_SESSION['uid']!=NULL)
        {
            $this->loginout();

        }

        if (IS_POST) {

                $this->auth();

        }else{
                $this->display("Member:login");
            }

    }

    public function reg() {

            if (IS_POST) {
                if($_SESSION['verify'] != md5($_POST['verifycode'])) {
               $this->error('验证码错误！');
                     }
 
                $data = $_POST['user'];
                $nickname=$data["nickname"];
                if($nickname=="")
                {
                    $this->error('注册失败，请填写您的注册信息');
                }
                $data = $_POST['user'];
                $chy=$data["nickname"];
                if(M("Member")->where("nickname='$chy'")->select())
                {
                    $this->error('注册失败，该用户已注册');
                }
                $data['pwd']=encrypt($data['pwd']);
                $M = M("Member");
                $a = $M->add($data);
                if(!$a){
                    $this->error('注册失败');
                }else {
                    $this->success('注册成功！',U("Member/login"));
                }
            }
            else
                $this->display("Member:reg");

    }

}