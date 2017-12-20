<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="creatorcss.css">
    <style>

        .error{
            color: red;
        }
       
#signup{
    margin-top: 63px;
    margin-left: 35%;
}
#signup>span{
    color: darkgray;
}
#signup>span>a>span{
    color: crimson;
}
#signup>span>a:link ,#signup>span>a:visited{
    text-decoration: none;
}


#signuppage{
    width: 80%;
    height: 500px;
    z-index: 250;
    margin-top: 70px;
    position: fixed;
    background-color: rgba(0,0,0,0.8);
    margin-left: 10%;
   display: none;
}

#signtop{
    width: 100%;
    height: 40px;
    background-color: black;
    padding-bottom: 15px;
}

#signheading{
    float: left;
    width:92%;
    height: 20px;
    text-align: center;
    padding-top: 20px;
    padding-left: 3%;
}
#signclose{
    padding-bottom: 10px;
    float: right;
    height: 30px;
    margin-bottom: 10px;
    width: 1%px;
}


.signupdetails{
    border-radius: 5px;
    width: 100%;
    height: 40px;
    margin-top: 35px;
    margin-left: 7%;
    //opacity: .9;
    padding-left: 15px;
    padding-right: 15px;
}
.signupdetails>input{
    border-radius: 5px;
    width: 40%;
    height: 40px;
    margin-top: 35px;
    margin-left: 20%;
    //opacity: .9;
    padding-left: 15px;
    padding-right: 15px;
    
}
.signupdetails>span{
    font-size: 15px;
    padding-left: 3px;
}

#signupbtn{
    border-radius: 5px;
    width: 40%;
    height: 40px;
    margin-top: 35px;
    margin-left: 27%;
    //opacity: .9;
    margin-top: 90px;
    padding-left: 15px;
    padding-right: 15px;   
    background-color: crimson;
}


    </style>
</head>
<body>
   <div id="head" class="row">
       <div id="logo">
               <img src="images/logowhitepng.png" alt="">
           </div>  
           <div id="heading">    
               <h3>SIGN UP</h3>
           </div>
   </div>
    <div id="main" style="margin-top:100px;" >
    <?php
$nameErr = $emailErr = $mobileErr = $instituteErr = $branchErr = $semesterErr = $passwordErr = $cpasswordErr = "";
$name = $email = $mobile = $institute = $branch = $semester = $cpassword = "";
$f1=$f2=$f3=$f4=$f5=$f6=$f7=$f8=false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
    else $f1=true;
  }
  
  if (empty($_POST["mobile"])) {
    $mobileErr = "Mobile Number is required";
  } else {
    $mobile = test_input($_POST["mobile"]);
    // check if name only contains letters and whitespace
    if (strlen($mobile)!=10) {
      $mobileErr = "Please provide a valid Phone Number"; 
    }
    else $f2=true;
  }  
    
  if (empty($_POST["institute"])) {
    $instituteErr = "Institute is required";
  } else {
    $institute = test_input($_POST["institute"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$institute)) {
      $instituteErr = "Only letters and white space allowed"; 
    }
    else $f3=true;
  }
    
  if (empty($_POST["branch"])) {
    $branchErr = "Branch is required";
  } else {
    $branch = test_input($_POST["branch"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$branch)) {
      $branchErr = "Only letters and white space allowed"; 
    }
    else $f4=true;
  }
    
  if (empty($_POST["semester"])) {
    $semesterErr = "Semester is required";
  } else {
    $semester = ($_POST["semester"]);
    if ($semester>8) {
      $semesterErr = "Please provide valid semester"; 
    }
    else $f5=true;
  }
    
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
    else {
        $con = mysqli_connect("localhost","root","","event");
        $sql = "select * from login where email = '$email'";
        $res = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($res);
        if($row['email']==$email)
            $emailErr = "Email already exists";
        else
        $f6=true;
    }
  }
    
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } 
  else  $f7=true;
    
  if ($_POST["cpassword"]!=$_POST["password"]) {
    $cpasswordErr = "Passwords must match";
  } 
  else  {$f8=true;
        $cpassword = $_POST["password"];
        }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 if($f1&&$f2&&$f3&&$f4&&$f5&&$f6&&$f7&&$f8){
    
       $sql = "insert into login values('".$name."','".$mobile."','".$institute."','".$email."','".$branch."','".$semester."','".$cpassword."');";
    $con = mysqli_connect("localhost","root","","event");       
    $result = mysqli_query($con, $sql);
    setCookie("user",$email, time()+86400*2);
    header("Location:loggedin.php");        
    } 
?>
    
    <div >
        
        
        <div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
               <div class="signupdetails">
                 <input name="name"  type="text" placeholder="FULL NAME" value="<?php echo $name;?>">
                <span class="error"> <?php echo $nameErr;?></span>
               </div>
               <div class="signupdetails">
                <input name="mobile" type="number"  placeholder="MOBILE NUMBER" value="<?php echo $mobile;?>">
                <span class="error"> <?php echo $mobileErr;?></span>
                </div>
                <div class="signupdetails">
                <input name="institute" type="text"  placeholder="INSTITUTE" value="<?php echo $institute;?>">
                <span class="error"> <?php echo $instituteErr;?></span>
                </div>
                <div class="signupdetails">
                <input name="email" type="email" placeholder="EMAIL" value="<?php echo $email;?>"> 
                <span class="error"> <?php echo $emailErr;?></span>
                </div>
                <div class="signupdetails">
                <input name="branch" type="text"  placeholder="BRANCH" value="<?php echo $branch;?>">
                <span class="error"> <?php echo $branchErr;?></span>
                </div>
                <div class="signupdetails">
                <input name="semester" type="number"  placeholder="SEMESTER" value="<?php echo $semester;?>">
                <span class="error"> <?php echo $semesterErr;?></span>
                </div>
                <div class="signupdetails">
                <input name="password" type="password"  placeholder="PASSWORD" >
                <span class="error"> <?php echo $passwordErr;?></span>
                </div>
                <div class="signupdetails">
                <input name="cpassword" type="password"  placeholder="CONFIRM PASSWORD">
                <span class="error"> <?php echo $cpasswordErr;?></span>
                </div>
                <input id="signupbtn" type="submit" value="SIGNUP">
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