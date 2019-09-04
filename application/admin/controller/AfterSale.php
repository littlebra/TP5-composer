<?php

/**
 * @Author: gu
 * @Date:   2019-08-27 15:28:01
 * @Last Modified by:   Administrator
 * @Last Modified time: 2019-08-27 15:42:34
 */
namespace app\admin\controller;
use think\Controller;
/**
 * 
 */
class AfterSale extends Controller
{
	
	public function index()
	{
		return $this->fetch();
	}
}