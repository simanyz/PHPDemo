<!DOCTYPE html>
<html>
<head>
	<title>登录页面</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/index.css">
	<style type="text/css">
		
	</style>
</head>
<body>
<div class="main">
        <div class="login-form">
            <h1>留言板登录</h1>
            <div class="head">
                <img src="images/user.png" alt="" />
            </div>
            <form method="post" action="loaddemo.php" name="frmlogin"> 
                <input placeholder="请输入用户名" type="text" class="text" value="用户名" name="loginname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '请输入用户名';}">
                <input placeholder="请输入密码" type="password" value="密码" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"><hr>
                <div class="submit">
                    <input type="submit" name="denglu" onclick="myFunction()" value="登录">
					<input type="button" name="zhuce" value="注册" onclick="window.location.href='register.php'">
                </div>
                <p><a href="#">忘记密码 ?</a></p>
            </form>
        </div>

        <div class="copy-right">
            <p>Be made by<a href="#"> 曾志浩</a></p>
        </div>

    </div>

</body>
</html>