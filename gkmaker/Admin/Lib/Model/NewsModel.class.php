<?php

class NewsModel extends Model {

    public function listNews($firstRow = 0, $listRows = 20) {
        $M = M("News");
        $list = $M->field("`id`,`title`,`filename`,`path`,`status`,`published`,`cid`,`aid`")->order("`published` DESC")->limit("$firstRow , $listRows")->select();
        $statusArr = array("审核状态", "已发布状态");
        $aidArr = M("Admin")->field("`aid`,`email`,`nickname`")->select();
        foreach ($aidArr as $k => $v) {
            $aids[$v['aid']] = $v;
        }
        unset($aidArr);
        $cidArr = M("Category")->field("`cid`,`name`")->select();
        foreach ($cidArr as $k => $v) {
            $cids[$v['cid']] = $v;
        }
        unset($cidArr);
        foreach ($list as $k => $v) {
            $list[$k]['aidName'] =$aids[$v['aid']]['nickname'] == '' ? $aids[$v['aid']]['email'] : $aids[$v['aid']]['nickname'];
            $list[$k]['status'] = $statusArr[$v['status']];
            $list[$k]['cidName'] = $cids[$v['cid']]['name'];
        }
        return $list;
    }

    public function category() {
        if (IS_POST) {
            $act = $_POST[act];
            $data = $_POST['data'];
            $data['name'] = addslashes($data['name']);
            $M = M("Category");
            if ($act == "add") { //添加分类
                unset($data[cid]);
                if ($M->where($data)->count() == 0) {
                    return ($M->add($data)) ? array('status' => 1, 'info' => '分类 ' . $data['name'] . ' 已经成功添加到系统中', 'url' => U('News/category', array('time' => time()))) : array('status' => 0, 'info' => '分类 ' . $data['name'] . ' 添加失败');
                } else {
                    return array('status' => 0, 'info' => '系统中已经存在分类' . $data['name']);
                }
            } else if ($act == "edit") { //修改分类
                if (empty($data['name'])) {
                    unset($data['name']);
                }
                if ($data['pid'] == $data['cid']) {
                    unset($data['pid']);
                }
                return ($M->save($data)) ? array('status' => 1, 'info' => '分类 ' . $data['name'] . ' 已经成功更新', 'url' => U('News/category', array('time' => time()))) : array('status' => 0, 'info' => '分类 ' . $data['name'] . ' 更新失败');
            } else if ($act == "del") { //删除分类
                unset($data['pid'], $data['name']);
                return ($M->where($data)->delete()) ? array('status' => 1, 'info' => '分类 ' . $data['name'] . ' 已经成功删除', 'url' => U('News/category', array('time' => time()))) : array('status' => 0, 'info' => '分类 ' . $data['name'] . ' 删除失败');
            }
        } else {
            import("Category");
            $cat = new Category('Category', array('cid', 'pid', 'name', 'fullname'));
            return $cat->getList();               //获取分类结构
        }
    }

      

    public function edit() {
       
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
        $old_s_thumb_path = "__PUBLIC__/Uploads/s_".$filename;
        $old_m_thumb_path = "__PUBLIC__/Uploads/m_".$filename;
        unlink($old_s_thumb_path);
        unlink($old_m_thumb_path);
        //更新记录
        $data['filename'] = $info[0]['savename'];
        $data['path'] = $info[0]['savepath'] . $info[0]['savename'];
        }
 
        $data['update_time'] = time();
        if ($M->save($data)) {
            return array('status' => 1, 'info' => "已经更新", 'url' => U('News/index'));
        } else {
            return array('status' => 0, 'info' => "更新失败，请刷新页面尝试操作");
        }
    }

}

?>
