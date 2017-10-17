<?php
class RelannounceAction extends Action {
	public function index(){
    	$M = M("Relannounce");
    	if (IS_GET) {
    		$info = $M->where("id=" . (int) $_GET['id'])->find();
            $news=$M->select();
            $about_news=M("News")->select();
            if ($info['id'] == '') {
                $this->error("此记录不存在！");
            }
            $this->assign("info", $info);
            $this->assign("news", $news);
            $this->assign("about_news", $about_news);
            $this->assign("email",$_SESSION['email']);
            $this->assign("uid",$_SESSION['uid']);
            $this->display();
    	}
   }
}
