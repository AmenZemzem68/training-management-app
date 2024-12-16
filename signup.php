<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Sign up</title>
    <!--Botstrap css-->
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <!--CSS-->
    <link rel="stylesheet" href="CSS/sign.css">
    </head>
    <body>
      <div class="container">
        <div class="contact-box">
          <div class="left"></div>
          <div class="right">
            <h2>Sign Up</h2>
            <?php
                            if(isset($_SESSION['status']))
                            {
                                ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?php echo $_SESSION['status']; ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <?php
                            }
                            unset($_SESSION["status"]);
                        ?>
            <form  method="POST" id="form" autocomplete="off" action="submit.php">
            <div><input type="text" class="form-control" id="fname" autocomplete="off" placeholder="Your First Name" name="fname"></div>
            <div><input type="text" class="form-control" id="lname" placeholder="Your Last Name" name="lname"></div>
            <div><input type="text" class="form-control" id="email" placeholder="Your Email" name="email"></div>
            <div><input type="text" class="form-control" id="phone" placeholder="Your Phone" name="phone"></div>
            <div><input type="Password" class="form-control" id="pswd" placeholder="Your Password" name="password"></div>
            <div><input type="Password" class="form-control" id="pswd2" placeholder="Confirm Password"></div>
            <button class="btn" name="button" type="submit">Sign Up</button>
          </form>
          <br>
          <p> Already have an account ? <a style="text-decoration:none; color:#93278F;" href="login_page.php">Login</a></p>
          </div>
        </div>
      </div>
        <!--Botstrap js-->
        <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js"></script>
        <script src="JS/signup.js"></script>
    </body>
</html>