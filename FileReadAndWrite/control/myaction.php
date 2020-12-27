<html>
<body>
<?php  $user= $_POST["name"]; 
$result="";
$myfile = fopen("newfile.txt", "wb") or die("Unable to open file!");

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
	 $result2 ="Please enter valid name";
}
else
{	$txt = $pass;
fwrite($myfile, $txt);

}
fclose($myfile);
?>
Your data has been stored
</body>
</html>