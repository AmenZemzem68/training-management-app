<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password,"codingart");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$pass = $_POST["password"];
$bt = $_POST["button"];
if(isset($bt))
{
    $sql = "INSERT INTO users(First_Name,Last_Name,EMail,Phone,Pass) values ('$fname','$lname','$email','$phone','$pass');";;
    $res=mysqli_query($conn, $sql);
    if ($res) {
        session_start();
        $_SESSION['status'] = "User Created Successfully !";
        header("location: dashboard.php");
    }
}
?>