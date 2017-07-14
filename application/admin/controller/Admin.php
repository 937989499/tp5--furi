<?php
namespace app\admin\controller;
use app\admin\controller\Base;
/**
* 
*/
class Admin extends Base
{
	public function index()
	{
		$admin = db("admin")->where('1=1')->paginate(3);
	    $this->assign("adminlist",$admin); 
		return $this->fetch("adminlist");
		
	}
	public function adminadd()
	{
		if(request()->isPost()){

		$data=[
     			'AdminId'=>input('uid'),
     			'UserName'=>input('uname'),
     			'Phone'=>input('uphone'),
     		];
    		$validate = \think\Loader::validate('Admin');
    		if(!$validate->scene('add')->check($data)){
			   $this->error($validate->getError()); die;
			}
    		if(db('admin')->insert($data)){
    			return $this->success('添加管理员成功！','index');
    		}else{
    			return $this->error('添加管理员失败！');
    		}
    		return;
    	}
        return $this->fetch();
		
	}
	public function admindel()
	{
		$id=input('id');
    	if($id != 2){
    		if(db('admin')->delete(input('id'))){
    			$this->success('删除管理员成功！','index/index');
    		}else{
    			$this->error('删除管理员失败！');
    		}
    	}else{
    		$this->error('初始化管理员不能删除！');
    	}
	}
	public function adminupdate()
	{
		$id=input('id');
    	$admins=db('admin')->find($id);
    	if(request()->isPost()){
    		$data=[
    			'Id'=>input('aid'),
    			'AdminId'=>input('uid'),
    			'UserName'=>input('uname'),
    			'Phone'=>input('uphone'),
    		];
   //  		if(input('password')){
			// 	$data['password']=input('password');
			// }else{
			// 	$data['password']=$admins['password'];
			// }
			// $validate = \think\Loader::validate('Admin');
   //  		if(!$validate->scene('edit')->check($data)){
			//    $this->error($validate->getError()); die;
			// }
            $save=db('admin')->update($data);
    		if($save !== false){
    			$this->success('修改管理员成功！','index');
    		}else{
    			$this->error('修改管理员失败！');
    		}
    		return;
    	}
    	$this->assign('admins',$admins);
    	return $this->fetch();
	}
	public function userLogout()
    {
        session(null);
        //session_destroy();
        //unset($_SESSION);
        $this->redirect("User/login");
    }
}
?>