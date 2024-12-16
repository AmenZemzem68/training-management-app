<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Coding Art Trainings</title>
    <link rel="shortcut icon" type="image/x-icon" href="Images/logo.ico">
    <!--Font Awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Botstrap css-->
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <!--CSS-->
    <link rel="stylesheet" href="CSS/trainings.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    </head>
    <body>
        <!--navbar-->
         <nav class = "navbar navbar-expand-lg navbar-light bg-white py-4 fixed-top" data-aos="slide-down" data-aos-duration="1000" data-aos-once="true">
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
        <!-- header -->
    <header id = "head" class = "vh-100">
        <video src="Images/yt5s.io-No Copyright Video, Background, Green Screen, Motion Graphics, Animated Background, Copyright Free-(1080p) (2).mp4" muted autoplay loop ></video>

        <div class = "container" id="head2" style="padding-top: 320px;" data-aos="fade-in" data-aos-duration="1000" data-aos-once="true">
            <div class = "text-center" id="head3">
                <h1 class = "text-uppercase py-3 fw-bold text-white">Our Trainings</h1>
            </div>
        </div>
    </header>
    <!-- end of header -->
    <section id = "collection" class = "py-5" >
        <div class = "container">
            <div class = "title text-center">
                <h2 class = "position-relative d-inline-block" data-aos="fade-down" data-aos-duration="1000" data-aos-once="true">Start Learning</h2>
            </div>

            <div class = "row g-0" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                <div class = "d-flex flex-wrap justify-content-center mt-5 filter-button-group">
                    <button type = "button" class = "btnn m-2 active-filter-btn" data-filter = "*">All</button>
                    <button type = "button" class = "btnn m-2 " data-filter = ".coding">Coding</button>
                    <button type = "button" class = "btnn m-2 " data-filter = ".design">Design</button>
                    <button type = "button" class = "btnn m-2 " data-filter = ".digital">Digital Marketing</button>
                </div>

                <div class = "collection-list">
                    <div class = "col-md-6 col-lg-4 my-3 coding">
                        <div class = "card border-0 bg-transparent p-2" id="webdev">
                            <a href="introweb.php"><img src = "images/web.jpg" alt = "" id="wd"></a>
                            <div class = "card-body px-0">
                                <h4 class = "card-title">Intro Web Development</h4>
                                <p class = "card-text mt-3 text-muted">Learn the latest technologies to become a web developer and create websites with HTML, CSS. You will also learn the basics of JavaScript to make your pages interactive.</p>
                            </div>
                        </div>
                    </div>
                    <div class = "col-md-6 col-lg-4 my-3 design">
                        <div class = "card border-0 bg-transparent p-2" id="des">
                            <a href="gai.php"><img src = "Images/design.png" alt = "" id="d"></a>
                            <div class = "card-body px-0">
                                <h4 class = "card-title">Graphic Design : AI</h4>
                                <p class = "card-text mt-3 text-muted">Learn how to use Adobe Illustrator and build logos, posters and other print visuals/deliverables using the creative process...</p>
                            </div>
                        </div>
                    </div>
                    <div class = "col-md-6 col-lg-4  my-3 digital">
                        <div class = "card border-0 bg-transparent p-2" id="marketing">
                            <a href="smm.php"><img src = "Images/social.png" alt = "" id="d" ></a>
                            <div class = "card-body px-0">
                                <h4 class = "card-title">Social Media Management</h4>
                                <p class = "card-text mt-3 text-muted"> Equip yourself with the tools and skills necessary to start a career in social media marketing. Develop your digital marketing strategy by relying on a company...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class = "col-md-6 col-lg-4 my-3 coding">
                        <div class = "card border-0 bg-transparent p-2" id="webdev1">
                            <a href="fend.php"><img src = "Images/react.png" alt = "" id="wd1"></a>
                            <div class = "card-body px-0">
                                <h4 class = "card-title">Front-end with React-JS</h4>
                                <p class = "card-text mt-3 text-muted">Learn the latest technologies to become a Front-end developer and launch web applications and interactive and rich user interfaces with JavaScript, ES6 and React. Manage states with Redux and manipulate external APIs.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class = "col-md-6 col-lg-4 my-3 digital">
                        <div class = "card border-0 bg-transparent p-2" id="marketing1">
                            <a href="seo.php"><img src = "Images/ecom.jpg" alt = "" id="m1"></a>
                            <div class = "card-body px-0">
                                <h4 class = "card-title">SEO and E-commerce</h4>
                                <p class = "card-text mt-3 text-muted">Deepen your knowledge of digital marketing! Launch your e-commerce and boost your sales with wordpress and Woocommerce! Use SEO techniques and google ads to appear on the first page of Google and increase your performance.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class = "col-md-6 col-lg-4 my-3 coding">
                        <div class = "card border-0 bg-transparent p-2" id="gamedev1">
                            <a href="2d.php"><img src = "Images/2d.jpg" alt = "" id="gd1"></a>
                            <div class = "card-body px-0">
                                <h4 class = "card-title">2D Game Development</h4>
                                <p class = "card-text mt-3 text-muted">A more advanced course to create your own "free-to-play" video game by mastering Unity and C#.
                                    Unity offers several possibilities: interactive experiences, animations, architectural visualizations and all kinds of simulations.</p>
                            </div>
                        </div>
                    </div>
                    <div class = "col-md-6 col-lg-4 my-3  coding">
                        <div class = "card border-0 bg-transparent p-2" id="gamedev2">
                            <a href="3d.php"><img src = "Images/3d.jpeg" alt = "" id="gd2"></a>
                            <div class = "card-body px-0">
                                <h4 class = "card-title">3D Game Development</h4>
                                <p class = "card-text mt-3 text-muted">Become a video game developer and learn how to create your game while modeling new 3D characters using Unity, one of the most powerful multimedia tools.
                                    You will learn how to develop your game from a basic idea and deploy it on mobile.</p>
                            </div>
                        </div>
                    </div>
                    <div class = "col-md-6 col-lg-4 my-3 design">
                        <div class = "card border-0 bg-transparent p-2" id="des1">
                            <a href="gap.php"><img src = "Images/ps.png" alt = "" id="d1"></a>
                            <div class = "card-body px-0">
                                <h4 class = "card-title">Graphic Design : PS</h4>
                                <p class = "card-text mt-3 text-muted">Strengthen your design skills with photoshop! You will learn how to edit images and photos to create printable and digital designs! You will also use lightroom to make perfect and flawless photos. After this course, you will be able to...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class = "col-md-6 col-lg-4 my-3 coding">
                        <div class = "card border-0 bg-transparent p-2" id="gamedev">
                            <a href="introgame.php"><img src = "Images/game.png" alt = "" id="gd" ></a>
                            <div class = "card-body px-0">
                                <h4 class = "card-title">Intro Game Development</h4>
                                <p class = "card-text mt-3 text-muted">Discover the world of video games, get started with Unity and C #, and practice solving simple problems with code.
        
                                    At the end of the course, you will be able to create your first 2D mobile video game from scratch, such as Flappy Bird and Pong.</p>
                            </div>
                        </div>
                    </div>
                    <div class = "col-md-6 col-lg-4 my-3  coding">
                        <div class = "card border-0 bg-transparent p-2" id="webdev2">
                            <a href="bend.php"><img src = "Images/node.jpg" alt = "" id="wd2"></a>
                            <div class = "card-body px-0">
                                <h4 class = "card-title">Back-end with Node-JS</h4>
                                <p class = "card-text mt-3 text-muted">Master Back-end development technologies: JavaScript, Node.js, Express, MongoDB, mongoose... and create the Back-end of your web application independently of the Front-end part. You will also manipulate the NoSQL database and model the data with mongoose.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- end of trainings -->
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
                                <i class = "fas fa-chevron-right me-1"></i> Our trainings
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





<!--Botstrap js-->
<script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
     <!-- jquery -->
    <script src = "JS/jquery-3.6.3.js"></script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <script src="JS/script.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
            <script>
            AOS.init();
        </script>
    </body>
</html>