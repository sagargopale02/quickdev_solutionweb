<?php
header("access-control-allow-origin: *");

require 'db.php';

$username = $_POST['uname1'];
$userpass = $_POST['pwd1'];


$sql = "select * from admin_login where user_name = '$username' and user_pass= '$userpass'";  

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
  
 session_start();

 $_SESSION['username']=$row['user_name'];
 echo $_SESSION['username'];    
 
      
  }
    
} else {
  
echo "false";
    
}


$conn->close();
?>
