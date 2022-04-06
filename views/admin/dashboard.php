<?php 

session_start();

// all css scripts here 
require('header.php');

// connection to db
require('../../functions/connection.php');

// function for db connection
$conn = connect();

// query for units ; change this for dashboard
$sql = "SELECT * FROM units";
$result = mysqli_query($conn,$sql);

// session id for this account
$adminID = $_SESSION['admin_id'];

?>

  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="dashboard.php"><div class="row"><div class="col-md-3"><!-- <img src="../../images/logo-mini.svg" alt="logo"/> --></div><div class="col-md-6"><p style="margin: 0px;font-size: 18px;margin-top: 7px;">Mornings Apartment</p style=""></div></div></a>
          <a class="navbar-brand brand-logo-mini" href="#index.html"><img src="../../images/monings-logo.png" alt="logo"/></a>
       <!--    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button> -->
        </div>  
      </div>


   <!-- Top Navigation -->
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav navbar-nav-right">

         <?php 

         // display notification 
         require('notification.php'); 

         // display profile
         require('profile.php');

         ?>

        </ul>

        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    <!-- Top Navigation End -->

    </nav>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">

          <li class="nav-item" style="pointer-events: none;">
            <a class="nav-link">
              <img src="../../images/faces/face10.jpg" alt="profile" style="width:30%;border-radius: 50%;margin:0 10px;padding:5px;">
              <span class="nav-profile-name">Administrator</span>
            </a>
         
          </li>

          <li class="nav-item" style="pointer-events: none;">
            <a class="nav-link">
               <span class="menu-title" style="padding:0 50px;">Main Navigation</span>
            </a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="dashboard.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

           <li class="nav-item">
            <a class="nav-link" href="view_branch.php">
              <i class="mdi mdi-library-plus menu-icon"></i>
                <span class="menu-title">Branch</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="view_unit.php">
              <i class="mdi mdi-houzz-box menu-icon"></i>
                <span class="menu-title">Unit</span>
            </a>
          </li>

           <li class="nav-item">
            <a class="nav-link" href="view_employee.php">
              <i class="mdi mdi-account-circle menu-icon"></i>
                <span class="menu-title">Employees</span>
            </a>
          </li>

           <li class="nav-item">
            <a class="nav-link" href="view_renter.php">
              <i class="mdi mdi-houzz menu-icon"></i>
                <span class="menu-title">Renters</span>
            </a>
          </li>

           <li class="nav-item">
            <a class="nav-link" href="view_report.php">
              <i class="mdi mdi-note-text menu-icon"></i>
                <span class="menu-title">Report</span>
            </a>
          </li>

           <li class="nav-item">
            <a class="nav-link" href="view_transaction.php">
               <i class="mdi mdi-cash-multiple menu-icon"></i>
                <span class="menu-title">Transaction</span>
            </a>
          </li>

           <li class="nav-item">
            <a class="nav-link" href="view_complaints.php">
               <i class="mdi mdi-newspaper menu-icon"></i>
                <span class="menu-title">Complaints</span>
            </a>
          </li>

        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper"> 
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="d-flex">
                    <i class="mdi mdi-home text-muted hover-cursor"></i>
                    <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;</p>
                    <!-- <p class="text-primary mb-0 hover-cursor">Analytics</p> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
         
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body dashboard-tabs p-0">
                  <ul class="nav nav-tabs px-4" role="tablist">
                    <li class="nav-item">
                   <!--    <a class="nav-link" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true"></a> -->
                    </li>
                  </ul>


                  <div class="tab-content py-0 px-0">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">

                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 mx-2 item bg-primary">
                          <i class="mdi mdi-houzz menu-icon mr-3 icon-lg text-light"></i>
                          <div class="d-flex flex-column justify-content-around text-light">
                            <small class="mb-1 text-light">Renters</small>
                            <h5 class="mr-2 mb-0">8</h5>
                          </div>
                        </div>



                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 mx-2 item bg-danger">
                          <i class="mdi mdi-library-plus menu-icon mr-3 icon-lg text-light"></i>
                          <div class="d-flex flex-column justify-content-around text-light">
                            <small class="mb-1 text-light">Branch</small>
                            <h5 class="mr-2 mb-0">3</h5>
                          </div>
                        </div>

                          <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 mx-2 item bg-success">
                        <i class="mdi mdi-account-circle menu-icon mr-3 icon-lg text-light"></i>
                          <div class="d-flex flex-column justify-content-around text-white">
                            <small class="mb-1">Employees</small>
                            <h5 class="mr-2 mb-0">3</h5>
                          </div>
                        </div>

                           <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 mx-2 item bg-info text-light">
                          <i class="mdi mdi-newspaper menu-icon mr-3 icon-lg text-light"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-light">Pending Complaints</small>
                            <h5 class="mr-2 mb-0">3</h5>
                          </div>
                        </div>


                      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 stretch-card my-2">
              <div class="card">
                  <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <h4 class="card-title">Monthly Booking Report</h4>
                    <canvas id="barChart" style="display: block; width: 758px; height: 379px;" width="1516" height="758" class="chartjs-render-monitor"></canvas>
                  </div>
                </div>
          </div>
        </div>

        <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Latest Complaints</p>
                  <div class="table-responsive table-bordered">
                    <table id="recent-purchases-listing1" class="table">
                      <thead>
                        <tr>
                            <th>Branch</th>
                            <th>Renter</th>
                            <th>Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>Branch 1</td>
                            <td>Juan Dela Cruz</td>
                            <td>04/06/2021</td>
                        </tr>
                        <tr>
                            <td>Branch 2</td>
                            <td>Juan Dela Cruz</td>
                            <td>04/06/2021</td>
                        </tr>
                         <tr>
                            <td>Branch 3</td>
                            <td>Juan Dela Cruz</td>
                            <td>04/06/2021</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <!--   <div class="row">
            <div class="col-md-6 stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Recent Payments</p>
                  <div class="table-responsive">
                    <table id="recent-purchases-listing1" class="table">
                      <thead>
                        <tr>
                            <th>Renter Username</th>
                            <th>Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>Juan Dela Cruz</td>
                            <td class="badge badge-primary w-100">3-14-2021</td>
                        </tr>
                        <tr>
                            <td>Juan Dela Cruz</td>
                             <td class="badge badge-primary w-100">4-5-2021</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
             <div class="col-md-6 stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Overdue Payments</p>
                  <div class="table-responsive">
                     <table id="recent-purchases-listing1" class="table">
                      <thead>
                        <tr>
                            <th>Renter Username</th>
                            <th>Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>Juan Dela Cruz</td>
                            <td class="badge badge-danger w-100">3-14-2020</td>
                        </tr>
                        <tr>
                            <td>Juan Dela Cruz</td>
                             <td class="badge badge-danger w-100">4-5-2020</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div> -->


        </div>

        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
           <!--  <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span> -->
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

<?php 

// all javascript external scripts
require('footer.php');

?>

<!-- Javascript Here -->




