<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta charset="UTF-8" />
<title>文章管理</title>
<style>
.as_top{
	width: 100%;
    background: #e5e5e5;
    height: 30px;
}
.as_top a{
	text-decoration: none;
    height: 30px;
    line-height: 30px;
    margin-left: 20px;
}
	.as_form{
		padding-left: 15px;
    	border: 1px solid #e5e5e5;
    	width: 318px;
	}
	.as_form textarea{
		width: 300px;
		height: 200px;
		margin-top: 3%;
	}
	.as_form input{
		width: 300px;
		height: 50px;
		margin-top: 3%;
	}
</style>
</head>
<body>
<div class="as_top"  style="width:100%;height:30px;">
	<a href="<?php echo U("Article/index");?>">列表</a>
</div>
<div style="width:100%;height:100%;">
	<form class="as_form" action="<?php echo U("Article/articleadd");?>" method="post" >
		<input type="text" placeholder="文章标题" name="wztitle"  />	<br/>
		<textarea rows="5" cols="40"  placeholder="文章内容" name="wzcontants" ></textarea>	<br/>
		<input type="text" placeholder="图片地址" name="wzurl" />	<br/>
		<input type="text" placeholder="作者" name="wzauthor" />	<br/>
		<input type="text" placeholder="增加时间" name="wzaddtime" />	<br/>
		<input type="text" placeholder="更新时间" name="wzuptime" />	<br/>
		<input type="text" placeholder="类别" name="wzcate" />	<br/>
		<input type="submit" placeholder="提交" style="margin-top: 10px;width: 100px;height: 30px;" />
	</form>
</div>
</body>
</html>