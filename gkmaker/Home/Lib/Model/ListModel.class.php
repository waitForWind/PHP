<?php 


/**
* 
*/
class ListModel extends Action{

	public function listTeacher($firstRow = 0, $listRows = 20){
		$M = M("Teacher");
        $list = $M->field("`id`,`cid`,`title`,`update_time`,`status`")->order("`update_time` DESC")->limit("$firstRow , $listRows")->where("status=1")->select();
        //var_dump($list);exit();
        return $list;

	}

	public function listNews($firstRow = 0, $listRows = 20){
		$M = M("News");
        $list = $M->field("`id`,`cid`,`title`,`update_time`,`status`")->order("`update_time` DESC")->limit("$firstRow , $listRows")->where("status=1")->select();
        //var_dump($list);exit();
        return $list;

	}
	
}









?>