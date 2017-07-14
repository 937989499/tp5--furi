<?php
namespace app\home\controller;
use app\home\controller\Base;
/**
* 
*/
class About extends Base
{
	public function index()
	{
		$type = in_array($_GET['cid'], array('1','2','3','4','5','6','7'))?$_GET['cid']:'1';
		$this->assign('type',$type);
		$About = db("Article");
		$articlers = $About->where("cateid=$type")->select();
		$this->assign("gsgk",$articlers);
		return $this->fetch("gsgk");
	}
}
?>