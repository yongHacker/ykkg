 
<Admintemplate file="Common/Head"/>
<body class="J_scroll_fixed">
<style>
    .table_form th{
        width: 200px;
    }
</style>
<div class="wrap J_check_wrap">
  <Admintemplate file="Common/Nav"/>
  <div class="h_a">视频修改</div>
  <form name="myform" action="{:U('Video/edit')}" method="post" class="">
  <div class="table_full"> 
  <table width="100%" class="table_form contentWrap">
        <tr>
          <th>视频标题</th>
          <td><input type="text" name="title_zh" value="{$data.title_zh}" class="input" id="title_zh"/></td>
        </tr>
      <tr>
          <th>视频英文标题</th>
          <td><input type="text" name="title_eh" value="{$data.title_eh}" class="input" id="title_eh"/></td>
      </tr>
      <tr>
          <th>视频封面图：</th>
          <td><img src="{$data.img}" id="img" style="width: 150px;height: 100px;margin-right: 20px">
              <Form function="images" parameter="img,image,$data['img'],content"/><span class="gray"> 双击可以查看图片！</span>
          </td>
      </tr>
      <tr>
          <th>视频url地址</th>
          <td><input type="text" name="url" value="{$data.url}" class="input" id="url"/></td>
      </tr>
      </table>
  </div>
  <div class="">
      <div class="btn_wrap_pd">             
        <button class="btn btn_submit mr10 J_ajax_submit_btn" type="submit">修改</button>
        <input name="id" value="{$data.id}" type="hidden" />
      </div>
    </div>
  </form>
</div>
<script src="{$config_siteurl}statics/js/common.js"></script>
<script type="text/javascript" src="{$config_siteurl}statics/js/content_addtop.js"></script>
<script>
//    $('#image').val($('#img').attr('src'));
</script>
</body>
</html>
