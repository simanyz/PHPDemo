<!DOCTYPE html>
<html>
<head>
	<title>注册</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/index1.css">
	<style type="text/css">
		body:{height: 100%;}
	</style>
</head>
<body>

	<div class="index_01" > 
	<table style="width: 100%;height:100%;" >
	  <tr>
	    <td align="center" >
	      <form action="doregister.php " name="dl" method="post">
	      <table  align="center" width=350 height=230; style="font-size:25px;">
	      <tr align="center"> 
	          <td colspan="2" style="font-size:35px;">注册用户</td>
	      </tr>
	      <tr>
	          <td align="center">用户名</td>
	          <td>
	          <input type="name" maxlength="20" name="id" placeholder="手机号/邮箱" style="width:180px;font-size:20px;border-radius: 8px; ">
	          </td>
	      </tr>
	      <tr>
	          <td align="center">密   码</td>
	          <td >
	          <input name="password" type="password" maxlength="16" placeholder="请输入密码" style="width:180px;font-size:20px;border-radius: 8px; ">
	      </td>
	      </tr>
	      <tr>
	          <td align="center">Again</td>
	          <td>
	          <input name="confirmPassword" type="password" maxlength="16" placeholder="请再次输入密码" style="width:180px;font-size:20px;border-radius: 8px; ">
	          </td>
	      </tr>
	      <tr>
	        <td colspan="2" align="center">
	        <input type="button" name='zu' value='登陆' οnclick="location.href='index.php'" style="font-size:17px;border-radius: 12px;" class="btn"/>
	        <input type="reset" name="zu" value="重置" style="font-size:17px;border-radius: 12px;" class="btn"> 
	        <input type="submit" name="zu" value="注册" style="font-size:17px;border-radius:12px;" class="btn"/>
	        </td>
	      </tr>
	   </table>
	   </form>
	    </td>
	  </tr>
	</table>
	</div>
</body>
</html>