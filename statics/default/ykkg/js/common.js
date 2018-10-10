$(function(){
// 导航栏中的里点击切换active
    var $li=$("#navbarContent .navbar-nav li");
    var url=location.pathname;
    var mod_url=url.slice(url.lastIndexOf("/")+1,url.lastIndexOf("."));
    $li.each(function() {
        // 截取导航栏中的url
            var src=$(this).find('a').attr('href');
            var mod_src=src.slice(src.lastIndexOf("/")+1,src.lastIndexOf("."));
            var num=mod_url.indexOf(mod_src);
            // 判断导航栏中的字符串是否为地址栏中字符的子串，且从第一位开始匹配
            if(num==0){
                $(this).addClass('active').siblings().removeClass('active');
                return false;
            }else{
                //其余默认为首页
                $(this).prev().addClass('active').siblings().removeClass('active');
            }
    });

// 两栏布局中的li点击切换
    $(".col-5>.flex-column").on('click', 'li', function(event) {
    event.preventDefault();
    $(this).addClass('active').siblings().removeClass('active');
    });    
})

