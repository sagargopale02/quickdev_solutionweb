<?php
header('Access-Control-Allow-Origin: *');
include 'db.php';
    
    $sql = "SELECT * FROM `main_banner_heading`";
   
    $result = $conn->query($sql);

 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $output[] = $row;
    }
   echo json_encode($output);
} else {
    //echo "email-id not found";
}
    

$conn->close();
?>
