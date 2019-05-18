<?php
include('../__class/class.login_admin.php');

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];


$loginAdmin = new AdminLogin($username, $password);
$loginAdmin->login();
?>