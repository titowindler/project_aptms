<?php

require('connection.php');

$con = connect();

if(isset($_POST['view'])) {

  $session_id = $_POST['session_id']; 
  $session_login = $_POST['session_login'];

// notifications view for admin
 if($session_login == '1') { 

  if($_POST["view"] != '')
  {
   $session_id = $_POST['session_id'];
   $update_query = "UPDATE notification SET notification_status = '1' 
   WHERE notification_status = '0' 
   AND notification_admin = '$session_id'  
   ";
   mysqli_query($con, $update_query);
  }

$query = "SELECT * FROM notification 
WHERE notification_admin = '$session_id' 
AND notification_usertype = '$session_login'
ORDER BY notification_id DESC LIMIT 5 ";
$result = mysqli_query($con, $query);
$output = '';

if(mysqli_num_rows($result) > 0)
{
  $count = 1;
while($row = mysqli_fetch_array($result))
{
  $datetime_format = date('m/d/Y h:i A',strtotime($row['notification_datetime']));

  $output .= '
     <div class="item-thumbnail">
        <div class="item-icon bg-danger">
          '.$count.'
        </div>
      </div>
        <div class="item-content">
                  <h6 class="font-weight-normal text-justify"> '.$row["notification_message"].' </h6>
                  <p class="font-weight-light small-text mb-0 text-muted text-left">
                    '.$datetime_format.'
                  </p>
                </div>
  ';
  $count++;
  }
} else {
    $output .= '   
     <div class="item-thumbnail">
        <div class="item-icon bg-danger">
          1
        </div>
      </div>
                <div class="item-content">
                  <h6 class="font-weight-normal text-justify"> No Notifications Available </h6>
                  <p class="font-weight-light small-text mb-0 text-muted text-left">
                   
                  </p>
                </div>
              
';
}

$status_query = "SELECT * FROM notification 
WHERE notification_status = 0 
AND notification_admin = '$session_id' 
AND notification_usertype = '$session_login'
";
$result_query = mysqli_query($con, $status_query);
$count = mysqli_num_rows($result_query);

$data = array(
   'notification' => $output,
   'unseen_notification'  => $count
);
  echo json_encode($data);
 
// notifications view for employee
 } elseif ($session_login == '2') {

  if($_POST["view"] != '')
  {

   $session_id = $_POST['session_id'];
   $update_query = "UPDATE notification SET notification_status = '1' 
   WHERE notification_status = '0' 
   AND notification_employee = '$session_id'
   AND notification_usertype = '$session_login'  
   ";
   mysqli_query($con, $update_query);
  }


$query = "SELECT * FROM notification 
WHERE notification_employee = '$session_id' 
AND notification_usertype = '$session_login'
ORDER BY notification_id DESC LIMIT 5 ";
$result = mysqli_query($con, $query);
$output = '';

if(mysqli_num_rows($result) > 0)
{
while($row = mysqli_fetch_array($result))
{
  $datetime_format = date('m/d/Y h:i A',strtotime($row['notification_datetime']));

  $output .= '
     <div class="item-thumbnail">
        <div class="item-icon bg-danger">
        </div>
      </div>
        <div class="item-content">
                  <h6 class="font-weight-normal text-justify"> '.$row["notification_message"].' </h6>
                  <p class="font-weight-light small-text mb-0 text-muted text-left">
                    '.$datetime_format.'
                  </p>
                </div>
  ';
  }
} else {
    $output .= '   
     <div class="item-thumbnail">
        <div class="item-icon bg-danger">
          1
        </div>
      </div>
                <div class="item-content">
                  <h6 class="font-weight-normal text-justify"> No Notifications Available </h6>
                  <p class="font-weight-light small-text mb-0 text-muted text-left">                    
                  </p>
                </div>
              
';
}

$status_query = "SELECT * FROM notification 
WHERE notification_status = 0 
AND notification_employee = '$session_id' 
AND notification_usertype = '$session_login'
";
$result_query = mysqli_query($con, $status_query);
$count = mysqli_num_rows($result_query);

$data = array(
   'notification' => $output,
   'unseen_notification'  => $count
);
  echo json_encode($data);
 
// notifications view for renter
} elseif ($session_login == '3') {

  if($_POST["view"] != '')
  {
   $session_id = $_POST['session_id'];
   $update_query = "UPDATE notification SET notification_status = '1' 
   WHERE notification_status = '0' 
   AND notification_renter = '$session_id'  
   AND notification_usertype = '$session_login'
   ";
   mysqli_query($con, $update_query);
  }

$query = "SELECT * FROM notification 
WHERE notification_renter = '$session_id' 
AND notification_usertype = '$session_login'
ORDER BY notification_id DESC LIMIT 5 ";
$result = mysqli_query($con, $query);
$output = '';

if(mysqli_num_rows($result) > 0)
{
while($row = mysqli_fetch_array($result))
{
  $datetime_format = date('m/d/Y h:i A',strtotime($row['notification_datetime']));

  $output .= '
     <div class="item-thumbnail">
        <div class="item-icon bg-danger">
        </div>
      </div>
        <div class="item-content">
                  <h6 class="font-weight-normal text-justify"> '.$row["notification_message"].' </h6>
                  <p class="font-weight-light small-text mb-0 text-muted text-left">
                    '.$datetime_format.'
                  </p>
                </div>
  ';
  }
} else {
    $output .= '   
     <div class="item-thumbnail">
        <div class="item-icon bg-danger">
        </div>
      </div>
                <div class="item-content">
                  <h6 class="font-weight-normal text-justify"> No Notifications Available </h6>
                  <p class="font-weight-light small-text mb-0 text-muted text-left">
                    
                  </p>
                </div>
              
';
}

$status_query = "SELECT * FROM notification 
WHERE notification_status = 0 
AND notification_renter = '$session_id' 
AND notification_usertype = '$session_login'
";
$result_query = mysqli_query($con, $status_query);
$count = mysqli_num_rows($result_query);

$data = array(
   'notification' => $output,
   'unseen_notification'  => $count
);
  echo json_encode($data);
 
 }

}


?>