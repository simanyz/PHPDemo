<?php
//创建数据库类，方便直接调用方法
	class DB{
		//数据库连接函数
		function connect(){
			@$conn = mysqli_connect('127.0.0.1','root','123456','zzh');
			mysqli_set_charset($conn,"utf-8");
			mysqli_select_db($conn,"zzh") or die('数据库打开失败');

			if (mysqli_connect_error()) {
				die('数据库连接失败：'.mysqli_connect_error());
			}
			return $conn;
		}

		//注册帐号，插入函数
		function reg($conn,$sql){
			if (mysqli_query($conn,$sql)) {
				echo "<script language='javascript'> alert('注册成功!');location='index.php'; </script>";
			}else{
				echo "注册失败,错误内容为：".$conn->error;
			}
		}

		//登录验证
		function usercheck($conn,$sql){
			$result = mysqli_query($conn,$sql);
			//返回记录数
			$row=mysqli_num_rows($result);
			if ($row!=0) {
				return true;
				//无记录则无账号
			}else{
				return false;
			}
		}

		//留言数据插入
		function insertdemo($conn,$sql){
			if (mysqli_query($conn,$sql)) {
				echo "<script language='javascript'> alert('留言成功!');location='show.php'; </script>";
			}else{
				echo "插入数据出错，错误内容为: ".$conn->error;
			}
		}

		function datafun($conn,$sql){
			$result=mysqli_query($conn,$sql);
			$data=array();
			while ($row = mysqli_fetch_array($result)) {
				$data[]=$row;
			}
			if ($data) {
				return $data;
			}else{
				return false;
			}
		}
	}

?>