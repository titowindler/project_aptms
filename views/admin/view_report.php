<?php 

session_start();

// all css scripts here 
require('header.php');

// connection to db
require('../../functions/connection.php');

// // function for db connection
// $conn = connect();

// // query for units ; change this for dashboard
// $sql = "SELECT * FROM units";
// $result = mysqli_query($conn,$sql);

// // session id for this account
// $employeeID = $_SESSION['employee_id'];



?>
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

          <li class="nav-item">
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

           <li class="nav-item active">
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
                    <i class="mdi mdi-houzz menu-icon"></i>
                    <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Reports</p>       
                  </div>
                </div>
              </div>
            </div>
          </div>
    
          <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">View Reports List</p>
                    <hr>
                    <p class="card-description text-left">
                      <!-- Button trigger modal -->
                        <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addRenter"> Add Renter </button> -->
                     </p>
                  <div class="table-responsive">
                    <table id="viewRenterList" class="table">
                      <thead>
                        <tr>
                            <th>Branch</th>
                            <th>Employee</th>
                            <th>Date Reported</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                         <tr>
                            <td>1</td>
                            <td>Juan Dela Cruz</td>
                            <td>0912 345 8690</td>
                            <td>House 1</td>
                             <td><span class="badge badge-success">PAID</span></td>
                             <td><button type="button" class="btn btn-info btn-sm">
                                  UPLOAD
                               </button>
                               <button type="button" class="btn btn-success btn-sm">
                                  VIEW
                               </button>
                              </td> 
                               <td><button type="button" class="btn btn-success btn-sm">
                                  VIEW
                               </button>
                               <button type="button" class="btn btn-danger btn-sm">
                                  REMOVE
                               </button>
                              </td>     
                          </tr>
                           
                     <tr>
                            <td>1</td>
                            <td>Juan Dela Cruz</td>
                            <td>0912 345 8690</td>
                            <td>House 1</td>
                             <td><span class="badge badge-success">PAID</span></td>
                             <td><button type="button" class="btn btn-info btn-sm">
                                  UPLOAD
                               </button>
                               <button type="button" class="btn btn-success btn-sm">
                                  VIEW
                               </button>
                              </td> 
                               <td><button type="button" class="btn btn-success btn-sm">
                                  VIEW
                               </button>
                               <button type="button" class="btn btn-danger btn-sm">
                                  REMOVE
                               </button>
                              </td>     
                          </tr>

                           <tr>
                            <td>1</td>
                            <td>Juan Dela Cruz</td>
                            <td>0912 345 8690</td>
                            <td>House 1</td>
                             <td><span class="badge badge-success">PAID</span></td>
                             <td><button type="button" class="btn btn-info btn-sm">
                                  UPLOAD
                               </button>
                               <button type="button" class="btn btn-success btn-sm">
                                  VIEW
                               </button>
                              </td> 
                               <td><button type="button" class="btn btn-success btn-sm">
                                  VIEW
                               </button>
                               <button type="button" class="btn btn-danger btn-sm">
                                  REMOVE
                               </button>
                              </td>     
                          </tr>

                     
                      </tbody>
                    </table>
                     <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal1"> View Record </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
         <!--  <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ?? 2018 <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div> -->
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
        <h5 class="modal-title" id="exampleModalLabel">Add Renter</h5>
          <hr>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form class="form-sample">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="col-form-label">Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Enter Unit Name">
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                       <div class="form-group">
                          <label class="col-form-label">Age</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Enter Age">
                          </div>
                        </div>
                      </div>


                      <div class="col-md-12">
                       <div class="form-group">
                          <label class="col-form-label">Address</label>
                         <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Enter Address">
                          </div>
                        </div>
                      </div>


                      <div class="col-md-12">
                       <div class="form-group">
                          <label class="col-form-label">Contact Number</label>
                         <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Enter Contact No.">
                          </div>
                        </div>
                      </div>

                         <div class="col-md-12">
                       <div class="form-group">
                          <label class="col-form-label">Date Started</label>
                         <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Enter Date Started">
                          </div>
                        </div>
                      </div>

                        <div class="col-md-12">
                       <div class="form-group">
                          <label class="col-form-label">House Name</label>
                         <div class="col-sm-9">
                           <select class="form-control">
                              <option>House 1</option>
                              <option>House 2</option>
                              <option>Condo 2</option>
                              <option>Room 1</option>
                           </select>
                          </div>
                        </div>
                      </div>

                        
                  
                  <hr>
                    <div class="row">
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-primary mr-2 text-right">Submit</button>
                      </div>
                  </form>
  
      </div>
    </div>
  </div>
</div>

<?php 

// all javascript external scripts
require('footer.php');

?>

<!-- Javascript Here -->

<script>
  $(document).ready( function () {
    $('#viewRenterList').DataTable();
} );
</script>



