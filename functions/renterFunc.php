<?php 

// connection to db 
require('connection.php');

// if button submit function will activate  
if(isset($_POST['addRenter'])) {
	addRenterFunc();
}

// function for add renter
function addRenterFunc() {

// db connect
$conn = connect();

// POST variables
$employee_name 		 = $_POST['employee_name'];
$employee_contactnum = $_POST['employee_contactnum'];
$assign_branch 		 = $_POST['assign_branch'];

//convert to all lower text 
$convert_employee_name = strtolower($employee_name);
$employee_username     = strtolower($employee_name);
$employee_password     = strtolower($employee_name);
$convert_employee_password = md5($employee_password); // hash employee password

$employee_status = '1'; // 1 room occupied : 0 room vacant
$employee_bool = '1'; // 1 room active : 0 room deleted 

// query for adding unit
$sqlEmployee = "INSERT INTO renter (`employee_id`,`employee_username`,`employee_password`,`employee_name`,`employee_contactno`,`assign_branch`,`employee_status`,`employee_bool`) VALUES (NULL,'$employee_username','$convert_employee_password','$convert_employee_name','$employee_contactnum',$assign_branch,'$employee_status','$employee_bool')";
$resultEmployee = mysqli_query($conn,$sqlEmployee);

// fetch auto increment id  
$last_id = mysqli_insert_id($conn);

// empty for adding unit details
$employee_picture = ' ';
$employee_description = ' ';

// query for adding unit details
$sqlEmployeeDetails = "INSERT INTO renter_details (`employee_detail_id`,`employee_picture`,`employee_description`) VALUES ('$last_id','$employee_picture','$employee_description')";
$resultEmployeeDetails = mysqli_query($conn,$sqlEmployeeDetails);

// return back to admin unit page; if result is true
if($resultEmployeeDetails == TRUE) {
  header('location:../views/admin/view_renter.php');
} else {
  echo("Error Description: " . mysqli_error($conn));	
 }
}


?>