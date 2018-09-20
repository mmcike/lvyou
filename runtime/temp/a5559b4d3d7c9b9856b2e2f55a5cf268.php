<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:65:"C:\AppServ\www\lvyou/application/index\view\travelPlan\index.html";i:1537374802;s:62:"C:\AppServ\www\lvyou\application\index\view\commen\header.html";i:1537374802;}*/ ?>
<?php $title = $index_title; $li_index = '3'; ?>
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


<link href="/lvyou/static/css/global.css" rel="stylesheet" />
<link href="/lvyou/static/css/easyui.css" rel="stylesheet" />
<link href="/lvyou/static/css/step.css" rel="stylesheet" />
<link href="/lvyou/static/css/demo.css" rel="stylesheet" />
<link href="/lvyou/static/css/jquery-ui-1.9.0.custom.min.css" rel="stylesheet" />
<link href="/lvyou/static/css/scollbar.css" rel="stylesheet" />
<script src="/lvyou/static/js/jquery-1.7.2.min.js"></script>
<script src="/lvyou/static/js/jquery.easyui.min.js"></script>
<script src="/lvyou/static/js/typeChoose.js"></script>
<script src="/lvyou/static/js/bootstrap.min.js"></script>

<style type="text/css">
    body, html{width: 100%;height: 100%;margin:0;font-family:"微软雅黑";font-size:14px;}
    #allmap{height:400px;width:100%;}
    #r-result{width:100%;}
</style>

<!--百度地图-->
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=<?php echo $mapkey; ?>"></script>
<div id="allmap"></div>
<div id="searchResultPanel" style="border:1px solid #C0C0C0;width:150px;height:auto; display:none;"></div>
<div id="r-result"></div>


<!--百度地图-->
<div class="container">

<div class="row">
    <div class="tripDay relative">
    </div>
    <div class="tripDay relative">
    </div>
    <div class="col-md-12 col-lg-12">
    <div class="panel panel-success">
    <div class="panel-heading">游客旅游喜好选择：</div>
<div class="panel-body">

    <!--个 性 定 制-->
<!--    <div class="panel panel-default">
    <div class="panel-body">
    <div class="col-md-12  col-lg-12">
    <div class="col-md-2  col-lg-2">
    <button type="button" class="btn btn-primary btn-lg btn-block" id="self">个 性 定 制</button>
</div>
<div class="col-md-2  col-lg-2">
    <button type="button" class="btn btn-success btn-lg btn-lg btn-block" id="family">亲 子 游</button>
</div>
<div class="col-md-2  col-lg-2">
    <button type="button" class="btn btn-info btn-lg btn-lg btn-block" id="student">学 生 游</button>
</div>
<div class="col-md-2  col-lg-2">
    <button type="button" class="btn btn-warning btn-lg btn-lg btn-block" id="first">首 次 游</button>
</div>
<div class="col-md-2  col-lg-2">
    <button type="button" class="btn btn-danger btn-lg btn-lg btn-block" id="deep">深 度 游</button>
</div>
<div class="col-md-2  col-lg-2">
    <button type="button" class="btn btn-success btn-lg btn-lg btn-block" id="money">豪 华 游</button>
</div>
</div>
</div>
</div>-->


<div class="panel panel-default">
    <div class="panel-heading">游客起始旅游点选择：</div>
<div class="panel-body">
    <div class="col-md-6 col-lg-6">
    <div class="form-group">
    <label for="SPOINT">出发地点：</label>
<input type="text" class="form-control suggestId" name="SstartPlace" value="" placeholder="出发地点" id="SPOINT">
    </div>
    </div>
    <div class="col-md-6 col-lg-6">
    <div class="form-group">
    <label for="STIME">开始时间：</label>
<input type="text" class="form-control" name="SopenTime" value="09:00" id="STIME">
    </div>
    </div>
    <div class="col-md-6 col-lg-6">
    <div class="form-group">
    <label for="EPOINT">结束地点：</label>
<input type="text" class="form-control" name="EstartPlace" value=""  placeholder="结束地点" id="EPOINT">
    </div>
    </div>
    <div class="col-md-6 col-lg-6">
    <div class="form-group">
    <label for="ETIME">结束时间：</label>
<input type="text" class="form-control" name="EendTime" value="17:00" id="ETIME">
    </div>
    </div>
    <div class="col-md-12 col-lg-12">
    <div class="form-group">
    <label for="TDAYS">行程天数：</label>
<input type="text" class="form-control" name="days" placeholder="1" value="1" id="TDAYS">
    </div>
    </div>
    </div>
    </div>
    <!--注意事项-->
    <div class="col-md-12 column hide" id="warning_text">
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4>
            </h4> <strong>注意!</strong> 请输入起始、结束地点<a href="#" class="alert-link"></a>
        </div>
    </div>
    <!--注意事项-->
    <div id="choose" class="col-md-5 col-lg-5">
    <div class="tjBox" id="typeid" style="height: 100px;" data-id="6">
    <!--<div class="tjBox" id="typeid" style="height: 450px;" data-id="6">-->
<!--

    <dl>
    <dt class="i10000"></dt>
    <dd>
    <h4>城市</h4>
    <div style="margin-top:2px;">
   &lt;!&ndash; <input id="scity" class="easyui-slider" value="" style="width:300px" data-options="showTip:true"> &ndash;&gt;
    </div>
    </dd>
    </dl>
    <dl>
    <dt class="i10001"></dt>
    <dd>
    <h4>古镇乡村</h4>
    <div style="margin-top:3px;">
    </div>
    </dd>
    </dl>
    <dl>
    <dt class="i10002"></dt>
    <dd>
    <h4>自然景观</h4>
    <div style="margin-top:3px">
    </div>
    </dd>
    </dl>
    <dl>
    <dt class="i4"></dt>
    <dd>
    <h4>人文景观</h4>
    <div style="margin-top:3px;">
    </div>
    </dd>
    </dl>
    <dl>
    <dt class="i7"></dt>
    <dd>
    <h4>展馆</h4>
    <div style="margin-top:3px;">
    </div>
    </dd>
    </dl>
    <dl>
    <dt class="i9"></dt>
    <dd>
    <h4>购物娱乐</h4>
    <div style="margin-top:3px;">
    </div>
    </dd>
    </dl>
    <dl>
    <dt class="i11"></dt>
    <dd>
    <h4>休闲度假</h4>
    <div style="margin-top:3px;">
    </div>
    </dd>
    </dl>
    <dl>
    <dt class="i14"></dt>
    <dd>
    <h4>其他</h4>
    <div style="margin-top:3px;">
    </div>
    </dd>
    </dl>
-->

    </div>

    <button class="btn btn-primary createPlanBtn" onclick="DrwaRoute();//BtnAddForm();">添加计划</button>
<a class="creaPlanBtn" href="@Url.Action("Detail","TravelPlan")"></a>
<a class="creaPlanBtn" onclick="create_trip()" href="javascript:void(0)"></a>
    </div>
    <!--<div class="col-md-7 col-lg-7">
    <div class="panel panel-primary">
    <h3>推荐景点：</h3>-->
<div class="panel-body">
    <script language="javascript">
    function chkbox(elm) {
        var obj = document.getElementsByName("TAttraction");
        var num = 0;
        for (var i = 0; i < obj.length ; i++)
            if (obj[i].checked) num++;

        if (num > 2) {
            alert("最多选择两个！");
            for (var i = 0; i < obj.length ; i++) {
                elm.checked = false;
            }
        }
    }
</script>
<!--<table class="table table-hover">
    <tr>
        <td>
            <a href="/Attraction/detail/?aid=@(((List<bAttractionData2>)ViewBag.Attractions)[3*j+k].id)">
                <img src="/lvyou/static/images/baidupics/@(((List<bAttractionData2>)ViewBag.Attractions)[3*j+k].surl)/1.jpg" alt="" height="60" width="180" />
            </a>
            <p>
            </p>
            <label>
                <input name="TAttraction" type="checkbox" value="@(((List<bAttractionData2>)ViewBag.Attractions)[3*j+k].id)" onclick="chkbox(this);"> <span>加入旅游计划</span>
            </label>
        </td>
    </tr>

</table>-->
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
<script>

function BtnAddForm()
{
    var myTrip = {
        startPoint:$("#SPOINT").val(),
        endPoint:$("#EPOINT").val(),
        startTIme:$("#STIME").val(),
        endTime:$("#ETIME").val(),
        tripPeriod:$("#TDAYS").val(),
    };

    var myAjax = {
        url: "<?php echo url('travelplan/travelDeal'); ?>",
        type: "POST",
        data: myTrip,
        async: false,
        success: function (data) {
            alert("成功, data = " + data);
        },
        error: function () {
            alert("失败");
        }
    };
    var textContent = $.ajax(myAjax).responseText;

}

$(function(){

});
</script>
<!--百度地图-->

<script type="text/javascript">


    var map = new BMap.Map("allmap");
    map.enableScrollWheelZoom();   //启用滚轮放大缩小，默认禁用
    map.enableContinuousZoom();    //启用地图惯性拖拽，默认禁用
    /*map.centerAndZoom("桂林",12);                   // 初始化地图,设置城市和地图级别。*/
//第一个地点
    var ac = new BMap.Autocomplete(    //建立一个自动完成的对象
        {"input" : "SPOINT"//suggestId
            ,"location" : map
        });

    ac.addEventListener("onhighlight", function(e) {  //鼠标放在下拉列表上的事件
        var str = "";
        var _value = e.fromitem.value;
        var value = "";
        if (e.fromitem.index > -1) {
            value = _value.province +  _value.city +  _value.district +  _value.street +  _value.business;
        }
        str = "FromItem<br />index = " + e.fromitem.index + "<br />value = " + value;

        value = "";
        if (e.toitem.index > -1) {
            _value = e.toitem.value;
            value = _value.province +  _value.city +  _value.district +  _value.street +  _value.business;
        }
        str += "<br />ToItem<br />index = " + e.toitem.index + "<br />value = " + value;
        G("searchResultPanel").innerHTML = str;
    });

    var myValue;
    ac.addEventListener("onconfirm", function(e) {    //鼠标点击下拉列表后的事件
        var _value = e.item.value;
        myValue = _value.province +  _value.city +  _value.district +  _value.street +  _value.business;
        G("searchResultPanel").innerHTML ="onconfirm<br />index = " + e.item.index + "<br />myValue = " + myValue;

        setPlace();
    });
//结束地点
    var ac1 = new BMap.Autocomplete(    //建立一个自动完成的对象
        {"input" : "EPOINT"//suggestId
            ,"location" : map
        });

    ac1.addEventListener("onhighlight", function(e) {  //鼠标放在下拉列表上的事件
        var str = "";
        var _value = e.fromitem.value;
        var value = "";
        if (e.fromitem.index > -1) {
            value = _value.province +  _value.city +  _value.district +  _value.street +  _value.business;
        }
        str = "FromItem<br />index = " + e.fromitem.index + "<br />value = " + value;

        value = "";
        if (e.toitem.index > -1) {
            _value = e.toitem.value;
            value = _value.province +  _value.city +  _value.district +  _value.street +  _value.business;
        }
        str += "<br />ToItem<br />index = " + e.toitem.index + "<br />value = " + value;
        G("searchResultPanel").innerHTML = str;
    });

    var myValue;
    ac1.addEventListener("onconfirm", function(e) {    //鼠标点击下拉列表后的事件
        var _value = e.item.value;
        myValue = _value.province +  _value.city +  _value.district +  _value.street +  _value.business;
        G("searchResultPanel").innerHTML ="onconfirm<br />index = " + e.item.index + "<br />myValue = " + myValue;

        setPlace();
    });

    function setPlace(){
        map.clearOverlays();    //清除地图上所有覆盖物
        function myFun(){
            var pp = local.getResults().getPoi(0).point;    //获取第一个智能搜索的结果
            map.centerAndZoom(pp, 18);
            map.addOverlay(new BMap.Marker(pp));    //添加标注
        }
        var local = new BMap.LocalSearch(map, { //智能搜索
            onSearchComplete: myFun
        });
        local.search(myValue);
    }


    /*百度地图绘制路线*/
    function DrwaRoute(){
        var _geolocation = new BMap.Geolocation();
        _geolocation.getCurrentPosition(function(r){
            if(this.getStatus() == BMAP_STATUS_SUCCESS){
                var mk = new BMap.Marker(r.point);
                map.addOverlay(mk);
                map.panTo(r.point);
                //alert('您的位置：'+r.point.lng+','+r.point.lat);
                var _px = r.point.lng;
                var _py = r.point.lat;
                // 百度地图API功能
                map.centerAndZoom(new BMap.Point(_px, _py), 12);

                var transit = new BMap.DrivingRoute(map, {
                    renderOptions: {
                        map: map,
                        panel: "r-result",
                        enableDragging : true //起终点可进行拖拽
                    },
                });
                 
                var point1 = document.getElementById("SPOINT").value;
                var point2 = document.getElementById("EPOINT").value;
                if (point1 != "" && point2 != "") {

                    $("#warning_text").hide();
                    transit.search(point1, point2);
                }else{
                    $("#warning_text").show();
                }
            }
            else {
                alert('failed'+this.getStatus());
            }
        },{enableHighAccuracy: true});
    }

    DrwaRoute();

    //获取浏览器地址
    var geolocation = new BMap.Geolocation();
    geolocation.getCurrentPosition(function(r){
        if(this.getStatus() == BMAP_STATUS_SUCCESS){
            var mk = new BMap.Marker(r.point);
            map.addOverlay(mk);
            map.panTo(r.point);
            //alert('您的位置：'+r.point.lng+','+r.point.lat);
            theLocation(r.point.lng, r.point.lat);
            setPointName(r.point.lng, r.point.lat);
        }
        else {
            alert('failed'+this.getStatus());
        }
    },{enableHighAccuracy: true})
    // 用经纬度设置地图中心点
    function theLocation(px, py){
            map.clearOverlays();
            var new_point = new BMap.Point(px,py);
            var marker = new BMap.Marker(new_point);  // 创建标注
            map.addOverlay(marker);              // 将标注添加到地图中
            map.panTo(new_point);
    }
    //设置地址地址名称
    function setPointName(px, py){
        var geoc = new BMap.Geocoder();
        pt = new BMap.Point(px,py);
        geoc.getLocation(pt, function(rs){
            var addComp = rs.addressComponents;
            map.centerAndZoom(addComp.province + addComp.city + addComp.district + addComp.street + addComp.streetNumber,12);                   // 初始化地图,设置城市和地图级别。
            $("#SPOINT").attr("placeholder", "您当前地址：" + addComp.province + addComp.city + addComp.district + addComp.street + addComp.streetNumber);
            //alert(addComp.province + ", " + addComp.city + ", " + addComp.district + ", " + addComp.street + ", " + addComp.streetNumber);
        });
    }












    // 百度地图API功能
    function G(id) {
        return document.getElementById(id);
    }


</script>
