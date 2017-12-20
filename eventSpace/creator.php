<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="creatorcss.css">
    <link rel="stylesheet" href="footer.css">
</head>
<body>
   <div id="head" class="row">
       <div id="logo">
               <img src="images/logowhitepng.png" alt="">
           </div>  
           <div id="heading">    
               <h3>LET'S CREATE YOUR EVENT</h3>
           </div>
   </div>
    <div id="main">
    <form action="created.php" method="get">
  <div class="form-group">
    <label for="name">Event Name:</label>
    <input name="eventname" type="text" class="form-control" id="eventname">
  </div>
  <div class="form-group">
    <label for="name">Organized By:</label>
    <input name="organizedby" type="text" class="form-control" id="organizedby">
  </div>
  <div class="form-group">
    <label for="name">Venue:</label>
    <input name="venue" type="text" class="form-control" id="venue">
  </div>
  <div class="form-group">
    <label for="name">Date:</label>
    <input name="date" type="date" class="form-control" id="date">
  </div>
  <div class="form-group">
    <label for="name">Time:</label>
    <input name="time" type="time" class="form-control" id="time">
  </div>
  <div class="form-group">
    <label for="name">Event Description:</label>
    <input name="description" type="text" class="form-control" id="description">
  </div>
  
  <input type="submit" class="btn btn-default" value="Submit">
</form>
   
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