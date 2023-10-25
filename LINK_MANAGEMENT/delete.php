<?php
  $conn=mysqli_connect("localhost","root","","mydata");
  $nm=$_GET['rn'];
  // $q="SELECT * FROM `mydata`";
  $delete="DELETE FROM links WHERE `links`.`sno`=$nm";
  echo "$delete";
  $result_d=mysqli_query($conn,$delete);
  if($result_d){
    echo "your datta is delete";
  }
?>