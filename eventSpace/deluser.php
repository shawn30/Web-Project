<?php
    $sql = "delete from events where eventname='".$_REQUEST["eventname"]."'";
    $con = mysqli_connect("localhost","root","","event");       
    mysqli_query($con, $sql);
    header("Location:myevent.php");
?>