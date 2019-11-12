<!DOCTYPE html>
<html>
<head>
	<title>登录页面</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/index1.css">
	<style type="text/css">
		
	</style>
</head>
<body>
<div class="index_01">
	<table>
		<tr>
			<td align="center">
				<table align="center" width="350" height="230" class="index_table">
					<form method="post" action="doloading.php" name="frmlogin">
						<tr align="center" style="font-size: 25px">
							<td colspan="2" style="font-size: 35px">
								用户登录
							</td>
						</tr>

						<tr>
							<td align="center" style="font-size: 25px;">
								用户名
							</td>
							<td>
								<input type="name" name="uid" maxlength="16" placeholder="请输入帐号" style="width: 180px;font-size: 20px;border-radius: 9px;">
							</td>
						</tr>

						<tr>
							<td align="center" style="font-size: 25px;">
								密码
							</td>
							<td>
								<input type="password" name="password" maxlength="16" placeholder="请输入密码" style="width: 180px;font-size: 20px;border-radius: 9px;">
							</td>
						</tr>

						<tr align="center">
							<td colspan="2">
								<input type="submit" name="denlgu" value="登录" class="btn">
								<input type="reset" name="rs" value="重置" class="btn">
								<input type="button" name="zhuce" value="注册" onclick="window.location.href='register.php'" class="btn">
							</td>
						</tr>


						
					</form>
					
				</table>
			</td>
		</tr>
	</table>

</div>
</body>
</html>