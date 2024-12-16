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
$bt = $_POST["button"];
if(isset($bt))
{
    $sql = "INSERT INTO users (First_Name, Last_Name,Email, Phone,Pass) VALUES ('$prenom','$nom','$email','$tel','$pass')";
    $res=mysqli_query($conn, $sql);
    if(isset($res))
    {
        session_start();
        $_SESSION['status'] = "Account created successfully !";
    }
    header("Location: signup.php");
}
?>