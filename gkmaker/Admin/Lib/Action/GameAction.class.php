<?php

class GameAction extends CommonAction {

    public function index() {
        $M = M("Game");
        $count = $M->count();
        import("ORG.Util.Page");     
        $page = new Page($count, 20);
        $showPage = $page->show();
        $this->assign("page", $showPage);
        $this->assign("list", D("Game")->listGame($page->firstRow, $page->listRows));
        $this->display();
    }

    

    public function add() {
        if (IS_POST) {
           // $this->checkToken();
            echo json_encode(D("Game")->addGame());
			
        } else {
		
            $this->display();
        }
    }


    public function edit() {
        $M = M("Game");
        if (IS_POST) {
            $this->checkToken();
            echo json_encode(D("Game")->edit());
        } else {
            $info = $M->where("id=" . (int) $_GET['id'])->find();
            if ($info['id'] == '') {
                 $this->error("操作失败！");
            }
            $this->assign("info", $info);
           
            $this->display("add");
        }
    }
     public function status(){

        $M = M("Game");
        $temp['id'] = (int)$_GET['id'];
        $data = $M->where($temp)->select();
        $data[0]['update_time'] = time();
        if ($data[0]['cid'] == 1) {
            $data[0]['cid'] = 0;
        }else{
        $data[0]['cid'] = 1;
        }
        if ($M->save($data[0])) {
        $this->success("修改成功");
      }else{
        $this->error("修改失败");
      }
    }

    public function del() {
        if (M("Game")->where("id=" . (int) $_GET['id'])->delete()) {
            $this->success("操作成功！");
//            echo json_encode(array("status"=>1,"info"=>""));
        } else {
            $this->error("操作失败！");
        }
    }

}