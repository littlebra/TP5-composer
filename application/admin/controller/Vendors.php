<?php

/**
 * @Author: gu
 * @Date:   2019-08-27 15:16:17
 * @Last Modified by:   Administrator
 * @Last Modified time: 2019-08-27 15:18:18
 */
namespace app\admin\controller;
use think\Controller;
/**
 * 
 */
class Vendors extends Controller
{
	
	public function index()
	{
		return $this->fetch();
	}
}