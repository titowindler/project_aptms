<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Monings Apartment</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="../../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/monings-logo.png" />
</head>
<body>
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


   <!-- Notification,  -->
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown mr-4">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-danger">
                    1
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal text-justify">You have received a complaint from Juan Dela Cruz</h6>
                  <p class="font-weight-light small-text mb-0 text-muted text-right">
                    5/8/2021 5:45PM
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-warning">
                    <i class="mdi mdi-settings mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal text-justify">You have received a complaint from Zacky Black</h6>
                  <p class="font-weight-light small-text mb-0 text-muted text-right">
                    4/7/2021 5:45PM
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-info">
                    <i class="mdi mdi-account-box mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal text-justify">You have received a complaint from Andrea White</h6>
                  <p class="font-weight-light small-text mb-0 text-muted text-right">
                    3/2/2021 5:45PM
                  </p>
                </div>
              </a>
              <hr>
               <a class="dropdown-item">
                 <div class="item-content">
                      <h6 class="font-weight-normal">View All Notifications</h6>
                  </div>
                </a>
            </div>
          </li>

          <!-- Profile -->
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="../../images/faces/face20.jpg" alt="profile"/>
              <span class="nav-profile-name">April Uy</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="mdi mdi-settings text-primary"></i>
                Change Password
              </a>
              <a class="dropdown-item" href="../../index.php">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <!-- -->

        </ul>

        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>

    </nav>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">

          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="view_payment.php">
              <i class="mdi mdi-cash-multiple menu-icon"></i>
                <span class="menu-title">Payments</span>
            </a>
          </li>

           <li class="nav-item">
            <a class="nav-link" href="view_renter_details.php">
              <i class="mdi mdi-account-multiple menu-icon"></i>
                <span class="menu-title">Renter Details</span>
            </a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="view_renter_complaints.php">
              <i class="mdi mdi-emoticon-sad menu-icon"></i>
                <span class="menu-title">Renter Complaint</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="view_agreement.php">
              <i class="mdi mdi-newspaper menu-icon"></i>
                <span class="menu-title">Agreement</span>
            </a>
          </li>

           <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#report" aria-expanded="false" aria-controls="report">
              <i class="mdi mdi-note-text menu-icon"></i>
              <span class="menu-title">Report</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="report">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="view_tenant_report.html">Tenant Report</a></li>
                <li class="nav-item"> <a class="nav-link" href="view_rental_report.html">Rental Report</a></li>
                <li class="nav-item"> <a class="nav-link" href="view_complaint_report.html">Complaint Report</a></li>
                <li class="nav-item"> <a class="nav-link" href="view_bill_report.html">Bill Report</a></li>
                <li class="nav-item"> <a class="nav-link" href="view_unit_report.html">Unit Status Report</a></li>
                <li class="nav-item"> <a class="nav-link" href="view_payment_report.html">Payment Report</a></li>
              </ul>
            </div>
          </li> -->

      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper"> 
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="d-flex">
                    <i class="mdi mdi-emoticon-sad menu-icon"></i>
                    <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Renter Complaints&nbsp;</p>
                    <!-- <p class="text-primary mb-0 hover-cursor">Analytics</p> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
         
           <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">View Complaints List</p>
                    <hr>
                    <p class="card-description text-left">
                      <!-- Button trigger modal -->
                        <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal"> Send Complaints </button>
                     </p>
                  <div class="table-responsive">
                    <table id="viewUnitList" class="table">
                      <thead>
                        <tr>
                            <th>Date</th>
                            <th>Complaints</th>
                          </tr>
                      </thead>
                      <tbody>
                         <tr>
                            <td>5-8-2021</td>
                            <td>The room no water again</td>
                         </tr>

                          <tr>
                            <td>5-7-2021</td>
                            <td>The room no water</td>
                         </tr>

                      </tbody>
                    </table>
                  
                  </div>
                </div>
              </div>
            </div>
          </div>
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

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Complaint</h5>
          <hr>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <h4>Renter Name: April Uy</h4>

         <form class="form-sample">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="col-form-label">Message:</label>
                          <div class="col-sm-9">
                           <textarea class="form-control">
                             
                           </textarea>
                          </div>
                        </div>
                      </div>

                  <hr>
                    <div class="row">
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-primary mr-2 text-right">Submit</button>
                      </div>
                  </form>



  <!-- plugins:js -->
  <script src="../../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="../../vendors/chart.js/Chart.min.js"></script>
  <script src="../../vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="../../vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/dashboard.js"></script>
  <script src="../../js/data-table.js"></script>
  <script src="../../js/jquery.dataTables.js"></script>
  <script src="../../js/dataTables.bootstrap4.js"></script>

  <script>
  $(document).ready( function () {
    $('#viewUnitList').DataTable();
} );
</script>

  <!-- End custom js for this page-->
</body>

</html>

