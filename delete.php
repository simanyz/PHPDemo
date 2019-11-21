<?php

header("content-type:text/html;charset=utf-8");
session_start();

require_once "sqlconfig.php";
$deletedemo=new DB();
$link=$deletedemo->connect();
	$id=$_GET['id'];

	if ($link) {
		$sql="delete from message where id = '$id'";
		$que=mysqli_query($link,$sql);
			if ($que) {
				echo "<script>alert(' 删除成功，返回首页');location='show.php';</script>";
			}else{
				echo "<script>alert('删除失败');location='show.php'</script>";
		   		exit;
			}
	}

?>