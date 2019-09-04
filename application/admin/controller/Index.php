<?php
namespace app\admin\controller;

use think\Controller;
use think\facade\Request;
use think\facade\Session;
use app\admin\model\Admin as AdminModel;

class Index extends Controller
{
    public function index()
    {
        // return 'This is ADMIN PAGE';
        // return $this->fetch();
        if (session('user_id')&&session('user_name')) {
        	$this->assign([
				'headimg'=>'http://www.tp5cps.cn/static/admin/img/profile_small.jpg',
				'username'=>session('user_name'),
				'rolename'=>session('user_status')
			]);
    		return $this->fetch('index');
    	}
    	else{
    		return $this->redirect('index/login');
    	}
    }
    public function indexV1()
    {
    	return $this->fetch('index_v1');
    }

    public function login()
    {
    	if (session('user_id')&&session('user_name')) {
    		$this->assign([
				'headimg'=>'http://www.tp5cps.cn/static/admin/img/profile_small.jpg',
				'username'=>session('user_name'),
				'rolename'=>session('user_status')
			]);
    		return $this->redirect('index/index');
    	}
    	else{
    		if (Request::post()) {
    			$user_name=Request::post('uname');
    			$user_pwd=Request::post('upwd');
    			$status=1;
    			$res=AdminModel::getAdminInfo($user_name,$user_pwd,$status);
    			// var_dump($res);
    			// var_dump($res->id);
    			if ($res) {
    				session('user_id',$res->id);
    				session('user_name',$res->username);
    				session('user_status',$res->status);
    				$this->assign([
						'headimg'=>'http://www.tp5cps.cn/static/admin/img/profile_small.jpg',
						'username'=>session('user_name'),
						'rolename'=>$res->status
					]);
					return $this->redirect('index/index');
    			} else {
    				return $this->fetch('login/login_v2');
    			}
    			
    		} else {
    			return $this->fetch('login/login_v2');
    		}    			
    	}
    }

    public function logout()
    {
    	// 清除session（当前作用域）
		session(null);
    	return $this->redirect('index/login');
    }

    public function findPwd()
    {
    	return $this->fetch('login/findpwd');
    }

}
