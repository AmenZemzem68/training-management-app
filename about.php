<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>About Us</title>
    <link rel="shortcut icon" type="image/x-icon" href="Images/logo.ico">
    <!--Font Awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Botstrap css-->
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <!--CSS-->
    <link rel="stylesheet" href="CSS/about.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    </head>
    <body>
        <!--navbar-->
        <nav class = "navbar navbar-expand-lg navbar-light bg-white py-4 fixed-top  " data-aos="slide-down" data-aos-duration="1000" data-aos-once="true">
            <div class = "container">
                <a class = "navbar-brand d-flex justify-content-between align-items-center order-lg-0" href = "home.html">
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
          <!-- head -->
          <header id = "head" class = "vh-100">
            <video src="Images/yt5s.io-No Copyright Video, Background, Green Screen, Motion Graphics, Animated Background, Copyright Free-(1080p) (2).mp4" muted autoplay loop ></video>
    
            <div class = "container" id="head2" style="padding-top: 320px;" data-aos="fade-in" data-aos-duration="1000" data-aos-once="true">
                <div class = "text-center" id="head3">
                    <h1 class = "text-uppercase py-3 fw-bold text-white">About Us</h1>
                </div>
            </div>
        </header>
    <!-- end of header -->
        <!-- about us -->
        <section id = "about" class = "py-5">
            <div class = "container">
                <div class = "title text-center py-5">
                    <h2 class = "position-relative d-inline-block" data-aos="fade-down" data-aos-duration="1000" data-aos-once="true">Our platform</h2>
                </div>
                <div class = "row gy-lg-5 align-items-center">
                    <div class = "col-lg-6 order-lg-1 text-center text-lg-start" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">
                        <p class = "lead text-muted" >An interactive and gamified learning platform</p>
                    <p>Our educational platform is the result of the hard work and collaboration of our educational team, our developers, our designers, our content creators and our partners. It creates an extraordinary learning experience joining customized development with learning and self-governance. Its design and functionalities make it the perfect for our methodology. Discover our programs</p>                    </div>
                    <div class = "col-lg-6 order-lg-0" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
                        <img src = "images/aboutt.jpg" alt = "" class = "img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <section class = "py-5">
            <div class = "container">
                <div class = "title text-center py-5">
                    <h2 class = "position-relative d-inline-block" data-aos="fade-down" data-aos-duration="1000" data-aos-once="true">Why is our methodology effective?</h2>
                </div>
    
                <div class = "row g-4" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                    <div class = "card border-0 col-lg-3 bg-transparent my-3">
                        <img src = "images/inst.jpg" alt = "" id="wd">
                        <div class = "card-body px-0">
                            <h4 class = "card-title">Personalized follow-up</h4>
                            <p class = "card-text mt-3 text-muted">Each student will be joined by an exceptionally skilled instructor. We immovably accept that powerful preparation needs human support.<br><br><br></p>
                        </div>
                    </div>
                    <div class = "card border-0 col-lg-3 bg-transparent my-3">
                        <img src = "Images/project.png" alt = "" id="d">
                        <div class = "card-body px-0">
                            <h4 class = "card-title">A project-oriented course</h4>
                            <p class = "card-text mt-3 text-muted">In addition to having a final project, each course contains several projects and practical exercises to give the student the opportunity to test and build by themselves.<br><br></p>
                        </div>
                    </div>
                    <div class = "card border-0 col-lg-3 bg-transparent my-3">
                        <img src = "Images/comm.png" alt = "" id="gd">
                        <div class = "card-body px-0">
                            <h4 class = "card-title">The CODINGART Community</h4>
                            <p class = "card-text mt-3 text-muted">By joining CODINGART you will have the support of a whole community passionate about technologies to motivate you on a daily basis. We also organize various events: hackathons, talks, panels… for them.</p>
                        </div>
                    </div>
                    <div class = "card border-0 col-lg-3 bg-transparent my-3">
                        <img src = "Images/cont.jpg" alt = "" id="gd">
                        <div class = "card-body px-0">
                            <h4 class = "card-title">Rich and interactive content</h4>
                            <p class = "card-text mt-3 text-muted">The content of our courses is developed with partner companies of GOMYCODE. It is employability oriented and it is constantly updated according to recruiters' requests.</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section id = "about" class = "pb-5">
            <div class = "container">
                <div class = "title text-center py-5" data-aos="fade-down" data-aos-duration="1000" data-aos-once="true">
                    <h2 class = "position-relative d-inline-block">Our goals</h2>
                </div>
                <div class = "row gy-lg-5 align-items-center">
                    <div class = "col-lg-6 order-lg-0" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
                        <img src = "images/goal.jpg" alt = "" class = "img-fluid">
                    </div>
                    <div class = "col-lg-6 order-lg-1 text-center text-lg-start" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true"> 
                        <ol>
                            <li>Discover the technologies and tools used in web development and explore the fundamentals of the Internet.</li>
                            <li>Identify the creative process used by graphic designers to create original designs.</li>
                            <li>Learn about the development of video games.</li>
                        </ol>
                </div>
            </div>
        </section>
        <!-- end of about us -->
                <!-- footer -->
    <footer class = "bg-dark py-5">
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
                            <a href = "home.php" class = "na text-white text-decoration-none text-muted">
                                <i class = "fas fa-chevron-right me-1"></i> Home
                            </a>
                        </li>
                        <li class = "my-3">
                            <a href = "trainings.php" class = "text-white text-decoration-none text-muted">
                                <i class = "fas fa-chevron-right me-1"></i> Our training
                            </a>
                        </li>
                        <li class = "my-3">
                            <a href = "about.php" class = "text-white text-decoration-none text-muted">
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


        <!--jQuery-->
        <script src="js/jquery-3.6.3.js"></script>
        <!--Botstrap js-->
        <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
            <script>
            AOS.init();
        </script>
        <script src="JS/training.js"></script>
    </body>
</html>