<?php
/**
*作用：用于热门赛事->最新报名
*
*@author <xianJieHao>
*@version 
*create Date March 29,2016 
*
*/
class HomeGameViewModel extends ViewModel{
    public $viewFields = array(
        'home_game'=>array('relname','academy','grade'),
        'grade'=>array('grade','_on'=>'home_game.grade = grade.id'),
        'academy'=>array('academy','_on'=>'home_game.academy=academy.id'),
    );
}
?>