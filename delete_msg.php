<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password,"codingart");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $sql = "DELETE FROM feedbacks WHERE id=$id";
    $res=mysqli_query($conn, $sql);
}
header("location: dashboard.php");
?>