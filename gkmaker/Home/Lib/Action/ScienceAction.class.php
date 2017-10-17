<?php
class ScienceAction extends Action {
    
    public function index(){
    	$science = M("Science")->field("`id`,`status`")->select();
    	foreach ($science as $k => $v) {
            if ($v['status'] == 1) {
            	$rel[] = M("Science")->field("`id`,`title`,`status`,`published`")->find($v['id']);
        	}    
        }
		
        $this->assign("science",$rel);

        $download = M("Download")->where("status=1")->limit(7)->select();
		$this->assign("download",$download);
        $download1 = M("File")->where("status=1")->limit(7)->select();
        $this->assign("file",$download1);
		$introduction = M("Introduction")->field("`id`,`status`,`type`")->select();
		    	foreach ($introduction as $k => $v) {
		            if ($v['status'] == 1 && $v['type'] == 0) {
		            	$rel3[] = M("Introduction")->field("`id`,`content`")->find($v['id']);
		        	}    
		        }
		
		$this->assign("introduction",$rel3);

        
    	$this->display();
    }

	public function download(){
		if($_SESSION["uid"]==NULL)
		{
			$this->error("下载失败,您还没有登录",U("Member/login"));
		}
		$uploadpath='./Public/Uploads/';
        $id=$_GET['id'];
        if($id=='')
        {
           $this->error("下载失败");
        }
        $file=M("Download")->where("id='$id'")->select();
        if($file==false)
        {
            $this->error("下载失败");
        }
        $savename=$file[0]['filename'];
        $showname=$file[0]['title'];
        $filename=$uploadpath.$savename;
        import('ORG.Net.Http');
        Http::download($filename,$showname);
	}

    public function showScience(){
    	$M = M("Science");
    	if (IS_GET) {
    		$info = $M->where("id=" . (int) $_GET['id'])->find();
            if ($info['id'] == '') {
                $this->error("�����ڸü�¼");
            }
            $news=M("News")->select();
            $this->assign("news", $news);
            $this->assign("info", $info);
            $this->display();
    	}
    }

}