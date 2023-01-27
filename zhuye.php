
<style>
.kj{
  background-color:yellow;
  margin:20px;
  }
</style>
<?php
  include("config.php");
  $te_xt = scandir($config);
  foreach($te_xt as $fhsz){
    if($fhsz!='.' && $fhsz!='..'){
      $fzbq = mb_substr($fhsz,0,-4);
      //获取txt文件文本
      $hqtxt=file_get_contents($config.$fhsz);
      echo "<div class='kj'><h1>".$fzbq."</h1>".$hqtxt."</div>";
      }
    }
?>