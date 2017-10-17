<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends Controller {
    public function index(){
    	$this->display("Admin/manage");
    }

    public function addM(){
        if(!IS_AJAX){
           $this->ajaxReturn(array(
                'info' => '非法的请求方式'
            ));       
        }
        $refectory = M('Refectory');
        if($refectory->create()){
            $refectory->add();
            $this->ajaxReturn('添加成功');
        }else{
            $this->ajaxReturn("添加失败");
        }
        
       
        
    }

    public function exitLogin(){
    	session(null);
    }
    public function lookupMembers(){
    	//不是管理员则无权限访问
    	if(!session("?admin_id")){
    		$this->display("Login/login");
    	}
    	$refectory = M('Refectory');
    	$data = $refectory->select();
    	if($data){
    		$this->assign('refectory', $data);
    		$this->display();
    	}

    }
    public function lookupUsers(){
        //不是管理员则无权限访问
        if(!session("?admin_id")){
            $this->display("Login/login");
        }
        $user = M('user');
        $data = $user->select();
        if($data){
            $this->assign('user', $data);
            $this->display();
        }

    }

    //添加商户
    public function addMembers(){
        $this->display();
    }

    public function checkUser(){
        if(!IS_AJAX){
           $this->ajaxReturn(array(
                'info' => '非法的请求方式'
            ));       
        }

        //查找
        $refectory = M('Refectory');
        $refectory_id = I('post.refectory_id', '');
        $filter = array(
            'refectory_id' => $refectory_id,
        );
        
        $result = $refectory->where($filter)->find();
        //如果找到了，就说明已经存在此id了，没找到返回ok
        if(!$result){
            $data = array(
                'info'=>'ok',
            );
        }else{
            $data = array(
                'info'=>'商户ID已存在!'
                // 'info'=> $result
            );
        }
        $this->ajaxReturn($data);
    }
    public function checkEmail(){
        if(!IS_AJAX){
           $this->ajaxReturn(array(
                'info' => '非法的请求方式'
            ));       
        }

        //查找
        $refectory = M('Refectory');
        $username  = I('post.username', '');
        $filter = array(
            'username' => $username,
        );
        
        $result = $refectory->where($filter)->find();
        //如果找到了，就说明已经存在此id了，没找到返回ok
        if(!$result){
            $data = array(
                'info'=>'ok',
            );
        }else{
            $data = array(
                'info'=>'该账户已注册!'
            );
        }
        $this->ajaxReturn($data);
    }

     public function checkTel(){
        if(!IS_AJAX){
           $this->ajaxReturn(array(
                'info' => '非法的请求方式'
            ));       
        }

        //查找
        $refectory = M('Refectory');
        $tel  = I('post.tel', '');
        $filter = array(
            'tel' => $tel,
        );
        
        $result = $refectory->where($filter)->find();
        //如果找到了，就说明已经存在此id了，没找到返回ok
        if(!$result){
            $data = array(
                'info'=>'ok',
            );
        }else{
            $data = array(
                'info'=>'该手机已注册!'
            );
        }
        $this->ajaxReturn($data);
    }

    public function delData(){
         if(!IS_AJAX){
           $this->ajaxReturn(array(
                'info' => '非法的请求方式'
            ));       
        }
        $refectory = M('Refectory');
        $refectory_id = $_GET['id'];
        $count = $refectory->delete($refectory_id);
        if($count>0){
            $this->ajaxReturn('删除成功');
        }else{
            $this->ajaxReturn('删除失败');
        }
    }
    public function delComment(){
         if(!IS_AJAX){
           $this->ajaxReturn(array(
                'info' => '非法的请求方式'
            ));       
        }
        $comment = M('Comment');
        $comment_id = $_GET['id'];
        $count = $comment->delete($comment_id);
        if($count>0){
            $this->ajaxReturn('删除成功');
        }else{
            $this->ajaxReturn('删除失败');
        }
    }

    public function delDataUser(){
         if(!IS_AJAX){
           $this->ajaxReturn(array(
                'info' => '非法的请求方式'
            ));       
        }
        $user = M('user');
        $user_id = $_GET['id'];
        $count = $user->delete($user_id);
        if($count>0){
            $this->ajaxReturn('删除成功');
        }else{
            $this->ajaxReturn('删除失败');
        }
    }


    public function modify(){
        $refectory = M('Refectory');
        $refectory_id = $_GET['id'];
        $arr = $refectory->find($refectory_id);
        $this->assign('data',$arr);
        $this->display();
    }

    public function update(){
        if(!IS_AJAX){
           $this->ajaxReturn(array(
                'info' => '非法的请求方式'
            ));       
        }
        $refectory = M('Refectory');
        $map['refectory_id'] = $_POST['refectory_id'];
        $refectory->create();
        if($refectory->where($map)->save()){
            // $this->ajaxReturn($_POST);
            $this->ajaxReturn('修改成功');
        }else{
            $this->ajaxReturn("修改失败");
        }
    }
  

     public function modifyUser(){
        $user = M('user');
        $user_id = $_GET['id'];
        $arr = $user->find($user_id);
        $this->assign('data',$arr);
        $this->display();
    }

    public function updateUser(){
        if(!IS_AJAX){
           $this->ajaxReturn(array(
                'info' => '非法的请求方式'
            ));       
        }
        $user = M('user');
        $map['user_id'] = $_POST['user_id'];
        $user->create();
        if($user->where($map)->save()){
            // $this->ajaxReturn($_POST);
            $this->ajaxReturn('修改成功');
        }else{
            $this->ajaxReturn("修改失败");
        }
    }

    public function lookupComment(){
        $comment = M('comment');
        $data = $comment->join('user ON comment.user_id = user.user_id')->join('menu ON comment.menu_id = menu.menu_id')->select();
        $count = count($data);
        $page  = new \Think\Page($count,10);
        $page->setConfig('first','首页');
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('last','末页');
        $show  = $page->show();
        $list = $comment->join('user ON comment.user_id = user.user_id')->join('menu ON comment.menu_id = menu.menu_id')->limit($page->firstRow.",".$page->listRows)->select();
        if($data){
            $this->assign('comment', $list);
            $this->assign('count',$count);
            $this->assign('show',$show);
            $this->display();
        }
    }
}

