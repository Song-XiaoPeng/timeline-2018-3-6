<?php

namespace app\api\model;

use think\Loader;
use think\Model;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/24 0024
 * Time: 14:55
 */
class User extends Model
{
    protected $auto = ['password'];
    protected $insert = ['ip', 'status' => 0, 'createtime'];
    protected $update = ['updatetime'];
    public $error;

    protected function setPasswordAttr($password)
    {
        return md5($password);
    }

    protected function setIpAttr()
    {
        return request()->ip();
    }

    protected function setUpdatetimeAttr()
    {
        return time();
    }

    protected function setCreatetimeAttr()
    {
        return time();
    }

    /**
     * @param $data
     * password rePasswrod nickname
     */
    public function doRegister($data)
    {
        $validate = Loader::validate('User');

        if (!$validate->scene('register')->check($data)) {
            $this->error = $validate->getError();
            return false;
        } else {
            return true;
        }
    }

    public function doLogin($data)
    {
        $where = [
            'nickname' => $data['nickname'],
            'password' => md5($data['password'])
        ];

        if (self::get($where)) {
            return true;
        } else {
            return false;
        }
    }
}