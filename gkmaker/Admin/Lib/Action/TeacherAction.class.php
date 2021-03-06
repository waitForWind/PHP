<?php

class TeacherAction extends CommonAction {

    public function index() {
//            die(".............");
        $M = M("Teacher");
//        die(".............");
        $count = $M->count();
        import("ORG.Util.Page");       //载入分页类
        $page = new Page($count, 20);
        $showPage = $page->show();
        $this->assign("page", $showPage);
        $this->assign("list", D("Teacher")->listNews($page->firstRow, $page->listRows));
        $this->display();
    }

    public function status(){
        $M = M("Teacher");
        $temp['id'] = (int)$_GET['id'];
        $data = $M->where($temp)->select();
        $data[0]['update_time'] = time();
       // var_dump($data);exit();
        if ($data[0]['status'] == 1) {
            $data[0]['status'] = 0;
        }else{
            $data[0]['status'] = 1;
        }
        if ($M->save($data[0])) {
            $this->success("修改成功");
        }else{
            $this->error("修改失败");
        }
        
    }

    public function category() {
        if (IS_POST) {
            echo json_encode(D("Teacher")->category());
        } else {
            $this->assign("list", D("Teacher")->category());
            $this->display();
        }
    }

    public function add() {
        if (IS_POST) {
            $this->checkToken();
            echo json_encode(D("Teacher")->addNews());
        } else {
            $this->assign("list", D("Teacher")->category());
            $this->display();
        }
    }

    public function checkNewsTitle() {
        $M = M("Teacher");
        $where = "title='" . $this->_get('title') . "'";
        if (!empty($_GET['id'])) {
            $where.=" And id !=" . (int) $_GET['id'];
        }
        if ($M->where($where)->count() > 0) {
            echo json_encode(array("status" => 0, "info" => "已经存在，请修改标题"));
        } else {
            echo json_encode(array("status" => 1, "info" => "可以使用"));
        }
    }

    public function edit() {
        $M = M("Teacher");
        if (IS_POST) {
            $this->checkToken();
            echo json_encode(D("Teacher")->edit());
        } else {
            $info = $M->where("id=" . (int) $_GET['id'])->find();
            if ($info['id'] == '') {
                $this->error("不存在该记录");
            }
            $this->assign("info", $info);
            $this->assign("list", D("Teacher")->category());
            $this->display("add");
        }
    }

    public function del() {
        if (M("Teacher")->where("id=" . (int) $_GET['id'])->delete()) {
            $this->success("成功删除");
//            echo json_encode(array("status"=>1,"info"=>""));
        } else {
            $this->error("删除失败，可能是不存在该ID的记录");
        }
    }

}