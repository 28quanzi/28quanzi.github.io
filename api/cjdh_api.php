
<?php
include("../config.php");
if($_COOKIE["yingzhenyu"]!=$yingzhenyu_mm){
  echo "你还没有登录后台账号!";
}else{
  $wjmz=$_GET['api'];
  $cjdhmz=$_GET['dhmz'];
  $cjdhlj=$_GET['dhlj'];
  $cjdh=fopen("../".$config.$wjmz.".txt","a+");
  fwrite($cjdh,'<li onclick="sc(this);"><a href="'.$cjdhlj.'" target="_blank">'.$cjdhmz.'</a></li>');
  fclose($cjdh);
  echo "<script>window.location.replace('../scdh.php?api=".$wjmz."');</script>";
}
?>
<!--
制作人: 樱振宇
QQ: 3152680200
-->