 
<Admintemplate file="Common/Head"/>
<body class="J_scroll_fixed">
<div class="wrap J_check_wrap">
  <Admintemplate file="Common/Nav"/>

  <div class="table_list">
    <table width="100%" cellspacing="0">
      <thead>
        <tr>
          <td width="50"  align="center">ID</td>
          <td width="100" align="center">视频标题</td>
          <td width="100" align="center">视频英文标题</td>
          <td width="100" align="center">视频封面图</td>
          <td width="100" align="center">视频url地址</td>
          <td width="240" align="center">管理操作</td>
        </tr>
      </thead>
      <tbody>
        <volist name="list" id="vo">
          <tr>
            <td align="center">{$vo.id}</td>
            <td align="center">{$vo.title_zh}</td>
            <td align="center">{$vo.title_eh}</td>
            <td align="center"><img src="{$vo.img}" alt="" style="width: 100px;height: 60px"></td>
            <td align="center">{$vo.url}</td>
            <td align="center">
            <?php
		  $op = array();
		  if(\Libs\System\RBAC::authenticate('edit')){
			  $op[] = '<a href="'.U('Video/edit',array('id'=>$vo['id'])).'">修改</a>';
		  }
		  if(\Libs\System\RBAC::authenticate('delete')){
			  $op[] = '<a class="J_ajax_del" href="'.U('Video/deleted',array('id'=>$vo['id'])).'">删除</a>';
		  }
		  echo implode(" | ",$op);
		  ?>
          </tr>
        </volist>
      </tbody>
    </table>
  </div>
    {$page}
</div>
<script src="{$config_siteurl}statics/js/common.js?v"></script>
</body>
</html>
