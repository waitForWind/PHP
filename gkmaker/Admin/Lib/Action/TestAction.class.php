<?php
/**
 * 用于测试用例
 */

class TestAction extends CommonAction {
  
   public function index() {
     //  $HomeGame = M("Home_game");
      //  $list = $HomeGame->field("`id`,`relname`")->select();
       // $this->assign("list",$list);
        $this->display();
    }

    public function getData() {
 //    $startPage = 1;
	// $pageSize = 6;
	// $query = mysql_query("select uid, poinnername limit $startPage,$pageSize");
	// while($row=mysql_fetch_array($query)){
	// 	 $arr['list'][] = array(
	// 	 	'id' => $row['uid'],
	// 		'relname' => $row['poinnername'],
	// 	 );
	// }
	//print_r($arr);
	//
	$arr['id']=1;
	$arr['name']="xianjiehao";
   
	$this->ajaxReturn ($arr,'JSON');
   // var_dump($arr);
	//exit();
	//echo json_encode($arr);
    }

}