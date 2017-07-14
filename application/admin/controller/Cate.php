<?php
namespace app\admin\controller;
use app\admin\controller\Base;
/**
* 
*/
class Cate extends Base
{
	public function index()
	{
		//创建Model对象
		$cate = db("cate")->where('1=1')->paginate(3);
		$this->assign("cates",$cate);
		//该方法所对应的显示页面
		return $this->fetch("catelist");
	}
	public function cateadd()
	{
		//过滤数据
		if(request()->isPost()){

		$data=[
     			'CateName'=>input('catename'),
     			'PId'=>input('pid'),
     		];
   //  		$validate = \think\Loader::validate('Article');
   //  		if(!$validate->scene('add')->check($data)){
			//    $this->error($validate->getError()); die;
			// }
    		if(db('cate')->insert($data)){
    			return $this->success('添加管理员成功！','index');
    		}else{
    			return $this->error('添加管理员失败！');
    		}
    		return;
    	}
        return $this->fetch();
	}
	public function catedel()
	{
		$id=input('id');
    	if($id != 2){
    		if(db('cate')->delete(input('id'))){
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
    	$cate=db('cate')->find($id);
    	if(request()->isPost()){
    		$data=[
                'Id'=>input('aid'),
    			'CateName'=>input('catename'),
     			'PId'=>input('pid'),
    		];
			// $validate = \think\Loader::validate('Admin');
   //  		if(!$validate->scene('edit')->check($data)){
			//    $this->error($validate->getError()); die;
			// }
            $save=db('cate')->update($data);
    		if($save !== false){
    			$this->success('修改管理员成功！','index');
    		}else{
    			$this->error('修改管理员失败！');
    		}
    		return;
    	}
    	$this->assign('cates',$cate);
    	return $this->fetch();
	}
}
?>