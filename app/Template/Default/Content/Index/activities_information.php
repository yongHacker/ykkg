<template file="Content/header_new.php"/>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>关于我们</title>
    <link rel="stylesheet" href="{$config_siteurl}statics/default/ykkg/css/activities_information.css">
</head>
<body>
    <div class="banner-img">
        <div class=" container">
            <div class="banner-img-title">
                <h1 class="en">{$catData.catdir}</h1>
                <h1 class="zh">{$catData.catname}</h1>
            </div>
        </div>
    </div>
    <div class="container act">
        <div class="row">
            <div class="col-12">
                <volist name="list" id="vo">
                <a href="{:U('Index/activity_detail',array('id'=>$vo['id'],'catid'=>$vo['catid']))}">
                    <div class="act-item">
                        <div class="act-item-imgbox hidden-md-down">
                            <img src="{$vo.thumb}" alt="" class="img-fluid">
                        </div>
                        <div class="act-item-content">
                            <h2>{$vo.title}</h2>
                            <p>{$vo.description}</p>
                            <p class="act-item-date">{:date('Y-m-d H:i:s',$vo['updatetime'])}</p>
                        </div>
                    </div>
                </a>
                </volist>
            </div>
        </div>
        {$page}
    </div>
</body>
<script>
    //顶部大图
    var $image = "{$catData['image']}";
    $('.banner-img').css('background-image','url('+$image+')');
    //隐藏部分分页信息
    $('.all').hide();
    $('.pageindex').hide();
</script>
</html>
<template file="Content/footer_new.php"/>