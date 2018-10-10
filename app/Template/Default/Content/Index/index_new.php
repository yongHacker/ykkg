<template file="Content/header_new.php"/>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>永坤首页</title>
    <link rel="stylesheet" type="text/css" href="{$config_siteurl}statics/default/ykkg/css/index.css">
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
                <div class="carousel-item active">
                    <img src="{$vo.image}"  style="background:#FFFFFF center 0 no-repeat;">
                </div>
            </volist>
        </div>
        <!-- 左右切换按钮 -->
        <a href="#banner-slider" class="carousel-control-prev" data-slide="prev" aria-hidden="true">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#banner-slider" class="carousel-control-next" data-slide="next" aria-hidden="true"><span class="carousel-control-next-icon"></span></a>
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
                            <button class="btn btn-link" type="button" onclick="window.location.href='./news_center.php'">LEARN MORE 了解详情></button>
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
                    <div class="col-md-6"><a href="#"><img src="../public/img/1.jpg" alt=""></a></div>
                    <div class="col-md-6"><a href="#"><img src="../public/img/1.jpg" alt=""></a></div>
                    <div class="col-md-6"><a href="#"><img src="../public/img/1.jpg" alt=""></a></div>
                    <div class="col-md-6"><a href="#"><img src="../public/img/1.jpg" alt=""></a></div>
                </div>
            </div>
            <button class="btn btn-link" type="button" onclick="window.location.href='./news_center.php'">MORE 更多 ></button>
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
                <div class="container">
                    <div class="row">
                        <div class="col-md-2"><a href="#"><img src="../public/img/logo.png" alt="" class="img-fluid"></a></div>
                        <div class="col-md-2"><a href="#"><img src="../public/img/logo.png" alt="" class="img-fluid"></a></div>
                        <div class="col-md-2"><a href="#"><img src="../public/img/logo.png" alt="" class="img-fluid"></a></div>
                        <div class="col-md-2"><a href="#"><img src="../public/img/logo.png" alt="" class="img-fluid"></a></div>
                        <div class="col-md-2"><a href="#"><img src="../public/img/logo.png" alt="" class="img-fluid"></a></div>
                        <div class="col-md-2"><a href="#"><img src="../public/img/logo.png" alt="" class="img-fluid"></a></div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"><a href="#"><img src="../public/img/logo.png" alt="" class="img-fluid"></a></div>
                        <div class="col-md-2"><a href="#"><img src="../public/img/logo.png" alt="" class="img-fluid"></a></div>
                        <div class="col-md-2"><a href="#"><img src="../public/img/logo.png" alt="" class="img-fluid"></a></div>
                        <div class="col-md-2"><a href="#"><img src="../public/img/logo.png" alt="" class="img-fluid"></a></div>
                        <div class="col-md-2"><a href="#"><img src="../public/img/logo.png" alt="" class="img-fluid"></a></div>
                        <div class="col-md-2"><a href="#"><img src="../public/img/logo.png" alt="" class="img-fluid"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <template file="Content/footer_new.php"/>
</body>
</html>