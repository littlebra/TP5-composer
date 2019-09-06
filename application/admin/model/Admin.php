<?php

/**
 * @Author: gu
 * @Date:   2019-08-08 11:38:09
 * @Last Modified by:   littlebra
 * @Last Modified time: 2019-09-06 10:51:18
 */
namespace app\admin\model;

use think\Model;

/**
 * 
 */
class Admin extends Model
{
	
	public static function getAdminInfo($name,$pwd,$status,$openid='')
    {
    	/*if (!$openid) {
    		$user = User::where('openid', '=', $openid)
    				->where('utype', '=', $type)
            		->find();
        	return $user;
        	var_dump($user);
    	} else {
    		$user = User::where('uname', '=', $name)
    				->where('upassword', '=', $pwd)
    				->where('utype', '=', $type)
    				->find();
        	return $user;
        	var_dump($user);

    	}*/
    	$user = Admin::where('username', '=', $name)
    				->where('password', '=', $pwd)
    				->where('status', '=', $status)
    				->find();
        	return $user;
        	var_dump($user);
        
    }
    public static function getAllAdmins()
    {
    	$admins=Admin::all();
    	return $admins;
        var_dump($admin);
    }
    public static function addAdmin($value)
    {
       $result=Admin::insert($value);
       var_dump($result);
       return $result;
    }

}