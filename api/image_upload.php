<?php
 header('Access-Control-Allow-Origin: *');  

require 'db.php';
  
$id = mysqli_real_escape_string($conn,$_POST['id']);
$serviehead = mysqli_real_escape_string($conn,$_POST['service_heading']);
$servicecontent = mysqli_real_escape_string($conn,$_POST['service_content']);


  
        if(move_uploaded_file($_FILES['file']['tmp_name'], 'img/' . $_FILES['file']['name']))
        {
         //   echo "File Uploaded successfully!";
            $imgname = $_FILES['file']['name'];
            
          $sql = "UPDATE services SET services_image='$imgname', services_heading='$serviehead', services_text='$servicecontent' where id = '$id'";

       if ($conn->query($sql) === TRUE) {
       echo "Record updated successfully";
          } else {
      echo "Error updating record: " . $conn->error;
         }


            
        }
       
    

?>
