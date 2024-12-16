<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Coding Art Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="Images/logo.ico">
    <!--Font Awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Botstrap css-->
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <!--CSS-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="CSS/mainstyle.css">

    </head>
    <body>
        <!--navbar-->
        <nav class = "navbar navbar-expand-lg navbar-light bg-white py-4 fixed-top  " data-aos="slide-down" data-aos-duration="1000" data-aos-once="true" data-aos-delay="50">
            <div class = "container">
                <a class = "navbar-brand d-flex justify-content-between align-items-center order-lg-0" href = "home.php">
                    <img src = "Images/logo.png" alt = "site icon">
                    <span class = "text-uppercase fw-lighter ms-2">Coding</span><span class = "text-uppercase text-primary fw-lighter ms-2">Art</span>
                </a>
    
                <div class = "order-lg-2 nav-btns">
                <?php
                    session_start();
                    if(isset($_SESSION["fname"]))
                    {
                        echo "Hi , " .$_SESSION['fname'];?>
                        <div type = "button" class = "btn position-relative">
                        <i  id="dropdown-icon" class = "fa fa-user"></i>
                        <div id="dropdown-list" class="dropdown-list">
                        <a data-bs-toggle='modal' data-bs-target='#myModal'><i class="fa fa-pencil"></i> Edit Profile</a>
                        <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                     </div>
                    </div> 
                    <?php }
                    if(!isset($_SESSION["fname"]))
                    {?>
                    <a href="login_page.php" class="btn btn-primary">Login</a>
                    <a href="signup.php" class="btn btn-outline-primary">Sign Up</a>
                    <?php }
                    ?>
                </div>
    
                <button class = "navbar-toggler border-0" type = "button" data-bs-toggle = "collapse" data-bs-target = "#navMenu">
                    <span class = "navbar-toggler-icon"></span>
                </button>
    
                <div class = "collapse navbar-collapse order-lg-1" id = "navMenu">
                    <ul class = "navbar-nav mx-auto text-center">
                        <li class = "nav-item px-2 py-2">
                            <a class = "nav-link text-uppercase text-dark" href = "home.php">home</a>
                        </li>
                        <li class = "nav-item px-2 py-2">
                            <a class = "nav-link text-uppercase text-dark" href = "trainings.php">Our trainings</a>
                        </li>
                        <li class = "nav-item px-2 py-2">
                            <a class = "nav-link text-uppercase text-dark" href = "about.php">About Us</a>
                        </li>
                        <li class = "nav-item px-2 py-2">
                            <a class = "nav-link text-uppercase text-dark" href = "contact.php">Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--end navbar-->
        
        <!-- header -->
    <header id = "head" class = "vh-100">
        <video src="Images/yt5s.io-No Copyright Video, Background, Green Screen, Motion Graphics, Animated Background, Copyright Free-(1080p) (2).mp4" muted autoplay loop ></video>
        <div class = "containe" id="head2" style="padding-top: 250px;" data-aos="fade-in" data-aos-duration="1000" data-aos-once="true">
            <div class = "text-center">
                <h1 class = "text-uppercase py-3 fw-bold text-white">Coding Art</h1>
                <p style="color: white; font-size: 40px;">LEARN PROGRAMMING AND DESIGN</p>
                <br>
                <a href = "trainings.php"><button class="btnn22 btnn2">Discover our programs</button> </a>
            </div>
        </div>
    </header>
    <!-- end of header -->
     <!-- trainings -->
     <section id = "training" class = "py-5">
        <div class = "container">
            <div class = "title text-center py-5">
                <h2 class = "position-relative d-inline-block" data-aos="fade-down" data-aos-duration="1000" data-aos-once="true">Start Learning</h2>
            </div>

            <div class = "row g-3">
                <div class = "card border-0 col-lg-4 bg-transparent my-3" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                    <a href="introweb.php"><img src = "images/web.jpg" alt = "" id="wd" class="pt-2"></a>
                    <div class = "card-body px-0" >
                        <h4 class = "card-title">Intro Web Development</h4>
                        <p class = "card-text mt-3 text-muted">Learn the latest technologies to become a web developer and create websites with HTML, CSS. You will also learn the basics of JavaScript to make your pages interactive.<br><br><br></p>
                        <p class = "card-text">
                        </p>
                    </div>
                </div>
                <div class = "card border-0 col-lg-4 bg-transparent my-3" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                    <a href="gai.php"><img src = "Images/design.png" alt = "" id="d" class="pt-2"></a>
                    <div class = "card-body px-0">
                        <h4 class = "card-title">Graphic Design : AI</h4>
                        <p class = "card-text mt-3 text-muted">Learn how to use Adobe Illustrator and build logos, posters and other print visuals/deliverables using the creative process that will allow you to communicate visually.<br><br></p>
                        <p class = "card-text">
                        </p>
                    </div>
                </div>
                <div class = "card border-0 col-lg-4 bg-transparent my-3" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                    <a href="introgame.php"><img src = "Images/game.png" alt = "" id="gd" class="pt-2"></a>
                    <div class = "card-body px-0">
                        <h4 class = "card-title">Intro Game Development</h4>
                        <p class = "card-text mt-3 text-muted">Discover the world of video games, get started with Unity and C #, and practice solving simple problems with code.

                            At the end of the course, you will be able to create your first 2D mobile video game from scratch, such as Flappy Bird and Pong.</p>
                        <p class = "card-text">
                        </p>
                    </div>
                </div>
                <div id="bt" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"><a href="trainings.php"><button class="btnn btnn1">More trainings</button></a></div>
            </div>
        </div>
    </section>
    <!-- end of trainings -->
    <!-- offer -->
    <section id = "offers" class = "py-5">
        <div class = "container" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
            <div class = "row d-flex align-items-center justify-content-center text-center justify-content-lg-start text-lg-start">
                <div class = "offers-content">
                    <span class = "text-white">Discount Up To 40%</span>
                    <h2 class = "mt-2 mb-4 text-white">For All Students!</h2>
                    <a href = "trainings.php"><button class="btnn22 btnn2">Discover Now</button></a>
                </div>
            </div>
        </div>
    </section>
    <!-- end of offer -->
    
    <!-- about us -->
    <section id = "about" class = "py-5">
        <div class = "container">
            <div class = "row gy-lg-5 align-items-center">
                <div class = "col-lg-6 order-lg-1 text-center text-lg-start">
                    <div class = "title pt-3 pb-5">
                        <h2 class = "position-relative d-inline-block ms-4" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">About Us</h2>
                    </div>
                    <p class = "lead text-muted" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">A disruptive methodology</p>
                    <p data-aos="fade-left" data-aos-duration="1000" data-aos-once="true"> The "Coding Art" method is now replacing the classic educational system which is highly theoretical and not motivating. Our learning model is based on projects and exercises providing the student with long-term knowledge and skills.</p>
                </div>
                <div class = "col-lg-6 order-lg-0" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
                    <img src = "images/about.jpg" alt = "" class = "img-fluid">
                </div>
            </div>
        </div>
        <br>
        <div id="bt" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"><a href="about.php"><button class="btnn btnn1">Learn more</button></a></div>
    </section>
    <!-- end of about us -->

        <!-- newsletter -->
    <section id = "newsletter" class = "py-5">
        <div class = "container" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
            <div class = "d-flex flex-column align-items-center justify-content-center">
                <div class = "title text-center pt-3 pb-5">
                    <h2 class = "position-relative d-inline-block ms-4">Newsletter Subscription</h2>
                </div>

                <p class = "text-center text-muted">Subscribe to the newsletter to stay connected !</p>
                <div class = "input-group mb-3 mt-3">
                    <input type = "text" class = "form-controll" placeholder="Enter Your Email ...">
                    <button type = "submit" class="btnn3">Subscribe</button>
                </div>
            </div>
        </div>
    </section>
    <!-- end of newsletter -->
                <!-- footer -->
    <footer class = "bg-dark py-5" >
        <div class = "container">
            <div class = "row text-white g-4">
                <div class = "col-md-6 col-lg-3">
                    <a class = "text-uppercase text-decoration-none brand text-white" href = "home.html">Coding Art</a>
                    <p class = "text-white text-muted mt-3">We train the next tech generation in the latest technologies and the jobs of the future to prepare them for the professional world and strengthen their employability.</p>
                </div>

                <div class = "col-md-6 col-lg-3">
                    <h5 class = "fw-light">Links</h5>
                    <ul class = "list-unstyled">
                        <li class = "my-3">
                            <a href = "home.html" class = "na text-white text-decoration-none text-muted">
                                <i class = "fas fa-chevron-right me-1"></i> Home
                            </a>
                        </li>
                        <li class = "my-3">
                            <a href = "trainings.html" class = "text-white text-decoration-none text-muted">
                                <i class = "fas fa-chevron-right me-1"></i> Our training
                            </a>
                        </li>
                        <li class = "my-3">
                            <a href = "about.html" class = "text-white text-decoration-none text-muted">
                                <i class = "fas fa-chevron-right me-1"></i> About Us
                            </a>
                        </li>
                        <li class = "my-3">
                            <a href = "contact.php" class = "text-white text-decoration-none text-muted">
                                <i class = "fas fa-chevron-right me-1"></i> Contact Us
                            </a>
                        </li>
                    </ul>
                </div>

                <div class = "col-md-6 col-lg-3">
                    <h5 class = "fw-light mb-3">Contact Us</h5>
                    <div class = "d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class = "me-3">
                            <i class = "fas fa-map-marked-alt"></i>
                        </span>
                        <span class = "fw-light">
                            Rue Abderrahmen Najjar, 18, Boumhal, Tunisie
                        </span>
                    </div>
                    <div class = "d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class = "me-3">
                            <i class = "fas fa-envelope"></i>
                        </span>
                        <span class = "fw-light">
                            azemzem@gmail.com
                        </span>
                    </div>
                    <div class = "d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class = "me-3">
                            <i class = "fas fa-phone-alt"></i>
                        </span>
                        <span class = "fw-light">
                            +216 94 922 111
                        </span>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-3">
                    <h5 class = "fw-light mb-3">Follow Us</h5>
                    <div>
                        <ul class = "list-unstyled d-flex">
                            <li>
                                <a href = "#" class = "text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class = "fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href = "#" class = "text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class = "fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href = "#" class = "text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class = "fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href = "#" class = "text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class = "fab fa-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of footer -->


    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = new mysqli($servername, $username, $password,"codingart");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $idd=$_SESSION['identifier'];
    $sql = "SELECT * FROM users WHERE Id='$idd'";
    $res=mysqli_query($conn, $sql);
    $row=$res->fetch_assoc();
?>
    <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Edit Profile</h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                <form  method="POST" id="form" action="edit.php">
                      <input type="text" class="form-control" id="fname" placeholder="First Name" name="fname" value="<?php echo $row["First_Name"];?>"required>
                      <div class="invalid-feedback">
                        Please enter your first name.
                        </div>
                      <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname" value="<?php echo $row["Last_Name"];?>" required>
                      <div class="invalid-feedback">
                        Please enter your last name.
                        </div>
                      <input type="text" class="form-control" id="cin" placeholder="Email" name="email" value="<?php echo $row["Email"];?>"required>
                        <input type="text" class="form-control" id="cin" placeholder="Phone" name="phone" value="<?php echo $row["Phone"];?>"required>
                      <input type="Password" class="form-control" id="pswd" placeholder="Password" name="password" required>
                      <div class="invalid-feedback">
                        Please enter your password.
                      </div>
                      <br>
                      <center><button class="btn btn-success" name="button" type="submit">Confirm</button>
                      <button class="btn btn-danger" data-bs-dismiss="modal">Cancel</button></center>
                    </form>
                </div>
              </div>
            </div>
          </div>



        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
            <script>
            AOS.init();
        </script>
        <!--Botstrap js-->
        <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
        <script src="JS/training.js"></script>
    </body>
</html>