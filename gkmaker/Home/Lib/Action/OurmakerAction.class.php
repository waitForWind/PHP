<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 14-8-24
 * Time: 下午1:04
 */
class OurmakerAction extends Action {
public function index() {

    $ourmaker=M("Ourmaker")->select();
    $this->assign("info",$ourmaker);


    $this->display();
}
public function introduce()
{
    $ourmaker=M("Ourmaker")->select();
    $this->assign("maker",$ourmaker);
    $this->display();

}


}
