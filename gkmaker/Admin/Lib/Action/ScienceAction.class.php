<?php

class ScienceAction extends CommonAction {
	
	/*���������ļ�(file)
		functions:
			index:��ʾ
			dowfile:�����ļ�
			delfile:ɾ���ļ�
			status:����
	*/
	public function index() {
        $file=M("File")->select();
        $this->assign("list", $file);
        $this->display();
    }
	
	public function dowfile()//文件下载
    {
        $uploadpath='./Public/Uploads/';
        $id=$_GET['id'];
        if($id=='')
        {
           $this->error("下载失败");
        }
        $file=M("Download")->where("id='$id'")->select();
        if($file==false)
        {
            $this->error("下载失败");
        }
        $savename=$file[0]['filename'];
        $showname=$file[0]['title'];
        $filename=$uploadpath.$savename;
        import('ORG.Net.Http');
        Http::download($filename,$showname);
    }
	
	public function delfile()
    {
        if (M("File")->where("id=" . (int) $_GET['id'])->delete()) {
            $this->success("YES");
        } else {
            $this->error("NO");
        }

    }
    
	public function status()
    {
        $M = M("File");
        $temp['id'] = (int)$_GET['id'];
        $data = $M->where($temp)->select();
        if ($data[0]['status'] == 1) {
            $data[0]['status'] = 0;
        }else{
            $data[0]['status'] = 1;
        }
        if ($M->save($data[0])) {
			$this->success("成功");
        }else{
            $this->error("失败");
        }
    }
	/*2014-09-12 15:55:05
		ʵ����ӽ�ʦ
	*/


public function advice()//教师意见
{
    $id=$_GET['id'];
    $sugess=M("Advice")->where("pid='$id'")->select();
    $this->assign("list", $sugess);

    $this->display();

}
    public function editTeacher()
    {
        if(IS_POST)
        {
            $data=$_POST['info'];
             $info=$data;
            $id=$data['uid'];
            $chy=M("Major")->where("uid='$id'")->select();
            $info['id']=$chy[0]['id'];
            $sa=M("Major")->save($info);
            if($sa)
            {
                $this->success("编辑成功",U("Science/index"));

            }
            else
            {
                $this->error("编辑失败");

            }


        }
        else{
        $id=$_GET['id'];
        $major=M("Major")->where("uid='$id'")->select();

        $i=1;
        if($major[0]['teacher1']!="")
        {
            $data[$i]=$major[0]['teacher1'];
            $i++;
        }
        if($major[0]['teacher2']!="")
        {
            $data[$i]=$major[0]['teacher2'];
            $i++;
        }
        if($major[0]['teacher3']!="")
        {
            $data[$i]=$major[0]['teacher3'];
            $i++;
        }
        if($major[0]['teacher4']!="")
        {
            $data[$i]=$major[0]['teacher4'];
            $i++;
        }
        if($major[0]['teacher5']!="")
        {
            $data[$i]=$major[0]['teacher5'];
            $i++;
        }
		
        $this->assign("num", $i);
        $this->assign("info", $data);
        $this->assign("id", $id);
        $rel = M("Member")->where("isteacher=1")->select();
        $this->assign("info1", $rel);
        $this->display();
        }

    }
	/*2014-09-18 21:52:59
		实现查看老师建议

	*/
	public function checkAdvice() {
		$M = M("Advice");
		$id=$_GET['id'];
        $advice=M("Advice")->where("id='$id'")->select();
        
        $pid = $advice[0]['pid']; //立项ID
        $file=M("file")->where("id='$pid'")->select();

        $this->assign("info",$advice);
        $this->assign("pid",$file);//传立项的名字
		$this->display();
	}
	public function addTeacher() {
        if (IS_POST) {
            $M = M("Major");
			$data = $_POST['info'];
			$data['time'] = time();
            $data['status']=1;
			foreach ($data as $k => $v) {
				for($i=1; $i<=count($data); $i++) {
					if($k=="teacher".$i){
                       $member=M("Member")->where("email='$v'")->select();

                        $rel['uid']=$member[0]['uid'];
						$rel['name']=$v;
						$rel['pid']=$data['uid'];
						M("Advice")->add($rel);
					}
				}	
			}
			if ($M->add($data)) {
				
				$this->success('YES','index');
			} else {
				$this->error("NO");
			}	
        }
        else {

            $id=$_GET['id'];
            $chy=M("Major")->where("uid='$id'")->select();
            if($chy)
            {
                $this->error("你已添加过教师了,若要修改请点击编辑教师");
            }

			$this->assign("inf", M("File")->where("id=" . (int) $_GET['id'])->find());
			$rel = M("Member")->where("isteacher=1")->select();


			$this->assign("info", $rel);
            $this->display();
        }
    }

    public function news() {
        $M = M("Science");
        $count = $M->count();
        import("ORG.Util.Page");       //�����ҳ��
        $page = new Page($count, 20);
        $showPage = $page->show();
        $this->assign("page", $showPage);
        $this->assign("list", D("Science")->listScience($page->firstRow, $page->listRows));
        $this->display();
    }

    
    public function add() {
        if (IS_POST) {
            echo json_encode(D("Science")->addScience());
        } else {
            $this->display();
        }
    }

    public function edit() {
        $M = M("Science");
        if (IS_POST) {
            echo json_encode(D("Science")->edit());
        } else {
            $info = $M->where("id=" . (int) $_GET['id'])->find();
            if ($info['id'] == '') {
                $this->error("NO");
            }
            $this->assign("info", $info);
            $this->display("add");
        }
    }

    public function del() {
        if (M("Science")->where("id=" . (int) $_GET['id'])->delete()) {
            $this->success("YES");
        } else {
            $this->error("NO");
        }
    }
	
	public function putout() {
        $M = M("Science");
        if (IS_GET) {
            if ($_GET['id'] == '') {
                $this->error("编辑失败");
            }
            $data = $M->where("id=" . (int) $_GET['id'])->find();
            if ($data["status"] == '0') {
                $data["status"] = '1';
            } else {
                $data["status"] = '0';
            }
            if ($M->save($data)) {
                $this->success("编辑成功");
            } else {
                $this->error("编辑失败");
            }
        }
    }

	public function download() {
		$M = M("Download");
		$download = M("Download")->select();
        $count = $M->count();
        import("ORG.Util.Page");
        $page = new Page($count, 20);
        $showPage = $page->show();
        $this->assign("page", $showPage);
        $this->assign("list", $download);
        $this->display();
	}

	public function editDownload() {
        $M = M("Download");
        if (IS_POST) {
            echo json_encode(D("Science")->editDownload());
        } else {
            $info = $M->where("id=" . (int) $_GET['id'])->find();
            if ($info['id'] == '') {
                $this->error("编辑失败");
            }
            $this->assign("info", $info);
            $this->display("addDownload");
        }
    }

	public function delDownload() {
        if (M("Download")->where("id=" . (int) $_GET['id'])->delete()) {
            $this->success("YES");
        } else {
            $this->error("NO");
        }
    }
	
	
	public function putout2() {
        $M = M("Download");
        if (IS_GET) {
            if ($_GET['id'] == '') {
                $this->error("操作失败");
            }
            $data = $M->where("id=" . (int) $_GET['id'])->find();
            if ($data["status"] == '0') {
                $data["status"] = '1';
            } else {
                $data["status"] = '0';
            }
            if ($M->save($data)) {
                $this->success("编辑成功");
            } else {
                $this->error("编辑失败");
            }
        }
    }
	public function addDownload() {	
		$M = M("Download");
		if (IS_POST) {
			if(!empty($_FILES['file']['name'])){
				import('ORG.Net.UploadFile');
				$upload = new UploadFile();
				$upload->maxSize  = 3145728 ;
				$upload->allowExts  = array('doc', 'gif', 'png', 'jpeg','ico','docx','pdf','mp3','mp4','avi','rmvb','txt','html','rar','xls','ppt');
				$upload->savePath =  './Public/Uploads/';
				if(!$upload->upload()) {
					$this->error($upload->getErrorMsg());
				} else {
					$info =  $upload->getUploadFileInfo();
				}
//				$data['avatar'] = $info[0]['savepath'] . $info[0]['savename'];
				$data['filename'] =$info[0]['savename'];
				$data['time']=time();
				$data['title']=$_POST['title'];
				$aaa=M("Download");
				if($aaa->add($data))
				{
					$this->success('添加成功',U("Science/download"));
				} else {
					$this->error('添加失败');
				}
			} 
		} else {
			$this->assign("info", $M->where("id=" . (int) $_GET['id'])->find());
			$this->display();
		}
	}


	public function introduction() {
		$M = M("Introduction");
		$introduction = M("Introduction")->field("`id`,`type`")->select();
		foreach ($introduction as $k => $v) {
            if ($v['type'] == 0) {
            	$rel[] = M("Introduction")->field("`id`,`content`,`status`")->find($v['id']);
        	}    
        }
        $count = $M->count();
        import("ORG.Util.Page");       //�����ҳ��
        $page = new Page($count, 20);
        $showPage = $page->show();
        $this->assign("page", $showPage);
        $this->assign("list", $rel);
        
		$this->display();
	}
	public function addIntroduction() {
        if (IS_POST) {
            $M = M("Introduction");
			$data = $_POST['info'];
			if (empty($data['id'])){
				if ($M->add($data)) {
					$this->success('YES','introduction');
					
				} else {
					$this->error("NO");
				}
			} else {
				if ($M->save($data)) {
					$this->success('YES','introduction');
				} else {
					$this->error("NO");
				}
			}
        } else {
			if( !empty($_GET['id']) ){
                $this->assign("info",M("Introduction")->where("id=".$_GET['id'])->find());
            } 
            $this->display();
        }
    }

	public function delIntroduction() {
        if (M("Introduction")->where("id=" . (int) $_GET['id'])->delete()) {
            $this->success("YES");
        } else {
            $this->error("NO");
        }
    }
	public function putout3() {
        $M = M("Introduction");
        if (IS_GET) {
            if ($_GET['id'] == '') {
                $this->error("编辑失败");
            }
            $data = $M->where("id=" . (int) $_GET['id'])->find();
            if ($data["status"] == '0') {
                $data["status"] = '1';
            } else {
                $data["status"] = '0';
            }
            if ($M->save($data)) {
                $this->success("编辑成功");
            } else {
                $this->error("编辑失败");
            }
        }
    }
}