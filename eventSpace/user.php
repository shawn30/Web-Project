<?php
   
       $sql = "insert into user values('".$_POST["name"]."','".$_POST["mobile"]."','".$_POST["institute"]."','".$_POST["email"]."','".$_POST["branch"]."','".$_POST["userpassword"]."','".$_POST["semester"]."');";
    $con = mysqli_connect("localhost","root","","event");       
    $result = mysqli_query($con, $sql);
    header("Location:loggedin.php");  


?>
