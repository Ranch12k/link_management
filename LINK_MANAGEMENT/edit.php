<?php
        $conn=mysqli_connect("localhost","root","","mydata");
        $s=$_GET['sno'];
        $tn=$_GET['name'];
        $tl=$_GET['link'];
        
         $upd="UPDATE links SET  name='".$tn."',link='$tl' WHERE sno='".$s."'";
        
        $result=mysqli_query($conn,$upd);
        if(!$result){
                die ("chomu");
        }else{
                echo "<script>alert('kamal');</script>";
        }
        header("Location:index.php");
        exit;   
?>