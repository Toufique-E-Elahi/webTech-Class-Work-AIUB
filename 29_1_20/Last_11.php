<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" target="_self">
  Name: <input type="text" name="fname">
  <br>
  Password: <input type="password" name="pass">
  <br>
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];
	$pass = $_REQUEST['pass'];
    if (empty($name) || empty($pass)) {
        echo "Please Input all field";
    } else {
        echo "Done";
    }
}
?>

</body>
</html>