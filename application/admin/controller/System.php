<?php
/**
 * @Author: gu
 * @Date:   2019-08-08 16:39:55
 * @Last Modified by:   littlebra
 * @Last Modified time: 2019-09-06 11:03:19
 */
namespace app\admin\controller;

use think\Controller;
use app\admin\model\Admin as AdminModel;
// use app\admin\model\UserAddress as UserAddressModel;
use think\Request;

/**
 * 
 */
class System extends Controller
{
	
	public function getAllAdminsInfo(Request $request)
    {
    	
    	if (session('user_id')) {

            $res=AdminModel::getAllAdmins();
    		$this->assign('data',$res);
    		// $address=UserAddressModel::getAllUserAddress();
    		// $this->assign('uaddrInfo',$address);
    		
    		// return $res;
            $reqArr=$request->param();
            if ($reqArr) {
                $params=[
                    'username'=>$reqArr['user_name'],
                    'password'=>$reqArr['user_password'],
                    'realname'=>$reqArr['real_name'],
                    'gender'=>$reqArr['gender'],
                    'tel'=>$reqArr['utel'],
                    'email'=>$reqArr['uemail'],
                ];

                $res=AdminModel::addAdmin($params);
                var_dump($res);
                return $this->fetch('list');
            } else {
                return $this->fetch('list');
            }
            
    	} else {
    		return false;
    	}
        return $this->fetch('list');   	
    }
    public function add()
    {
        return $this->fetch();
        if (session('user_id')) {
            $request=Request::instance()->post();
            // $str=$request->post();
            $res=AdminModel::save();
        }
    }
    /*
    public function getAllUAddress($value='')
    {
    	// session('user_id')
    	if (session('user_id')) {
    		$res=UserAddressModel::getAllUserAddress();
    		$this->assign('useraddress',$res);
    		return $this->fetch('user/userlist');
    		// return $res;
    	} else {
    		return false;
    	}
    }*/
}