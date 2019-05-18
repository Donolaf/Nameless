<?php
include('../__class/class.save_therapist.php');


$fullname = $_REQUEST['fullname'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$stype = $_REQUEST['stype'];
$password = $_REQUEST['password'];

echo $password;
$saveTherapist = new Therapist($fullname, $email, $phone, $stype, $password);

$saveTherapist->saveTherapistData();

?>