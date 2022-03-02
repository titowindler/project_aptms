<?php 

require("connection.php");
session_start();

if(isset($_POST['login'])) {
    login();
}

function login() {
$found = 0;
$secret = "test123"; // change password soon
$str = "Invalid Username or Password!";

if(isset($_POST['username']) && isset($_POST['password'])){
  $user = $_POST['username'];
  $pass = md5($_POST['password']);
  $conn = connect();
    
  //Fetches from Employee
    $sql = "SELECT * FROM admin WHERE (`admin_username` LIKE '$user') AND (`admin_password` LIKE '$pass')";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['logged_in'] = $secret;
        $_SESSION['admin_id'] = $row['admin_id'];
        $_SESSION['name'] = $row['admin_name'];
        $_SESSION['u_type'] = 1; // admin
        $found = 1;
        header('location:../views/admin/dashboard.php'); 
    }
        
    //    var_dump($pass);
    // exit();

    //Fetches from Seller
    $sql = "SELECT * FROM employee WHERE (`employee_username` LIKE '$user') AND (`employee_password` LIKE '$pass')";    
    $result = mysqli_query($conn, $sql); 

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['logged_in'] = $secret;
        $_SESSION['employee_id'] = $row['employee_id'];
        $_SESSION['name'] = $row['employee_name'];
        $_SESSION['u_type'] = 2; // admin
        $found = 1;
        header('location:../views/employee/dashboard.php'); 
    }

    //Fetches from Seller
    $sql = "SELECT * FROM renter WHERE (`renter_username` LIKE '$user') AND (`renter_password` LIKE '$pass')";
    $result = mysqli_query($conn, $sql); 

    var_dump($conn);
    var_dump($result);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['logged_in'] = $secret;
        $_SESSION['renter_id'] = $row['renter_id'];
        $_SESSION['renter_name'] = $row['renter_name'];
        $_SESSION['u_type'] = 3; // renter
        $found = 1;
       header('location:../views/tenant/dashboard.php');
     }

  
    if($found != 1){
        echo "fail";
     header('location:../index.php?danger-invalid='.$str);
    } 
  }
}

?>

