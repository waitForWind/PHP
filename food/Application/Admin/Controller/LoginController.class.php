<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller{
	public function index(){
    	if(!$_SESSION['username']){
    		$this->display("login");
    	}else{
    		if($_SESSION['admin_id']){
    			$this->display('Admin/manage');
    		}else{
    			$this->display('Refectory/index');
    		}
    	}
	}

	//输入框失焦时动态验证用户是否存在
	public function checkUser(){
	    if(!IS_AJAX){
	       $this->ajaxReturn(array(
	            'info' => '非法的请求方式'
	        ));       
	    }

	    //商户和超级管理员共用一个登录页面
	    $refectory = M('Refectory');
	    $admin = M("Admin");
	    $username = I('post.username', '');
		$filter = array(
	        'username' => $username,
	    );
	    //在两张表当中查找数据，只要有一张表存在就返回数据
	    $result = $admin->where($filter)->find() || $refectory->where($filter)->find();
	    if($result){
	    	$data = array(
	    		'info'=>'ok',
	    	);
	    }else{
	    	$data = array(
	    		'info'=>'用户名不存在'
	    	);
	    }
	    $this->ajaxReturn($data);
	}

	//登录时验证
    public function login(){
    	$refectory  = M("Refectory");
    	$admin = M("Admin");
    	if(!IS_AJAX){
    		$this->ajaxReturn(array(
                'info' => '非法的请求方式'
            )); 
    	}
    	$username = I('post.username', '');
    	$password = I('post.password', '');
    	$filter = array(
    		"username" =>$username,
    		"password" => $password,
	    );
	    if($admin->where($filter)->find()){
	    	$result = $admin->where($filter)->find();
	    }else if($refectory->where($filter)->find()){

	        $result = $refectory->where($filter)->find();
	    }
	    if($result['username']){
	    	$_SESSION['username'] = $result['username'];
	    	if($result['admin_id']!=""){
	    		$_SESSION['admin_id'] = $result['admin_id'];
	    		$data = array(
	        		'info'=>'ok',
	        		'redir'=> U('Admin/index'),//管理员跳转页面
        		);
	    	}else{
	    		$_SESSION['refectory_id'] = $result['refectory_id'];
	    		$data = array(
	        		'info'=>'ok',
	        		// 'redirUser'=> U('Refectory/index'),  
	        		'redir'=> U('Refectory/index'),  //商户跳转页面
        		);
	    	}


        }else{
        	$data = array(
        		'info'=>'用户名不存在'
        	);
        }
        $this->ajaxReturn($data);

    }

 
}