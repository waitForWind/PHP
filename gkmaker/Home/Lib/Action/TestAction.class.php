<?php
/**
* 联系测试用例
*/
class TestAction extends Action
{
	public function index(){

		$TestGradeList = M("Test_grade")->select();
		$TestAcademyList = M("Test_academy")->select();
		$this->assign('academyList',$TestAcademyList);
		$this->assign('gradeList',$TestGradeList);

		$this->display();
	} 
}