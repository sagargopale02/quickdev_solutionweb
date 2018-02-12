<?php
header("access-control-allow-origin: *");
require 'db.php';

$maintagline = $_POST['maintagline'];
$offerhead = $_POST['offerheading'];
$offer_text = $_POST['offertext'];

$sql = "UPDATE main_banner_heading SET main_tagline='$maintagline', offer_heading = '$offerhead', offer_text = '$offer_text' ";

//$sql = "INSERT INTO main_banner_heading (main_tagline, offer_heading, offer_text)
//VALUES ('$maintagline', '$offerhead', '$offer_text')";

if ($conn->query($sql) === TRUE) {
    echo "true";
} else {
    echo "false";
}

$conn->close();
?>