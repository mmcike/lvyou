<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/22
 * Time: 20:41
 */
namespace app\index\controller;
use think\Controller;

class Home extends Controller
{

    public function index()
    {
        return $this->fetch("home/index");

    }

    public function _index()
    {
        return "我是User控制器下的_index方法";
    }

}


