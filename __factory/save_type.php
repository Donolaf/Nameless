<?php
include('../__class/class.save_stype.php');

$sname = $_REQUEST['sname'];

$saveType = new SaveType($sname);

$saveType->saveSpecialization();


?>