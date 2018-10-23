<!DOCTYPE html>
<html lang="en" style="font-size: 16px">

<head>
    <meta charset="UTF-8">
    <meta lang="zh">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>永坤控股</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{$config_siteurl}statics/default/ykkg/lib/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="{$config_siteurl}statics/default/ykkg/css/header.css">
    <link rel="stylesheet" href="{$config_siteurl}statics/default/ykkg/css/common.css">
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <header>
    <nav class="navbar navbar-expand fixed-top navbar-light">
        <div class="container">
           <a href="./index.php" class="navbar-brand" id="brand"><img src="{$config_siteurl}statics/default/ykkg/img/logo.png" alt="" ></a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="aria-label">
               <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarContent">
               <ul class="navbar-nav">
                   <volist name="category" id="vo">
                   <li class="nav-item" id="catid{$vo.catid}">
                       <a href="{$vo.url}&catid={$vo.catid}" class="nav-link">
                           <p class="en">{$vo.catdir}</p>
                           <p class="zh">{$vo.catname}</p>
                       </a>
                   </li>
                   </volist>
               </ul>
               <a href="javascript:;" class="navbar-brand hidden-md-down" id="Tel"><img src="{$config_siteurl}statics/default/ykkg/img/small/phone.png" alt=""><span>400-8819-958</span></a>
           </div> 
        </div>
    </nav>
    </header>
    <!-- jQuery -->
    <script src="{$config_siteurl}statics/default/ykkg/lib/jQuery/jquery-1.9.1.min.js"></script>
    <!-- Bootstrap -->
    <script src="{$config_siteurl}statics/default/ykkg/lib/bootstrap/bootstrap.js"></script>
    <script src="{$config_siteurl}statics/default/ykkg/js/header.js"></script>
    <script src="{$config_siteurl}statics/default/ykkg/js/common.js"></script>
<!--     <script>
        //截取地址栏中url的参数值
        function getQueryString(name) {
          debugger;
            var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
            var r = window.location.search.substr(1).match(reg);
            if (r != null)
                return unescape(r[2]);
            return null;
        }
        // 导航栏变色
        var catid = getQueryString("catid");
        $('#catid'+catid+'').addClass('active');
    </script> -->
</body>

</html>