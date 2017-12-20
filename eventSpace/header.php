<html>
<head>
    <script src="js/function.js"></script>
    <link href="css.css" rel="stylesheet">
</head>
<body>          
       <div id="header">
           <div id="navigation">   
                <div id="nav1">
                <a href="index.php" class="nav1">HOME</a> 
                <a onclick="scrollwin()" style="cursor:pointer;" class="nav1">EVENTS</a>
                </div>
                <div id="nav2">
                <a href="test.php" class="nav2" style="cursor: pointer">SignUp</a>
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
       
       
       <div id="middle">
          <div id="instant"><span>Instant Sign in with</span></div>
           <div id="via">
              <a href=""> <div id="google"><div class="gficon"><img src="images/Google-plus.png" width="30px" height="30px" style="margin-top: 5px;"></div> <div class="linkgf"><span>Google Plus</span></div></div></a>
               <a href=""><div id="fb"><div class="gficon"><img src="images/facebook_logos.png" width="40px" height="30px" style="margin-top: 5px;"></div> <div class="linkgf"><span>Facebook</span></div></div></a>
           </div>
       </div>
       
       <div id="bottom">
           <form action="login.php" method="post"><div><input id="username" name="email" type="email" placeholder="Enter Your Email Id" > </div>
           <div><input type="password" name="userpassword" id="password" placeholder="Enter Your Password"> </div>
           <div><input type="submit" id="signin" value="Sign In"></div></form>
           <div ><a href=""><span id="forgot">FORGOT PASSWORD ?</span></a></div>
           <div id="signup"><span>Still not connected ? <a onclick="signuppage()" style="cursor: pointer;"><span>Sign Up</span></a></span></div>
       </div>
   </div>
   
