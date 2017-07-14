<?php
namespace app\admin\controller;
use app\admin\controller\Base;
/**
* 
*/
/**
* 
*/
class Article extends Base
{
	public function index()
	{
		//创建Model对象
		$article = db("article")->where('1=1')->paginate(3);
		$this->assign("articles",$article);
		//该方法所对应的显示页面
		return $this->fetch("articlelist");
	}
	public function articleadd()
	{
		//过滤数据
		if(request()->isPost()){

		$data=[
     			'Title'=>input('wztitle'),
     			'Contents'=>input('wzcontants'),
     			'ImgUrl'=>input('wzurl'),
     			'Author'=>input('wzauthor'),
     			'AddDateTime'=>input('wzaddtime'),
     			'UpdateDateTime'=>input('wzuptime'),
     			'CateId'=>input('wzcate'),
     		];
   //  		$validate = \think\Loader::validate('Article');
   //  		if(!$validate->scene('add')->check($data)){
			//    $this->error($validate->getError()); die;
			// }
    		if(db('article')->insert($data)){
    			return $this->success('添加管理员成功！','index');
    		}else{
    			return $this->error('添加管理员失败！');
    		}
    		return;
    	}
        return $this->fetch();
	}
	public function articledel()
	{
		$id=input('id');
    	if($id != 2){
    		if(db('article')->delete(input('id'))){
    			$this->success('删除管理员成功！','index');
    		}else{
    			$this->error('删除管理员失败！');
    		}
    	}else{
    		$this->error('初始化管理员不能删除！');
    	}
	}
	public function articleupdate()
	{
		$id=input('id');
    	$articles=db('article')->find($id);
    	if(request()->isPost()){
    		$data=[
                'Id'=>input('aid'),
    			'Title'=>input('wztitle'),
     			'Contents'=>input('wzcontants'),
     			'ImgUrl'=>input('wzurl'),
     			'Author'=>input('wzauthor'),
     			'AddDateTime'=>input('wzaddtime'),
     			'UpdateDateTime'=>input('wzuptime'),
     			'CateId'=>input('wzcate'),
    		];
			// $validate = \think\Loader::validate('Admin');
   //  		if(!$validate->scene('edit')->check($data)){
			//    $this->error($validate->getError()); die;
			// }
            $save=db('article')->update($data);
    		if($save !== false){
    			$this->success('修改管理员成功！','index');
    		}else{
    			$this->error('修改管理员失败！');
    		}
    		return;
    	}
    	$this->assign('articles',$articles);
    	return $this->fetch();
	}
}
?>