<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/18 0018
 * Time: 15:51
 */

namespace app\api\controller;

use think\Exception;
use think\Db;

/**
 * 时光机&&时光轴api接口
 * Class TimeLine
 * @package app\api\controller
 */
class TimeLine
{
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
            $data = Db::name('article')->order('date desc,time desc')->where('status', 0)->select();
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
     * 后台首页数据列表
     */
    public function getTimeLineList()
    {
        try{
            $data = Db::name('article')->paginate()->each(function($item,$key){
                $item['date'] = date('Y-m-d H:i:s',$item['date']);
                return $item;
            });
            return json(msg(0, 'success', $data));
        }catch(Exception $e){
            return json(msg(1,$e->getMessage()));
        }

    }
}