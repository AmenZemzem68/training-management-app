<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password,"codingart");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
session_start();
$sql = "SELECT COUNT(*) as COUNTM FROM feedbacks";
$res=mysqli_query($conn, $sql);
$ro = $res->fetch_assoc();
$sql1 = "SELECT COUNT(*) as COUNTU FROM users";
$res1=mysqli_query($conn, $sql1);
$ro1 = $res1->fetch_assoc();
$sql2 = "SELECT COUNT(*) as COUNTA FROM applyments";
$res2=mysqli_query($conn, $sql2);
$ro2 = $res2->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Dashboard</title>
    <link rel="shortcut icon" type="image/x-icon" href="Images/logo.ico">
    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!--Botstrap css-->
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/dbstyle.css">
  </head>
  <body data-bs-spy="scroll" data-bs-target=".sidebar-list">
    <div class="grid-container">

      <!-- Header -->
      <header class="header">
        <div class="menu-icon" onclick="openSidebar()">
          <span class="material-icons-outlined" style="cursor:pointer;">menu</span>
        </div>
        <div class="header-left">
        <?php
        if(isset($_SESSION['afname']))
        {
          echo "Welcome , ".$_SESSION['afname'];
        } 
        ?>
        </div>
      </header>
      <!-- End Header -->

      <!-- Sidebar -->
      <aside id="sidebar">
        <div class="sidebar-title">
          <div class="sidebar-brand">
            <span class="material-icons-outlined">polymer</span> Coding Art
          </div>
          <span class="material-icons-outlined" onclick="closeSidebar()" style="cursor:pointer;">close</span>
        </div>

        <ul class="sidebar-list">
          <li class="sidebar-list-item">
            <a href="#dash">
              <span class="material-icons-outlined">dashboard</span> Dashboard
            </a>
          </li>
          
          <li class="sidebar-list-item">
            <a href="#trainings">
              <span class="material-icons-outlined">computer</span> Trainings
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#users">
              <span class="material-icons-outlined">account_circle</span> Users
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#applyments">
              <span class="material-icons-outlined">fact_check</span> Applyments
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#feedbacks">
              <span class="material-icons-outlined">mail</span> Feed-Backs
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="logout.php">
              <span class="material-icons-outlined">logout</span> Logout
            </a>
          </li>
        </ul>
      </aside>
      <!-- End Sidebar -->

      <!-- Main -->
      <main class="main-container">
        <div class="main-title" id="dash">
          <p class="font-weight-bold">DASHBOARD</p>
        </div>

        <div class="main-cards">

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">TRAININGS</p>
              <span class="material-icons-outlined text-blue">computer</span>
            </div>
            <span class="text-primary font-weight-bold">10</span>
          </div>

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">USERS</p>
              <span class="material-icons-outlined text-orange">account_circle</span>
            </div>
            <span class="text-primary font-weight-bold"><?php echo $ro1["COUNTU"];?></span>
          </div>

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">APPLYMENTS</p>
              <span class="material-icons-outlined text-green">fact_check</span>
            </div>
            <span class="text-primary font-weight-bold"><?php echo $ro2["COUNTA"];?></span>
          </div>

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">FEED-BACKS</p>
              <span class="material-icons-outlined text-red">mail</span>
            </div>
            <span class="text-primary font-weight-bold"><?php echo $ro["COUNTM"];?></span>
          </div>
        </div>
        <div class="charts">
          <div class="charts-card">
            <p class="chart-title">Top 5 Trainings</p>
            <canvas id="myChart"></canvas>
          </div>
        </div>
        <div class="main-title">
            <p class="font-weight-bold">TRAININGS</p>
          </div>
        <div class="container mb-3" id="trainings" style="box-shadow: 0 6px 7px -4px rgba(0, 0, 0, 0.2);  border-left: 7px solid #246dec;">
          <table class="table">
            <thead style="font-weight: 600;">
              <tr>
                <td>ID</td>
                <td>TRAINING</td>
                <td>DOMAIN</td>
                <td>DURATION</td>
                <td>PRICE</td>
              </tr>
            </thead>
            <tbody>
              <?php
              $sql = "SELECT * FROM trainings";
              $res=mysqli_query($conn, $sql);
              while($row=$res->fetch_assoc()){
                echo "<tr>
                <td>".$row["Id"]."</td>
                <td>".$row["Training"]."</td>
                <td>".$row["Domain"]."</td>
                <td>".$row["Duration"]."</td>
                <td>".$row["Price"]."</td>
              </tr>";
              }
              ?>
            </tbody>
          </table>
        </div>
        <div class="main-title">
            <p class="font-weight-bold">USERS</p>
          </div>
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
          <button class="btn btn-success mb-3" type="button" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-plus"></i> Add User</button>
        <div class="container mb-3" id="users" style="box-shadow: 0 6px 7px -4px rgba(0, 0, 0, 0.2);  border-left: 7px solid #f5b74f;">
          <table class="table">
            <thead style="font-weight: 600;">
              <tr>
                <td>ID</td>
                <td>FIRST NAME</td>
                <td>LAST NAME</td>
                <td>EMAIL</td>
                <td>PHONE</td>
                <td>PASSWORD</td>
                <td></td>
              </tr>
            </thead>
            <tbody>
              <?php
              $sql = "SELECT * FROM users";
              $res=mysqli_query($conn, $sql);
              while($row=$res->fetch_assoc()){
                echo "<tr>
                <td>".$row["Id"]."</td>
                <td>".$row["First_Name"]."</td>
                <td>".$row["Last_Name"]."</td>
                <td>".$row["Email"]."</td>
                <td>".$row["Phone"]."</td>
                <td>".$row["Pass"]."</td>
                <td style='text-align: center;'>
            <a class='btn btn-success btn-sm' data-bs-toggle='modal' data-bs-target='#myModal2'><i class='fa fa-pencil'></i></a>
            <button class='btn btn-danger btn-sm' onclick='confirmDelete(".$row["Id"].")'><i class='fa fa-trash'></i></button>
        </td>
              </tr>";
              }
              ?>
            </tbody>
          </table>
        </div>
        <div class="main-title">
            <p class="font-weight-bold">APPLYMENTS</p>
          </div>
        <div class="container mb-3" id="applyments" style="box-shadow: 0 6px 7px -4px rgba(0, 0, 0, 0.2);  border-left: 7px solid #367952;">
          <table class="table">
            <thead style="font-weight: 600;">
              <tr>
                <td>ID</td>
                <td>FIRST NAME</td>
                <td>LAST NAME</td>
                <td>EMAIL</td>
                <td>PHONE</td>
                <td>TRAINING</td>
                <td>DATE</td>
                <td></td>
              </tr>
            </thead>
            <tbody>
              <?php
              $sql = "SELECT * FROM applyments";
              $res=mysqli_query($conn, $sql);
              while($row=$res->fetch_assoc()){
                echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["First_Name"]."</td>
                <td>".$row["Last_Name"]."</td>
                <td>".$row["Email"]."</td>
                <td>".$row["Phone"]."</td>
                <td>".$row["Training"]."</td>
                <td>".$row["date"]."</td>
                <td style='text-align: center;'>
                <button class='btn btn-danger btn-sm' onclick='confirmDelete2(".$row["id"].")'><i class='fa fa-trash'></i></button></td>
              </tr>";
              }
              ?>
            </tbody>
          </table>
        </div>
        <div class="main-title">
            <p class="font-weight-bold">FEED-BACKS</p>
          </div>
        <div class="container mb-3" id="feedbacks" style="box-shadow: 0 6px 7px -4px rgba(0, 0, 0, 0.2);   border-left: 7px solid #cc3c43;">
          <table class="table">
            <thead style="font-weight: 600;">
              <tr>
                <td>ID</td>
                <td>FIRST NAME</td>
                <td>LAST NAME</td>
                <td>EMAIL</td>
                <td>PHONE</td>
                <td>MESSAGE</td>
                <td></td>
              </tr>
            </thead>
            <tbody>
              <?php
              $sql = "SELECT * FROM feedbacks";
              $res=mysqli_query($conn, $sql);
              while($row=$res->fetch_assoc()){
                echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["first_name"]."</td>
                <td>".$row["lastt_name"]."</td>
                <td>".$row["email"]."</td>
                <td>".$row["phone"]."</td>
                <td>".$row["message"]."</td>
                <td style='text-align: center;'>
                <button class='btn btn-danger btn-sm' onclick='confirmDelete3(".$row["id"].")'><i class='fa fa-trash'></i></button></td>
              </tr>";
              }
              ?>
            </tbody>
          </table>
        </div>
        </div>
      </main>
      </div>
      <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">New User</h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                <form  method="POST" id="form" action="create.php">
                      <input type="text" class="form-control" id="fname" placeholder="First Name" name="fname"required>
                      <div class="invalid-feedback">
                        Please enter your first name.
                        </div>
                      <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname" required>
                      <div class="invalid-feedback">
                        Please enter your last name.
                        </div>
                      <input type="text" class="form-control" id="cin" placeholder="Email" name="email"required>
                        <input type="text" class="form-control" id="cin" placeholder="Phone" name="phone"required>
                      <input type="Password" class="form-control" id="pswd" placeholder="Password" name="password"  required>
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
      <div class="modal fade" id="myModal2">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Edit User</h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                <form  method="POST" id="form" action="edit_user.php">
                      <input type="text" class="form-control" id="fname" placeholder="First Name" name="fname"required>
                      <div class="invalid-feedback">
                        Please enter your first name.
                        </div>
                      <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname" required>
                      <div class="invalid-feedback">
                        Please enter your last name.
                        </div>
                      <input type="text" class="form-control" id="cin" placeholder="Email" name="email"required>
                        <input type="text" class="form-control" id="cin" placeholder="Phone" name="phone"required>
                      <input type="Password" class="form-control" id="pswd" placeholder="Password" name="password"  required>
                      <br>
                      <center><button class="btn btn-success" name="button" type="submit">Confirm</button>
                      <button class="btn btn-danger" data-bs-dismiss="modal">Cancel</button></center>
                    </form>
                </div>
              </div>
            </div>
          </div>
      <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
              <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      Are you sure you want to delete this user?
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                      <a href="#" class="btn btn-danger" id="deleteUserBtn">Delete</a>
                  </div>
              </div>
          </div>
      </div>
      <div class="modal fade" id="deleteModal2" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
              <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="deleteModalLabel2">Confirm Deletion</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      Are you sure you want to delete this applyment?
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                      <a href="#" class="btn btn-danger" id="deleteUserBtn2">Delete</a>
                  </div>
              </div>
          </div>
      </div>
      <div class="modal fade" id="deleteModal3" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
              <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="deleteModalLabel3">Confirm Deletion</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      Are you sure you want to delete this feed-back?
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                      <a href="#" class="btn btn-danger" id="deleteUserBtn3">Delete</a>
                  </div>
              </div>
          </div>
      </div>
      <!-- End Main -->
      <?php 
        $sql = "
        SELECT Training as Training ,COUNT(Training) as Apps FROM `applyments` GROUP BY Training ORDER BY Apps DESC";
          $res=mysqli_query($conn, $sql);
          foreach($res as $data)
          {
            $trainings1[] = $data['Training'];
            $apps1[] = $data['Apps'];
          }
          for($i=0;$i<5;$i++)
          {
            if(!isset($trainings1[$i]) || !isset($apps1[$i]))
            { 
              break;
            }
            else
            {
              $trainings[$i] = $trainings1[$i];
              $apps[$i] = $apps1[$i];
            }
          }
      ?>
    <!-- Custom JS -->
    <script>
      const labels = <?php echo json_encode($trainings) ?>;
      const data = {
        labels: labels,
        datasets: [{
          data: <?php echo json_encode($apps) ?>,
          backgroundColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(255, 159, 64, 1)',
            'rgba(255, 205, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(201, 203, 207, 1)'
          ],
          borderColor: [
            'rgb(255, 99, 132)',
            'rgb(255, 159, 64)',
            'rgb(255, 205, 86)',
            'rgb(75, 192, 192)',
            'rgb(54, 162, 235)',
            'rgb(153, 102, 255)',
            'rgb(201, 203, 207)'
          ],
          borderWidth: 1,
        }]
      };

      const config = {
        type: 'bar',
        data: data,
        options: {
        plugins: {
            legend: {
                display: false,
            }
          },
          scales: {
          y: {
            ticks: {
                stepSize: 1
              }
            }
          }
        }
      };
      var myChart = new Chart(
        document.getElementById('myChart'),
        config
      );
    </script>
    <script src="JS/dashboard.js"></script>
    <!--Botstrap js-->
    <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
  </body>
</html>