<html>
<body>
<?php

$name = "";
$email="";
$pass="";
$CPass="";
$gender="";
$interest="";

$nameErr = "";
$emailErr="";
$passErr="";
$CPassErr="";
$genderErr="";
$interestErr="";
$cmmErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
    $nameErr = "name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["password"])) {
    $passErr = "password is required";
  } else {
    $pass = test_input($_POST["password"]);
  }

  if (empty($_POST["comment"])) {
    $CPassErr = "Confirm Password Please";
  } else {
    $CPass = test_input($_POST["Cpassword"]);
  }
  
  if (empty($_POST["interest"])) {
    $interestErr = "interest is required";
  } else {
    $interest = test_input($_POST["interest"]);
  }

  if (empty($_POST["address"])) {
    $cmmErr = "Comment is required";
  } 
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Form Validation </h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post"">
  Name: <input type="text" name="name">
  <span>* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span>* <?php echo $emailErr;?></span>
  <br><br>
  Password: <input type="password" name="password">
  <span><?php echo $passErr."*";?></span>
  <br><br>
  Confirm Password: <input type="password" name="Cpassword">
  <span>* <?php echo $CPassErr;?></span>
  <br><br>
  <input type="checkbox" name="music" value="music"> music
  <input type="checkbox" name="sports" value="pg"> sports
  <input type="checkbox" name="reading" value="reading"> reading
  <input type="checkbox" name="writting" value="writting"> writting
  <span>* <?php echo $interestErr;?></span>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <span>* <?php echo $genderErr;?></span>
  <br><br>
  Address: <textarea name="address" rows="5" cols="40"></textarea>
  <span>* <?php echo $cmmErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
  <input type="reset" name="reset" value="reset">
</form>
<?php
if($pass!=$CPass)
  {
	  echo "PAssword Does not match";
  }
$result2="";
if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i",$email))
{
	 echo "Please enter valid email";
}
else
{
	$result2 = $email;
}
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $result2;
echo "<br>";
echo $interest;
echo "<br>";
echo $gender;
?>

</body>
</html>