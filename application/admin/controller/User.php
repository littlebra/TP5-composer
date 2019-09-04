<?php

/**
 * @Author: gu
 * @Date:   2019-08-27 15:24:56
 * @Last Modified by:   Administrator
 * @Last Modified time: 2019-08-27 15:25:03
 */
namespace app\admin\controller;
use think\Controller;
/**
 * 
 */
class User extends Controller
{
	
	public function index()
	{
		return $this->fetch();
	}
}