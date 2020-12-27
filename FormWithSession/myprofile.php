<?php
$user_input = $_POST["name"];
$password_input = $_POST["pass"];
$myfile = fopen("reg.txt", "r") or die("Unable to open file!");
$lines[]= fgets($myfile);
if($user_input==$lines[0] && $password_input==$lines[1])
{
	echo "Confirmed";
}
else
{
	echo "failed";
}
fclose($myfile);
?>