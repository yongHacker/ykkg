<template file="Content/header_new.php"/>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>产业格局</title>
    <link rel="stylesheet" href="{$config_siteurl}statics/default/ykkg/css/industrial_pattern.css">
</head>
<body>
    <div class="banner-img">
        <div class=" container">
            <!-- <div class="banner-img-title">
                <h1 class="en">{$catData.catdir}</h1>
                <h1 class="zh">{$catData.catname}</h1>
            </div> -->
        </div>
    </div>
    <div class="content container-fluid">
        <div class="row">
            <div class="col-4">
                <ul class="nav flex-column" role="tablist">
                <volist name="child" id="vo">
                    <li class="nav-item">
                        <a href="#{$vo.catid}" class="nav-link" data-toggle="tab">
                            <img src="{$vo.icon}" width="35" height="30" alt="">
                            <div class="option-text">
                                <p class="en">{$vo.catdir}</p>
                                <p class="zh">{$vo.catname}</p>
                            </div>
                        </a>
                    </li>
                </volist>
            </ul>
            </div>
            <div class="col-8 tab-content" id="tabContent">
                <volist name="child" id="vo">
                    <div class="tab-pane fade in show" id="{$vo['catid']}">
                        <div class="logo-box">
                            <img src="{$config_siteurl}statics/default/ykkg/img/content/logo.png" alt="">
                        </div>
                        <div class="img-box">
                            <img src="{$vo['article']['thumb']}" alt="">
                        </div>
                        {$vo['article']['content']}
                        <button class="btn btn-link" type="button" onclick="window.location.href='{:U('Index/activity_detail',array('id'=>$vo['article']['id'],'catid'=>$vo['article']['catid']))}'">LEARN MORE 了解详情></button>
                    </div>
                </volist>
                <div class="tab-pane fade" id="investment">investment</div>
            </div>
        </div>
    </div>
</body>
<script>
    //顶部大图
    var $image = "{$catData['image']}";
    $('.banner-img').css('background-image','url('+$image+')');
    //tab选项卡切换焦点效果
    $('.nav li:first').addClass('active');
    $('#tabContent .tab-pane:first').addClass('active');
</script>
</html>
<template file="Content/footer_new.php"/>