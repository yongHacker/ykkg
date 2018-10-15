$(function(){
// 导航栏中的里点击切换active,截取地址栏中url的catid做为判断
    var $li=$("#navbarContent .navbar-nav li");
    function getQueryString(name) {
            var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
            var r = window.location.search.substr(1).match(reg);
            if (r != null)
                return unescape(r[2]);
            return null;
        }
    $li.each(function() {
            var catid=$(this).attr('id').replace('catid','');
            var url_catid=getQueryString("catid");
            if(catid==url_catid){
                $(this).addClass('active').siblings().removeClass('active');
                return false;
            }else{
                //其余默认为首页
                $li.first().addClass('active');
            }
    });

// 两栏布局中的li点击切换
    $(".col-5>.flex-column").on('click', 'li', function(event) {
    event.preventDefault();
    $(this).addClass('active').siblings().removeClass('active');
    });  

  // 顶部导航栏透明度切换颜色切换
  var $body=$("body");
  $(window).on('scroll', function(event) {
      event.preventDefault();
      clearTimeout(timer);
      var timer=setTimeout(function (event){
        var top=$(document).scrollTop();
        if(Math.abs(top)>50){
            $body.addClass('intransparent');
        }else{
            if($body.hasClass('intransparent'))
                $body.removeClass('intransparent');
        }
      },50);
  });    
})

