<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/15 0015
 * Time: 17:53
 */

namespace app\index\controller;

use think\Controller;
use think\Db;
use think\Request;

class Index extends Controller
{
    protected $nickname;
    protected $uid;

    public function _initialize()
    {
        $noCheck = [
            'index', 'login', 'register'
        ];

        $request = Request::instance();

        if (in_array($request->action(), $noCheck)) {
            return true;
        }
        if (!session('user') && !cookie('user')) {
            $this->redirect('login');
        }
        $this->nickname = session('user') ? session('user') : cookie('user');
    }

    public function index()
    {
        return "
                    <p>欢迎</p>
                    <a href='/time_line/index'>sone的好看的时光轴</a>
                    <br />
                    <a href='/time_line/machine'>sone的时光机</a>
                    <br />
                    <a href='https://github.com/Song-XiaoPeng'>sone的github</a>
                    <br />
                    <a href='http://sone.hellobirds.top'>sone的博客</a>
                    <br />
                    <br />
                    sone的微信公众号：<br />
                    <img src='static/time_line/img/wechat_gzh.jpg' alt='song的微信公众号'><br />
                    好玩有趣，欢迎关注~。
                ";
    }

    /**
     * 时光机
     * @return \think\response\View
     */
    public function timeLineMachine()
    {
        return view('time_machine', ['nickname' => $this->nickname]); //默认渲染文件：当前模块/默认视图目录/当前控制器（小写）/当前操作（小写）.html
        /*
            1. 指定模板输出
            return $this->fetch('edit');
            2. 表示调用当前控制器下面的edit模板
            return $this->fetch('member/read');
            3. 跨模块渲染模板
            return $this->fetch('admin@member/edit');
         */
    }

    /**
     * 时光轴
     * @return \think\response\View
     */
    public function timeLineAxis()
    {
        return view('time_axis', ['nickname' => $this->nickname]);
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    /**
     * 退出登录
     */
    public function logout()
    {
        cookie('user', null);
        session('user', null);
        return redirect('login');
    }
}
