// 当前页数
var pagenumber;
// 总页数
var totalnumber;
// 分页栏显示的页数
var paginationmax;
/*<ul class="pagination">
                <li class="page-item"><a href="" class="page-link">首页</a></li>
                <li class="page-item"><a href="" class="page-link">上一页</a></li>
                <li class="page-item active"><a href="" class="page-link">1</a></li>
                <li class="page-item"><a href="" class="page-link">2</a></li>
                <li class="page-item"><a href="" class="page-link">下一页</a></li>
                <li class="page-item"><a href="" class="page-link">尾页</a></li>
</ul>*/

// 点击页签时样式的变化
function clickChange(ev){
    ev= event||window.event;
    pageShow($(ev.target).parent());
    $(ev.target).closest("ul").children('li').each(function(index, el) {
        if($(el).hasClass('active')){
            $(el).removeClass('active');
        }
    });
    // 点击页码页签
    var type=$(ev.target).parent().data('type');
    switch (type) {
        case "pre":
            pagenumber-=1;
            if(pagenumber<=1){
                pagenumber=1;
                $(ev.target).closest('ul').children('li[data-type=1]').addClass('active');
                $(ev.target).closest('ul').children('li[data-type=pre]').addClass('disabled');
            }else{
                $(ev.target).closest('ul').children('li[data-type='+pagenumber.toString()+']').addClass('active');
                $(ev.target).closest('ul').children('li[data-type=pre]').removeClass('disabled');
                $(ev.target).closest('ul').children('li[data-type=next]').removeClass('disabled');
            }
            break;
        case "next":
            pagenumber+=1;
            if(pagenumber>=totalnumber){
                pagenumber=totalnumber;
                $(ev.target).closest('ul').children('li[data-type='+totalnumber+']').addClass('active');
                $(ev.target).closest('ul').children('li[data-type=next]').addClass('disabled');
            }else{
                $(ev.target).closest('ul').children('li[data-type='+pagenumber.toString()+']').addClass('active');
                $(ev.target).closest('ul').children('li[data-type=pre]').removeClass('disabled');
                $(ev.target).closest('ul').children('li[data-type=next]').removeClass('disabled');
            }
            break;
        case "first":
            pagenumber=1;
                $(ev.target).closest('ul').children('li[data-type='+pagenumber.toString()+']').addClass('active');
                $(ev.target).closest('ul').children('li[data-type=pre]').addClass('disabled');
                $(ev.target).closest('ul').children('li[data-type=next]').removeClass('disabled');
            break;
        case "end":
            pagenumber=totalnumber;
                $(ev.target).closest('ul').children('li[data-type='+pagenumber.toString()+']').addClass('active');
                $(ev.target).closest('ul').children('li[data-type=pre]').removeClass('disabled');
                $(ev.target).closest('ul').children('li[data-type=next]').addClass('disabled');
            break;
        default:
            pagenumber=Number($(ev.target).parent().data('type'));
            $(ev.target).parent().addClass('active');
            $(ev.target).closest('ul').children('li[data-type=pre]').removeClass('disabled');
            $(ev.target).closest('ul').children('li[data-type=next]').removeClass('disabled');
            break;
    }
}
// 展示哪些页码 
function pageShow(element) {
    // 当前页数
    var a=Number(pagenumber);
    // 分页显示页数的一半
    var b=parseInt(.5*Number(paginationmax));
    // 总页数
    var c=Number(totalnumber);

    // 页码数在分栏页数的一半以内
    if(a>=1&&a<=b){
        element.parent().children('li').each(function(index, el) {
            if(Number($(el).data('type'))>=1+Number(paginationmax)&&Number($(el).data('type'))<=c){
                $(el).css('display','none');
            }else{
                $(el).css('display', 'inline-block');
            }
        });
        // 页码数在分栏页数的一半以外且在总页数除去一半分栏页数以内
    }else if (a>b&&a<=(c-b)) {
        element.parent().children('li').each(function(index, el) {
            if(Number($(el).data('type'))>=1&&Number($(el).data('type'))<=a-b||Number($(el).data('type'))>a+b&&Number($(el).data('type'))<=c){
                $(el).css('display', 'none');
            }else{
                $(el).css('display','inline-block');
            }
        });
    }else if(a>c-b){
        element.parent().children('li').each(function(index, el) {
            if(Number($(el).data('type'))>=1&&Number($(el).data('type'))<=c-b){
                $(el).css('display', 'none');
            }else{
                $(el).css('display', 'inline-block');
            }
        });
    }
}
function processData(){
    console.log('当前页码',pagenumber);
}

function initPagination(element) {
    pagenumber= Number(element.data('pagenumber'));
    totalnumber=Number(element.data('totalnumber'));
    paginationmax=Number(element.data('paginationmax'));
    if(totalnumber>=1&&pagenumber<=totalnumber&&paginationmax<=totalnumber){
        var content='<ul class="pagination">'+
                '<li class="page-item" data-type="first"><a href="javascript:;" class="page-link">首页</a></li>'+
                '<li class="page-item" data-type="pre"><a href="javascript:;" class="page-link">上一页</a></li>';
        for(var i=0;i<totalnumber;i++){
            content+='<li class="page-item" data-type="'+(i+1)+'"><a href="javascript:;" class="page-link">'+(i+1)+'</a></li>';
        }
        content +='<li class="page-item"><a href="javascript:;" class="page-link" data-type="next">下一页</a></li>'+
               ' <li class="page-item" data-type="end"><a href="javascript:;" class="page-link">尾页</a></li></ul>';
        element.append(content);
        // 设置为当前页的页签添加样式
        element.children('ul').children('li[data-type='+pagenumber+']').addClass('active');
        element.children('ul').children('li').click(clickChange);
        element.children('ul').children('li').click(processData);
        // 显示哪些页签
        pageShow(element.children('ul').children('li[value='+pagenumber+']'));
    }else{
        console.log("分页属性定义不合理");
    }
}
// 控制播放视频数量为1
var $vids=$("video");
$vids.on('play', function(event) {
    event.preventDefault();
    var i=$vids.index(event.target);
    $vids.each(function(index) {
        if(!this.paused&&index==i){
            this.play();
        }else{
            this.pause();
        }
    });
});