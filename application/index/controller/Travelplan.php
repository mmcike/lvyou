<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/23
 * Time: 10:23
 */

namespace app\index\controller;
use think\Controller;

class Travelplan extends Controller
{


    public function index()
    {
        //网页标题
        $index_title = "旅游喜好选择";
        $this->assign("index_title", $index_title); //分配变量到 模板页面中
        $mapkey = "uGgSuDQw4fwZgWxCpggsexN0Z7YazkRN";
        $this->assign("mapkey", $mapkey);

        return $this->fetch("travelPlan/index");
    }
    public function travelDeal()
    {
        if (!request()->isPost())
        {
            $this->error("请求错误");
        }
        $data = input("post.");
        echo($data['startPoint']);
    }

    public function baiduMap()
    {

        $mapkey = "uGgSuDQw4fwZgWxCpggsexN0Z7YazkRN";
        $this->assign("mapkey", $mapkey);
        return $this->fetch("travelPlan/map");
    }

}
