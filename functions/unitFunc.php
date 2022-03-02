<?php 

// connection to db 
require('connection.php');

// if button submit function will activate  
if(isset($_POST['addUnit'])) {
	addUnitFunc();
}

// function for add unit
function addUnitFunc() {

// db connect
$conn = connect();

// POST variables
$unit_name = $_POST['unit_name'];
$unit_type = $_POST['unit_type'];

// empty first; change later
$unit_location = ' ';

$unit_status = '1'; // 1 room occupied : 0 room vacant
$unit_bool = '1'; // 1 room active : 0 room deleted 

// query for adding unit
$sqlUnit = "INSERT INTO units (`unit_id`,`unit_name`,`unit_type`,`unit_location`,`unit_status`,`unit_bool`) VALUES (NULL,'$unit_name','$unit_type','$unit_location','$unit_status','$unit_bool')";
$resultUnit = mysqli_query($conn,$sqlUnit);

// fetch auto increment id  
$last_id = mysqli_insert_id($conn);

// empty for adding unit details
$unit_picture = ' ';
$unit_description = ' ';

// query for adding unit details
$sqlUnitDetails = "INSERT INTO unit_details (`unit_detail_id`,`unit_picture`,`unit_description`) VALUES ('$last_id','$unit_picture','$unit_description')";
$resultUnitDetails = mysqli_query($conn,$sqlUnitDetails);

// return back to admin unit page; if result is true
if($resultUnitDetails == TRUE) {
  header('location:../views/admin/view_unit.php');
} else {
  echo("Error Description: " . mysqli_error($conn));	
 }
}


?>