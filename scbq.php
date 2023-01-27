<?php
include("config.php");
if($_COOKIE["yingzhenyu"]!=$yingzhenyu_mm){
  header("location:index.html");
}
?>
<html>
<style>
.kj{
  border:1px #000 solid;
  border-radius:50px;
  font-size:40px;
  padding:10px;
  font-weight:900;
  background-color:yellow;
  margin:20px;
  }
#cjbq{
  border-radius:100px;
  width:300px;
  text-align:center;
  font-size:40px;
  padding:20px;
  background-color:blue;
  color:yellow;
  margin:0 auto;
  }
</style>
<script>
function sc(sc){
   var id=sc.innerText;
   var tj= window.confirm("是否删除【"+id+"】标签!");
   if(tj){
      window.location.replace('api/scbq_api.php?api='+id);
   }
}

function tjbq(tjbq){
    var cjbqmz=window.prompt("输入要添加的标签名字");
    if(cjbqmz!="" && cjbqmz!=null){
    window.location.replace('api/cjbq_api.php?cjbq='+cjbqmz);
    }else{
    alert("输入有误，添加失败!");
    }
    }

</script>

<?php
  echo "<h1>点击选择要删除的标签!</h1>";
  $te_xt = scandir($config);
  foreach($te_xt as $fhsz){
    if($fhsz!='.' && $fhsz!='..'){
      $fzbq = mb_substr($fhsz,0,-4);
      echo "<div class='kj' onclick='sc(this);'>".$fzbq." ".$hqtxt."</div>";
      }
    }
  
  echo "<div id='cjbq' onclick='tjbq();'>点我添加标签</div>";

?>
</html>