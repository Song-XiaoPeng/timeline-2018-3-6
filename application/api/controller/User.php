<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/7 0007
 * Time: 11:39
 */

namespace app\api\controller;


use think\Controller;
use think\Exception;
use think\Request;
use app\api\model\User as UserModel;

class User extends Controller
{

    /**
     * 登录
     * @param Request $request
     * @return \think\response\Json
     */
    public function doLogin(Request $request)
    {
        try {
            $params = $request->param();
            $user = new UserModel();
            if ($res = $user->doLogin($params)) {
                $msg = msg(0, '登陆成功！', $res);
            } else {
                $msg = msg(1, '登录失败了');
            }
            return json($msg);
        } catch (Exception $e) {
            return json(msg(1, $e->getMessage()));
        }
    }
}