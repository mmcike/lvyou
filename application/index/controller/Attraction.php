<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/23
 * Time: 10:23
 */

namespace app\index\controller;
use think\Controller;
use think\Db;

class Attraction extends Controller
{


    public function index()
    {
        //获取数据库景点信息
        $brief = Db::table('lvyou_crawler')->field("id, sname, surl, more_desc, picUrls")->order('surl asc')->select();
        //网页标题
        $index_title = "桂林旅游景点大全";
        $this->assign("index_title", $index_title); //分配变量到 模板页面中
        $this->assign("brief", $brief);

        return $this->fetch("attraction/index");
    }

    public function detail()
    {




        if(!$lvyou_id = $_GET['id'])
        {
            exit();
        }

        $imgCount = $_GET['imgCount'];
        $this->assign("imgCount", $imgCount);
        //获取数据库景点信息

        $brief = Db::table('lvyou_crawler')->where("id = ".$lvyou_id)->order('surl asc')->find();
        $this->assign("brief", $brief);
        //网页标题
        $index_title = "欢迎查看桂林旅游景点信息";
        $this->assign("index_title", $index_title); //分配变量到 模板页面中

        return $this->fetch("attraction/detail");
    }


}