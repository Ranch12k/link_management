<?php
  $conn=mysqli_connect("localhost","root","","mydata");
  $tn=$_GET['tn'];
  $tl=$_GET['tl'];
  echo "$tn";
  echo "$tl";
  $s=$_GET['rn'];
  echo "$s";
  
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style5.css">
  
</head>
<body>
<a href="#id01">OPen</a>
  <div class="modal" id="id01">
    <a href="#" class="a">X</a>
  
    
<form action="edit.php" method="GET">
        
        <h1>MY LIBREARY</h1>
        
        <ul>
        <li><input type="text"   name="sno" value="<?php echo "$s"?>"  class="btn1"> </li>
        <li><input type="text"   name="name" value="<?php echo "$tn"?>" placeholder="Name" class="btn1"> </li>
        <li><input type="text"  name="link" value="<?php echo "$tl"?>" placeholder="LINK" class="btn2"></li>
        <li><input type="submit" value="submit" class="submit"></li>
    </ul>
    </form>
    </div>
  <?php
  // if($_GET['submit']){
  // $tn=$_GET['name'];
  // $ln=$_GET['link'];
  // $conn=mysqli_connect("localhost","root","","mydata");
  // $u_query=mysqli_query($conn,$update);
// }
?>
</body>
</html>