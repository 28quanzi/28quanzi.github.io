
<?php
include("../config.php");
if($_COOKIE["yingzhenyu"]!=$yingzhenyu_mm){
  echo "你还没有登录后台账号!";
}else{
$API=$_GET['api'];
$wjm=$_GET['name'];

/*
删除操作php
*/

  //分割的字符
  $hqzf="</a></li>";
  //获取txt文件文本
  $hqtxt=file_get_contents("../".$config.$wjm.".txt");
  //转换成数组
  $hqtxt_sz=explode($hqzf,$hqtxt);
  echo count($hqtxt_sz)."<hr/>";
  var_dump($hqtxt);
  //删除数组
  $hqtxt_sz[$API]=null;
  //变量保存遍历数组
  $sz=0;
  $text_wb=fopen("../".$config.$wjm.".txt","w");
  foreach($hqtxt_sz as $sz_nr){
    if($sz_nr!=""){
    echo $sz_nr;
    $bc_s_j=$sz_nr.$hqzf;
    $xrwb=fwrite($text_wb,$bc_s_j);
    $sz+=1;
    }
    }
  //写入文本
  
  fclose($text_wb);
  //跳转链接
  echo "<script>window.location.replace('../scdh.php?api=".$wjm."');</script>);</script>";
}
?>
<!--
制作人: 樱振宇
QQ: 3152680200
-->