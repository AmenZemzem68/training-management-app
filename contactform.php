<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password,"codingart");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$email=$_POST["email"];
$tel=$_POST["tel"];
$message=$_POST["message"];
$bt=$_POST["button"];
if (isset($bt))
{
    $sql = "INSERT INTO feedbacks (first_name,lastt_name,email,phone,message) values ('$prenom','$nom','$email','$tel','$message')";
    $res=mysqli_query($conn, $sql);
    if ($res) {
          $_SESSION['status'] = "Message sent Successfully !";
          header("location: contact.php");
      }
      else
      {
        $_SESSION['status'] = "Message not sent !";
          header("location: contact.php");
      }
}
?>