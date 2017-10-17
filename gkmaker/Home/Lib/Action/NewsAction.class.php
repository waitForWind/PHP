<?php
// 本类由系统自动生成，仅供测试用途
class NewsAction extends Action {
    public function Index(){
    	$show = $_GET['show'];
      /*************************名师讲座star******************************/
        if ($show == 'teacher') {
            $list = $this->teacher();
            $vo['title'] = $list[0]['title'];
            $vo['cid'] = $list[0]['cid'];
            $vo['update_time'] = $list[0]['update_time'];
            $vo['look_num'] = $list[0]['look_num'] + 1;
            $vo['content'] = $list[0]['content'];
            $news=M("News")->select();
            $this->assign("news", $news);
            $this->teacher_save();
        	$this->assign("vo", $vo);
        }    


      /*************************科技校园star********************************/
        if ($show == 'new') {
        	$list = $this->news();
            $vo['title'] = $list[0]['title'];
            $vo['cid'] = $list[0]['cid'];
            $vo['update_time'] = $list[0]['update_time'];
            $vo['look_num'] = $list[0]['look_num'] + 1;
            $vo['content'] = $list[0]['content'];
            $news=M("News")->select();
            $this->assign("news", $news);
            $this->news_save();
        	$this->assign("vo", $vo);
        }
              
         $news=M("News")->select();
         $about_news=M("Relannounce")->select();
         $this->assign("news", $news);
         $this->assign("about_news", $about_news);
        $this->assign("email",$_SESSION['email']);
        $this->assign("uid",$_SESSION['uid']);
        $this->display();

       }


        public function teacher(){
	    	$M = M('teacher');
	    	$temp['id'] = $_GET['nid'];
	    	$info = $M->where($temp)->select();
	    	return $info;
        }

         public function teacher_save(){
	    	$M = M('teacher');
	    	$temp['id'] = $_GET['nid'];
	    	$info = $M->where($temp)->select();
	    	$data = $info[0];
	    	$data['look_num'] += 1;
	        $M->save($data);
         }

        
         public function news(){
	    	$M = M('News');
	    	$temp['id'] = $_GET['nid'];
	    	$info = $M->where($temp)->select();
	    	return $info;
        }

        public function news_save(){
	    	$M = M('News');
	    	$temp['id'] = $_GET['nid'];
	    	$info = $M->where($temp)->select();
	    	$data = $info[0];
	    	$data['look_num'] += 1;
	        $M->save($data);
         }










  
}