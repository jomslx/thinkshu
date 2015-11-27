<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function _initialize(){
		$uid = session('user');
		if (empty($uid) ) {$this->redirect('User/login');}
	}
	
    public function index(){
    	 $this->display();
    }
	
	public function login(){

		$this->display();
    }
    
	public function test(){
        echo 'test1';
    }
}