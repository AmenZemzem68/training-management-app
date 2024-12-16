<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password,"codingart");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$email = $_POST["email"];
$pass = $_POST["password"];
$bt = $_POST["button"];
if(isset($bt))
{
    $sql = "SELECT * FROM users WHERE Email='$email' AND Pass='$pass'";
    $res=mysqli_query($conn, $sql);
    $sql1 = "SELECT * FROM admins WHERE email='$email' AND password='$pass'";
    $res1=mysqli_query($conn, $sql1);
    if ($res->num_rows==1) {
        $row=$res->fetch_assoc();
        session_start();
        $_SESSION['identifier']=$row["Id"];
        $_SESSION['fname'] = $row["First_Name"];
        $_SESSION['lname'] = $row["Last_Name"];
        $_SESSION['email'] = $row["Email"];
        $_SESSION['phone'] = $row["Phone"];
        $_SESSION['pass'] = $row["Pass"];
        header("location: home.php");
    }
    else if ($res1->num_rows==1) {
        $row=$res1->fetch_assoc();
        session_start();
        $_SESSION['afname'] = $row["first_name"];
        $_SESSION['alname'] = $row["last_name"];
        $_SESSION['aemail'] = $row["email"];
        $_SESSION['aphone'] = $row["phone"];
        $_SESSION['apass'] = $row["password"];
        header("location: dashboard.php");
    }
    else {
        session_start();
        $_SESSION['status'] = "Invalid email or password !";
        header("location: login_page.php");
    }
}
?>