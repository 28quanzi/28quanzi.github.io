<?php
include("config.php");
if($_COOKIE["yingzhenyu"]!=$yingzhenyu_mm){
  header("location:index.html");
}
?>
<style>
.kj{
  border:1px #000 solid;
  border-radius:50px;
  padding:10px;
  background-color:yellow;
  margin:20px;
  font-size:40px;
  font-weight:900;
  }
</style>
<script>
function sc(sc){
   var id=sc.innerText;
   var tj= window.confirm("是否进入【"+id+"】标签进行添加或删除导航地址!!!");
   if(tj){
      window.location.replace('scdh.php?api='+id);
   }
}

</script>
<h1>点击选择你要编辑的标签里的导航内容!</h1>
<?php
  $te_xt = scandir($config);
  foreach($te_xt as $fhsz){
    if($fhsz!='.' && $fhsz!='..'){
      $fzbq = mb_substr($fhsz,0,-4);
      echo "<div class='kj' onclick='sc(this);'>".$fzbq."".$hqtxt."</div>";
      }
    }
?>