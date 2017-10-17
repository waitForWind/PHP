<?php
class VentureAction extends Action {
    
    public function index(){
    	$venture = M("Venture")->field("`id`,`status`")->select();
    	foreach ($venture as $k => $v) {
            if ($v['status'] == 1) {
            	$rel[] = M("Venture")->field("`id`,`title`,`status`,`published`")->find($v['id']);
        	}    
        }

        $this->assign("Venture",$rel);

		$download = M("Download")->field("`id`,`status`,`type`")->select();
    	foreach ($download as $k => $v) {
            if ($v['status'] == 1 && $v['type'] == 1) {
            	$rel2[] = M("Download")->field("`id`,`content`,`publish`")->find($v['id']);
        	}    
        }

        $this->assign("download",$rel2);

		$introduction = M("Introduction")->field("`id`,`status`,`type`")->select();
		    	foreach ($introduction as $k => $v) {
		            if ($v['status'] == 1 && $v['type'] == 1) {
		            	$rel3[] = M("Introduction")->field("`id`,`content`")->find($v['id']);
		        	}    
		        }
		
		$this->assign("introduction",$rel3);

        
    	$this->display();
    }

    public function showVenture(){
    	$M = M("Venture");
    	if (IS_GET) {
    		$info = $M->where("id=" . (int) $_GET['id'])->find();
            if ($info['id'] == '') {
                $this->error("不存在该记录");
            }
            $this->assign("info", $info);
            $this->display();
    	}
    }

}