<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
	
	public function _initialize(){
		$uid = session('user');
		if (empty($uid) && ACTION_NAME != 'login' && ACTION_NAME != 'reg') {$this->redirect('User/login');}
	}
	
    public function index(){
    	 redirect(U('/Admin/index/index'));
    }
	
	public function login($url="./index"){
		if (IS_POST){
			$where['uname'] =  I('post.uname');
			$r = M("sys_users")->where($where)->find();
			if (!$r) {
				$this->error('对不起，没有这个账号');
			}
				
			if ($r['pass'] != I('post.pass')){
					$this->error('对不起，密码错误');
					
			}
			//保存登陆记录
			/*
			$ip = get_client_ip();
			$data = array(
					'id' => $user['id'],
					'log_count'       => array('exp','log_count+1'),
					'last_login_timestamp' => time(),
					'last_login_ip'   => $this->myip2long($ip),
			);
			$db->save($data);
			*/
			/* 记录登录SESSION和COOKIES */
			$auth = array(
					'id'              => $r['uid'],
					'uname'        => $r['uname'],
			);
			session('user', $auth);
			
			$this->success('登陆成功', $url);

		} else {
			$this->display();
		}
		
    }
    
    /* 退出登录 */
    public function logout(){
    	session('user', null);
    	session('[destroy]');
    	$this->success('退出成功！', U('login'));
    }
    
	public function useradd(){
		if (IS_POST) {
			$data = I("post.");
			$data["regdate"] = time();
			$r = M("sys_users")->add($data);
			if ($r) {
				$this->success('新增成功', './index');
			} else {
				$this->error('新增失败');
			}
		}
		
        $this->display();
    }
}