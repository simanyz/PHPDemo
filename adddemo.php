<?php 

session_start();
//取值
$id=$_SESSION["loginname"];
$title=$_POST["title"];
$author=$_POST["author"];
$_SESSION["author1"]=$author;
$message=$_POST["message"];
$ip=$_SERVER["REMOTE_ADDR"];

require_once "sqlconfig.php";
$adddemo=new DB();
$link=$adddemo->connect();

//进行添加操作
$sql="insert into message (user,title,name,ip,mes,time) values('$id','$title','$author','$ip','$message',now())";
//判空
if ($title!=null) {
	if ($author!=null) {
		$res=$adddemo->insertdemo($link,$sql);
	}
	if ($author==null) {
		echo "<script>alert(' 请输入姓名！');location='add.php';</script>";
	}
}
if ($title==null) {
	echo "<script>alert('请输入标题！');location='add.php';</script>";
}

 ?>