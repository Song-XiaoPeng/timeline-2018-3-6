<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/24 0024
 * Time: 15:07
 */

namespace app\api\validate;


use think\Db;
use think\Validate;

class User extends Validate
{
    protected $rule = [
        'nickname' => 'checkName',
        'password' => 'require',
        'rePassword' => 'require'
    ];

    protected $message = [
        'nickname.checkName' => '昵称已存在'
    ];

    protected $scene = [
        'login' => ['nickname', 'password'],
        'register' => ['nickname', 'password', 'rePassword']
    ];

    // 自定义验证规则
    protected function checkName($value)
    {
        $name = Db::name('user')->where(['nickname' => $value])->find();
        return $name ? false : true;
    }
}