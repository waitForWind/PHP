<?php

class GameModel extends Model {

    public function listGame($firstRow = 0, $listRows = 20) {
        $M = M("Game");
        $list = $M->select();
        return $list;
		
    }

    public function addGame() {
	    
        $M = M("Game");
        $data = $_POST['info'];
        $data['update_time'] = time();
        
        if (empty($data['summary'])) {
            $data['summary'] = cutStr($data['content'], 200);
        }
		
        if ($M->add($data)) {
		    
            return array('status' => 1, 'info' => "success", 'url' => U('Game/index'));
        } else {
		    
            return array('status' => 0, 'info' => "error");
        }
    }

    public function edit() {
        $M = M("Game");
        $data = $_POST['info'];
		
        $data['update_time'] = time();
        if ($M->save($data)) {
		   
            return array('status' => 1, 'info' => "success", 'url' => U('Game/index'));
        } else {
            return array('status' => 0, 'info' => "error");
        }
    }

}

?>
