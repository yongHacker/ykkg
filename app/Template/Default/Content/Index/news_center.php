<template file="Content/header_new.php"/>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>永坤首页</title>
    <link rel="stylesheet" type="text/css" href="{$config_siteurl}statics/default/ykkg/css/news_center.css">
</head>
<body>
    <!-- 轮播图 -->
    <div class="carousel slide" id="banner-slider" data-ride="carousel">
        <!-- 指示符 -->
        <ul class="carousel-indicators">
            <li data-target="#banner-slider" data-slide-to="0" class="active"></li>
            <li data-target="#banner-slider" data-slide-to="1"></li>
            <li data-target="#banner-slider" data-slide-to="2"></li>
        </ul>
        <!-- 轮播图片 -->
        <div class="carousel-inner">
            <volist name="ad" id="vo" offset="0" length='3'>
                <div class="carousel-item">
                    <img src="{$vo.image}">
                </div>
            </volist>
        </div>
        <!-- 左右切换按钮 -->
        <a href="#banner-slider" class="carousel-control-prev" data-slide="prev" aria-hidden="true">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#banner-slider" class="carousel-control-next" data-slide="next" aria-hidden="true"><span class="carousel-control-next-icon"></span></a>
    </div>
    <!-- 导航条 -->
    <div class="container">
        <ol class="breadcrumb" style="">
            <li class="breadcrumb-item"><a href="{:U('Index/index')}">首页 HOME</a></li>
            <li class="breadcrumb-item active"><a href="{:U('Index/news_center')}">新闻中心 NEWS CENTER</a></li>
        </ol>
    </div>
    <div class="title">
        <h2 class="en">NEWS CENTER</h2>
        <h2 class="zh">新闻中心</h2>
    </div>
    <!-- news_center -->
    <div class="news-center container">
        <div class="row">
            <!--要弄一个遮罩层，图片要覆盖在视频上方-->
            <div class="col-lg-6 col-md-12 text-center">
                <div class="embed-responsive">
                    <!--<video src="" controls="true" poster="{$vo.img}" preload="auto"> 抱歉，您的浏览器不支持内嵌视频</video>-->
                    <!-- <embed src="http://player.video.iqiyi.com/04d4ed8fe6ab306ff2482b4df1d0ea39/0/0/v_19rr65m6jw.swf-albumId=1413828800-tvId=1413828800-isPurchase=0-cnId=25" allowFullScreen='true' quality='high' width='480' height='350' align='middle' allowScriptAccess='always' type='application/x-shockwave-flash'></embed> -->
                </div>
                <h3>{$vo.title_zh}</h3>
            </div>
        </div>
        <div class="pagination-box">
           <!--  <ul class="pagination">
                <li class="page-item"><a href="" class="page-link">首页</a></li>
                <li class="page-item"><a href="" class="page-link">上一页</a></li>
                <li class="page-item active"><a href="" class="page-link">1</a></li>
                <li class="page-item" data-type="1"><a href="" class="page-link">2</a></li>
                <li class="page-item"><a href="" class="page-link">下一页</a></li>
                <li class="page-item"><a href="" class="page-link">尾页</a></li>
            </ul> -->
            {$page}
        </div>
        <input type="hidden" name="count" id="count" value="{$count}">
    </div>
    <!--分页-->
    <template file="Content/footer_new.php"/>

</body>
<script src="{$config_siteurl}statics/default/ykkg/js/news_center.js"></script>
<!-- <script src="{$config_siteurl}statics/default/ykkg/js/pagination.js"></script> -->
<script>
    //轮播图
    $('.carousel-inner .carousel-item:first').addClass('active');
    //隐藏部分分页信息
    $('.all').hide();
    $('.pageindex').hide();
    // 根据返回结果，渲染页面
    // function ajaxCallback(result){
    //     console.log(result);
    // };
    // $(".pagination-box").pagination({
    //     total:$("input[name=count]").val(),
    //     pageSize:6,
    //     remoteParam:{
    //         url:"/index.php?a=ajax_video",
    //         success:ajaxCallback,
    //     }
    // })
</script>
</html>