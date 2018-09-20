<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:66:"C:\AppServ\www\lvyou/application/index\view\attraction\detail.html";i:1537293043;s:62:"C:\AppServ\www\lvyou\application\index\view\commen\header.html";i:1537293098;}*/ ?>
<?php $title = $index_title; $li_index = '2'; ?>
<!-- 导入公共头文件 -->
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <title><?php echo $title; ?></title>
    <link rel="icon" href="/lvyou/static/images/icon.gif" type="image/gif" >
    <link href="/lvyou/static/css/bootstrap.css" rel="stylesheet" />
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/lvyou/static/js/jquery-3.3.1.min.js"></script>
    <script src="/lvyou/static/js/bootstrap.js"></script>
    <script src="/lvyou/static/js/bootstrap.min.js"></script>
    <script src="/lvyou/static/js/bootstrap-carousel.js"></script>
    <!-- Bootstrap core CSS -->
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <style>
        body {
            padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
        }
    </style>
    <link href="/lvyou/static/css/bootstrap-responsive.css" rel="stylesheet">
    <!-- Fav and touch icons -->
</head>

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->

<body>

<header class="navbar navbar-static-top navbar-inverse navbar-fixed-top" id="top" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?php echo url('index/index'); ?>" class="navbar-brand">桂林旅游网</a>
        </div>
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo url('index/index'); ?>">主页</a></li>
                <li><a href="<?php echo url('attraction/index'); ?>">景点</a></li>
                <li><a href="<?php echo url('travelplan/index'); ?>">个人线路规划</a></li>
                <li><a href="<?php echo url('delicious/index'); ?>">美食</a></li>
                <li><a href="<?php echo url('hotel/index'); ?>">住宿</a></li>
                <li><a href="<?php echo url('traffic/index'); ?>">交通</a></li>
                <li><a href="<?php echo url('weather/index'); ?>">天气</a></li>
                <li><a href="<?php echo url('strategy/index'); ?>">旅游攻略</a></li>
                <li><a href="<?php echo url('culture/index'); ?>">文化地理</a></li>
                <li><a href="<?php echo url('guide/index'); ?>">导游推荐</a></li>
            </ul>

        </nav>
    </div>
</header>
<br><br><br>
<script>
    $(function(){

        var $li_index = <?php echo $li_index; ?>;
        $(".navbar-nav>li").each(function () {
            if($(this).index() + 1 == $li_index){
                $(this).addClass("active");
            }
        });

    });
</script>

</body>
</html>

<div class="container">





<div class="panel panel-primary">
    <!-- Default panel contents -->
    <div class="panel-heading">
        <button type="button" class="btn btn-default btn-sm" onclick="javascript:location = '<?php echo url('attraction/index'); ?>'">
            <span class="glyphicon glyphicon-chevron-left"></span> 返回
        </button>
        <strong><?php echo $title; ?></strong> <?php echo $brief['sname']; ?></div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-8 col-lg-8">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
<?php

for ($i = 0; $i < $imgCount; $i++){
    if ($i == 0){
?>

                        <li data-target="#carousel-example-generic" data-slide-to="@i" class="active"></li>
                        <?php
                        }
                        else
                        {
                        ?>
                        <li data-target="#carousel-example-generic" data-slide-to="@i"></li>
                        <?php
                        }
                        }
                        ?>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
<?php
    $voArr = explode(" ", $brief["picUrls"]);
    for($i = 0; $i < count($voArr); $i++){
?>
                        <div class="item">
                            <img src="/lvyou/static/images/<?php echo $voArr[$i];?>" alt="slide image" height="250" width="800" />
                            <div class="carousel-caption">
                                <h3><?php echo $brief['sname']; ?></h3>
                            </div>
                        </div>
<?php
    }
?>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <p class="bg-primary">总评描述信息:</p>
                <p class="" style="text-indent: 2em;"><?php echo $brief['more_desc']; ?>......</p>
            </div>
            <div class="col-md-12 col-lg-12">
                <div class="panel panel-success">
                    <!-- Default panel contents -->
                    <div class="panel-heading"> 更多详情：</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-7 col-lg-7">

<?php
if ("" != $brief['more_desc']){
?>

                                <p><span class="glyphicon glyphicon-star">景点详情：</span></p>
                                <p class=" col-md-offset-1" style="text-indent: 2em"><?php echo $brief['more_desc']; ?></p>
<?php
}
if ("" != $brief['travelinfo']){
?>

                                <p><span class="glyphicon glyphicon-star">旅游指南：</span></p>
                                <span><p class=" col-md-offset-1" style="text-indent: 2em"><?php echo $brief['travelinfo']; ?></p></span>
<?php
}
if ("" != $brief['trafficinfo'])
{
?>
                                <p><span class="glyphicon glyphicon-star">交通指南：</span></p>
                                <p class=" col-md-offset-1" style="text-indent: 2em"><?php echo $brief['trafficinfo']; ?></p>
<?php
}
?>
                            </div>
                            <div class="col-md-5 col-lg-5">
                                <span><strong><span class="glyphicon glyphicon-star">票务信息：</span></strong></span>
                                <ul class="list-group">
                                    <li class="list-group-item">门票价格： <?php echo $brief['fee']; ?> 元</li>
                                    <li class="list-group-item">景点位置： <?php echo $brief['address']; ?>.</li>
                                    <li class="list-group-item">开放时间： <?php echo $brief['openclosetime']; ?>.</li>
                                    <li class="list-group-item">联系方式： <?php echo $brief['telephone']; ?>.</li>
                                    <li class="list-group-item">游览时间： <?php echo $brief['servicetime']; ?>. 分钟</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>