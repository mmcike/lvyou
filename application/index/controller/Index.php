<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

class Index extends Controller
{
    //首页方法
    public function index()
    {



        //网页标题
        $index_title = "桂林旅游网"; //首页标题

        $var = "helo world";    //设置变量

        $arr = array("name", "pwd");

        $this->assign("var", $var); //分配变量到 模板页面中
        $this->assign("arr", $arr); //分配变量到 模板页面中
        $this->assign("index_title", $index_title); //分配变量到 模板页面中

        return $this->fetch();//显示模板页面，缺省./lvyou/application/index/view/Index/index.html
    }
    public function test()
    {
        echo "test";
    }
}
