;(function($,window,document,undefined){
    // 定义Pagination的构造函数
    var Pagination=function(element,current,total,show,remote,loadFirstPage){
        this.$element=element;//当前调用的jQuery对象
        this.current=current;
        this.total=total;
        this.show=show;
        // 当前页面的页码左右两边显示个数（居中）
        var region=Math.floor(show/2);
        //当前页面的页码起始数
        var begin=current-region;
        begin=begin<1?1:begin;
        // 当前页面的页码终止数
        var end=begin+show;
        if(end>total){
            end=total+1;
            begin=end-show;
            begin=begin<1?1:begin;
        }
        this.begin=begin;
        this.end=end;
        this.remote={
            url:remote.url,
            params:remote.params,
            success:remote.success,
        }
        this.loadFirstPage=loadFirstPage;
    };
    // 定义Pagination的方法
    Pagination.prototype={
        init:function(){
            // 判断分页属性是否合理
            if(this.current>this.total&&this.current<1){
                throw new Error("分页属性定义不合理!");
            }
            this.initHtml();
            this.initEvent();
            if(this.remote.url&&this.loadFirstPage){
                this.remote();
            }else{
                this.renderPagination();
            }
            // if(this.remote.url&&)
        },
        initHtml:function(){
                // 拼接DOM元素
                var html='<ul class="pagination">'+
                        '<li class="page-item" data-type="first"><a href="javascript:;" class="page-link">首页</a></li>'+
                        '<li class="page-item" data-type="pre"><a href="javascript:;" class="page-link">上一页</a></li>';
                for (var i = this.begin; i < this.end; i++) {
                    html+='<li class="page-item" data-type="'+i+'"><a href="javascript:;" class="page-link">'+i+'</a></li>';
                }
                html+='<li class="page-item"><a href="javascript:;" class="page-link" data-type="next">下一页</a></li>'+
                        ' <li class="page-item" data-type="end"><a href="javascript:;" class="page-link">尾页</a></li></ul>';
                this.$element.append(html);
                // 为当前页码添加active类
                this.$element.children('ul').children('li[data-type='+this.current+']').addClass('active');
        },
        initEvent:function(){
            //页码点击事件
            this.$element.on('click','li',{page:this},function(event) {
                event.preventDefault();
                // $(this)指向的是li，取得li中的data-type值
                var i=$(this).data("type");
                this.$element.children('ul').children('li[data-type='+this.current+']').addClass('active').siblings().remove('active');
                switch (i) {
                    case "pre":
                        this.current-=1;
                        if(this.current<=1){
                            this.current=1;
                            $(this).siblings('li[data-type=1]').addClass('active');
                            $(this).siblings('li[data-type=pre]').addClass('disabled')
;                        }
                        break;
                    default:
                        // statements_def
                        break;
                }
                // on的额外参数保存调用插件的jquery对象
                event.data.page.doPagination(i);
            });
        },
        doPagination:function(i){
            if(this.remote.url){
                this.remote();
            }else{
                this.renderPagination();
            }
        },
        remote:function(){
            if(typeof this.remote.success==='function'){
                this.getAjax(this,this.url,this.params,this.success,this.current)
            }else{
                throw new Error("remote Error！");
            }
        },
        getAjax:function(pagination,url,data,success,current){
             $.ajax({
                    url:url,
                    method:'get',
                    dataType:'json',
                    data:current,
                    success:function(result){
                        success.call(pagination,result);
                    }
                });
        },
        
    }


    function throwError(){
        throw new Error("Missing parameter!");
    }
    // 在插件中使用Pagination对象
    $.fn.pagination=function({
        //配置函数参数的默认值和对象的解构赋值的默认值
        current=1,//当前页码。
        total=throwError(),//必填项，总页数
        show=throwError(),//必填项 分页显示的页数
        remote={
            url:null,
            params:null,
            success:null
        },
        loadFirstPage=true
    }={}){
        // 创建Pagination的实体
        var pagination=new Pagination(this,current,total,show,remote,loadFirstPage);
        // 调用方法
        return pagination.init();
    }
})(jQuery,window,document);