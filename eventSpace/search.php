<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="creatorcss.css">
    <link rel="stylesheet" href="footer.css">
    <style>
        .searchresult{
            font-size: 18px;
            background: linear-gradient(to right,rgba(144,238,144,.4),rgba(255,255,0,.4),rgba(255,192,203,0.4),rgba(238,130,238,.4),rgba(173,216,230,.4));
            padding: 5px 15px  5px 15px;
            color: darkgreen;
            border-radius: 5px;
        }
        .result{
            padding: 5px 15px  5px 15px;
            font-size: 18px;
        }
    </style>
</head>
<body>
   <div id="head" class="row">
       <div id="logo">
               <img src="images/logowhitepng.png" alt="">
           </div>  
           <div id="heading">    
               <h3>SEARCH RESULTS</h3>
           </div>
   </div>
    <div id="main" >
    
               <?php
                $search=$_GET['search'];
                 $con=mysqli_connect("localhost","root","");
                 mysqli_select_db($con,"event");
                 $res=mysqli_query($con,"select * from events where eventname = '$search'");
                 $row=mysqli_fetch_array($res);
                if($row){
                    
	       		echo '
	       		<div >
		       		<div class="event">
				       		<div class="tag">
                            <div class="searchresult">Event Name</div><div class="result">'.$row["eventname"].'</div><br>
                            <div class="searchresult">Oragnized By</div><div class="result">'.$row["organizedby"].'</div><br> 
                            <div class="searchresult">Description</div><div class="result">'.$row["description"].'</div><br>
                            <div class="searchresult">Venue</div><div class="result">'.$row["venue"].'</div><br>
                            <div class="searchresult">Date</div><div class="result">'. $row["date"].'</div><br>
                            <div class="searchresult">Time</div><div class="result">'.$row["time"].'</div>
			       		</div>
		       		</div>
	       		</div>';
                }
                else
                    echo 'No Result Found';
?>
</div>


  <div id="footer" style="position:absolute;bottom:0;">
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