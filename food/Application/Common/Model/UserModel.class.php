<?php 
namespace Common\Model;
use Think\Model;

class UserModel extends Model{
	protected $_validate = array(     
		array('user','require','验证码必须！'),    
	);
}
