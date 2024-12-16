<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password,"codingart");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$fname=$_SESSION['fname'];
$lname=$_SESSION['lname'];
$email=$_SESSION['email'];
$phone=$_SESSION['phone'];
$date=$_POST["date"];
$choice=$_POST["option"];
$bt=$_POST["button"];
if (isset($bt))
{
    $sql = "INSERT INTO applyments (First_Name, Last_Name, Email, Phone, Training, date) VALUES ('$fname','$lname','$email','$phone','$choice','$date')";
    $res=mysqli_query($conn, $sql);
    if ($res) {
        $_SESSION['status'] = "Applied Successfully !";
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit();
      }
}
?>