<?php

/**
 * @Author: gu
 * @Date:   2019-08-27 15:24:17
 * @Last Modified by:   Administrator
 * @Last Modified time: 2019-08-27 15:24:26
 */
namespace app\admin\controller;
use think\Controller;
/**
 * 
 */
class Product extends Controller
{
	
	public function index()
	{
		return $this->fetch();
	}
}