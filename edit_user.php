<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password,"codingart");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$prenom=$_POST["fname"] ;
$nom=$_POST["lname"]  ;
$tel=$_POST["phone"];
$email = $_POST["email"];
$pass = $_POST["password"];
$id=$_GET["id"];
$bt = $_POST["button"];
if(isset($bt))
{
    $sql = "UPDATE users SET First_Name='$prenom', Last_Name='$nom',Email='$email', Phone='$tel',Pass='$pass' WHERE Id='$id'";
    $res=mysqli_query($conn, $sql);
    header("Location: dashboard.php");
}
?>