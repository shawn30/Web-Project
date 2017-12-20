<html>
<head>
    <link rel="stylesheet" href="css.css">
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
$f1=$f2=$f3=false;
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
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
      $count++;
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
        $flag=false;
    }
      else $f2=true;
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 /*   if($_SERVER["REQUEST_METHOD"] == "POST" and flag){
          
       $sql = "insert into login values('".$_POST["name"]."','".$_POST["email"]."','".$_POST["website"]."');";
    $con = mysqli_connect("localhost","root","","event");       
    $result = mysqli_query($con, $sql);
    header("Location:loggedin.php");        

    } */
?>

<p><span class="error">* required field.</span></p>
<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <input placeholder="name" class="validationform" type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
    <input placeholder="email" class="validationform" type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <input placeholder="website" class="validationform" type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  <input class="validationform" type="submit" name="submit" value="Submit">  
</form>

<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        
    }
?>

</body>
</html>