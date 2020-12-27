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
?>
Welcome <?php echo $result; ?> <br>
Your email address is: <?php echo $_POST["email"]; ?>

</body>
</html>