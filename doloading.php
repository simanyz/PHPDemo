<?php 

//包含并运行指定文件(通俗一点，括号内的文件会执行一遍)
require_once "connect.php";
require_once "mysqlconfig.php";

$id=$_POST['uid'];
session_start();
$_SESSION["uid"]=$id;
$password=$_POST['password'];

$ma1=new DB();
	$link=$ma11->connect();
	$sql="select * from tbl_ms where username='$id' and password = 'password' ";
	$res=$ma1->CheckUser($link,$sql);

	if ($res) {
		header("Location:add.php");
	};
	if (!$res) {
		echo "<script> alter('登录失败，帐号或密码错误');location='index.php';</script>";
	};
?>