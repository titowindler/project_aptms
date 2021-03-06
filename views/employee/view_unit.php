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
$employeeID = $_SESSION['employee_id'];



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

          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="view_unit.php">
              <i class="mdi mdi-houzz-box menu-icon"></i>
                <span class="menu-title">Unit</span>
            </a>
          </li>

           <li class="nav-item">
            <a class="nav-link" href="view_renter.php">
              <i class="mdi mdi-houzz menu-icon"></i>
                <span class="menu-title">Renters</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="view_inquiry.php">
              <i class="mdi mdi-deskphone menu-icon"></i>
                <span class="menu-title">Inquiry</span>
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
                    <i class="mdi mdi-houzz-box"></i>
                    <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Unit</p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
    
           <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">View Unit List</p>
                    <hr>
                    <p class="card-description text-left">
                      <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addUnit"> Add Unit </button>
                     </p>
                  <div class="table-responsive">
                    <table id="viewUnitList" class="table">
                      <thead>
                        <tr>
                            <th>Unit ID</th>
                            <th>House Name</th>
                            <th>Unit Type</th>
                            <th>Location</th>
                            <th>View Unit Details</th>
                            <th>Occupied</th>
                            <!-- <th>Options</th> -->
                        </tr>
                      </thead>
                      <tbody>
                        <?php while($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                          <td> <?php echo $row['unit_id']; ?> </td> 
                          <td> <?php echo $row['unit_name']; ?> </td>
                          <td> <?php echo $row['unit_type']; ?> </td>
                          <td> <?php echo $row['unit_location']; ?> </td>
                          <td>
                            <button type="button" class="btn btn-success btn-sm">
                            VIEW </button> 
                          </td>
                         <?php if($row['unit_status'] == '1') { ?> 
                          <td> <button type="button" class="btn btn-success btn-rounded btn-icon hint--right" aria-label="Room Occupied" style="padding:0px;">
                          <i class="mdi mdi-account-check"></i>   
                      </button>
                         </td>
                           <?php } else if($row['unit_status'] == '0') { ?>
                          <td><button type="button" class="btn btn-danger btn-rounded btn-icon hint--right" aria-label="Room Vacant" style="padding:0px;"> 
                          <i class="mdi mdi-account-remove"></i>   
                          </td>
                         <?php } ?>
                         <!--  <td>
                            <button type="button" class="btn btn-primary btn-sm">
                            UPDATE </button>
                            <button type="button" class="btn btn-danger btn-sm">
                            DELETE </button>
                          </td> -->
                        </tr>
                        <?php } ?>
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


<!-- Add Unit Modal -->
<div class="modal fade" id="addUnit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Unit</h5>
          <hr>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form class="form-sample" action="../../functions/unitFunc.php" method="POST">
                     
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="col-form-label">Unit Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Enter Unit Name" name="unit_name" required>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                       <div class="form-group">
                          <label class="col-form-label">Unit Type</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="unit_type" required>
                              <option value="Condo">Condo</option>
                              <option value="Room">Room</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="col-form-label">Unit Location</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Enter Unit Location" name="unit_location" required>
                          </div>
                        </div>
                      </div>

                      <br>

                  <hr>
                    <div class="row">
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-primary mr-2 text-right" name="addUnit">Submit</button>
                      </div>
                  </form>
  
      </div>
    </div>
  </div>
</div>
 <!-- Add Unit Modal End -->
<?php 

// all javascript external scripts
require('footer.php');

?>

<!-- Javascript Here -->

<script>
  $(document).ready( function () {
    $('#viewUnitList').DataTable();
} );
</script>




