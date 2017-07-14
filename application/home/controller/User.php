<?php
namespace app\home\controller;
use app\home\controller\Base;
/**
* 
*/
class User extends Base
{
	public function index()
	{
		return $this->fetch();
	}
}
?>