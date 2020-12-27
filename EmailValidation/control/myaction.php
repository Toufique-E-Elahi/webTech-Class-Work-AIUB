<html>
<body>
<?php  $user= $_POST["name"]; 
$result="";
if($user=="")
{
	 $result ="Please enter valid name";
}
else
{
	$result = $user;
}
$email= $_POST["email"]; 
$result2="";
if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i",$email))
{
	 $result2 ="Please enter valid email";
}
else
{
	$result2 = $email;
}

echo $result."<br>";
echo $result2;
?>
</body>
</html>