<?php

class NewsAction extends CommonAction {

    public function index() {
          
        $M = M("News");
        $count = $M->count();
        import("ORG.Util.Page");       
        $page = new Page($count, 20);
        $showPage = $page->show();
        $this->assign("page", $showPage);
        $this->assign("list", D("News")->listNews($page->firstRow, $page->listRows));
        $this->display();
    }

    public function category() {
        if (IS_POST) {
            echo json_encode(D("News")->category());
        } else {
            $this->assign("list", D("News")->category());
            $this->display();
        }
    }

     public function status(){

        $M = M("News");
        $temp['id'] = (int)$_GET['id'];
        $data = $M->where($temp)->select();
        $data[0]['update_time'] = time();
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


   
    public function add() {
       if(IS_POST){
        if(empty($_FILES['file']['name']))
        {
            $this->error("你必须上传文件！");
        } else {
             $this->up();
            
        }

        }else{

        $this->assign("list", D("News")->category());
        $this->display();

    }
       
    }

    private function up(){

        import('ORG.Net.UploadFile');
        $upload = new UploadFile();
        $upload->maxSize  = 26214400;
        $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg','ico');
        $upload->savePath =  './Public/Uploads/';
        $upload->allowTypes=array('image/png','image/jpg','image/jpeg','image/gif');//检测mime类型  
        $upload->thumb = true;
        $upload->thumbMaxWidth = '120,706';
        $upload->thumbMaxHeight = '80,337';
        $upload->thumbPrefix = 's_,m_';   //缩略图前缀
        $upload->thumbPath = ''; //留空表示存在在savePath
        $upload->thumbRemoveOrigin=true;//如果生成缩略图，是否删除原图

        if(!$upload->upload()) {
            $this->error($upload->getErrorMsg());
        } else {
            $info =  $upload->getUploadFileInfo();
        }
        
       
        $data = $_POST['info'];
        $data['filename'] = $info[0]['savename'];
        $data['path'] = $info[0]['savepath'] . $info[0]['savename'];
        $data['published'] = time();
        $data['aid'] = $_SESSION['my_info']['aid'];
        if (empty($data['summary'])) {
             $data['summary'] = cutStr($data['content'], 200);
         }
        $M = M("News");
        if($M->add($data))
        {
            $this->success('添加成功',U("News/index"));
        } else {
            $this->error('添加失败');
        }
   }




    public function checkNewsTitle() {
        $M = M("News");
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
        $M = M("News");
        if (IS_POST) {
            $this->checkToken();
        // echo json_encode(D("News")->edit());
         $this->edit_end();

        } else {
            $info = $M->where("id=" . (int) $_GET['id'])->find();
            if ($info['id'] == '') {
                $this->error("不存在该记录");
            }
            $this->assign("info", $info);
            $this->assign("list", D("News")->category());
            $this->display("add");
        }
    }
     
      public function edit_end() {
      
        $M = M("News");
        $data = $_POST['info'];
        if(!empty($_FILES['file']['name'])){
        import('ORG.Net.UploadFile');
        $upload = new UploadFile();
        $upload->maxSize  = 3145728 ;
        $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg','ico');
        $upload->savePath =  './Public/Uploads/';
        $upload->allowTypes=array('image/png','image/jpg','image/jpeg','image/gif');//检测mime类型  
        $upload->thumb = true;
        $upload->thumbMaxWidth = '300,500';
        $upload->thumbMaxHeight = '200,400';
        $upload->thumbPrefix = 's_,m_';   //缩略图前缀
        $upload->thumbPath = ''; //留空表示存在在savePath
        $upload->thumbRemoveOrigin=true;//如果生成缩略图，是否删除原图

        if(!$upload->upload()) {
            $this->error($upload->getErrorMsg());
         } else {
            $info =  $upload->getUploadFileInfo();
         }

        //根据原有记录删除图片 
        $filename = $M->where("id=" . (int) $_GET['id'])->getField("filename");     
        $old_s_thumb_path = "./Public/Uploads/s_".$filename;
        $old_m_thumb_path = "./Public/Uploads/m_".$filename;
        unlink($old_s_thumb_path);
        unlink($old_m_thumb_path);
        //更新记录
        $data['filename'] = $info[0]['savename'];
        $data['path'] = $info[0]['savepath'] . $info[0]['savename'];
        }
 
        $data['update_time'] = time();
        if ($M->save($data)) {
           $this->success('更新成功',U("News/index"));
        } else {
           $this->error('更新记录失败');
        }
    }





     public function del(){
        $oldphotoModel = M("News");
        $filename = $oldphotoModel->where("id=" . (int) $_GET['id'])->getField("filename");
        $old_s_thumb_path = "./Public/Uploads/s_".$filename;
        $old_m_thumb_path = "./Public/Uploads/m_".$filename;
        unlink(  $old_s_thumb_path);
        unlink(  $old_m_thumb_path);
        if (M("News")->where("id=" . (int) $_GET['id'])->delete()) {
            $this->success("成功删除");
        } else {
            $this->error("删除失败，可能是不存在该ID的记录");
        }
    }

     public function preview(){
        $filename=$_GET['filename'];
        $this->assign("filename",$filename);
        $this->display();
    }

}