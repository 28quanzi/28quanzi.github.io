<?php
include("config.php");
if($_COOKIE["yingzhenyu"]!=$yingzhenyu_mm){
  header("location:index.html");
}else{
    $yingzhenyu=$_POST["wzbt"];
	$funny=fopen("wed/wzbt.txt","w");
	fwrite($funny,$yingzhenyu);
	fclose($funny);
	
    $yingzhenyu=$_POST["wzdbzmd"];
	$funny=fopen("wed/wzdbzmd.txt","w");
	fwrite($funny,$yingzhenyu);
	fclose($funny);
 
    $yingzhenyu=$_POST["ssyqgjz"];
	$funny=fopen("wed/ssyqgjz.txt","w");
	fwrite($funny,$yingzhenyu);
	fclose($funny);
 
    $yingzhenyu=$_POST["wzbjtp"];
	$funny=fopen("wed/wzbjtp.txt","w");
	fwrite($funny,$yingzhenyu);
	fclose($funny);
 
    $yingzhenyu=$_POST["wzbjyy"];
	$funny=fopen("wed/wzbjyy.txt","w");
	fwrite($funny,$yingzhenyu);
	fclose($funny);
 
    $yingzhenyu=$_POST["dsdz"];
	$funny=fopen("wed/dsdz.txt","w");
	fwrite($funny,$yingzhenyu);
	fclose($funny);
 
    $yingzhenyu=$_POST["ggbt"];
	$funny=fopen("wed/ggbt.txt","w");
	fwrite($funny,$yingzhenyu);
	fclose($funny);
 
    $yingzhenyu=$_POST["splj"];
	$funny=fopen("wed/splj.txt","w");
	fwrite($funny,$yingzhenyu);
	fclose($funny);
 
    $yingzhenyu=$_POST["ggnr"];
	$funny=fopen("wed/ggnr.txt","w");
	fwrite($funny,$yingzhenyu);
	fclose($funny);
 
    $yingzhenyu=$_POST["nc"];
	$funny=fopen("wed/nc.txt","w");
	fwrite($funny,$yingzhenyu);
	fclose($funny);
 
    $yingzhenyu=$_POST["lxyx"];
	$funny=fopen("wed/lxyx.txt","w");
	fwrite($funny,$yingzhenyu);
	fclose($funny);
 
    $yingzhenyu=$_POST["lxqq"];
	$funny=fopen("wed/lxqq.txt","w");
	fwrite($funny,$yingzhenyu);
	fclose($funny);
 
    $yingzhenyu=$_POST["gdlj"];
	$funny=fopen("wed/gdlj.txt","w");
	fwrite($funny,$yingzhenyu);
	fclose($funny);
   
    $yingzhenyu=$_POST["jrwm"];
	$funny=fopen("wed/jrwm.txt","w");
	fwrite($funny,$yingzhenyu);
	fclose($funny);
 
    $yingzhenyu=$_POST["ggtp"];
	$funny=fopen("wed/ggtp.txt","w");
	fwrite($funny,$yingzhenyu);
	fclose($funny);
 
    $yingzhenyu=$_POST["ggdz"];
	$funny=fopen("wed/ggdz.txt","w");
	fwrite($funny,$yingzhenyu);
	fclose($funny);
 
    echo "<h2>信息已经修改完毕!";
}
?>  
  