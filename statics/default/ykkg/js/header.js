// 改变html中rem的大小
function changeFontSize(){
    var offWidth=document.documentElement.clientWidth;
    console.log(offWidth);
    //页面容器宽度最大为1440px;
    offWidth=offWidth<1440?offWidth:1440;
    document.getElementsByTagName("html")[0].style.fontSize = offWidth/100+'px';
}
window.onresize=changeFontSize;
changeFontSize();

