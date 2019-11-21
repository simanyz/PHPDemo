<?php 

//运行sql连接文件
require_once "sqlconfig.php";

$id=$_POST['loginname'];
session_start();
$_SESSION["loginname"]=$id;
$password=$_POST['password'];
//new一个DB对象使用usercheck方法
$logincheck=new DB();
	$link=$logincheck->connect();
	$sql="select * from user where username='$id' and password = '$password' ";
	//利用usercheck方法查找sql是否有该账户
	$res=$logincheck->usercheck($link,$sql);

	if ($res) {
		echo "<script> alert(' 登录成功');location='show.php';</script>";
		
	};
	if (!$res) {
		echo "<script> alert('登录失败，帐号或密码错误');location='index.php';</script>";
	};
?>