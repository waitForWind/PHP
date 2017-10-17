<?php

class MemberModel extends Model{
	
	public function listMember($firstRow = 0, $listRows = 10) {

		$M = M("Member");
		$data = $M->field("`uid`,`sex`,`isvip`,`truename`,`nickname`,`qq`,`phone`,`academy`,`major`")->order("`uid` DESC")->limit("$firstRow , $listRows")->select();//DESC表示倒序显示
		
		//$data = $M->select();//DESC表示倒序显示
		// foreach ($data as $v){
			
		// 	$v['verify_status'] = $v['verify_status'] == '0'? "未验证":"已验证";
		// 	$list[] = $v;
		// }
		return $data;
	}
	
	public function add(){
		
		$M = M("Member");
		$data = $_POST['memb'];  //---------------？
		//过滤帐号字符
		
		$data['nickname'] = remove_xss(trim($data['nickname']));//remove_xss防范XSS跨站攻击 trim() 函数从字符串的两端删除空白字符和其他预定义字符。
		
		if($data['nickname'] == ''){
			return array('status' => 2, 'info' => "帐号不能为空");
		}else if($M->where("nickname =".$data['nickname'])->count() > 0 ) {
			return array('status' => 2, 'info' => "该帐号已存在");
		}
		
		if($data['pwd'] == ''){
			$data['pwd'] = encrypt("123456");
		}else {
			$data['pwd'] = encrypt($data['pwd']);
		}
		
		if (!empty($data['email']) && !$M->check($data['email'],'email')) {
			return array('status' => 2, 'info' => "你输入的邮箱地址格式不正确");
		}
		
		$data['reg_ip'] = get_client_ip();
		
		$data['reg_date'] = time();
		
		if($M->add($data)){
			return array('status' => 1, 'info' => "添加成功", 'url' => U('Member/index'));
		}else{
			return array('status' => 0, 'info' => "添加失败，亲刷新页面尝试操作");
		}
		
	}
	
	public function edit() {
		$M = M("Member");
		$data = $_POST['memb'];
	 	if(empty($data['pwd'])){
			unset($data['pwd']);
		}else{
			$data['pwd'] = encrypt($data['pwd']);
		}
		$flag = $M->save($data);
		if (($M->save($data)) !== false) {
			return array('status' => 1, 'info' => "已经更新", 'url' => U('Member/index'));
		
		} else {
			return array('status' => 0, 'info' => "更新失败，请刷新页面尝试操作");
			
		}
	}
	
	public function searchMember($keyword, $kind, $firstRow = 0, $listRows = 20) {
		$M = M("Member");
		if($kind == '1'){
			$data = $M->where("nickname like '%".$keyword."%'")->field("`uid`,`sex`,`isvip`,`truename`,`nickname`,`qq`,`phone`,`academy`,`major`")->order("`uid` DESC")->limit("$firstRow , $listRows")->select();
		}
		if($kind == '2'){
			$data = $M->where("truename like '%".$keyword."%'")->field("`uid`,`sex`,`isvip`,`truename`,`nickname`,`qq`,`phone`,`academy`,`major`")->order("`uid` DESC")->limit("$firstRow , $listRows")->select();				
		}
	
		return $data;
	}
	
}
?>