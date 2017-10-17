<?php
namespace Home\Controller;
use Think\Controller;
use Think\Page;
class IndexController extends Controller {

    public function index(){
        $menu = M('Menu');
        $map['status'] = 1;
        $food = $menu->join("refectory ON menu.refectory_id = refectory.refectory_id")->where($map)->limit(12)->select();
        $this->assign('food', $food);
        $this->display();
    }
    public function query(){
        // echo "hello";
        // $this->display();
        $menu = M('Menu');
        $where['name|class'] = array('like', "%".$_POST['query']."%");
        $food = $menu->join("refectory ON menu.refectory_id = refectory.refectory_id")->where($where)->select();
        $this->assign('food', $food);
        $this->display();
    }
    public function regist(){
	    if(IS_POST){
	    	$user = M('user');
	    	if($user->create()){
	    	    $user->add();
                // $_SESSION['account'] = $_POST['account'];
                $map['account'] = $_POST['account'];
                $result = $user->where($map)->find();
                $_SESSION['user_id'] = $result['user_id'];
                // $this->ajaxReturn($_POST);
	    	    $this->ajaxReturn('success');

	    	}else{
	    	    $this->ajaxReturn("failed");
	    	}
	    }else{
	    	$this->display();
	    }
    }

     public function login(){
        if(IS_POST){
            $user = M('user');
            $account = I('post.account', '');
            $password = I('post.password', '');
            $filter = array(
                'account' => $account,
                'password' => $password
            );
            
            $result = $user->where($filter)->find();
            if($result){
                $_SESSION['user_id'] = $result['user_id'];
                $_SESSION['account'] = $result['account'];
                $_SESSION['nickname'] = $result['nickname'];
                $data = array(
                    'info'=>'success',
                    'redir'=> U('Index/self'),//管理员跳转页面
                );
            }else{
                $data = array(
                    'info'=>'failed',
                );
            }
            $this->ajaxReturn($data);
        }else{
            $this->display();
        }
    }

     public function checkAccount(){
        if(!IS_AJAX){
           $this->ajaxReturn(array(
                'info' => '非法的请求方式'
            ));       
        }

        //查找
        $user = M('user');
        $account = I('post.account', '');
        $filter = array(
            'account' => $account,
        );
        
        $result = $user->where($filter)->find();
        //如果找到了，就说明已经存在此id了，没找到返回ok
        if(!$result){
            $data = array(
                'info'=>'success',
            );
        }else{
            $data = array(
                'info'=>'failed'
                // 'info'=> $result
            );
        }
        $this->ajaxReturn($data);
    }
     public function checkAccountExist(){
        if(!IS_AJAX){
           $this->ajaxReturn(array(
                'info' => '非法的请求方式'
            ));       
        }

        //查找
        $user = M('user');
        $account = I('post.account', '');
        $filter = array(
            'account' => $account,
        );
        
        $result = $user->where($filter)->find();
         if($result){
            $data = array(
                'info'=>'success',
            );
        }else{
            $data = array(
                'info'=>'failed'
                // 'info'=> $result
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
        $user = M('user');
        $tel  = I('post.tel', '');
        $filter = array(
            'tel' => $tel,
        );
        
        $result = $user->where($filter)->find();
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

    public function self(){
        if(!$_SESSION["user_id"]){
            $this->display('login');
        }else{
           $user = M('User');
           $address = M('Address');
           $map = array(
               'user_id' => $_SESSION["user_id"],   
           );
           $data = $user->where($map)->find();
           $address = $address->where($map)->select();
           $this->assign('data',$data);
           $this->assign('address', $address);
           $this->display(); 
        }
        
    }

    public function exitLogin(){
        $this->display('login');
        session(null);
    }

    public function addAddr(){
        $address = M('Address');
        $data =$_POST;
        
        if($data['status'] == true){
            $data['status']=1;
            $where['user_id'] = $data['user_id'];
            $item['status'] = 0;
            $address->where($where)->field('status')->save($item);
        }
        // $this->ajaxReturn($data);
        if($address->add($data)){
            $this->ajaxReturn('success');
            $this->display('self');
        }else{
            $this->ajaxReturn('failed');
        }

    }

    public function delData(){
        if(!IS_AJAX){
           $this->ajaxReturn(array(
                'info' => '非法的请求方式'
            ));       
        }
        $address = M('address');
        $address_id = $_GET['id'];
        $count = $address->delete($address_id);
        if($count>0){
            $this->ajaxReturn('删除成功');
        }else{
            $this->ajaxReturn('删除失败');
        }
    }

    public function modUserInfo(){
        if(!IS_AJAX){
           $this->ajaxReturn(array(
                'info' => '非法的请求方式'
            ));       
        }
        $user = M('User');
        $map['user_id'] = $_SESSION['user_id'];
        $data = $_POST;
        $result = $user->where($map)->save($data);
        if($result !== false){
            $this->ajaxReturn('success');
        }else{
            $this->ajaxReturn('failed');
        }
    }

    public function showModify(){
        $address = M('address');
        $address_id = $_GET['id'];
        $arr = $address->find($address_id);
        $this->assign('address',$arr);
        $this->display();
    }
    public function setDefault(){
        if(!IS_AJAX){
           $this->ajaxReturn(array(
                'info' => '非法的请求方式'
            ));       
        }
        $address = M('address');
        $map2['address_id'] = $_GET['id'];
        $map2['user_id'] = $_SESSION['user_id'];
        // $this->ajaxReturn($map2);
        $map['user_id'] = $_SESSION['user_id'];
        $data['status'] = 1;
        $data2['status'] =0;
        $result2 = $address->where($map)->field('status')->save($data2);
        $result = $address->where($map2)->field('status')->save($data);
        // $this->ajaxReturn($result.$result2);
        if($result!==false && $result2!==false){
            $this->ajaxReturn('success');
        }else{
            $this->ajaxReturn('failed');
        }
        
    }
    public function modifyAddr(){
        if(!IS_AJAX){
           $this->ajaxReturn(array(
                'info' => '非法的请求方式'
            ));       
        }
        $address = M('address');
        $map['address_id'] = $_POST['address_id'];
        $data = $_POST;
        //数据格式转换,把true转换为1
        if($data['status'] == 'true'){
            $data['status']=1;
        }else if($data['status'] == 'false'){
            // $this->ajaxReturn($data['true']);
            $data['status'] = 0;
        }
        // $this->ajaxReturn($data);
        if($address->where($map)->save($data)){
            // $this->ajaxReturn($_POST);
            $this->ajaxReturn('success');
        }else{
            $this->ajaxReturn("failed");
        }
    }

    public function fen(){
        if(IS_POST){

        }else{
            $menu = M('Menu');
            $map['class'] = "粉类";
            $food = $menu->join("refectory ON menu.refectory_id = refectory.refectory_id")->where($map)->select();
            $count = count($food);
            $page  = new \Think\Page($count,8);
            $page->setConfig('first','首页');
            $page->setConfig('prev','上一页');
            $page->setConfig('next','下一页');
            $page->setConfig('last','末页');
            $show  = $page->show();
            $list = $menu->join("refectory ON menu.refectory_id = refectory.refectory_id")->where($map)->limit($page->firstRow.",".$page->listRows)->select();

            $this->assign('list',$list);
            $this->assign('count',$count);
            $this->assign('show',$show);
            $this->display();
        }
    }

     public function zhou(){
        if(IS_POST){

        }else{
            $menu = M('Menu');
            $map['class'] = "粥类";
            $food = $menu->join("refectory ON menu.refectory_id = refectory.refectory_id")->where($map)->select();
            $count = count($food);
            $page  = new \Think\Page($count,8);
            $page->setConfig('first','首页');
            $page->setConfig('prev','上一页');
            $page->setConfig('next','下一页');
            $page->setConfig('last','末页');
            $show  = $page->show();
            $list = $menu->join("refectory ON menu.refectory_id = refectory.refectory_id")->where($map)->limit($page->firstRow.",".$page->listRows)->select();

            $this->assign('list',$list);
            $this->assign('count',$count);
            $this->assign('show',$show);
            $this->display();
        }
    }

     public function fan(){
        if(IS_POST){

        }else{
            $menu = M('Menu');
            $map['class'] = "饭类";
            $food = $menu->join("refectory ON menu.refectory_id = refectory.refectory_id")->where($map)->select();
            $count = count($food);
            $page  = new \Think\Page($count,8);
            $page->setConfig('first','首页');
            $page->setConfig('prev','上一页');
            $page->setConfig('next','下一页');
            $page->setConfig('last','末页');
            $show  = $page->show();
            $list = $menu->join("refectory ON menu.refectory_id = refectory.refectory_id")->where($map)->limit($page->firstRow.",".$page->listRows)->select();

            $this->assign('list',$list);
            $this->assign('count',$count);
            $this->assign('show',$show);
            $this->display();
        }
    }

     public function mian(){
        if(IS_POST){

        }else{
            $menu = M('Menu');
            $map['class'] = "面类";
            $food = $menu->join("refectory ON menu.refectory_id = refectory.refectory_id")->where($map)->select();
            $count = count($food);
            $page  = new \Think\Page($count,8);
            $page->setConfig('first','首页');
            $page->setConfig('prev','上一页');
            $page->setConfig('next','下一页');
            $page->setConfig('last','末页');
            $show  = $page->show();
            $list = $menu->join("refectory ON menu.refectory_id = refectory.refectory_id")->where($map)->limit($page->firstRow.",".$page->listRows)->select();

            $this->assign('list',$list);
            $this->assign('count',$count);
            $this->assign('show',$show);
            $this->display();
        }
    }

     public function xiaochao(){
        if(IS_POST){

        }else{
            $menu = M('Menu');
            $map['class'] = "小炒";
            $food = $menu->join("refectory ON menu.refectory_id = refectory.refectory_id")->where($map)->select();
            $count = count($food);
            $page  = new \Think\Page($count,8);
            $page->setConfig('first','首页');
            $page->setConfig('prev','上一页');
            $page->setConfig('next','下一页');
            $page->setConfig('last','末页');
            $show  = $page->show();
            $list = $menu->join("refectory ON menu.refectory_id = refectory.refectory_id")->where($map)->limit($page->firstRow.",".$page->listRows)->select();

            $this->assign('list',$list);
            $this->assign('count',$count);
            $this->assign('show',$show);
            $this->display();
        }
    }

    public function order(){
        if(IS_POST){
            $order = M('Order');
            $data= $_POST;
            $data['order_time']= date("Y-m-d:H:i:s",time());
            $data['order_status']= 0;
            $data['send_status']= 0;
            // $this->ajaxReturn($data);
            if($order->add($data)){
                $this->ajaxReturn('success');
            }else{
                $this->ajaxReturn('failed');
            }
            
        }else{
           $menu = M('Menu');
           $address = M('Address');
           $comment = M('Comment');
           $map2['user_id'] = $_GET['user_id'];
           $map2['status'] = 1;
           $map['menu_id'] = $_GET['id'];
           $commentInfo = $comment->join("user ON comment.user_id= user.user_id")->where($map)->select();
           $commentCount = count($commentInfo);
           $page  = new \Think\Page($commentCount,10);
           $addrInfo = $address->where($map2)->find();
           $list = $comment->join("user ON comment.user_id= user.user_id")->where($map)->limit($page->firstRow.",".$page->listRows)->select();
           
           $page->setConfig('first','首页');
           $page->setConfig('prev','上一页');
           $page->setConfig('next','下一页');
           $page->setConfig('last','末页');
           $show  = $page->show();
           // print_r($map2);
           $food = $menu->join("refectory ON menu.refectory_id = refectory.refectory_id")->where($map)->find();
           // print_r($map);
           $this->assign('food', $food);
           $this->assign('show',$show);
           $this->assign('commentCount', $commentCount);
           $this->assign('address', $addrInfo);
           $this->assign('comment', $list);
           $this->display(); 
        }
        
    }

    public function comment(){
        $comment =  M('Comment');
        $data= $_POST;
        $data['comment_time']= date("Y-m-d:H:i:s",time());
        if($comment->add($data)){
            $this->ajaxReturn('success');
        }else{
            $this->ajaxReturn('failed');
        }
    }

    public function fanhe(){
        $order = M('Order');
        $map['user_id'] = $_SESSION['user_id'];
        $map['order_status'] = 0;
        $food = $order->join("menu ON order.menu_id = menu.menu_id")->where($map)->select(); 
        // $food['total'] = $food['price']*$food['num'];
        $this->assign('food', $food);
        // print_r($food);
        $this->display();
    }

     public function delOrder(){
        if(!IS_AJAX){
           $this->ajaxReturn(array(
                'info' => '非法的请求方式'
            ));       
        }
        $order = M('order');
        $order_id = $_GET['id'];
        $count = $order->delete($order_id);
        if($count>0){
            $this->ajaxReturn('删除成功');
        }else{
            $this->ajaxReturn('删除失败');
        }
    }
    public function qianshou(){
        if(!IS_AJAX){
           $this->ajaxReturn(array(
                'info' => '非法的请求方式'
            ));       
        }
        $order = M('order');
        $where['order_id'] = $_GET['id'];
        $data['order_status'] = 1;
        $count = $order->where($where)->save($data);
        if($count !== false){
            $this->ajaxReturn('success');
        }else{
            $this->ajaxReturn('failed');
        }
    }

    public function history(){
        $order = M('Order');
        $map['user_id'] = $_SESSION['user_id'];
        $map['order_status'] = 1;
        $food = $order->join("menu ON order.menu_id = menu.menu_id")->where($map)->select(); 
        // $food['total'] = $food['price']*$food['num'];
        $this->assign('food', $food);
        // print_r($food);
        $this->display();
    }
}