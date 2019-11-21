<!DOCTYPE html>
<html>
<head>
	<title>注册帐号</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/index.css">
	<style type="text/css">
		body:{height: 100%;}
	</style>
</head>
<body>

	<div class="main">
        <div class="login-form">
            <h1>注册界面</h1>
            <div class="head">
                <img src="images/user.png" alt="" />
            </div>
            <form action="registerdemo.php " name="dl" method="post"> 
                <input type="name" name="id" placeholder="手机号/邮箱" style="width:180px;font-size:20px;border-radius: 8px; width: 93%;">

                <input name="password" type="password"  placeholder="请输入密码" style="width:180px;font-size:20px;border-radius: 8px; width: 93%;"">

				<input name="secondpassword" type="password"  placeholder="请再次输入密码" style="width:180px;font-size:20px;border-radius: 8px;width: 93%;" ">

                <div class="submit">
                    <input type="button" name='zu' value='登陆' onclick="window.location.href='index.php'" >
	        <input type="submit" name="zu" value="注册" >
                </div>
                
            </form>
        </div>

        <div class="copy-right">
            <p>Be made by<a href="#"> 曾志浩</a></p>
        </div>

    </div>
</body>
</html>