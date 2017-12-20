<?php
    if(isset($_COOKIE['user']))
        header('Location:loggedin.php');
?>


<html>
<head>
    <script src="js/function.js"></script>
    <link href="css.css" rel="stylesheet">
</head>
<body>
    <div id="container">
      
       <div id="header">
           <div id="navigation">   
                <div id="nav1">
                <a href="index.php" class="nav1">HOME</a> 
                </div>
                <div id="nav2">
                <a href="signup.php" class="nav2" style="cursor: pointer">SignUp</a>
                <a onclick="loginpage()" class="nav2" style="cursor: pointer;">Login</a>
                </div>
           </div>
           <div id="search">
           <div id="logo">
               <img src="images/logowhitepng.png" alt="">
           </div>     
            <div id="language"></div>
            </div>
       
       </div>
       
       <div id="login" class="modal-content animate">
       <div id="top">
          <div id="heading"><span>SIGN IN</span></div>
           <div id="close"><a href=""><img src="images/close-icon.png" width="30px" height="30px"></a></div>
       </div>
       
       
       <!--<div id="middle">
          <div id="instant"><span>Instant Sign in with</span></div>
           <div id="via">
              <a href=""> <div id="google"><div class="gficon"><img src="images/Google-plus.png" width="30px" height="30px" style="margin-top: 5px;"></div> <div class="linkgf"><span>Google Plus</span></div></div></a>
               <a href=""><div id="fb"><div class="gficon"><img src="images/facebook_logos.png" width="40px" height="30px" style="margin-top: 5px;"></div> <div class="linkgf"><span>Facebook</span></div></div></a>
           </div>
       </div>-->
       
       <div id="bottom">
           <form action="login.php" method="post"><div><input id="username" name="email" type="email" placeholder="Enter Your Email Id" > </div>
           <div><input type="password" name="userpassword" id="password" placeholder="Enter Your Password"> </div>
           <div><input type="submit" id="signin" value="Sign In"></div></form>
           <div ><a href=""><span id="forgot">FORGOT PASSWORD ?</span></a></div>
           <div id="signup"><span>Still not connected ? <a onclick="location.href='signup.php'" style="cursor: pointer;"><span>Sign Up</span></a></span></div>
       </div>
   </div>
   
   <!--
   <div id="signuppage" class="modal-content animate">
        <div id="signtop">
           <div id="signheading"><span>SIGN UP</span></div>
           <div id="close"><a href=""><img src="images/close-icon.png" width="30px" height="30px"></a></div>
            
        </div>
        
        <div>
            <form action="user.php" method="post">
                <input name="name" class="signupdetails" type="text" placeholder="FULL NAME">
                <input name="mobile" type="tel" class="signupdetails" placeholder="MOBILE NUMBER">
                <input name="institute" type="text" class="signupdetails" placeholder="INSTITUTE">
                <input name="email" class="signupdetails" type="email" placeholder="EMAIL">
                
                
                <input name="branch" type="text" class="signupdetails" placeholder="BRANCH">
                <input name="userpassword" type="password" class="signupdetails" placeholder="PASSWORD">
                <input name="semester" type="text" class="signupdetails" placeholder="SEMESTER">
                <input name="cuserpassword" type="password" class="signupdetails" placeholder="CONFIRM PASSWORD">
                <input id="signupbtn" class="signupdetails" type="submit" value="SIGNUP">
            </form>
            
        </div>
    </div>
     -->  
       <div id="searchbar">
               <form action="search.php" method="get">
                <input type="text" placeholder="Search" name="search" >     
                <input type="submit" style="visibility:hidden;">
               </form>
        </div>
       
       <div id="body">

             <div id="banner">
                <div id="banner1" style="position: absolute; width: 100%; height: 550px; background-image: url(images/nfs.jpg); background-repeat: no-repeat; background-position: center;  background-size: 100% 550px;"></div>
                <div id="leftarrow" onclick="previousbanner()"><img src="images/leftarrow.png" width="100%" height="50px"></div>
                <div id="rightarrow" onclick="nextbanner()"><img src="images/rightarrow.png" width="100%" height="50px"></div>
            </div>
            
            <div id="wrapperfeat">
                
           <div id="featured"><div style="padding:10px;background:linear-gradient(to left,rgba(54, 30, 54,.7),rgba(108, 59, 108,.7));">
           <h2>FEATURED EVENTS</h2>
               
           </div>
           <div id="create" onclick="loginpage()"><a >CREATE EVENT</a></div>
           </div>   
  
              <div id="events">
                  <?php 
	       	//scan "uploads" folder and display them accordingly
	      /* $folder = "uploads";
	       $results = scandir('uploads');
	       foreach ($results as $result) {
	       	if ($result === '.' or $result === '..') continue;
	       
	       	if (is_file($folder . '/' . $result)) {
                 $path=pathinfo($result);
                 $xyz=$path['filename'];*/
                 $con=mysqli_connect("localhost","root","");
                 mysqli_select_db($con,"event");
                 $res=mysqli_query($con,"select * from events");
                  while($row=mysqli_fetch_array($res)){
                      $xyz = $row["eventname"];
	       		echo '
	       		<div >
		       		<div class="event" id="'.$xyz.'" onclick="location.href=\'details.php?name='.$xyz.'\'">
			       		<img src="uploads/'.$row["image"].'" alt="..." class="img">
				       		<div class="tag" >
                            '. $xyz .'<br><br>
                            '. $row["date"].'&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.$row["time"].'
			       		</div>
		       		</div>
	       		</div>';
	       	}
	       ?>
           
            </div>
            </div>
        
             <div id="wrapperon">
                 
             
            <div id="onup">
                 <div id="ongoingtab" onclick="ongoingopen()" >ONGOING</div> 
                 <div id="upcomingtab" onclick="upcomingopen()">UPCOMING</div>
             </div>
            
                <div id="ongoing">
                    <?php 
	       	//scan "uploads" folder and display them accordingly
	       $folder = "ongoing";
	       $results = scandir('ongoing');
	       foreach ($results as $result) {
	       	if ($result === '.' or $result === '..') continue;
	       
	       	if (is_file($folder . '/' . $result)) {
                 $path=pathinfo($result);
                 $xyz=$path['filename'];
                 $con=mysqli_connect("localhost","root","");
                 mysqli_select_db($con,"event");
                 $res=mysqli_query($con,"select * from events where eventname = '$xyz'");
                 $row=mysqli_fetch_array($res);
	       		echo '
	       		<div >
		       		<div class="event">
			       		<img src="'.$folder . '/' . $result.'" alt="..." class="img">
				       		<div class="tag">
                            '. $xyz .'<br><br>
                            '. $row["date"].'&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.$row["time"].'
			       		</div>
		       		</div>
	       		</div>';
	       	}
	       }
	       ?>

                </div>


                <div id="upcoming">
                   <?php 
	       	//scan "uploads" folder and display them accordingly
	       $folder = "upcoming";
	       $results = scandir('upcoming');
	       foreach ($results as $result) {
	       	if ($result === '.' or $result === '..') continue;
	       
	       	if (is_file($folder . '/' . $result)) {
                 $path=pathinfo($result);
                 $xyz=$path['filename'];
                 $con=mysqli_connect("localhost","root","");
                 mysqli_select_db($con,"event");
                 $res=mysqli_query($con,"select * from events where eventname = '$xyz'");
                 $row=mysqli_fetch_array($res);
	       		echo '
	       		<div >
		       		<div class="event">
			       		<img src="'.$folder . '/' . $result.'" alt="..." class="img">
				       		<div class="tag">
                            '. $xyz .'<br><br>
                            '. $row["date"].'&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.$row["time"].'
			       		</div>
		       		</div>
	       		</div>';
	       	}
	       }
	       ?>
                </div>

            </div>
           <div id="whyus">
              <h1>Why EventSpace/Us ?</h1>
               <h4>We are superb. We are fantastic. We are genius. Isn't that enough !!</h4>
           </div>
            
       </div>
       
    <!---->
       <div id="footer">
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
    </div>
</body>
</html>