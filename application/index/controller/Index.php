<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/15 0015
 * Time: 17:53
 */

namespace app\index\controller;

class Index
{
    public function index()
    {
        return "
<p>欢迎</p>
<a href='http://sone.timeline.hellobirds.top/time_line/index'>sone的好看的时光轴</a>
<br />
<a href='http://sone.timeline.hellobirds.top/time_line/machine'>sone的时光机</a>
<br />
<a href='http://sone.hellobirds.top'>sone的博客</a>
sone的微信公众号：<br />
<img src='static/time_line/img/wechat_gzh.jpg' alt='song的微信公众号'><br />
好玩有趣，欢迎关注
";
    }

    /**
     * 时光机
     * @return \think\response\View
     */
    public function timeLineMachine()
    {
        return view('time_machine'); //默认渲染文件：当前模块/默认视图目录/当前控制器（小写）/当前操作（小写）.html
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
        return view('time_axis');
    }
}
