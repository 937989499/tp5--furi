<?php if (!defined('THINK_PATH')) exit();?>
<html>
<head>
<meta charset="UTF-8" />
<title>后台登录</title>
<script src="/furitp/Public/js/jquery.min.js"></script>
</head>
<body>
	<div style="width:200px;height:300px;margin:0px auto;margin-top:100px;border:1px solid #aaa;">
		<div style="width:100%;height:40px;background-color:blue;text-align:center;line-height:40px;color:#fff;">后台登录</div>
		<div style="width:100%;height:100px;"><img src="" style="width:100%;height:100px;" /></div>
		<div style="width:100%;height:160px;">
			<form action="" method="post">
				<input type="text" placeholder="输入账户" value="" id="uid" name="AdminId" style="margin-top:10px;width:80%;margin-left:10%;height:30px;border:1px solid #aaa;" />
				<input type="password" placeholder="输入密码" value="" id="upwd" name="AdminPwd" style="margin-top:10px;width:80%;margin-left:10%;height:30px;border:1px solid #aaa;" />
				<input type="submit" value="登录" id="ubtn" style="margin-top:15px;border:0px;border-radius:3px 3px;width:50%;height:30px;background-color:red;color:#fff;text-align:cente;line-height:30px;margin-left:25%;"/>
			</form>
			<div style="width:100%;height:20px;text-align:center;line-height:20px;font-size:12px;color:#a5a5a5;">@copy 版权本公司所有</div>
		</div>
	</div>
<script>
$(document).ready(function(){
	$("#ubtn").click(function(){
		if($("#uid").val()!=""){}else{
			alert("账户不能为空！");
			return false;
		}
		if($("#upwd").val()!=""){}else{
			alert("密码不能为空！");
			return false;
		}
		/*
		$.post(
			'login.php',
			{uid:$("#uid").val(),upwd:$("#upwd").val()},
			function(data){
				if(data==1){
					window.location.href="main.php";
				}else{
					alert("登录失败！");
					return false;
				}
			}
		);
		*/
	});
});
</script>
</body>
</html>