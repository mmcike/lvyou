<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/23
 * Time: 10:23
 */

namespace app\index\controller;
use think\Controller;

class Hotel extends Controller
{


    public function index()
    {
        //网页标题
        $index_title = "住宿";
        $this->assign("index_title", $index_title); //分配变量到 模板页面中

        return $this->fetch("hotel/index");
    }
}