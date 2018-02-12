<?php
header("access-control-allow-origin: *");

require 'db.php';

$serviceid = $_POST['id'];



$sql = "select * from services where id='$serviceid'";  

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
  
 $output[] = $row;   
 
      
  }
 echo json_encode($output);   
} else {
  
echo "false";
    
}


$conn->close();
?>
