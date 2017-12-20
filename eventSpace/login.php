<?php
    $em=$_POST['email'];
    $pas=$_POST['userpassword'];
    
    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"event");

    $res=mysqli_query($con,"select * from login where email = '$em' and password = '$pas'") ;
        //or die("icpc ".mysql_error());
   // echo $rec;
    $row=mysqli_fetch_array($res);
    
    if($row['email'] == $em && $row['password'] == $pas){
        setCookie("user", $em, time()+86400*2);
        header("Location:loggedin.php");
    }else{
        header("Location:index.php");
    }

?>