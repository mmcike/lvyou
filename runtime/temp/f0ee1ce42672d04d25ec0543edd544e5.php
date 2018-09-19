<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:60:"C:\AppServ\www\lvyou/application/index\view\index\index.html";i:1537374802;s:62:"C:\AppServ\www\lvyou\application\index\view\commen\header.html";i:1537374802;}*/ ?>
<?php $title = $index_title; $li_index = '1'; ?>
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
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-info">
                <!-- Default panel contents -->
                <div class="panel-heading">个性化旅游线路规划</div>
                <div class="panel-body">
                    <b></b>
                    <p>桂林作为旅游热点地区，除桂林山水以外，还有岩洞、游乐场等，这些景区每年接待的游客数以及承载的压力呈现增长趋势。<br>同旅游市场的飞速发展相比, 传统的旅游行程规划向数字化服务发展的要求越来越迫切。</p>
                    <p> 说说你的喜好，根据你的选择，我们告诉你如何玩转桂林.<br></p>
                    <a class="btn btn-md btn-primary" href="<?php echo url('travelplan/index'); ?>">开始规划旅游线路</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-8">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->

                <div class="carousel-inner">
                    <div class="item">
                        <img width="800" height="250" src="/lvyou/static/images/Head/2.jpg" alt="First slide image" />
                        <div class="carousel-caption">
                            <h3>桂林山水甲天下</h3>
                            <p>七星公园</p>
                        </div>
                    </div>
                    <div class="item">
                        <img width="800" height="250" src="/lvyou/static/images/Head/1.jpg" alt="First slide image"/>
                        <div class="carousel-caption">
                            <h3>桂林山水甲天下</h3>
                            <p>日月双塔</p>
                        </div>
                    </div>
                    <div class="item">
                        <img width="800" height="250" src="/lvyou/static/images/Head/3.jpg" alt="First slide image" />
                        <div class="carousel-caption">
                            <h3>桂林山水甲天下</h3>
                            <p>龙脊梯田.</p>
                        </div>
                    </div>
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
        <div class="col-md-12">
            <div class="panel panel-info">
                <!-- Default panel contents -->
                <div class="panel-heading">桂林，一个来了就不想走的城市</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <img class="img-circle" src="/lvyou/static/images/Head/attraction.jpg" height="140" width="140" alt="Generic placeholder image">
                            <h2>桂林景点</h2>
                            <p>象山以神奇著称。其神奇，首先是形神毕似，其次是在鼻腿之间造就一轮临水皓月，构成“象山水月”奇景。因此，象鼻山是桂林的城徽山，是桂林旅游的标志山，它坐落在桂林市中心的漓江与桃花江汇流处，形似一头鼻子伸进漓江饮水的巨象，象鼻和象腿之间是面积约一百五十平米的圆洞，江水穿洞而过，如明月浮水.</p>
                            <p><a class="btn btn-default" href="<?php echo url('attraction/index'); ?>" role="button">View details &raquo;</a></p>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <img class="img-circle" src="/lvyou/static/images/Head/food.jpg" height="140" width="140" alt="Generic placeholder image">
                            <h2>桂林美食</h2>
                            <p>桂林米粉以其独特的风味远近闻名。其做工考究，先将上好大米磨成浆，装袋滤干，揣成粉团煮熟后压榨成圆根或片状即成。圆的称米粉，片状的称切粉，通称米粉，其特点是洁白、细嫩、软滑、爽口。其吃法多样。最讲究卤水的制作，其工艺各家有异，大致以猪、牛骨、罗汉果和各式佐料熬煮而成，香味浓郁。</p>
                            <p><a class="btn btn-default" href="<?php echo url('delicious/index'); ?>" role="button">View details &raquo;</a></p>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <img class="img-circle" src="/lvyou/static/images/Head/hotel.jpg" height="140" width="140" alt="Generic placeholder image">
                            <h2>桂林酒店</h2>
                            <p>桂林香格里拉大酒店，从1971年第一家酒店开始，以其殷勤体贴款客之道，令每位宾客感觉如同身处一个真实的世外桃源。经历了三十多年的发展，香格里拉已成为亚太地区最大的豪华酒店集团。总部设在香港的香格里拉酒店集团是亚太地区最大的酒店集团，且被视为世界最佳酒店管理公司之一，目前共有47家酒店，客房总量超过23000间。</p>
                            <p><a class="btn btn-default" href="<?php echo url('hotel/index'); ?>" role="button">View details &raquo;</a></p>
                        </div><!-- /.col-lg-4 -->
                    </div><!-- /.row -->
                </div>
            </div>
        </div>
    </div>
</div> <!-- /container -->


