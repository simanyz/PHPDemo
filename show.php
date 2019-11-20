<?php

header('Content-type:text/html;charset=utf-8');

?>
<!DOCTYPE html>
<html>
<head>
	<title>查看留言</title>
	<link rel="stylesheet" type="text/css" href="./css/formcss.css">
	<link rel="stylesheet" type="text/css" href="./css/message.css">

	<style type="text/css">
		body{
			margin: 0;
			padding:0;
		}
            aside {
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0px;
                width: 250px;
				height:100%;
                background: #16719c;
                transition: 0.2s ease-out;
               
            }

            h2 {
                color: white;
                text-align: center;
                font-size: 2em;
            }
            #sideul li {
                list-style: none;
                color: white;
                width: 100%;
                height: 1.8em;
                font-size: 1.5em;
                text-align: center;
            }

            a {
                text-decoration: none;
            }

            #sideul li:hover {
                color: orange;

            }

	</style>
</head>
<body style="background-color: #f7da55">
	<div style="height: 125px; background-color: #16719c;">

	</div>

   <aside>
            <h2>简易留言板</h2>
            <br />
            <hr>
            <ul id="sideul">

                <a href="##">
                    <li onclick="location.href='index.php'">首页</li>
                </a>
                <a href="##">
                    <li onclick="location.href='add.php'">添加留言</li>
                </a>
                <a href="##">
                    <li onclick="location.href='show.php'">查看留言</li>
                </a>
                <a href="##">
                    <li onclick="location.href='index.php'">退出登录</li>
                </a>
            </ul>
        </aside>

  <?php
	$con=@mysqli_connect("127.0.0.1","root","123456","zzh");
	if (!$con) {
		die("数据库连接失败".mysqli_connect_error());
	}
	mysqli_query($con,"set names 'utf-8'");

	//每页显示的留言数目
	$pagesize=3;
	//确定页p的参数
	@$p=$_GET['p']?$_GET['p']:1;
	//数据指针
	$offset=($p-1)*$pagesize;
	//查询本页数据
	session_start();
	$id=$_SESSION['loginname'];
	$query_sql="select * from message where user = '$id' order by user desc limit $offset,$pagesize";
	$result=mysqli_query($con,$query_sql);
	
	echo "<div style='margin-top:55px'>";
	while ($res=mysqli_fetch_array($result)) {
		echo "<div class='k'>";
		echo "<div class='ds-post-main'>";
		echo "<div class='ds-comment-body'>

			 <span>
             {$res['name']}  于  {$res['time']}  留言  --> IP地址 : <span>{$res['ip']}
             </span>

    		 <span style='float:right'><a href = 'delete.php?id=".$res['id']."'>
             <input type='submit' class='button1' value='删除'> </input>
             </a>
             </span>

    		 <p>留言主题 : {$res['title']}   
             </span>
             </p>

             <hr width=450px> 

    		 <p>{$res['mes']}
             </p>
             </div>
             <br>";
    		 echo "</div>";
			 echo "</div>";
	}
		echo "</div>";
		//分页代码  
        //计算留言总数  
        $count_result = mysqli_query($con,"select count(*) as count from message where user= '$id'");  
        $count_array = mysqli_fetch_array($count_result);
		echo "<hr>";
        //计算总的页数  
        $pagenum = ceil($count_array['count']/$pagesize);  

        echo "<center>";
        echo "<div style='display: inline-block;margin-right: 15px;margin-left:15px;'>",'共',$count_array['count'],'条留言','</div>';  
		echo "<div style='display: inline-block;margin-right: 15px;margin-left:15px;'>",'共',$pagenum,'页','</div>';  
      
        //循环输出个页数及链接  
        if($pagenum>1){  
            for($i = 1;$i<=$pagenum;$i++){  
                if($i == $p){  
                    echo "<div style='width:25px;display: inline-block;margin-right: 10px;'>",$i,"</div>";
                      
                }else{  
              
					echo '<a href="show.php?p=',$i,'">',"<div style='width:25px;display: inline-block;margin-right: 10px;'>",$i,'</div>','</a>';
                }
            }
			
	echo "<div style='display: inline-block;margin-right: 10px;'>",'当前在 ',$p, ' 页',"</center></div>";
        }
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "</div>";

	?>
	<script type="text/javascript">
		function logout(){
			<%
				session_invalidate();
			%>
		}
	</script>

</body>
</html>