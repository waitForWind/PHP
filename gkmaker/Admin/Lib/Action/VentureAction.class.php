<?php

class VentureAction extends CommonAction {

    public function index() {
        $M = M("Venture");
        $count = $M->count();
        import("ORG.Util.Page");       //载入分页类
        $page = new Page($count, 20);
        $showPage = $page->show();
        $this->assign("page", $showPage);
        $this->assign("list", D("Venture")->listVenture($page->firstRow, $page->listRows));
        $this->display();
    }

    public function scategory() {
        if (IS_POST) {
            echo json_encode(D("Venture")->scategory());
        } else {
            $this->assign("list", D("Venture")->scategory());
            $this->display();
        }
    }

    public function add() {
        if (IS_POST) {
            $this->checkToken();
            echo json_encode(D("Venture")->addVenture());
        } else {
            $this->assign("list", D("Venture")->scategory());
            $this->display();
        }
    }
	
    public function checkVentureTitle() {
        $M = M("Venture");
        $where = "title='" . $this->_get('title') . "'";
        if (!empty($_GET['id'])) {
            $where.=" And id !=" . (int) $_GET['id'];
        }
        if ($M->where($where)->count() > 0) {
            echo json_encode(array("status" => 0, "info" => "NO"));
        } else {
            echo json_encode(array("status" => 1, "info" => "YES"));
        }
    }

    public function edit() {
        $M = M("Venture");
        if (IS_POST) {
            $this->checkToken();
            echo json_encode(D("Venture")->edit());
        } else {
            $info = $M->where("id=" . (int) $_GET['id'])->find();
            if ($info['id'] == '') {
                $this->error("NO");
            }
            $this->assign("info", $info);
            $this->assign("list", D("Venture")->scategory());
            $this->display("add");
        }
    }

    public function del() {
        if (M("Venture")->where("id=" . (int) $_GET['id'])->delete()) {
            $this->success("YES");
        } else {
            $this->error("NO");
        }
    }

	public function download() {
		$M = M("Download");
		$download = M("Download")->field("`id`,`type`")->select();
		foreach ($download as $k => $v) {
            if ($v['type'] == 1) {
            	$rel[] = M("Download")->field("`id`,`content`,`status`,`publish`")->find($v['id']);
        	}    
        }
        $count = $M->count();
        import("ORG.Util.Page");       //载入分页类
        $page = new Page($count, 20);
        $showPage = $page->show();
        $this->assign("page", $showPage);
        $this->assign("list", $rel);
        $this->display();
	}
	
	public function addDownload() {
        if (IS_POST) {
            $this->checkToken();
            echo json_encode(D("Venture")->addDownload());
        } else {
            $this->assign("list", D("Venture")->scategory());
            $this->display();
        }
    }

	public function editDownload() {
        $M = M("Download");
        if (IS_POST) {
            echo json_encode(D("Venture")->editDownload());
        } else {
            $info = $M->where("id=" . (int) $_GET['id'])->find();
            if ($info['id'] == '') {
                $this->error("NO");
            }
            $this->assign("info", $info);
            $this->display("addDownload");
        }
    }

	public function delDownload() {
        if (M("Download")->where("id=" . (int) $_GET['id'])->delete()) {
            $this->success("YES");
        } else {
            $this->error("NO");
        }
    }

	public function putout() {
        $M = M("Venture");
        if (IS_GET) {
            if ($_GET['id'] == '') {
                $this->error("不存在该记录");
            }
            $data = $M->where("id=" . (int) $_GET['id'])->find();
            if ($data["status"] == '0') {
                $data["status"] = '1';
            } else {
                $data["status"] = '0';
            }
            if ($M->save($data)) {
                $this->success("修改成功");
            } else {
                $this->error("修改失败");
            }
        }
    }
	public function putout2() {
        $M = M("Download");
        if (IS_GET) {
            if ($_GET['id'] == '') {
                $this->error("不存在该记录");
            }
            $data = $M->where("id=" . (int) $_GET['id'])->find();
            if ($data["status"] == '0') {
                $data["status"] = '1';
            } else {
                $data["status"] = '0';
            }
            if ($M->save($data)) {
                $this->success("修改成功");
            } else {
                $this->error("修改失败");
            }
        }
    }
	
	public function putout3() {
        $M = M("Introduction");
        if (IS_GET) {
            if ($_GET['id'] == '') {
                $this->error("不存在该记录");
            }
            $data = $M->where("id=" . (int) $_GET['id'])->find();
            if ($data["status"] == '0') {
                $data["status"] = '1';
            } else {
                $data["status"] = '0';
            }
            if ($M->save($data)) {
                $this->success("修改成功");
            } else {
                $this->error("修改失败");
            }
        }
    }
	
	public function introduction() {
		$M = M("Introduction");
		$introduction = M("Introduction")->field("`id`,`type`")->select();
		foreach ($introduction as $k => $v) {
            if ($v['type'] == 1) {
            	$rel[] = M("Introduction")->field("`id`,`content`,`status`")->find($v['id']);
        	}    
        }
        $count = $M->count();
        import("ORG.Util.Page");       //载入分页类
        $page = new Page($count, 20);
        $showPage = $page->show();
        $this->assign("page", $showPage);
        $this->assign("list", $rel);
        
		$this->display();
	}
	public function addIntroduction() {
        if (IS_POST) {
            $M = M("Introduction");
			$data = $_POST['info'];
			if (empty($data['id'])){
				if ($M->add($data)) {
					$this->success('YES','introduction');
					
				} else {
					$this->error("NO");
				}
			} else {
				if ($M->save($data)) {
					$this->success('YES','introduction');
				} else {
					$this->error("NO");
				}
			}
        } else {
			if( !empty($_GET['id']) ){
                $this->assign("info",M("Introduction")->where("id=".$_GET['id'])->find());
            }
            
            $this->display();
        }
    }

	public function delIntroduction() {
        if (M("Introduction")->where("id=" . (int) $_GET['id'])->delete()) {
            $this->success("YES");
        } else {
            $this->error("NO");
        }
    }
}