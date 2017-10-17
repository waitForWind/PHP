<?php

class MemberAction extends CommonAction {

    public function index() {
        
    	$M = M("Member");
    	$count = $M->count();
    	import("ORG.Util.Page");       //载入分页类
    	$page = new Page($count, 10);
    	$showPage = $page->show();
    	$this->assign("page", $showPage);
        $this->assign("list", D("Member")->listMember($page->firstRow, $page->listRows));
        $this->display();
    }

    public function add(){
    	if(IS_POST){
    		$this->checkToken();                        //表单验证
    		echo json_encode(D("Member")->add());
    	}else{
    		$this->display();
    	}
    }
    
    public function edit(){
    	$M = M("Member");
    	if (IS_POST) {
    		$this->checkToken();
    		echo json_encode(D("Member")->edit());
    	} else {   		
    		$info = $M->where("uid=" . (int) $_GET['uid'])->find();
    		if ($info['uid'] == '') {
    			$this->error("不存在该记录");
    		}
    		$this->assign("info", $info);
    		$this->display();
    	}
    
    }
     
    public function delete(){
	    if (M("Member")->where("uid=".(int) $_GET['uid'])->delete()) {
	   		$this->success("成功删除");
	   	//	echo json_encode(array('isvip' => 1, 'info' => "成功删除",'url' => U('Member/index')));
	   	} else {
	    	//	echo json_encode(array('isvip' => 0, 'info' => "删除失败，可能是不存在该ID的记录"));
	   		$this->error("删除失败，可能是不存在该ID的记录");
	   	}
    }
    
	public function search() {
    if (IS_POST) {
        $this->checkToken ();
        $M = M ( "Member" );
        $count = $M->count ();
        import ( "ORG.Util.Page" ); // 载入分页类
        $page = new Page ( $count, 20 );
        $showPage = $page->show ();
        $this->assign ( "page", $showPage );
        $this->assign ( "list", D("Member")->searchMember ($_POST ['keyword'], $_POST ['kind'], $page->firstRow, $page->listRows));
        $this->display ();
    } else {
        $this->display ( "index" );
    }
}

 public function isvip(){

        $M = M("Member");
        $temp['uid'] = (int)$_GET['id'];
        $data = $M->where($temp)->select();
      
        if ($data[0]['isvip'] == 1) {
            $data[0]['isvip'] = 0;
        }else{
        $data[0]['isvip'] = 1;
        }
        if ($M->save($data[0])) {
        $this->success("修改成功");
      }else{
        $this->error("修改失败");
      }
    }
}