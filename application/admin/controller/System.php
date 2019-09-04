<?php
/**
 * @Author: gu
 * @Date:   2019-08-08 16:39:55
 * @Last Modified by:   littlebra
 * @Last Modified time: 2019-09-04 17:59:59
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

            var_dump($request->param());

    		$res=AdminModel::getAllAdmins();
    		$this->assign('data',$res);
    		// $address=UserAddressModel::getAllUserAddress();
    		// $this->assign('uaddrInfo',$address);
    		return $this->fetch('list');
    		// return $res;
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