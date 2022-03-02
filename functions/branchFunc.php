<?php 

// connection to db 
require('connection.php');

// if button submit function will activate  
if(isset($_POST['addBranch'])) {
	addBranchFunc();
}

// function for add branch
function addBranchFunc() {

// db connect
$conn = connect();

// POST variables
$branch_name = $_POST['branch_name'];

$branch_bool = '1'; // 1 branch active : 0 branch deleted 

// query for adding branch
$sqlBranch = "INSERT INTO branch (`branch_id`,`branch_name`,`branch_bool`) VALUES (NULL,'$branch_name','$branch_bool')";
$resultBranch = mysqli_query($conn,$sqlBranch);

// return back to admin branch page; if result is true
if($resultBranch == TRUE) {
  header('location:../views/admin/view_branch.php');
} else {
  echo("Error Description: " . mysqli_error($conn));	
 }
}


?>