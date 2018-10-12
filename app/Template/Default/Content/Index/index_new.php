<template file="Content/header_new.php"/>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>永坤首页</title>
    <link rel="stylesheet" type="text/css" href="{$config_siteurl}statics/default/ykkg/css/index.css">
    <meta name="keywords" content="{$SEO['keyword']}"/>
    <meta name="description" content="{$SEO['description']}"/>
</head>
<body>
    <!-- 轮播图 -->
    <div class="carousel slide" id="banner-slider" data-ride="carousel">
        <!-- 指示符 -->
        <ul class="carousel-indicators">
            <li data-target="#banner-slider" data-slide-to="0" class="active"></li>
            <li data-target="#banner-slider" data-slide-to="1"></li>
            <li data-target="#banner-slid er" data-slide-to="2"></li>
        </ul>
        <!-- 轮播图片 -->
        <div class="carousel-inner">
            <volist name="ad" id="vo" offset="0" length='3'>
                <div class="carousel-item">
                    <img src="{$vo.image}" >
                </div>
            </volist>
        </div>
        <!-- 左右切换按钮 -->
        <a href="#banner-slider" class="carousel-control-prev" data-slide="prev" aria-hidden="true">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#banner-slider" class="carousel-control-next" data-slide="next" aria-hidden="true"><span class="carousel-control-next-icon"></span></a>
        <!-- 轮播图中间的文字图片 -->
        <div class="carousel-text">
            <img src="{$config_siteurl}statics/default/ykkg/img/carousel/carousel_text.png" alt="" width="899" height="279" class="img-fluid">
        </div>
    </div>
    <!-- about us -->
    <div class="about-us">
            <div class="title">
                <h2 class="en">ABOUT US</h2>
                <h2 class="zh">关于我们</h2>
            </div>
            <div class="container clearfix">
                <div class="row">
                    <div class="col-md-6">
                        <div class="intro float-left">
<!--                            <h3 class="en">Connect the world with gold.</h3>-->
<!--                            <p class="en">-->
<!--                                YONGKUN Holdings Group is a China Well-known Group who integrated internet, gold trading and financial precious metal investment to offer customer creative online to offline gold shopping, investment, trading, exchanging, consulting and analyzing service.</p>-->
<!--                                <p class="en">Company registered capital of 112 million RMB, the business covers pure gold products processing, selling, leasing, repurchasing, precious metals T + D, Public funds, and private equity funds. YONGKUN Holdings is a China gold association governing unit and the Shanghai gold exchange cooperation unit. YONGKUN Holdings has also gained honor the good reputation of financial enterprise and top customer satisfied brand enterprise in Zhejiang province.</p>-->
<!--                            <h3 class="zh">汇天地正，融天下金。</h3>-->
<!--                            <p class="zh">-->
<!--                            永坤控股，国内知名的互联网+黄金+金融贵金属综合性投资服务商；致力于为客户提供创新的O2O黄金消费、投资、交易、置换、咨询与分析等服务。</p>-->
<!--                                <p class="zh">公司注册资金1.12亿元，集团业务涵盖纯金制品专属加工、销售、租赁、回购、贵金属T+D、公募基金、私募基金等众多领域，是中国黄金协会理事单位、上海黄金交易所协作单位、浙江省优秀金融企业、中国黄金交易客户满意最佳典范品牌企业。-->
<!--                            </p>-->
                            {$about.content}
                            <button class="btn btn-link" type="button" onclick="window.location.href='{:U('Index/intoYK',array('catid'=>13))}'">LEARN MORE 了解详情></button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img-box float-right hidden-md-down" >
                            <img src="{$about.thumb}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- news -->
    <div class="news">
        <div class="title">
                <h2 class="en">NEWS CENTER</h2>
                <h2 class="zh">新闻中心</h2>
        </div>
        <div class="container clearfix">
            <div class="news-img-box">
                <div class="row">
                    <volist name="video" id="vo">
                        <div class="col-md-6 ">
                            <div class="embed-responsive">
                               <!-- <iframe src="http://open.iqiyi.com/developer/player_js/coopPlayerIndex.html?vid=a6175599346e1a3e5c9aaf49b9beab86&tvId=1055891000&accessToken=2.f22860a2479ad60d8da7697274de9346&appKey=3955c3425820435e86d0f4cdfe56f5e7&appId=1368&height=100%&width=100%" frameborder="0" allowfullscreen="true" width="100%" height="100%"></iframe> -->
                               <!-- <iframe height=498 width=510 src='http://player.youku.com/embed/XMzY4MjIwODA5Mg==' frameborder=0 'allowfullscreen'='true'></iframe> -->
                               <!-- <embed src="http://player.video.iqiyi.com/a6175599346e1a3e5c9aaf49b9beab86/0/0/v_19rrdhhkyc.swf-albumId=1055891000-tvId=1055891000-isPurchase=0-cnId=25" allowFullScreen="true" quality="high" width="480" height="350" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed> -->
                                <?php echo htmlspecialchars_decode($vo['url']) ?>
                                    <!-- 为兼容移动端视频可播放，故放入ifream，样式未能修改 -->
                            </div>
                        </div>
                    </volist>
                </div>
            </div>
            <button class="btn btn-link" type="button" onclick="window.location.href='{:U('Index/news_center')}'">MORE 更多 ></button>
        </div>
    </div>
    <!-- partner -->
    <div class="partner">
        <div class="title">
            <h2 class="en">WIN-WIN</h2>
            <h2 class="zh">合作共赢</h2>
        </div>
        <div class="container">
            <h3 class="en">Yongkun has established good strategic cooperative relations with Shanghai Mint Co., Ltd., Bank of China, Industrial and Commercial Bank of China, China Ping An, China People's Insurance and other well-known financial institutions to promote the development of the financial system</h3>
            <h3 class="zh">永坤先后与上海造币有限公司、中国银行、中国工商银行、中国平安、中国人民保险等知名金融机构建立良好战略合作关系，共促金融体系发展。</h3>
            <div class="partner-img-box">
               <!-- 把每个合作伙伴logo放上去，并加跳转链接（百度搜）-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-2"><a href="http://www.boc.cn/" target="_blank"><img src="{$config_siteurl}statics/default/ykkg/img/partner/1.png" alt="" class="img-fluid"></a></div>
                        <div class="col-md-2"><a href="http://www.picc.com/" target="_blank"><img src="{$config_siteurl}statics/default/ykkg/img/partner/2.png" alt="" class="img-fluid"></a></div>
                        <div class="col-md-2"><a href="http://www.cgbchina.com.cn/" target="_blank"><img src="{$config_siteurl}statics/default/ykkg/img/partner/3.png" alt="" class="img-fluid"></a></div>
                        <div class="col-md-2"><a href="http://www.spdb.com.cn/" target="_blank"><img src="{$config_siteurl}statics/default/ykkg/img/partner/4.png" alt="" class="img-fluid"></a></div>
                        <div class="col-md-2"><a href="http://shzb.cbpm.cn/" target="_blank"><img src="{$config_siteurl}statics/default/ykkg/img/partner/5.png" alt="" class="img-fluid"></a></div>
                        <div class="col-md-2"><a href="http://www.icbc.com.cn/" target="_blank"><img src="{$config_siteurl}statics/default/ykkg/img/partner/6.png" alt="" class="img-fluid"></a></div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"><a href="http://www.cmbc.com.cn/" target="_blank"><img src="{$config_siteurl}statics/default/ykkg/img/partner/7.png" alt="" class="img-fluid"></a></div>
                        <div class="col-md-2"><a href="http://www.abchina.com/" target="_blank"><img src="{$config_siteurl}statics/default/ykkg/img/partner/8.png" alt="" class="img-fluid"></a></div>
                        <div class="col-md-2"><a href="https://www.pingan.com/" target="_blank"><img src="{$config_siteurl}statics/default/ykkg/img/partner/9.png" alt="" class="img-fluid"></a></div>
                        <div class="col-md-2"><a href="https://www.chinalife.com.cn/" target="_blank"><img src="{$config_siteurl}statics/default/ykkg/img/partner/10.png" alt="" class="img-fluid"></a></div>
                        <div class="col-md-2"><a href="http://www.chinapost.com.cn/" target="_blank"><img src="{$config_siteurl}statics/default/ykkg/img/partner/11.png" alt="" class="img-fluid"></a></div>
                        <div class="col-md-2"><a href="http://www.citicbank.com/" target="_blank"><img src="{$config_siteurl}statics/default/ykkg/img/partner/12.png" alt="" class="img-fluid"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <template file="Content/footer_new.php"/>
</body>
<script>
    //轮播图
    $('.carousel-inner .carousel-item:first').addClass('active');

</script>
</html>