<?php

class RelannounceAction extends CommonAction {

    public function index() {
        $M = M("Relannounce");
        $count = $M->count();
        import("ORG.Util.Page");       //载入分页类
        $page = new Page($count, 20);
        $showPage = $page->show();
        $this->assign("page", $showPage);
        $this->assign("list", D("Relannounce")->listRelannounce($page->firstRow, $page->listRows));
        $this->display();
    }

    
    public function add() {
        if (IS_POST) {
            $this->checkToken();
            echo json_encode(D("Relannounce")->addRelannounce());
      
        } else {
            $this->display();
        }
    }

    public function putout() {
        $M = M("Relannounce");
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


    public function edit() {
        $M = M("Relannounce");
        if (IS_POST) {
            $this->checkToken();
            echo json_encode(D("Relannounce")->editRelannounce());
        } else {
            $info = $M->where("id=" . (int) $_GET['id'])->find();
            if ($info['id'] == '') {
                $this->error("不存在该记录");
            }
            $this->assign("info", $info);
            $this->display("add");
        }
    }

    public function del() {
        if (M("Relannounce")->where("id=" . (int) $_GET['id'])->delete()) {
            $this->success("成功删除");
        } else {
            $this->error("删除失败，可能是不存在该ID的记录");
        }
    }

}