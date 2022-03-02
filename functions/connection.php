<?php 

function connect() {
  
   $conn = mysqli_connect('localhost','root','','monings');

   if($conn == TRUE) {
   	  return $conn;
   } else {
   	  echo "Error";
   }
}


?>