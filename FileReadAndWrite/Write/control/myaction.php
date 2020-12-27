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
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = $user;
fwrite($myfile, $txt);
fclose($myfile);	
}
$pass= $_POST["pass"]; 
$result2="";
if($pass=="")
{
	 $result2 ="Please enter valid Pass";
}
else
{	$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = $pass;
fwrite($myfile, $txt);
fclose($myfile);
}
?>
Your data has been stored
</body>
</html>