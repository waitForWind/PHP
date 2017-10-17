<?php
// 本类由系统自动生成，仅供测试用途
class listAction extends Action {
    public function index(){
	     $cid = $_GET['cid'];
	     //名师讲座
	     if ($cid == 2) {
	     	$count = D("Teacher")->count();
	        import("ORG.Util.Page");       //载入分页类
	        $page = new Page($count, 20);
	        $showPage = $page->show();
	        $this->assign("page", $showPage);
	        $this->assign("list", D("Index")->listTeacher($page->firstRow, $page->listRows));
             $this->assign("email",$_SESSION['email']);
             $this->assign("uid",$_SESSION['uid']);
	        $this->display();
	     }



        if ($cid == 4) {
        	$count = D("News")->count();
	        import("ORG.Util.Page");       //载入分页类
	        $page = new Page($count, 20);
	        $showPage = $page->show();
	        $this->assign("page", $showPage);
	        $this->assign("list", D("Index")->listNews($page->firstRow, $page->listRows));
            $this->assign("email",$_SESSION['email']);
            $this->assign("uid",$_SESSION['uid']);
	        $this->display();
        	# code...
        }
















    }
}