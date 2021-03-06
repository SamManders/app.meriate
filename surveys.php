<?php
session_start();
include('header.php');
require_once('config/config.php')
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Surveys - Meriate</title>
  <?php include "assets/lib/libraries_head.php";?>
  <link href="css/styles.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedcolumns/3.3.2/css/fixedColumns.dataTables.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>



<body class="sb-nav-fixed">

<?php include('navigation.php');?>

    <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">

                      <div class="row">
                          <div class="col-xl-12">
                              <div class="card mb-4 header-card">
                                <div class="header-img setup">
                                  <img src="/assets/img/setup-illustration.png" width="100%">
                                </div>
                                <div class="header-text right">
                                  <h1>Ask your employees</h1>
                                  <p>Once it is clear who the relevant experts are in your organisation, we will collaborate with them to develop questions so that the feedback and input from their peers will return the most efficient answers.<p>
                                  <br>
                                  <a href="createsurvey.php" class="btn btn-lg btn-secondary">Create a new survey</a>
                                </div>
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-xl-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-table mr-1"></i>
                                    Surveys
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive" style="overflow: visible;">
                                      <?php include('tables/get_surveytable.php');?>
                                    </div>
                                </div>
                            </div>
                          </div>
                      </div>


                    </div>
                </main>

            </div>
        </div>

        <script src="js/scripts.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/fixedcolumns/3.3.2/js/dataTables.fixedColumns.min.js"></script>

    </body>
</html>
