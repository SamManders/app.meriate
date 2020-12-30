<?php
session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page
if (!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false) {
  header('header:account/login.php');
} elseif ($_SESSION["licensie"] != 1) {
  echo "<script> window.location.replace('account/permissiondenied.php') </script>";
  exit();
}

require_once 'config/config.php';


$show_columns = array('surveyname', 'created_at');

$sql = 'SELECT id,' . implode(', ', $show_columns) . ' FROM surveys where bedrijfs_id = ' . $_SESSION['bedrijfs_id'];

$result = mysqli_query($con, $sql);


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Survey - SB Admin</title>
  <?php include "assets/lib/libraries_head.php"; ?>
  <link href="css/styles.css" rel="stylesheet" />
  <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="sb-nav-fixed">

  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="selectsurvey.php">Meriate</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
    <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"></div>


    <!-- Navbar-->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="account/logout.php">Logout</a>
        </div>
      </li>
    </ul>
  </nav>

  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
        </div>
        <div class="sb-sidenav-footer">
          <div class="small">Logged in as:</div>
          Meriate Test
        </div>
      </nav>
    </div>

    <div class="layoutSidenav_content">
      <main>
        <div class="container-fluid">
          <div class="mb-4">
            <div class="card-body">
              <form action="/survey.php" method="get">
                <table class="perstabel" id="vragentabel">
                  <!-- Tabel headers -->
                  <tr class="tr_header">
                    <th></th>
                    <th>#</th>
                    <?php
                    foreach ($show_columns as $columnname) {
                      echo '<th>' . $columnname . '</th>';
                    }
                    ?>

                  <tr>

                    <?php
                    $i = 1;
                    while ($fetch = mysqli_fetch_assoc($result)) {

                      echo '<tr>';

                      $sql = "SELECT * FROM vragenlijst where survey_id = " . $fetch['id'] . ""
                        . " AND Beoordelaar_id = " . $_SESSION['id'] . ""
                        . " AND bedrijfs_id = " . $_SESSION['bedrijfs_id'];

                      if (mysqli_num_rows(mysqli_query($con, $sql)) == 0) {
                        echo '<td> <input type="radio" id="survey-' . $fetch['id'] . '" name="selectsurvey" value=' . $fetch['id'] . '> </td>';
                      } else {
                        echo '<td> <i class="fa fa-check"></i></td>';
                      }
                      echo '<td>' . $i++ . '</td>';

                      foreach ($fetch as $value) {
                        if ($value != $fetch['id']) {
                          echo '<td>' . $value . '</td>';
                        }
                      }
                      echo '</tr>';
                    }
                    ?>


                </table>

                <input type="submit" value="Go to survey">
              </form>
            </div>
          </div>
      </main>
      <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid">
          <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Meriate</div>
            <div>
              <a href="#">Privacy Policy</a>
              &middot;
              <a href="#">Terms &amp; Conditions</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

  <script src="js/scripts.js"></script>

</body>

</html>