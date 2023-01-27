
<?php
include("../config.php");
if($_COOKIE["yingzhenyu"]!=$yingzhenyu_mm){
  echo "你还没有登录后台账号!";
}else{
  $cjbq=$_GET['cjbq'];
  fopen("../".$config.$cjbq.".txt","w");
  echo "<script>window.location.replace('../scbq.php');</script>";
}
?>
<!--
制作人: 樱振宇
QQ: 3152680200
-->