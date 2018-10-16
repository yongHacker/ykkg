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