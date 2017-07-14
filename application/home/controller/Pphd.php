<?php
namespace app\home\controller;
use app\home\controller\Base;
use app\home\common;
/**
* 
*/
class Pphd extends Base
{
	public function index()
	{
		$type = in_array($_GET['hid'], array('8','9'))?$_GET['hid']:'8';
		$this->assign('type',$type);
		$where ="cateid=$type";
		$Pphd = db("article")->where($where)->paginate(3);
		
		// $articleres=db('article')->order('id desc')->paginate(3);
  //   	$this->assign('articleres',$articleres);
  //       return $this->fetch();
  //     
		
		// $count = $Pphd->where($where)->count();
	 //    $p = getpage($count,1);
	 //    $list = $Pphd->field(true)->where($where)->order('id')->limit($p->firstRow, $p->listRows)->select();
	 //    $this->assign('select', $list); // 赋值数据集
	 //    $this->assign('page', $p->show());// 赋值分页输出
		$this->assign("pphd",$Pphd);
		return $this->fetch("pphd");
	}
}
?>