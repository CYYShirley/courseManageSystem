<?php
namespace app\index\controller;

use app\index\controller\IsloginController;

/**
* 出勤统计
* @author 朱晨澍
*/
class WorkmanageController extends IsloginController
{
	public function index()
	{
		
		return $this->fetch();
	}
}