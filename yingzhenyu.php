<?php
  $zh=$_GET['zh'];
  $mm=$_GET['mm'];
  include("config.php");
  if($zh==$yingzhenyu_zh && $mm==$yingzhenyu_mm){
    setcookie("yingzhenyu",$yingzhenyu_mm);
    header("location:htgl.php");
    /*echo "true";*/
    
  }else{
    echo "账号或密码错误，登录失败!";
    /*echo "flase";*/
    /*header("location:index.html");*/
  }
?>