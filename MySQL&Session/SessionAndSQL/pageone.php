<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: login.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html>
<body>
<h2>Home</h2>
Hii, <h3> <?php echo $_SESSION["username"];?></h3>
<br/><h5>Welcome to home page.</h5>


<h5>Do you want to go to <a href="pagetwo.php">nextpage</a></h5>

<br/>
 <h5>Do you want to <a href="control/logout.php">logout</a></h5>

</body>
</html>

<?php
$conn = new mysqli("localhost", "root", "", "mydb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT firstname,email,address,interests FROM student WHERE username='". $_SESSION["username"]."' AND password='". $_SESSION["password"]."'";
$result = $conn->query($sql);
if (mysqli_num_rows($result) > 0)
{ echo "<table><tr><th>NAME</th><th>ADDRESS</th><th>EMAIL</th></tr>";
    
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row["firstname"]."</td><td>".$row["address"]."</td><td>".$row["email"]."</td></tr>";
    }
    echo "</table>";
    }
else {
    echo "0 results";
}

mysqli_close($conn);

?>   


