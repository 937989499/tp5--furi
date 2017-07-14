<?php
namespace app\admin\validate;
use think\Validate;
class Admin extends Validate
{
    protected $rule = [
        'UserName'  =>  'require|max:25|unique:admin',
        // 'password' =>  'require',
    ];

    protected $message  =   [
        'UserName.require' => '管理员名称必须填写',
        'UserName.max' => '管理员名称长度不得大于25位',
        'UserName.unique' => '管理员名称不得重复',
        // 'password.require' => '管理员密码必须填写',

    ];

    protected $scene = [
        'add'  =>  ['UserName'=>'require|unique:admin'],
        'edit'  =>  ['UserName'=>'require|unique:admin'],
    ];




}
