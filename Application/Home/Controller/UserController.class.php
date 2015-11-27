<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index(){
    	 $this->display();
    }
	
    public function article_new(){

		$this->assign('menu',"wytg");
		$this->assign('title',"我要投稿");
    	$this->display();
    }
	
	public function login(){

		$this->display();
    }
    
	public function test(){
        print_r(C(DEFAULT_THEME));
    }
}