< html>
  <head>
   
    <title>PHP File Uploader</title>

    <link href="boostrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="footer.css">
   <style>
      body{
    overflow-x: hidden;
}
#head{
    background: black;
    width: 110%;
    height: 100px;
    position: fixed;
    top: 0;
}
#logo
{
    margin-left: 20px;
    //border: 1px solid blue;
    height: 106px;
    float: left;
    width:177px;
    float: left;
}

#heading{
    //text-align: center;
    padding: 20px 0 0 30px;
    color: white;
    float: left;
}
#main{
    margin-top: 100px;
    padding: 20px 60px 160px 60px;
}
      </style>
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

	      <div class="row">
	      	<div class="col-lg-12">
	           <form class="well" action="upload.php?imageid=<?php echo $_REQUEST["imageid"]; ?>" method="post" enctype="multipart/form-data">
				  <div class="form-group">
				    <label for="file">Select a cover to upload:</label>
				    <input type="file" name="file">
				    <p class="help-block">
				    <br> Only jpg, jpeg, png and gif file with maximum size of 1 MB is allowed.
				    <br> <br> Please set you cover image name same as your event name.</p>
				  </div>
				  <input type="submit" class="btn btn-lg btn-primary" value="Upload">
				</form>
			</div>
	      </div>
    </div> 
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

  </body>
</html>