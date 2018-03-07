<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/18 0018
 * Time: 15:51
 */

namespace app\api\controller;

use app\api\common\Auth;
use app\api\model\User;
use think\Controller;
use think\Exception;
use think\Db;
use think\Request;

/**
 * 时光机&&时光轴api接口
 * Class TimeLine
 * @package app\api\controller
 */
class TimeLine extends Auth
{
    protected $nickname;
    protected $uid;

    public function _initialize()
    {
        if (!session('user') && !cookie('user')) {
            return false;
        }
        $this->nickname = session('user') ? session('user') : cookie('user');
        $this->uid = Db::name('user')->where(['nickname' => $this->nickname])->value('id');
    }

    /**
     * 时光机页面：添加数据
     * @return \think\response\Json
     */
    public function addArticle()
    {
        try {
            $data = input();
            $data['date'] = strtotime(date('Y-m-d', time()));//年月日
            $data['time'] = time() - strtotime(date('Y-m-d', time()));//时间
            $data['uid'] = $this->uid;
            $data['ip'] = request()->ip();
            Db::name('article')->insert($data);
            return json(msg(0, 'success'));
        } catch (Exception $e) {
            return json(msg(1, $e->getMessage()));
        }
    }

    /**
     * 时光轴页面数据
     * @return \think\response\Json
     * [
     * 2012:[
     *  [],[]
     * ],
     * 2013:[
     *  [],[]
     * ]
     * ]
     */
    public function getTimeLineData()
    {
        try {
            $where = [
                'status' => 0,
                'uid' => $this->uid
            ];
            $data = Db::name('article')->order('date desc,time desc')->where($where)->select();
            array_walk($data, function (&$v) {
                $v['year'] = date('Y', $v['date']);
                $v['month'] = date('m', $v['date']);
                $v['day'] = date('d', $v['date']);
                $v['time'] = date('H:i:s', $v['time']);
            });
            $yearArr = array_unique(array_column($data, 'year'));
            $tmp = [];
            foreach ($data as $k => $v) {
                if (!array_key_exists($v['year'], $tmp)) {
                    $tmp[$v['year']] = [];
                } else {
                    continue;
                }
                foreach ($data as $k1 => $v1) {
                    if ($k == $k1) {//@!! debug 若忽略掉自身的话，结果会将第一条数据排除在外
                        //continue;
                    }
                    if ($v1['year'] == $v['year']) {
                        $tmp[$v['year']][] = $v1;
                    }
                }
            }

            $res = [
                'year' => $yearArr,
                'data' => $tmp
            ];
            return json(msg(0, 'success', $res));
        } catch (Exception $e) {
            return json(msg(1, $e->getMessage()));
        }
    }

    /**
     * 注册用户
     */
    public function doRegister(Request $request)
    {
        try {
            $params = $request->param();
            $user = new User();
            if ($user->doRegister($params)) {
                $user->data($params);
                $res = $user->allowField(['nickname', 'password'])->save();
                $msg = $res ? msg(0, 'success') : msg(1, 'fail');
            } else {
                $msg = msg(1, $user->error);
            }
            return json($msg);
        } catch (Exception $e) {
            return json(msg(1, $e->getMessage()));
        }
    }

    /**
     * 登录
     * @param Request $request
     * @return \think\response\Json
     */
    public function doLogin(Request $request)
    {
        try {
            $params = $request->param();
            $user = new User();
            if ($res = $user->doLogin($params)) {
                cookie('user', $params['nickname'], 3600 * 24 * 7);
                session('user', $params['nickname']);
                $msg = msg(0, '登陆成功！');
            } else {
                $msg = msg(1, '登录失败了');
            }
            return json($msg);
        } catch (Exception $e) {
            return json(msg(1, $e->getMessage()));
        }
    }
}