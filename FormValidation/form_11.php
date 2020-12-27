<!DOCTYPE HTML>  
<html>
<head>
</head>
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
    $nameErr = "Name is required";
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
    $genderErr = "Gender is required";
  } 
  if (empty($_POST["gender"])) {
    $cmmErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
if($pass!=$CPass)
  {
	  echo "Password does not match";
  }
$result2="";
if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i",$email))
{
	 $Cm ="Please enter valid email";
}
else
{
	$result2 = $email;
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>



<?php
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