<?php

class VentureModel extends Model {

    public function listVenture($firstRow = 0, $listRows = 20) {
        $M = M("Venture");
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

    public function scategory() {
        if (IS_POST) {
            $act = $_POST[act];
            $data = $_POST['data'];
            $data['name'] = addslashes($data['name']);
            $M = M("Scategory");
            if ($act == "add") { //添加分类
                unset($data[cid]);
                if ($M->where($data)->count() == 0) {
                    return ($M->add($data)) ? array('status' => 1, 'info' => 'Sort' . $data['name'] . 'YES', 'url' => U('Venture/scategory', array('time' => time()))) : array('status' => 0, 'info' => 'Sort' . $data['name'] . 'NO');
                } else {
                    return array('status' => 0, 'info' => 'Isexist' . $data['name']);
                }
            } else if ($act == "edit") { //修改分类
                if (empty($data['name'])) {
                    unset($data['name']);
                }
                if ($data['pid'] == $data['cid']) {
                    unset($data['pid']);
                }
                return ($M->save($data)) ? array('status' => 1, 'info' => 'Sort' . $data['name'] . 'Success', 'url' => U('Venture/scategory', array('time' => time()))) : array('status' => 0, 'info' => 'Sort' . $data['name'] . 'faile');
            } else if ($act == "del") { //删除分类
                unset($data['pid'], $data['name']);
                return ($M->where($data)->delete()) ? array('status' => 1, 'info' => 'Sort' . $data['name'] . ' Success', 'url' => U('Venture/scategory', array('time' => time()))) : array('status' => 0, 'info' => 'Sort ' . $data['name'] . 'faile');
            }
        } else {
            import("Scategory");
            $cat = new Category('Scategory', array('cid', 'pid', 'name', 'fullname'));
            return $cat->getList();               //获取分类结构
        }
    }

    public function addVenture() {
        $M = M("Venture");
        $data = $_POST['info'];
        $data['published'] = time();
        $data['aid'] = $_SESSION['my_info']['aid'];
        if (empty($data['summary'])) {
            $data['summary'] = cutStr($data['content'], 200);
        }
        if ($M->add($data)) {
            return array('status' => 1, 'info' => "Success", 'url' => U('Venture/index'));
        } else {
            return array('status' => 0, 'info' => "faile");
        }
    }

    public function edit() {
        $M = M("Venture");
        $data = $_POST['info'];
        $data['update_time'] = time();
        if ($M->save($data)) {
            return array('status' => 1, 'info' => "Success", 'url' => U('Venture/index'));
        } else {
            return array('status' => 0, 'info' => "faile");
        }
    }
	
	public function addDownload() {
        $M = M("Download");
        $data = $_POST['info'];
        $data['publish'] = time();
        if ($M->add($data)) {
            return array('status' => 1, 'info' => "Success", 'url' => U('Venture/download'));
        } else {
            return array('status' => 0, 'info' => "faile");
        }
    }

	public function editDownload() {
        $M = M("Download");
        $data = $_POST['info'];
        $data['publish'] = time();
        if ($M->save($data)) {
            return array('status' => 1, 'info' => "Success", 'url' => U('Venture/download'));
        } else {
            return array('status' => 0, 'info' => "faile");
        }
    }
}

?>
