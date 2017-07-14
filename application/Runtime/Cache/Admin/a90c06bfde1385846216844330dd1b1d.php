<?php if (!defined('THINK_PATH')) exit();?>
<html>
<head>
<meta charset="UTF-8" />
<title>后台管理界面</title>
<script src="/furitp/Public/js/jquery.min.js"></script>
<style type="text/css">
	a.hover,a.link,a.active,a.visited{
  color: black;
}
</style>
</head> 

<body>
	<div style="width:100%;height:50px;border-bottom:1px solid #e5e5e5;">
		<div style="float:right;width:200px;font-size:12px;line-height:50px;color:#a5a5a5;text-align:right;">
			<a href="">网站首页</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?php echo U("Admin/userLogout");?>">退出</a>
		</div>
	</div>
	<div style="float:left;width:20%;border-right:1px solid #e5e5e5;height:600px;">
		<div style="width:100%;height:40px;margin-top:5px;background-color:#f5f5f5;line-height:40px;"><a href="javascript:void(0);" _href="<?php echo U("Admin/index");?>" style="text-decoration:none;" class="menu" >&nbsp;&nbsp;账户管理</a></div>
		<div style="width:100%;height:40px;margin-top:5px;background-color:#f5f5f5;line-height:40px;"><a href="javascript:void(0);" _href="<?php echo U("Img/index");?>"  style="text-decoration:none;" class="menu">&nbsp;&nbsp;图片管理</a></div>
		<div style="width:100%;height:40px;margin-top:5px;background-color:#f5f5f5;line-height:40px;"><a href="javascript:void(0);" _href="<?php echo U("Cate/index");?>"  style="text-decoration:none;" class="menu">&nbsp;&nbsp;分类管理</a></div>
		<div style="width:100%;height:40px;margin-top:5px;background-color:#f5f5f5;line-height:40px;"><a href="javascript:void(0);" _href="<?php echo U("Article/index");?>" style="text-decoration:none;"  class="menu">&nbsp;&nbsp;文章管理</a></div>
		<div style="width:100%;height:40px;margin-top:5px;background-color:#f5f5f5;line-height:40px;"><a href="javascript:void(0);" _href="<?php echo U("Sys/index");?>"  style="text-decoration:none;display:none;" class="menu">&nbsp;&nbsp;系统管理</a></div>
	</div>
	<iframe src="right.html" id="rightr" style="width:79%;float:left;border:0px;height:100%;" scrolling="no"></iframe>
<script>
$(document).ready(function(){
	$(".menu").click(function(){
		var jumpurl = $(this).attr("_href");
		$("#rightr").attr("src",jumpurl);
	});
});
</script>
</body>
</html>