<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Back-end With Node-JS</title>
    <link rel="shortcut icon" type="image/x-icon" href="Images/logo.ico">
    <!--Font Awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Botstrap css-->
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <!--CSS-->
    <link rel="stylesheet" href="CSS/training.css">
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
    
            <div class = "container row" id="head2" style="padding-top: 170px;" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" data-aos-delay="50">
                <div class="col-8 px-5">
                    <div class="row">
                        <div class="col-md-10">
                            <h1 style="color: white;">Become a Back-end Web Developer with NodeJS</h1><br>
                            <p class="desc">Master the technologies of Back-end development: JavaScript, Node.js, Express, MongoDB, mongoose ... and use it to create the Back-end of your web application independently from the Front-end part.</p>    
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 details">15 Chapters</div>
                        <div class="col-lg-2 details">90 Exercice</div>
                        <div class="col-lg-2 details">10 Projects</div>
                        <div class="col-lg-2 details">8 Meetings</div>
                        <div class="col-lg-2 details">8 Workshops</div>
                    </div>
                    <br>
                    <div class="row" style="font-size: 15px; font-weight: 200; color: white;">
                        <p><i class="fa fa-calendar-check" style="padding-right: 10px;"></i>Duration: 12 weeks</p>
                        <p><i class="fa fa-desktop" style="padding-right: 7px;"></i>Learn on our platform 24/7</p>
                        <p><i class="fa fa-moon " style="padding-right: 11px;"></i>Available in our hackerspaces during the evening</p>
                        <p><i class="fa fa-credit-card" style="padding-right: 8px;"></i>Price : 750 DT</p>
                    </div>
                </div>
                <div class="col-2 pt-5">
                    <img src="Images/front.jpg" style="width: 500px; height: 300px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                </div>
            </div>
        </header>
    <!-- end of header -->
    <!--body-->
    <section id = "collection" style="padding-top: 100px;" >
        <div class = "container">
            <div class = "title text-center">
                <h2 class = "position-relative d-inline-block" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">Training Content</h2>
            </div>
            <div>
                <table class="table" style="border: 10px;">
                    <tbody>
                        <tr class="row py-3" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="50">
                            <td class="col-2 fw-bold">1</td>
                            <td class="col-4 fw-bold">Node.js</td>
                            <td class="col-6">
                                Learn about Node.js and its terms.
                                Understand how to configure the development environment.</td>
                        </tr>
                        <tr class="row py-3" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="100">
                            <td class="col-2 fw-bold">2</td>
                            <td class="col-4 fw-bold ">Express</td>
                            <td class="col-6">
                                Understand the Express framework.
                                Learn to configure the environment.
                                Create your first app.
                                Understand routing </td>
                        </tr>
                        <tr class="row py-3" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="150">
                            <td class="col-2 fw-bold">3</td>
                            <td class="col-4 fw-bold">Mongo DB (CRUD)</td>
                            <td class="col-6">Understand the NoSQL database.

                                Handling Mongo DB.
                                
                                Manipulate data with the NoSQL databas</td>
                        </tr>
                        <tr class="row py-3" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="200">
                            <td class="col-2 fw-bold">4</td>
                            <td class="col-4 fw-bold">Mongoose/td>
                            <td class="col-6">
                                Understand the use of ODM.
                                
                                Discover the use of the “schema”.
                                
                                Implement basic operations on a database.
                                </td>
                        </tr>
                        <tr class="row py-3" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="250">
                            <td class="col-2 fw-bold">5</td>
                            <td class="col-4 fw-bold">Rest API</td>
                            <td class="col-6">
                                Understand what a Restful API is.
                                
                                Learn web architecture (client / server).
                                
                                Work with HTTP methods.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!--end of body-->
    <!-- forwho -->
    <section id = "about" class = "py-5">
        <div class = "container">
            <div class = "row gy-lg-5 align-items-center">
                <div class = "col-lg-6 order-lg-1 text-center text-lg-start">
                    <div class = "title pt-3 pb-5">
                        <h2 class = "position-relative d-inline-block ms-4" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">For Who ?</h2>
                    </div>
                    <p data-aos="fade-left" data-aos-duration="1000" data-aos-once="true"><i class="fa fa-arrow-right" style="padding-right: 10px;"></i>People aged 14 or older<br>
                        <i class="fa fa-arrow-right" aria-hidden="true" style="padding-right: 10px;"></i>People who are passionate about web development<br>
                        <i class="fa fa-arrow-right" aria-hidden="true" style="padding-right: 10px;"></i>People who want to learn more about web development.</p>
                </div>
                <div class = "col-lg-6 order-lg-0" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
                    <img src = "images/forwho.jpg" alt = "" class = "img-fluid">
                </div>
            </div>
        </div></section>
        <section id = "about" class = "py-5">
            <div class = "container">
                <div class = "row gy-lg-5 align-items-center">
                    <div class = "col-lg-6 order-lg-0 text-center text-lg-start">
                        <div class = "title pt-3 pb-5">
                            <h2 class = "position-relative d-inline-block ms-4" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">Objectives of this training</h2>
                        </div>
                        <p data-aos="fade-right" data-aos-duration="1000" data-aos-once="true"><i class="fa fa-arrow-right" style="padding-right: 10px;"></i>
                            Master all modern Back-end technologies: Node, Express, MongoDB and Mongoose (MongoDB JS driver).<br>
                            <i class="fa fa-arrow-right" aria-hidden="true" style="padding-right: 10px;"></i>
                            Build high quality applications with Node, Express and MongoDB.<br>
                            <i class="fa fa-arrow-right" aria-hidden="true" style="padding-right: 10px;"></i>
                            Apply best practices to build fast, scalable, and secure applications.</p>
                    </div>
                    <div class = "col-lg-6 order-lg-1" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">
                        <img src = "images/objct.jpg" alt = "" class = "img-fluid">
                    </div>
                </div>
            </div></section>
    <!-- end of forwho -->
    <section class = "py-5" style="background-color: rgba(230, 230, 230, 0.15);">
            <div class = "container">
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
                <div class = "row gy-lg-5 align-items-center">
                    <div class = "col-lg-12 text-center text-lg-start" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
                        <?php
                        if(isset($_SESSION["fname"]))
                        {?>
                        <div class = "title pt-3">
                            <h2 class = "position-relative d-inline-block" >Apply now</h2>
                        </div>
                        <form  method="POST" id="form" autocomplete="off" action="apply.php">
                        <div><input type="date" class="form-control" id="date" name="date"></div>
                        <div>
                        <select class="form-control" name="option">
                        <option value="Intro Web Development">Intro Web Development</option>
                        <option value="Front-end with React-JS">Front-end with React-JS</option>
                        <option value="Back-end with Node-js" selected>Back-end with Node-js</option>
                        <option value="Intro Game Development">Intro Game Development</option>
                        <option value="2D Game Development">2D Game Development</option>
                        <option value="3D Game Development">3D Game Development</option>
                        <option value="Graphic Design : Adobe Illustrator">Graphic Design : Adobe Illustrator</option>
                        <option value="Graphic Design : Adobe Photoshop">Graphic Design : Adobe Photoshop</option>
                        <option value="Social Media Management">Social Media Management</option>
                        <option value="SEO and E-commerce">SEO and E-commerce</option>
                        </select>
                        </div>
                        <div style="text-align:center; margin-top:0.6rem;"><button class="btn btn-primary" name="button" type="submit" id="signup">Apply</button></div>
                    </form>
                        <?php }
                        if(!isset($_SESSION["fname"]))
                        {?>
                        <div style="text-align:center;"><p>To apply for a training , you are required to login or to create an account if you don't have one.</p>
                        <a href="login_page.php" class="btn btn-primary">Login</a>
                        <a href="signup.php" class="btn btn-outline-primary">Sign Up</a></div>
                        <?php }
                        ?>
                    </div>
                </div>
            </div></section>
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


        <!--jQuery-->
        <!--Botstrap js-->
        <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
          AOS.init();
        </script>
        <script src="JS/training.js"></script>
    </body>
</html>