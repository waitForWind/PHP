<?php

class ScienceModel extends Model {

    public function listScience($firstRow = 0, $listRows = 20) {
        $M = M("Science");
        $list = $M->field("`id`,`title`,`status`,`published`,`cid`,`aid`")->order("`published` DESC")->limit("$firstRow , $listRows")->select();
        
        $aidArr = M("Admin")->field("`aid`,`email`,`nickname`")->select();
        foreach ($aidArr as $k => $v) {
            $aids[$v['aid']] = $v;
        }
        unset($aidArr);
        $cidArr = M("Scategory")->field("`cid`,`name`")->select();
        foreach ($cidArr as $k => $v) {
            $cids[$v['cid']] = $v;
        }
        unset($cidArr);
        foreach ($list as $k => $v) {
            $list[$k]['aidName'] =$aids[$v['aid']]['nickname'] == '' ? $aids[$v['aid']]['email'] : $aids[$v['aid']]['nickname'];
            $list[$k]['cidName'] = $cids[$v['cid']]['name'];
        }
        return $list;
    }

    
    public function addScience() {
        $M = M("Science");
        $data = $_POST['info'];
        $data['published'] = time();
        $data['aid'] = $_SESSION['my_info']['aid'];
        if (empty($data['summary'])) {
            $data['summary'] = cutStr($data['content'], 200);
        }
        if ($M->add($data)) {
            return array('status' => 1, 'info' => "Success", 'url' => U('Science/news'));
        } else {
            return array('status' => 0, 'info' => "faile");
        }
    }

    public function edit() {
        $M = M("Science");
        $data = $_POST['info'];
        $data['update_time'] = time();
        if ($M->save($data)) {
            return array('status' => 1, 'info' => "Success", 'url' => U('Science/news'));
        } else {
            return array('status' => 0, 'info' => "faile");
        }
    }
	
	

	public function editDownload() {
        $M = M("Download");
        $data = $_POST['info'];
        $data['time'] = time();
        if ($M->save($data)) {
            return array('status' => 1, 'info' => "Success", 'url' => U('Science/download'));
        } else {
            return array('status' => 0, 'info' => "faile");
        }
    }
	

}

?>
