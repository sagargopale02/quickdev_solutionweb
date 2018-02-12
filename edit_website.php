<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="js/bootstrap4custom.js"></script>
</head>

<body>

    <?php 
    require 'db.php';  
    session_start();

    echo "<br><div class='container'>Welcome: ".$_SESSION['username']."</div><br>";  
 
     
    $sql = "SELECT * FROM `main_banner_heading`";
   
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $maintaglinefromdb = $row['main_tagline'];
        $offer_headingfromdb = $row['offer_heading'];
        $offer_textfromdb = $row['offer_text'];
    }
   }
    
    ?>

    <div class="container">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myheadermodal">
    Edit Heading Image text
    </button>


        <!-- The Modal -->
        <div class="modal fade" id="myheadermodal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Heading text</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <label for="email">MainTagline:</label>
                        <input type="text" value="<?php echo $maintaglinefromdb ?>" class="form-control" id="maintagline" placeholder="Enter email" name="email">

                        <label for="pwd">Offer Heading:</label>
                        <input type="text" value="<?php echo $offer_headingfromdb ?>" class="form-control" id="offerheading" placeholder="Enter password" name="pswd">

                        <label for="pwd">Offer Text:</label>
                        <input type="text" value="<?php echo $offer_textfromdb ?>" class="form-control" id="offertext" placeholder="Enter password" name="pswd">
                        <br>

                        <button type="submit" onclick="submitmainheadings();" class="btn btn-primary">Submit</button>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php  
     
    $sql = "SELECT * FROM `services` where id='1'";
   
    $result = $conn->query($sql);

   if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $serviceheader1 = $row['services_heading'];
        $servicecontent1 = $row['services_text'];
        $serviceimagename1 = $row['services_image'];
    }
   }
    
    ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <button type="button" onclick="openserviceeditmodal(1);" class="btn btn-primary" data-toggle="modal">
    Edit Services
    </button>
            </div>
            <div class="col-md-3">
                <button type="button" onclick="openserviceeditmodal(2);" class="btn btn-primary" data-toggle="modal" data-target="#myservices">
    Edit Services
    </button>
            </div>
            <div class="col-md-3">
                <button type="button" onclick="openserviceeditmodal(3);" class="btn btn-primary" data-toggle="modal" data-target="#myservices">
    Edit Services
    </button>
            </div>
            <div class="col-md-3">
                <button type="button" onclick="openserviceeditmodal(4);" class="btn btn-primary" data-toggle="modal" data-target="#myservices">
    Edit Services
    </button>
            </div>
        </div>



        <!-- The Modal -->
        <div class="modal fade" id="myservices">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Heading text</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <label for="email">Services1 Heading :</label>
                        <input type="text" class="form-control" id="service_headingname">

                        <label for="pwd">Service1 Content:</label>

                        <textarea class="form-control" id="service_maincontent"></textarea>
                        <br>
                        <img src="" id="serviceimageshow" width="30%">
                        
                        <br><br>
                        <input id="firstserviceimage" onchange="readURL(this);" type="file" />
                        <br>
                        <br>

                        <button type="submit" onclick="submitfirstservicesdetails();" class="btn btn-primary">Submit</button>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>

        <?php  
     
    $sql = "SELECT * FROM `services` where id='2'";
   
    $result = $conn->query($sql);

   if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $serviceheader2 = $row['services_heading'];
        $servicecontent2 = $row['services_text'];
        $serviceimagename2 = $row['services_image'];
    }
   }
    
    ?>

        <!-- The Modal -->
        <div class="modal fade" id="myservices2">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Heading text</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <label for="email">Services :</label>
                        <input type="text" value="<?php echo $serviceheader2 ?>" class="form-control" id="maintagline" placeholder="Enter email" name="email">

                        <label for="pwd">Offer Heading:</label>
                        <input type="text" value="<?php echo $servicecontent2 ?>" class="form-control" id="offerheading" placeholder="Enter password" name="pswd">

                        <label for="pwd">Offer Text:</label>
                        <input type="text" value="<?php echo $serviceimagename2 ?>" class="form-control" id="offertext" placeholder="Enter password" name="pswd">
                        <br>

                        <button type="submit" onclick="submitfirstservicesdetails(2);" class="btn btn-primary">Submit</button>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>

        <?php  
     
    $sql = "SELECT * FROM `services` where id='3'";
   
    $result = $conn->query($sql);

   if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $serviceheader3 = $row['services_heading'];
        $servicecontent3 = $row['services_text'];
        $serviceimagename3 = $row['services_image'];
    }
   }
    
    ?>

        <!-- The Modal -->
        <div class="modal fade" id="myservices3">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Heading text</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <label for="email">Services :</label>
                        <input type="text" value="<?php echo $serviceheader3 ?>" class="form-control" id="maintagline" placeholder="Enter email" name="email">

                        <label for="pwd">Offer Heading:</label>
                        <input type="text" value="<?php echo $servicecontent3 ?>" class="form-control" id="offerheading" placeholder="Enter password" name="pswd">

                        <label for="pwd">Offer Text:</label>
                        <input type="text" value="<?php echo $serviceimagename3 ?>" class="form-control" id="offertext" placeholder="Enter password" name="pswd">
                        <br>

                        <button type="submit" onclick="submitfirstservicesdetails(3);" class="btn btn-primary">Submit</button>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>

        <?php  
     
    $sql = "SELECT * FROM `services` where id='4'";
   
    $result = $conn->query($sql);

   if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $serviceheader4 = $row['services_heading'];
        $servicecontent4 = $row['services_text'];
        $serviceimagename4 = $row['services_image'];
    }
   }
    
    ?>
        <!-- The Modal -->
        <div class="modal fade" id="myservices4">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Heading text</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <label for="email">Services :</label>
                        <input type="text" value="<?php echo $serviceheader4 ?>" class="form-control" id="maintagline" placeholder="Enter email" name="email">

                        <label for="pwd">Offer Heading:</label>
                        <input type="text" value="<?php echo $servicecontent4 ?>" class="form-control" id="offerheading" placeholder="Enter password" name="pswd">

                        <label for="pwd">Offer Text:</label>
                        <input type="text" value="<?php echo $serviceimagename4 ?>" class="form-control" id="offertext" placeholder="Enter password" name="pswd">
                        <br>

                        <button type="submit" onclick="submitfirstservicesdetails(4);" class="btn btn-primary">Submit</button>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
    </div>








</body>

</html>
