<?php
namespace app\admin\controller;
use app\admin\controller\Base;
/**
* 
*/
class Img extends Base
{
	public function index()
	{
		//创建Model对象
		$img = db("img")->where('1=1')->paginate(3);
		//全部获取图书信息(最新的数据排序)
		$this->assign("imgs",$img);
		//该方法所对应的显示页面
		return $this->fetch("imglist");
	}
	public function imgadd()
	{
		//过滤数据
		if(request()->isPost()){

		$data=[
     			'Title'=>input('mgtitle'),
     			'Url'=>input('mgurl'),
     		];
   //  		$validate = \think\Loader::validate('Article');
   //  		if(!$validate->scene('add')->check($data)){
			//    $this->error($validate->getError()); die;
			// }
    		if(db('img')->insert($data)){
    			return $this->success('添加管理员成功！','index');
    		}else{
    			return $this->error('添加管理员失败！');
    		}
    		return;
    	}
        return $this->fetch();
	}
	public function imgdel()
	{
		$id=input('id');
    	if($id != 2){
    		if(db('img')->delete(input('id'))){
    			$this->success('删除管理员成功！','index');
    		}else{
    			$this->error('删除管理员失败！');
    		}
    	}else{
    		$this->error('初始化管理员不能删除！');
    	}
	}
	public function cateupdate()
	{
		$id=input('id');
    	$img=db('img')->find($id);
    	if(request()->isPost()){
    		$data=[
                'Id'=>input('aid'),
    			'Title'=>input('mgtitle'),
     			'Url'=>input('mgurl'),
    		];
			// $validate = \think\Loader::validate('Admin');
   //  		if(!$validate->scene('edit')->check($data)){
			//    $this->error($validate->getError()); die;
			// }
            $save=db('img')->update($data);
    		if($save !== false){
    			$this->success('修改管理员成功！','index');
    		}else{
    			$this->error('修改管理员失败！');
    		}
    		return;
    	}
    	$this->assign('imgs',$img);
    	return $this->fetch();
	}
}
?>