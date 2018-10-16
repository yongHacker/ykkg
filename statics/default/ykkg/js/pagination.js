;(function($,window,document,undefined){
    // 定义Pagination的构造函数
    var Pagination=function(element,current,total,pageSize,remote){
        this.$element=element;//当前调用的jQuery对象
        this.current=current;
        this.total=total;
        this.pageSize=pageSize;
        this.lastPageIndex=null;
        this.begin=null;
        this.end=null;
        this.remote={
            url:remote.url,
            success:remote.success,
        }
        this.$firstButton=$('<div class="page-item" data-type="first"></div>');
        this.$lastButton=$('<div class="page-item" data-type="last"></div>');
        this.$pre=$('<div class="page-item" data-type="pre"></div>');
        this.$next=$('<div class="page-item" data-type="next"></div>');
        this.$page=$('<ul class="pagination"><ul>');
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
            // ajax请求，获取页面数据
            this.remote();
        },
        initHtml:function(){
            //初始化分页按钮
            this.$firstButton.append('首页');
            this.$lastButton.append('首页');
            this.$pre.append('上一页');
            this.$next.append('下一页');
            this.lastPageIndex=this.getLastPageNumber();
            this.doPagination();
            // 拼接DOM元素
            this.$element.append(this.$firstButton,this.$pre,this.$page,this.$next,this.$lastButton);
        },
        doPagination:function(){
            // 根据当前页码数和最大页码，生成分页结构
            this.renderPagination();
            // 为当前页添加active
            this.$page.find("li[data-type="+this.current+"]").addClass('active');
        },
        renderPagination:function(){
            // 小于10页，直接显示所有页码
            // 第一页和最后一页固定显示。
            // 其他页面按需展示，通常为当前页面的前后两页(即显示5个)
            var html="";
            if(this.lastPageIndex<=10){
                this.begin=1;
                this.end=this.lastPageIndex;
            }else{
                if(this.current>3){
                    var preEllipsis=true;
                }
                if(this.current>this.lastPageIndex-3){
                    var sufEllipsis=true;
                }
                this.begin=(this.current-2<1)?1:this.current;
                this.end=(this.current+5>this.lastPageIndex)?this.lastPageIndex:this.end;
            } 
            for (var i = this.begin; i <= this.lastPageIndex; i++) {
                if(i==1&&preEllipsis==true){
                    html='<li class="page-item" data-type="'+i+'"><a href="javascript:;" class="page-link">'+i+'</a></li>'+
                        '<li class="page-item" data-type="ellipsis" ></li>';
                        continue;
                }
                html+='<li class="page-item" data-type="'+i+'"><a href="" class="page-link">'+i+'</a></li>';
                if(i==this.lastPageIndex&&sufEllipsis==true){
                    html+='<li class="page-item" data-type="ellipsis" ></li>';
                }
            }
            console.log(html);
            this.$page.empty().append(html);
            // if(i==1){
            //     // 页面为1时隐藏上一页和首页
            //     this.$firstButton.hide();
            //     this.$pre.hide();
            // }
            // if(i==this.lastPageIndex){
            //     // 页面为1时隐藏上一页和首页
            //     this.$lastButton.hide();
            //     this.$next.hide();
            // }
        },
        getLastPageNumber:function(){
            //根据总数和每页的显示数量计算出最大页码。
            var i=Math.ceil(this.total/this.pageSize);
            return i;
        },
        initEvent:function(){
            //页码点击事件
            this.$element.on('click','.page-item',{page:this},function(event) {
                event.preventDefault();
                // $(this)指向的是li，取得li中的data-type值
                var i=$(this).data("type");
                console.log(i);
                switch (i) {
                    case "first":
                        event.data.page.current=1;
                           event.data.page.$page.find('li[data-type=1]').addClass('active').siblings().removeClass('active');
                            event.data.page.$element.find('div[data-type=pre]').addClass('disabled');
                            event.data.page.$element.find('div[data-type=first]').addClass('disabled');
                        break;
                    case "next":
                        event.data.page.current+=1;
                        if(event.data.page.current>=event.data.page.lastPageIndex){
                            event.data.page.current=event.data.page.lastPageIndex;
                            event.data.page.$element.find('div[data-type=last]').addClass('disabled');
                            event.data.page.$element.find('div[data-type=next]').addClass('disabled');
                        }
                            event.data.page.$element.find('li[data-type='+event.data.page.current+']').addClass('active').siblings().removeClass('active');
                        break;
                    case "pre":
                        event.data.page.current-=1;
                        if(event.data.page.current<=1){
                            event.data.page.current=1;
                            event.data.page.$element.find('div[data-type=pre]').addClass('disabled');
                            event.data.page.$element.find('div[data-type=first]').addClass('disabled');
                        }
                            event.data.page.$element.find('li[data-type='+event.data.page.current+']').addClass('active').siblings().removeClass('active');
                        break;
                    case "last":
                        event.data.page.current=event.data.page.lastPageIndex;
                           event.data.page.$page.$page.find('li[data-type='+event.data.page.current+']').addClass('active').siblings().removeClass('active');
                            event.data.page.$element.find('div[data-type=next]').addClass('disabled');
                            event.data.page.$element.find('div[data-type=last]').addClass('disabled');
                        break;
                    case "ellipsis":
                        break;
                    default:
                        event.data.page.$page.find('li[data-type='+event.data.page.current+']').addClass('active').siblings().removeClass('active');
                        event.data.page.$element.find('div[data-type=first]').removeClass('disabled');
                        event.data.page.$element.find('div[data-type=last]').removeClass('disabled');
                        event.data.page.$element.find('div[data-type=pre]').removeClass('disabled');
                        event.data.page.$element.find('div[data-type=next]').removeClass('disabled');
                        break;
                }
                // on的额外参数保存调用插件的jquery对象 请求分页页面数据
                event.data.page.remote();
            });
        },
        remote:function(){
            if(typeof this.remote.success==='function'){
                this.$page.find('li[data-type='+this.current+']').addClass('active');
                this.getAjax(this,this.url,this.params,this.success);
            }else{
                throw new Error("remote Error！");
            }
        },
        getAjax:function(pagination,url,data,success,current){
             $.ajax({
                    url:url,
                    method:'get',
                    dataType:'json',
                    data: {
                        current:pagination.current,//当前页码
                        pageSize:pagination.pageSize//每页显示数量
                    },
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
        pageSize=5,//每一页显示的个数
        remote={
            url:null,
            success:null
        },
    }={}){
        console.log(arguments);
        console.log(remote);
        console.log(remote.params);
        console.log(current);
        // var args=arguments;
        // 创建Pagination的实体
        var pagination=new Pagination(this,current,total,pageSize,remote);
        // 调用方法
        return pagination.init();
    }
})(jQuery,window,document);