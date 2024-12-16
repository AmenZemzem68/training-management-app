<?php
  session_start();
 ?>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="Images/logo.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Botstrap css-->
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <!--CSS-->
    <link rel="stylesheet" href="CSS/lstyle.css">
    </head>
    <body>
      <div class="container">
        <div class="contact-box">
          <div class="left"></div>
          <div class="right">
            <h2>Login</h2>
            <?php
                            if(isset($_SESSION['status']))
                            {
                                ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <?php echo $_SESSION['status']; ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <?php
                            }
                            unset($_SESSION["status"]);
                        ?>
            <form  method="POST" id="form" action="login.php">
            <input type="text" class="form-control" id="fname" placeholder="Your Email" name="email"required>
            <div class="invalid-feedback">
              Please enter your first name.
              </div>

            <input type="Password" class="form-control" id="pswd" placeholder="Your Password" name="password"required>
            <div class="invalid-feedback">
              Please enter your password.
            </div>
            <button class="btn" name="button" type="submit">Login</button>
          </form>
          <br>
          <p> Don't have an account ? <a style="text-decoration:none; color:#93278F;" href="signup.php">Sign Up</a></p>
          </div>
        </div>
      </div>
        <!--Botstrap js-->
        <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
        <script src="JS/script3.js"></script>
    </body>
</html>