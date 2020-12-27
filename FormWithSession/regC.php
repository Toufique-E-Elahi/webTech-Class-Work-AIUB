<html>
<body>
<?php  $user= $_POST["name"]; 
$result="";
$myfile = fopen("reg.txt", "wb") or die("Unable to open file!");

if($user=="")
{
	 $result ="Please enter valid name";
}
else
{
$txt = $user;
fwrite($myfile, $txt.PHP_EOL);

}
$pass= $_POST["pass"]; 
$result2="";
if($pass=="")
{
	 echo "Please enter Password";
}
else
{	$txt1 = $pass;
fwrite($myfile, $txt1.PHP_EOL);

}
$Cpass= $_POST["Cpass"]; 
if($Cpass!=$pass || $Cpass=="")
{
	 echo "Password Doesn't Match";
}

$email= $_POST["email"]; 
$result3="";
if($email=="")
{
	 $result3 ="Please enter valid name";
}
else
{	$txt3 = $email;
fwrite($myfile, $txt3);

}
fclose($myfile);
?>
Your data has been stored
</body>
</html>