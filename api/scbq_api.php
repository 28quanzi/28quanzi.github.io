
<?php
include("../config.php");
if($_COOKIE["yingzhenyu"]!=$yingzhenyu_mm){
  echo "你还没有登录后台账号!";
}else{
$api=$_GET['api'];
$status=unlink("../".$config.$api.'.txt');    
if($status){  
/*echo "删除成功";  */
echo "<script>window.location.replace('../scbq.php');</script>";
}else{  
echo "删除失败";    
} 
} 
?><!--
制作人: 樱振宇
QQ: 3152680200
-->