<?php
require('db.php');
$driverid=$_REQUEST['driverid'];
$query = "DELETE FROM person WHERE driverid=$driverid"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: view.php"); 
?>