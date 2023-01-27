<?php
include("config.php");
if($_COOKIE["yingzhenyu"]!=$yingzhenyu_mm){
  header("location:index.html");
}
?>
<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>选项</title>
    <style>
    a{
      
      }
    body{
      text-align:center;
      
      }
    div{
      font-size:20px;
      font-weight:900;
      }
    </style>
  </head>
  <body>	
    <img width="100px;" src="../tp/funnycxz.png"/>
    
    <h2>无数据库后台TXT管理</h2>
	<a href="zhuye.php"><div>查看全部标签导航</div></a><br/>
    <a href="scbq.php"><div>添加删除本站标签</div></a><br/>
    <a href="xz_bq_dh.php"><div>添加删除标签导航</div></a><br/>
    <a href="xgxinxi.php"><div>修改导航网站信息</div></a><br/>
    <h6>制作人:樱振宇<br/>联系QQ号: 3152680200<br/>交流QQ群: 317720426</h6>
  </body>
