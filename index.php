<!DOCTYPE html>
<html lang="en">

<head>
    <title>QuickDev Solutions</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/index.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="60">

    <nav class="navbar navbar-inverse navbar-fixed-top" id="fullnav" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">QuickDev Solutions</a>
            </div>

            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#upperpage">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#pricingdiv">Pricing</a></li>
                    <li><a href="#aboutus">About Us</a></li>
                    <li><a href="#gallery">Portfolio</a></li>
                    <li><a href="#contactus">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <?php include 'db.php'; 
    
     $sql = "SELECT * FROM `main_banner_heading`";
   
    $result = $conn->query($sql);

 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $maintagline = $row['main_tagline'];
        $mainofferline = $row['offer_heading'];
        $offertextline = $row['offer_text'];
    }
  // echo json_encode($output);
} else {
    //echo "email-id not found";
}       
    
    ?>


    <article>
        <div class="headerinfo">

            <h2 id="main_taglineshow">
                <?php echo $maintagline; ?>
            </h2>
            <div class="row">
                <div class="col-lg-12">
                    <button type="button" onclick="movetoservicespage();" class="btn servicesb">Our Services</button>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <h5 id="offer_headingshow">
                        <?php echo $mainofferline; ?>
                    </h5>
                    <h4 id="offer_textshow">
                        <?php echo $offertextline; ?>
                    </h4>
                </div>
            </div>
        </div>
    </article>




    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="homepage-hero-module videobg" id="upperpage">
        <div class="container">
            <div class="bgforhome"></div>
        </div>
        <!--
        <div id="contactform">
            <div id="contact-button">
                <div class="rotated-text">Contact</div>
            </div>
            <form>
                <input type="text" /><input type="text" /><input type="text" />
                <textarea row="6" col="5"></textarea>
            </form>
        </div>
-->
    </div>

    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></button>

    <?php  
     
    $sql = "SELECT * FROM `services` where id='1'";
   
    $result = $conn->query($sql);

   if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $serviceheader = $row['services_heading'];
        $servicecontent = $row['services_text'];
        $serviceimagename = $row['services_image'];
    }
   }
    
    ?>
    <div class="container-fluid bg-white" id="services" style="padding-bottom:80px;padding-top:15px;">

        <div class="row text-center">
            <div class="col-lg-12">
                <br> <br>
                <h2>Our Services</h2>
                <hr class="cutomhr">
                <br>
            </div>

        </div>
        <!-- Example row of columns -->
        <div class="row slideanim">
            <div class="col-lg-1"></div>
            <div class="col-lg-5 text-center">
                <?php echo "<img src='http://localhost/Quickdev%20Solutions/img/$serviceimagename' width='70%' />"; ?>
                <!--                <img src="img/websites.png" width="70%" />-->
            </div>
            <div class="col-lg-5" style="margin-top:10px !important;">
                <h2>
                    <?php echo $serviceheader; ?>
                </h2>

                <p>
                    <?php echo $servicecontent; ?>
                </p>

            </div>
            <div class="col-lg-1"></div>
        </div>

        <hr>
        <?php  
     
    $sql = "SELECT * FROM `services` where id='2'";
   
    $result = $conn->query($sql);

   if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $service2header = $row['services_heading'];
        $service2content = $row['services_text'];
        $service2imagename = $row['services_image'];
    }
   }
    
    ?>

        <div class="row slideanim">
            <div class="col-lg-1"></div>
            <div class="col-lg-5" style="margin-top:20px !important;">
                <h2>
                    <?php echo $service2header; ?>
                </h2>

                <p>
                    <?php echo $service2content; ?>
                </p>

            </div>

            <div class="col-lg-5 text-center">
                <!--                <img src="img/mobile_app.png" width="70%" />-->
                <?php echo "<img src='http://localhost/Quickdev%20Solutions/img/$service2imagename' width='70%' alt='mobileapps' />"; ?>
            </div>
            <div class="col-lg-1"></div>
        </div>
        <hr>

        <?php  
     
    $sql = "SELECT * FROM `services` where id='3'";
   
    $result = $conn->query($sql);

   if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $service3header = $row['services_heading'];
        $service3content = $row['services_text'];
        $service3imagename = $row['services_image'];
    }
   }
    
    ?>
        <div class="row slideanim">
            <div class="col-lg-1"></div>
            <div class="col-lg-5 text-center">
                <!--                <img src="img/social.png" width="60%" />-->
                <?php echo "<img src='http://localhost/Quickdev%20Solutions/img/$service3imagename' width='70%' alt='socialnetwork' />"; ?>
            </div>
            <div class="col-lg-5" style="margin-top:20px !important;">
                <h2>
                    <?php echo $service3header;  ?>
                </h2>

                <p>
                    <?php echo $service3content;  ?>
                </p>

            </div>
            <div class="col-lg-1"></div>
        </div>
        <hr>

        <?php  
     
    $sql = "SELECT * FROM `services` where id='4'";
   
    $result = $conn->query($sql);

   if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $service4header = $row['services_heading'];
        $service4content = $row['services_text'];
        $service4imagename = $row['services_image'];
    }
   }
    
    ?>
        <div class="row slideanim">
            <div class="col-lg-1"></div>

            <div class="col-lg-5" style="margin-top:20px !important;">
                <h2>
                    <?php echo $service4header; ?>
                </h2>

                <p>
                    <?php echo $service4content; ?>
                </p>

            </div>
            <div class="col-lg-5 text-center">
                <?php echo "<img src='http://localhost/Quickdev%20Solutions/img/$service4imagename' width='70%' alt='graphicdesign' />"; ?>
                <!--                <img src="img/graphic%20design.png" width="60%" />-->
            </div>
            <div class="col-lg-1"></div>
        </div>

    </div>

    <div class="container-fluid bg-grey" id="pricingdiv" style="padding-bottom:80px;padding-top:15px;">

        <div class="row text-center" style="padding-bottom:15px;">
            <div class="col-lg-12">
                <br> <br>
                <h2>Pricing</h2>
                <hr class="cutomhr">
            </div>

        </div>
        <div class="container">
            <div class="row text-center slideanim">
                <div class="col-md-3">
                    <div class="panel panel-primary">

                        <div class="panel-body">
                            <div class="the-price">
                                <h3>Websites</h3>
                                <hr class="cutompricinghr">

                                <small>Starting from Rs 5,000<span style="color:red;">*</span></small>
                            </div>
                            <table class="table">
                                <tr>
                                    <td>
                                        Static Website
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        Dynamic Website
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Blog Website
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        Web Designing
                                    </td>
                                </tr>

                            </table>
                        </div>
                        <div class="panel-footer">
                            <a href="#myModal2" data-toggle="modal" class="btn btn-primary servicesb" role="button">Know More</a></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-success">
                        <div class="panel-body">
                            <div class="the-price">
                                <h3>Mobile Apps</h3>
                                <hr class="cutompricinghr">
                                <small>Starting from Rs 10,000<span style="color:red;">*</span></small>
                            </div>
                            <table class="table">
                                <tr>
                                    <td>
                                        Android
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        iOS apps
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Hybrid Apps
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        maintenance
                                    </td>
                                </tr>

                            </table>
                        </div>
                        <div class="panel-footer">
                            <a href="#myModal2" data-toggle="modal" class="btn btn-primary servicesb" role="button">Know More</a></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-info">
                        <div class="panel-body">
                            <div class="the-price">
                                <h3>Graphic Designing</h3>
                                <hr class="cutompricinghr">
                                <small>Affordable price guaranted</small>
                            </div>
                            <table class="table">
                                <tr>
                                    <td>
                                        Logo Designing
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        Banner Designing
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Branding
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        Brochure Designing
                                    </td>
                                </tr>

                            </table>
                        </div>
                        <div class="panel-footer">
                            <a href="#myModal2" data-toggle="modal" class="btn btn-primary servicesb" role="button">Know More</a></div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="panel panel-success">
                        <div class="panel-body">
                            <div class="the-price">
                                <h3>
                                    Social Marketing</h3>
                                <hr class="cutompricinghr">
                                <small>Starting from Rs 3,000 <span style="color:red;">*</span></small>
                            </div>
                            <table class="table">
                                <tr>
                                    <td>
                                        Facebook Marketing
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        Twitter Marketing
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Google Marketing
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        Social media management
                                    </td>
                                </tr>

                            </table>
                        </div>
                        <div class="panel-footer">
                            <a href="#myModal2" data-toggle="modal" class="btn btn-primary servicesb" role="button">Know More</a></div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div id="myModal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">We'd Love to Hear From You</h3>
                </div>
                <div class="modal-body">
                    <div class="form-horizontal col-sm-12">
                        <div class="form-group"><input class="form-control required" placeholder="Your name" data-placement="top" data-trigger="manual" data-content="Must be at least 3 characters long, and must only contain letters." type="text"></div>
                        <div class="form-group"><textarea class="form-control" placeholder="Your message here.." data-placement="top" data-trigger="manual"></textarea></div>
                        <div class="form-group"><input class="form-control email" placeholder="email@you.com (so that we can contact you)" data-placement="top" data-trigger="manual" data-content="Must be a valid e-mail address (user@gmail.com)" type="text"></div>
                        <div class="form-group"><input class="form-control phone" placeholder="999-999-9999" data-placement="top" data-trigger="manual" data-content="Must be a valid phone number (999-999-9999)" type="text"></div>
                        <div class="form-group"><button type="submit" class="btn btn-success pull-right">Send It!</button>
                            <p class="help-block pull-left text-danger hide" id="form-error">&nbsp; The form is not valid. </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <?php  
     
    $sql = "SELECT * FROM `about_us`";
   
    $result = $conn->query($sql);

   if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $aboutleftmaincontent = $row['leftpanelcontent'];
        $righttopcontent = $row['rightpaneltop'];
        $rightbottomcontent = $row['rightpanelbottom'];
    }
   }
    
    ?>

    <div class="container-fluid bg-white" id="aboutus" style="padding-bottom:80px;padding-top:15px;">

        <div class="row text-center" style="padding-bottom:15px;">
            <div class="col-lg-12">
                <br> <br>
                <h2>About Us</h2>
                <hr class="cutomhr">
            </div>

        </div>
        <div class="row slideanim">
            <div class="col-lg-1">
            </div>
            <div class="col-lg-5">
                <p>
                    <?php echo $aboutleftmaincontent; ?>
                </p>
            </div>
            <div class="col-lg-5">
                <p><strong>VISION</strong> -
                    <?php echo $righttopcontent; ?>
                </p>
                <p><strong>MISSION</strong> -
                    <?php echo $rightbottomcontent; ?>
                </p>

            </div>
            <div class="col-lg-1">
            </div>
        </div>
    </div>

    <div class="container-fluid bg-white" id="gallery" style="padding-bottom:80px;padding-top:15px;">
        <h2 class="text-center">Gallery</h2>
        <hr class="cutomhr">
        <div class="row slideanim">
            <div class="text-center">Some of our work</div><br>
            <div class="text-center">Websites</div>
        </div>
        <br>
        <div class="row slideanim">
            <div class='col-lg-1'>
            </div>
            <div class='col-lg-10'>


                <?php  
     
    $sql = "SELECT * FROM `gallery_images` where gallery_type = 'website'";
   
    $result = $conn->query($sql);

   if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $imagename = $row['image_name'];
        $imagehreflink = $row['imagewebsitelink_name'];
        $imagealts = $row['img_alt'];
        
        echo "<div class='col-lg-3 col-sm-4 col-6' align='center'><a href='".$imagehreflink."' target='_blank' title='Image 2''><img src='http://localhost/Quickdev%20Solutions/img/$imagename' width='70%' alt='".$imagealts."' class='thumbnail img-responsive' /></a>
            </div>"; } } ?>



                <!--
                <div class="col-lg-3 col-sm-4 col-6">
                    <a href="http://easyschoolchat.com/" target="_blank" title="Image 2"><img src="img/escwebsite.png" alt="portfolioimage2" class="thumbnail img-responsive"></a>
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                    <a href="http://energyguru.in/" target="_blank" title="Image 3"><img src="img/energyguru.png" alt="portfolioimage3" class="thumbnail img-responsive"></a>
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                    <a href="http://trilokicarpets.com" target="_blank" title="Image 1"><img src="img/trilokiweb.png" alt="portfolioimage1" class="thumbnail img-responsive" /></a>
                </div>
-->


            </div>
            <div class='col-lg-1'>
            </div>
        </div>
        <br>
        <div class="row slideanim">
            <div class="text-center">Apps made by us</div>
        </div>
        <br>



        <div class="row slideanim">

            <div class="col-lg-1">
            </div>
            <div class="col-lg-10">

                <?php  
     
    $sql = "SELECT * FROM `gallery_images` where gallery_type = 'mobileapp'";
   
    $result = $conn->query($sql);

   if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $appimagename = $row['image_name'];
        $appimagehreflink = $row['imagewebsitelink_name'];
        $appimagealts = $row['img_alt'];
        
        echo "<div class='col-lg-3 col-sm-4 col-6' align='center'> <a href='".$appimagehreflink."' target='_blank' title='Image 1'><img src='http://localhost/Quickdev%20Solutions/img/$appimagename' width='60%' alt='".$appimagealts."' class='thumbnail img-responsive' /></a>
    </div>"; 
    }
   }
  ?>
                <!--
            <div class="col-lg-3 col-sm-4 col-6">
                <a href="https://play.google.com/store/apps/details?id=com.airolikars.sagar&hl=en" target="_blank" title="Image 1"><img src="img/airolikarsapp.png" width="60%" alt="portfolioimage5" class="thumbnail img-responsive"/></a>
            </div>
            <div class="col-lg-3 col-sm-4 col-6">
                <a href="https://play.google.com/store/apps/details?id=com.sagargopale.torchcompass&hl=en" target="_blank" title="Image 2"><img src="img/flashlightapp.png" width="60%" alt="portfolioimage6" class="thumbnail img-responsive"></a>
            </div>
            <div class="col-lg-3 col-sm-4 col-6">
                <a href="https://play.google.com/store/apps/details?id=com.wdc.archies&hl=en" target="_blank" title="Image 3"><img src="img/archiessalonapp.png" alt="portfolioimage7" width="60%" class="thumbnail img-responsive"></a>
            </div>
-->

            </div>
            <div class="col-lg-1">
            </div>
        </div>
        <div class="row text-center">
            For more work <span><a href="http://webdevco.in/clients.html#*" target="_blank">click here</a></span>
        </div>

    </div>

    <?php  
     
    $sql = "SELECT * FROM `footer_location`";
   
    $result = $conn->query($sql);

   if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $contactmobilenumber1 = $row['contact_number1'];
        $contactmobilenumber2 = $row['contact_number2'];
        $contactgmailid = $row['contact_emailid'];
        $contactaddress = nl2br($row['contact_address']);
        
 
    }
   }
  ?>

    <!-- /container -->
    <footer class="footerdiv bg-grey" id="contactus">
        <div class="container">
            <div class="row slideanim" style="padding-bottom:10px;padding-top:30px;border-bottom: 1px solid rgba(128, 128, 128, 0.42);">

                <div class="col-lg-4">
                    <h3>Location</h3>
                    <?php  
                    echo "<p><i class='fa fa-phone' aria-hidden='true'></i>&nbsp; <a href='tel:$contactmobilenumber1'>$contactmobilenumber1</a> / <a href='tel:$contactmobilenumber2'>$contactmobilenumber2</a></p>";
                         ?>
                    <?php  
                    echo "<p><i class='fa fa-envelope' aria-hidden='true'></i>&nbsp; <a href='mailto:$contactgmailid'>$contactgmailid</a></p>";
                    ?>
                    <?php  
                    echo "<p><i class='fa fa-map-marker' aria-hidden='true'></i>&nbsp; $contactaddress </p>";
                    ?>
                </div>

                <?php  
     
    $sql = "SELECT * FROM `footer_socialconnections`";
   
    $result = $conn->query($sql);

   if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $socialfacebook = $row['facebooklink'];
        $socialtwitter = $row['twitterlink'];
        $socialgmailid = $row['gmaillink'];
      //  $contactaddress = nl2br($row['contact_address']);
        
 
    }
   }
  ?>

                <div class="col-lg-4">
                    <h3>Connect With Us</h3>
                    <div class="">
                        <?php echo "<a target='_blank' href='".$socialfacebook."'><i id='social-fb' class='fa fa-facebook-square fa-3x social'></i></a>";  ?>
                        <?php echo "<a target='_blank' href='".$socialtwitter."'><i id='social-tw' class='fa fa-twitter-square fa-3x social'></i></a>"; ?>
                        <?php echo "<a target='_blank' href='".$socialgmailid."'><i id='social-em' class='fa fa-envelope-square fa-3x social'></i></a>"; ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h3>Contact</h3>
                    <div class="form-group">
                        <input type="text" class="form-control" id="usr" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="contatnum" placeholder="Contact Number">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="emailid" placeholder="email-id">
                    </div>
                    <!--                    <button type="button" class="btn servicesb" role="button">Basic</button>-->
                    <a href="#myModal2" data-toggle="modal" class="btn btn-primary servicesb" role="button">Send Message</a>
                </div>

            </div>
            <br>
            <div class="row text-center">
                <div class="col-lg-12">
                    QuickDev &copy; 2017
                </div>
            </div>
        </div>
    </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/index.js"></script>
    <script>
        //        $(document).ready(function() {
        //            getbannerdetais();
        //
        //        });
        //
        //
        //        function getbannerdetais() {
        //            //alert();
        //            $.ajax({
        //                type: "POST",
        //                url: "http://localhost/Quickdev%20Solutions/bannerheaders.php",
        //                timeout: 10000,
        //                success: function(response) {
        //                    //alert(response);
        //                    response = response.trim();
        //                    var userdata = $.parseJSON(response);
        //                    $(userdata).each(function(index, element) {
        //                        $('#main_taglineshow').html(element.main_tagline);
        //                        $('#offer_headingshow').html(element.offer_heading);
        //                        $('#offer_textshow').html(element.offer_text);
        //                    });
        //
        //
        //
        //                },
        //                error(x, t, r) {
        //                    if (t == 'timeout') {
        //
        //                    }
        //                }
        //            });
        //
        //
        //        }

    </script>
</body>

</html>
