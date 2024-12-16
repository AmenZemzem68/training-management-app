<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Graphic Design : Adobe Photoshop</title>
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
                            <h1 style="color: white;">Become a Front-end ReactJS Developer</h1><br>
                            <p class="desc">Learn the latest technologies to become a great Front-end developer and build rich, interactive web applications and user interfaces with JavaScript, ES6, and React. Manage "states" with Redux</p>    
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 details">12 Chapters</div>
                        <div class="col-lg-2 details">80 Exercice</div>
                        <div class="col-lg-2 details">10 Projects</div>
                        <div class="col-lg-2 details">8 Meetings</div>
                        <div class="col-lg-2 details">8 Workshops</div>
                    </div>
                    <br>
                    <div class="row" style="font-size: 15px; font-weight: 200; color: white;">
                        <p><i class="fa fa-calendar-check" style="padding-right: 10px;"></i>Duration: 12 weeks</p>
                        <p><i class="fa fa-desktop" style="padding-right: 7px;"></i>Learn on our platform 24/7</p>
                        <p><i class="fa fa-moon " style="padding-right: 11px;"></i>Available in our hackerspaces during the evening</p>
                        <p><i class="fa fa-credit-card" style="padding-right: 8px;"></i>Price : 850 DT</p>
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
                            <td class="col-4 fw-bold">General overview</td>
                            <td class="col-6"> Define what a web application is. Understand the difference between web application parts.</td>
                        </tr>
                        <tr class="row py-3" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="100">
                            <td class="col-2 fw-bold">2</td>
                            <td class="col-4 fw-bold ">Discover ES6</td>
                            <td class="col-6">
                                Define ES6.
                                List the different new features of ES6.
                                Explore ES6</td>
                        </tr>
                        <tr class="row py-3" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="150">
                            <td class="col-2 fw-bold">3</td>
                            <td class="col-4 fw-bold">
                                React.js</td>
                            <td class="col-6">
                                Discover React.
                                Understand why we use React.
                                Learn about React's features.</td>
                        </tr>
                        <tr class="row py-3" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="200">
                            <td class="col-2 fw-bold">4</td>
                            <td class="col-4 fw-bold">Virtual DOM</td>
                            <td class="col-6">
                                Discover the virtual DOM?
                                Understand how to use Virtual DOM with React.
                                </td>
                        </tr>
                        <tr class="row py-3" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="250">
                            <td class="col-2 fw-bold">5</td>
                            <td class="col-4 fw-bold">Discover JSX</td>
                            <td class="col-6">Understand and write with JSX.
                                Learn to work with JSX.</td>
                        </tr>
                        <tr class="row py-3" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="300">
                            <td class="col-2 fw-bold">6</td>
                            <td class="col-4 fw-bold">React Components</td>
                            <td class="col-6">Understand the React component.
                                Learn how to create and decompose React components.
                                Optimize your code with React.</td>
                        </tr>
                        <tr class="row py-3" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="350">
                            <td class="col-2 fw-bold">7</td>
                            <td class="col-4 fw-bold">React Props</td>
                            <td class="col-6">Learn to work with React Props.
                                Differentiate between the types of “Props”
                                Learn the best practices for using “Props”</td>
                        </tr>
                        <tr class="row py-3" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="400">
                            <td class="col-2 fw-bold">8</td>
                            <td class="col-4 fw-bold">React State</td>
                            <td class="col-6">
                                Learn what React State is and how to use it.
                                Develop a component with Hooks.</td>
                        </tr>
                        <tr class="row py-3" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="450">
                            <td class="col-2 fw-bold">9</td>
                            <td class="col-4 fw-bold">React Hooks</td>
                            <td class="col-6">Handling React Hooks.
                                Avoid common mistakes by using Hooks.
                                Build your own “Hook”.</td>
                        </tr>
                        <tr class="row py-3" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="500">
                            <td class="col-2 fw-bold">10</td>
                            <td class="col-4 fw-bold">React Router</td>
                            <td class="col-6">Understand how React Router works.
                                Produce a multi-router page.</td>
                        </tr>
                        <tr class="row py-3" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="550">
                            <td class="col-2 fw-bold">11</td>
                            <td class="col-4 fw-bold">Redux</td>
                            <td class="col-6">Define what Redux is.
                                Manage the global state with Redux. 
                                Manage bugs with Redux.</td>
                        </tr>
                        <tr class="row py-3" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="600">
                            <td class="col-2 fw-bold">12</td>
                            <td class="col-4 fw-bold">API</td>
                            <td class="col-6">
                                Understand how to use the API.
                                Develop a web service.
                                Work with an HTTP request.</td>
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
                        <p data-aos="fade-right" data-aos-duration="1000" data-aos-once="true"><i class="fa fa-arrow-right" style="padding-right: 10px;"></i>Learn how to build apps from scratch.<br>
                            <i class="fa fa-arrow-right" aria-hidden="true" style="padding-right: 10px;"></i> Work with React Hooks.<br>
                            <i class="fa fa-arrow-right" aria-hidden="true" style="padding-right: 10px;"></i>Learn how to build and launch web applications using React JS and Redux</p>
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
                        <option value="Front-end with React-JS" selected>Front-end with React-JS</option>
                        <option value="Back-end with Node-js">Back-end with Node-js</option>
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