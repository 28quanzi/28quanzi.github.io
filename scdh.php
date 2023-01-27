<?php
include("config.php");
if($_COOKIE["yingzhenyu"]!=$yingzhenyu_mm){
  header("location:index.html");
}
?>
<style>
li{
  border:1px #000 solid;
  border-radius:50px;
  background-color:yellow;
  margin:50px 0;
  font-size:50px;
  padding:10px;
  }
a{
  
  }
.txtp{/*
  padding:200px;
  background-color:#000;*/
  }
.cjdh{
  border-radius:100px;
  width:300px;
  font-size:40px;
  text-align:center;
  padding:10px;
  background-color:blue;
  color:yellow;
  margin:0 auto;
  }

</style>
<script>
function sc(sc){
   var id=sc.getAttribute("id");
   var name=sc.getAttribute("name");
   var i_d=document.getElementById(id);
   
   var tj= window.confirm("是否删除【"+i_d.innerText+"】导航地址!");
   if(tj){
      window.location.replace('api/scdh_api.php?api='+id+'&name='+name);
   }
}
function cjdh(cjdh){
    var wjmz = cjdh.getAttribute('id');
    var dhmz=window.prompt("添加导航名字:");
    var dhlj=window.prompt(dhmz+"导航的链接地址:");
    if(dhmz!="" && dhlj!="" && dhmz!=null && dhlj!=null){
      window.location.replace('api/cjdh_api.php?api='+wjmz+'&dhmz='+dhmz+'&dhlj='+dhlj);
      }else{
      alert("输入有误，添加失败!");
      }
    }

</script>
<?php

$api=$_GET['api'];
echo "<h1>点击选择你要删除的导航即可删除!</h1>";
/*
删除操作php
*/
  //分割的字符
  $hgzf="</a></li>";
  //获取txt文件文本
  $hqtxt=file_get_contents($config.$api.".txt");
  //转换成数组
  $hqtxt_sz=explode($hgzf,$hqtxt);
  //便利数组
  $sz=0;  
  foreach($hqtxt_sz as $sz_nr){
    $sz_nrnr=str_replace(">"," name='".$api."' id='".$sz."'>",$sz_nr);
    echo $sz_nrnr.$hgzf;
    $sz+=1;
    } 
  
  echo "<div class='cjdh' id='".$api."' onclick='cjdh(this);'>点我添加导航</div>";

?>