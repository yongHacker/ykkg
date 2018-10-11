<template file="Content/header_new.php"/>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>关于我们</title>
</head>
<body>
    <div class="banner-img">
<!--        这不是一张背景图吗？怎么会有中英文标题-->
        <div class=" container">
            <div class="banner-img-title">
                <h1 class="en">{$catData.catdir}</h1>
                <h1 class="zh">{$catData.catname}</h1>
            </div>
        </div>
    </div>
    <div class="content container-fluid">
        <div class="row">
            <div class="col-5">
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
            <div class="col-7 tab-content" id="tabContent">
                <volist name="child" id="vo">
                <div class="tab-pane fade in show" id="{$vo['catid']}">
                   <div class="img-box">
                        <img src="{$vo['article']['thumb']}" alt="">
                   </div>
                    {$vo['article']['content']}
                </div>
                </volist>
     <!--           <div class="tab-pane fade" id="speech">speech</div>
                <div class="tab-pane fade" id="vision">vision</div>
                <div class="tab-pane fade" id="mission">mission</div>
                <div class="tab-pane fade" id="honor">honor</div>
                <div class="tab-pane fade" id="culture">culture</div>
                <div class="tab-pane fade" id="development">development</div>
                <div class="tab-pane fade" id="partner">partner</div>-->
            </div>
        </div>
    </div>
    <script>
        //顶部大图
        var $image = "{$catData['image']}";
        $('.banner-img').css('background-image','url('+$image+')');

        $('.nav li:first').addClass('active');
        $('#tabContent .tab-pane:first').addClass('active');

        //ajax请求后台显示文章
        /*$(function () {
            var catid = $('.nav li:first a').attr('data-id');
            $.ajax({
                type:'post',
                url:"{:U('Index/ajax_article')}",
                data:{
                    catid:catid
                },
                dataType:'json',
                success:function (res) {
                    console.log(res.data);
                }
            })
        });*/

    </script>
</body>
</html>
<template file="Content/footer_new.php"/>