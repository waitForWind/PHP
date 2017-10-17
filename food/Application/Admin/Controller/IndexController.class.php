<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
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
}