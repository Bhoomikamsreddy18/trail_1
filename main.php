<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "STUDENT"; // DB Name

$v1=$_POST["rollno"]; //name attribute value
$v2=$_POST["name"];//name attribute value
$v3=$_POST["email"];//name attribute value

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO SECTION (rollno, name, email) VALUES ('$v1','$v2','$v3')";

if (mysqli_query($conn, $sql)) 
{
  echo "New record created successfully";
} 
else 
{
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
