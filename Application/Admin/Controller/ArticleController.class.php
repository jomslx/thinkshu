<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends Controller {
    public function index(){
    	 $this->display();
    }
	
    public function artadd(){

		$this->assign('title',"我要投稿");
    	$this->display();
    }
	
	public function login(){

		$this->display();
    }
    
	public function catlist(){

        $this->assign('title',"分类管理");
        $this->display();
    }
}