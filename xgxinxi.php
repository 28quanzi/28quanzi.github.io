<?php
include("config.php");
if($_COOKIE["yingzhenyu"]!=$yingzhenyu_mm){
  header("location:index.html");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>导航网信息修改</title>
<style>
*{
  margin:0;
  padding:0;
  }
.kj{
  
  margin:0px auto;
  /*text-align:center;*/
  background-color:#000000;
  }
.bjbj{
  font-weight:900;
  padding:50px;
  font-size:40px;
  margin:0 auto;
  background-color:#fff;
  width:600px;
 /* height:500px;*/
  }
.bjk{
  padding:12px 6px;
  font-size:40px;
  width:100%;
  border:1px #000 solid;
  color:blue;
  margin:0 0 20px 0;
  }
hr{
  margin:20px 0;
  background-color:#000;
  height:10px;
  }
.an{
  font-size:30px;
  font-weight:900;
  padding:20px;
  border:1px #000 solid;
  border-radius:50px;
  }
.an:hover{
  background-color:blue;
  color:red;
  }
</style>
</head>
<body>
<div class="kj">
<form action="xgcs.php" method="post" class="bjbj">
<h2>导航网信息修改</h2>
<!--
制作人: 樱振宇
QQ: 3152680200
-->
   <hr/>
   网站标题:<input value="<?php include("wed/wzbt.txt"); ?>" name="wzbt" class="bjk" type="text"/>
   网站顶部走马灯:<input value="<?php include("wed/wzdbzmd.txt"); ?>" name="wzdbzmd" class="bjk" type="text"/>
   搜索引擎关键字内容:<input value="<?php include("wed/ssyqgjz.txt"); ?>" name="ssyqgjz" class="bjk" type="text"/>
   网站背景图片链接:<input value="<?php include("wed/wzbjtp.txt"); ?>" name="wzbjtp" class="bjk" type="text"/>
   网站背景音乐链接:<input value="<?php include("wed/wzbjyy.txt"); ?>" name="wzbjyy" class="bjk" type="text"/>
   <hr/>
   打赏地址链接:<input value="<?php include("wed/dsdz.txt"); ?>" name="dsdz" class="bjk" type="text"/>
   公告标题:<input value="<?php include("wed/ggbt.txt"); ?>" name="ggbt" class="bjk" type="text"/>
   视频链接:<input value="<?php include("wed/splj.txt"); ?>" name="splj" class="bjk" type="text"/>
   公告内容:<input value="<?php include("wed/ggnr.txt"); ?>" name="ggnr" class="bjk" type="text"/>
   <hr/>
   昵称:<input value="<?php include("wed/nc.txt"); ?>" name="nc" class="bjk" type="text"/>
   联系邮箱:<input value="<?php include("wed/lxyx.txt"); ?>" name="lxyx" class="bjk" type="text"/>
   联系QQ号:<input value="<?php include("wed/lxqq.txt"); ?>" name="lxqq" class="bjk" type="text"/>
   <hr/>
   更多内容链接:<input value="<?php include("wed/gdlj.txt"); ?>" name="gdlj" class="bjk" type="text"/>
   加入我们链接:<input value="<?php include("wed/jrwm.txt"); ?>" name="jrwm" class="bjk" type="text"/>
   <hr/>
   广告图片链接:<input value="<?php include("wed/ggtp.txt"); ?>" name="ggtp" class="bjk" type="text"/>
   广告地址链接:<input value="<?php include("wed/ggdz.txt"); ?>" name="ggdz" class="bjk" type="text"/>
   <hr/>
   
   <button class="an">更改信息</button>
</form>
</div>
</body>
</html>
