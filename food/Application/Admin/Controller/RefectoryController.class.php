<?php
namespace Admin\Controller;
use Think\Controller;
class RefectoryController extends Controller {
    public function index(){
    	if(!session('?username')){
           $this->display("Login/login");
    		// $this->display("login");
    	}else{
            // var_dump($_SESSION);
    		$this->display();
    	}
    	
    } 

    public function exitLogin(){
        session(null);

    }

    public function menu(){
        $menu = M("Menu");
        $map['refectory_id'] = $_SESSION['refectory_id'];
        $data = $menu->where($map)->select();
        $count = count($data);
        $page  = new \Think\Page($count,10);
        $page->setConfig('first','首页');
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('last','末页');
        $show  = $page->show();
        $list = $menu->where($map)->limit($page->firstRow.",".$page->listRows)->select();
        if($data){
            $this->assign('data', $list);
            $this->assign('show', $show);
            $this->display();
        }
    }

    public function shangchuan(){
        $menu = M('Menu');
        $config = array(    
        'maxSize'    =>    3145728, 
        'rootPath'   =>    './', 
        'savePath'   =>    'Public/img/', 
        'saveName'   =>    '',
        'saveRule'   =>   '',
        'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),
        'autoSub'    =>  false,
        );
        $upload = new \Think\Upload($config);// 实例化上传类
        $info = $upload->upload();
        if(!$info) {   
            //上传错误时提示错误
            $this->ajaxReturn($upload->getError());
        }else{
        $data['image'] = $_POST['pic-name'];
        $data['refectory_id'] = $_SESSION['refectory_id'];
        $data['name'] = $_POST['foodname'];
        $data['price'] = $_POST['price'];
        $data['vip_price'] = $_POST['vip_price'];
        $data['status'] = $_POST['recommend'];
        $data['class'] = $_POST['foodclass'];
        $data['introduce'] = $_POST['commen'];
        if($menu->data($data)->add()){
            $this->ajaxReturn('success');
        }else{
            $this->ajaxReturn("failed");
        }
    }
}

    public function upload(){
        $this->display();
    }

    public function delData(){
         if(!IS_AJAX){
           $this->ajaxReturn(array(
                'info' => '非法的请求方式'
            ));       
        }
        $menu = M('menu');
        $menu_id = $_GET['id'];
        $count = $menu->delete($menu_id);
        if($count>0){
            $this->ajaxReturn('删除成功');
        }else{
            $this->ajaxReturn('删除失败');
        }
    }

     public function modify(){
        if(IS_AJAX){
            $menu = M('menu');
            $map['menu_id'] = $_POST['menu_id'];
            $data['name'] = $_POST['foodname'];
            $data['price'] = $_POST['price'];
            $data['vip_price'] = $_POST['vip_price'];
            $data['status'] = $_POST['recommend'];
            $data['class'] = $_POST['foodclass'];
            $data['introduce'] = $_POST['commen'];
            if($menu->where($map)->save($data)){
                // $this->ajaxReturn($_POST);
                $this->ajaxReturn('success');
            }else{
                $this->ajaxReturn("failed");
            }
        }else{
            $menu = M('Menu');
            $menu_id = $_GET['id'];
            $arr = $menu->find($menu_id);
            $this->assign('data',$arr);
            $this->display(); 
        }
       
    }

    public function lookupComment(){
        $comment = M('comment');
        $map['refectory_id'] = $_SESSION['refectory_id'];
  
        $data = $comment->where($map)->select();
       
        $count = count($data);
        $page  = new \Think\Page($count,10);
        $page->setConfig('first','首页');
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('last','末页');
        $show  = $page->show();
        $list = $comment->where($map)->limit($page->firstRow.",".$page->listRows)->select();
        if($data){
            $this->assign('comment', $list);
            $this->assign('count',$count);
            $this->assign('show',$show);
            $this->display();
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

    public function order(){
        $order = M('Order');
        $map['refectory_id'] = $_SESSION['refectory_id'];
        $data = $order->where($map)->select();
       
        $count = count($data);
        $page  = new \Think\Page($count,10);
        $page->setConfig('first','首页');
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('last','末页');
        $show  = $page->show();
        $list = $order->where($map)->limit($page->firstRow.",".$page->listRows)->select();
        if($data){
            $this->assign('order', $list);
            $this->assign('count',$count);
            $this->assign('show',$show);
            $this->display();
        }
    }

    public function remark(){
        $order = M("Order");
        $map['order_id'] = $_GET['id'];
        $data['order_status'] = 1;
        $count = $order->where($map)->save($data);
        if($count !== false){
            $this->ajaxReturn('success');
        }else{
            $this->ajaxReturn('failed');
        }
    }
}