<?php

header('Content-type:text/html;charset=utf-8');

?>
<!DOCTYPE html>
<html>
<head>
	<title> 添加留言 </title>
	<link rel="stylesheet" type="text/css" href="./css/formcss.css">

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
                font-size:  1.5em;
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

  <div id="form-main">
  <div id="form-div">
  	 <h1 style="color: white;">添加一条留言:<br>
    <span style="font-size: 19px;">你今天有什么新鲜事想要分享吗？</span>
    </h1>
    <form class="form" id="form1" action="adddemo.php" method="post">

      <p class="name">
        <input name="author" type="text" class="feedback-input" placeholder="请输入名字" id="name" />
      </p>

      <p class="">
        <input name="title" type="text" class="feedback-input" id="" placeholder="请输入标题" />
      </p>

      <p class="text">
        <textarea name="message" class="feedback-input" id="comment" placeholder="在这里留言"></textarea>
      </p>

      <div class="submit">
        <input type="submit" value="提交" id="button-blue"/>
        <div class="ease"></div>
      </div>
    </form>
  </div>

</body>
</html>