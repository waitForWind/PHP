<?php

class RelannounceModel extends Model {

    public function listRelannounce($firstRow = 0, $listRows = 20) {
        $M = M("Relannounce");
        $list = $M->limit("$firstRow , $listRows")->select();
        $aidArr = M("Admin")->field("`aid`,`email`,`nickname`")->select();
        foreach ($aidArr as $k => $v) {
            $aids[$v['aid']] = $v;
        }
        foreach ($list as $k => $v) {
            $list[$k]['aidName'] =$aids[$v['aid']]['nickname'] == '' ? $aids[$v['aid']]['email'] : $aids[$v['aid']]['nickname'];
        }
        return $list;
    }

    public function addRelannounce() {
        $M = M("Relannounce");
        $data = $_POST['info'];
        $data['time'] = time();
        $data['updata_time'] = time();
        $data['aid'] = $_SESSION['my_info']['aid'];

        if ($M->add($data)) {
            return array('status' => 1, 'info' => "success", 'url' => U('Relannounce/index'));
        } else {
            return array('status' => 0, 'info' => "faile");
        }
    }

    public function editRelannounce() {
        $M = M("Relannounce");
        $data = $_POST['info'];
        $data['updata_time'] = time();
        if ($M->save($data)) {
            return array('status' => 1, 'info' => "已经更新", 'url' => U('Relannounce/index'));
        } else {
            return array('status' => 0, 'info' => "更新失败，请刷新页面尝试操作");
        }
    }

   

}

?>
