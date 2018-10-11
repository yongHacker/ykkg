<template file="Content/header_new.php"/>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>活动详情</title>
    <link rel="stylesheet" href="../public/css/activities_information_detail.css">
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
    <div class="container act-detail">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">{$detail.title}</h2>
                <p class="act-detail-date text-center">{:date('Y-m-d H:i:s',$detail['updatetime'])}</p>
                <div class="act-detail-imgbox text-center">
                    <img src="{$detail.thumb}" alt="" class="img-fluid">
                </div>
                <div class="act-detail-content">
                {$detail.content}
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    //顶部大图
    var $image = "{$catData['image']}";
    $('.banner-img').css('background-image','url('+$image+')');

</script>
</html>
<template file="Content/footer_new.php"/>