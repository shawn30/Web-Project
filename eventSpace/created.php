<?php
       $sql = "insert into events values('".$_GET["eventname"]."','".$_GET["organizedby"]."','".$_GET["venue"]."','".$_GET["date"]."','".$_GET["time"]."','".$_GET["description"]."','".$_COOKIE['user']."','');";
    $con = mysqli_connect("localhost","root","","event");       
    $result = mysqli_query($con, $sql);
    $xyz=$_GET["eventname"];
    header("Location:photo.php?imageid=$xyz");  
?>