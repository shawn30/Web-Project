<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="creatorcss.css">
    
</head>
<body>
   <div id="head" class="row">
       <div id="logo">
               <img src="images/logowhitepng.png" alt="">
           </div>  
           <div id="heading">    
               <h3>MY EVENTS</h3>
           </div>
   </div>
    <div id="main">
        <?php
        $user = $_COOKIE['user'];
    $sql = "select * from events where user='$user'";
    $con = mysqli_connect("localhost","root","","event");       
    $result = mysqli_query($con, $sql);
    echo "<table  align='center' class='table table-hover'>";
    echo "<tr><th>Eventname</th><th>Date</th><th>Time</th><th></th></tr>";
    while($row = mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>".$row["eventname"]."</td>";
        echo "<td>".$row["date"]."</td>";
        echo "<td>".$row["time"]."</td>";
        echo "<td><a href='deluser.php?eventname=".$row["eventname"]."'><input type='button' value='X'/></a></td>";
        echo "</tr>";
    }
    echo "</table>";

?>
    </div>
      
   <div id="footer" style="position: absolute; bottom:0;">
           <div>    
               <br>
                <div id="flogo">
                   <img src="images/footlogo.jpg" alt="" width="200px"> 
                </div>
           </div>    
            <div id="follow">
                <div class="icons"><a href=""><img src="images/Instagram-logo.png" width="40px"height="40px"> </a></div>
                <div class="icons"><a href=""><img src= "images/twitter.png" width="40px"height="40px"></a></div>
                <div class="icons"><a href=""><img src="images/facebook.png" width="40px"height="40px"></a></div>
                <div class="icons" style="margin-top: 1px;"><a href=""><img src="images/linkedin.png" width="38px"height="38px"></a></div>
            </div>
            <span id="copyrights"> 
                <p>Hi this is sniper, ready for any contract &copy </p>
            </span>
        </div>
</body>
</html>