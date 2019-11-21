<?php 
require_once "sqlconfig.php";

$regcheck=new DB();
$link = $regcheck->connect();
$id=$_POST['id'];
$password=$_POST['password'];
$secondpassword=$_POST['secondpassword'];

if ($password != $secondpassword) {
	echo "<script> alert(' 输入的密码和确认密码不相同');location='register.php';</script>";
}

$alt="select * from user where username = '$id'";
$res = $regcheck->datafun($link,$alt);

if ($id!=null && $password!=null) {
	$regsecond=new DB();
	$link = $regsecond->connect();
	$sql="insert into user (username,password) values ('$id','$password')";

	for ($i=0; $i<count($res);$i++) { 
		if ($id!=$res[$i]['username']) {
			$res=$regsecond->reg($link,$sql);
		}
		if ($id==$res[$i]['username']) {
			echo "<script>alert('注册失败，该账号已被注册！');location='register.php';</script>";
		}
	}

}else{
    echo "<script>alert('请输入账号和密码');location='register.php';</script>";
	}
 ?>
