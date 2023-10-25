<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>     
    <div id="edit" style="background-color: red;height: 70%;width: 100%;position: fixed;margin: auto; display:none;">
    <?php
            // if($_SERVER['REQUEST_METHOD']=='GET'){
            //     $conn=mysqli_connect("localhost","root","","mydata");
            //     $tn=$_GET['tn'];
            //     $tl=$_GET['tl'];
            //     $s=$_GET['rn'];
            // }
            ?>
        <form action="edit.php" method="GET">
                
            <h1>UPDATE YOUR DATA HERE</h1>
        
        <ul>
        <li><input type="text"   name="sno" value="<?php echo "$s"?>"  class="btn1"> </li>
        <li><input type="text"   name="name" value="<?php echo "$tn"?>" placeholder="Name" class="btn1"> </li>
        <li><input type="text"  name="link" value="<?php echo "$tl"?>" placeholder="LINK" class="btn2"></li>
        <li><input type="submit" value="submit" class="submit"></li>
    </ul>
            </form>   
    <div onclick="close_modal()" id="close" style="position:relative;left:0%; height:10%;background-color:pink;width:100%;padding:7px;align-items: center;text-align:center;">
    close
        </div>
       
    
        
    </div>
    <div class="home" style="height:100%;">
    <?php
        $conn=mysqli_connect("localhost","root","","mydata");
        // if(!$conn){
        //     die ("not connected");

        // }
        // else{
        //     echo "connected";
        // }
        // echo '$_SERVER['REQUEST_METHOD']';
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $name=$_POST['name'];
            $link=$_POST['link'];
            
            $ins="INSERT INTO `links` (`name`,`link`)VALUES ('".$name."','".$link."')";
            $result=mysqli_query($conn,$ins);
            // if($ins){
            //     echo "insert";

            // }else{
            //     echo "not";
            // }
        }
        
        ?>
    <div class="search"><input type="search" placeholder="SEARCH HERE"></div>

        <form action="index.php" method="POST">
        
        <h1>MY LIBREARY</h1>
        
        <ul>
        <li><input type="text"   name="name" placeholder="Name" class="btn1"> </li>
        <li><input type="text"  name="link" placeholder="LINK" class="btn2"></li>
        <li><input type="submit" value="submit" class="submit"></li>
    </ul>
    </form>

   
    <center>
    <table class="data" border="2">
        <tr><th>sno</th>
            <th>Name</th>
            <th>Link</th>
            <th width="20%" >Delete/Edit</th>
        </tr>
        <?php
        
        $data="SELECT * FROM `links`";
        $result1=mysqli_query($conn,$data);
        while($result = mysqli_fetch_array($result1)){
            echo"<tr>
            <td>".$result['sno']."</td>
            <td>".$result['name']."</td>
            <td>".$result['password']."</td>
            <td><a href='delete.php?rn=$result[sno]'>Delete</a></td>
            <td onclick='show_modal()'><a>Edit</a></td>
            
            </tr>";
            // <td onclick='show_modal()'><a  href='index.php?rn=$result[sno]&tn=$result[name]&tl=$result[link]'>Edit</a></td>
            // <td><a onclick='show_edit()' href='update.php?rn=$result[sno]&tn=$result[name]&tl=$result[link]'>Edit</a></td>
        }
        
        ?>
  
    </table></center>
    </div>
   
    <script>
        function close_modal(){
            // alert("Function called")
            document.getElementById("edit").setAttribute("style", "display:none")

        }
        function show_modal(){
            // alert("Function called")
            document.getElementById("edit").setAttribute("style", "display:block")

        }
    </script>
</body>
</html>