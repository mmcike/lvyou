<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:60:"C:\AppServ\www\lvyou/application/index\view\hotel\index.html";i:1537293003;s:62:"C:\AppServ\www\lvyou\application\index\view\commen\header.html";i:1537293098;}*/ ?>
<?php $title = $index_title; $li_index = '5'; ?>
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
