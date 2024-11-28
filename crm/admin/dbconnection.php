
<?php
$servername = "195.250.20.76";
$username = "zentries_root";
$password = "K3hfpUG1Aur$";
$dbname = "zentries_live";


$conn=mysqli_connect($servername,$username,$password,"$dbname");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


?>