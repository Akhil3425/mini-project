<?php
require('db.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Welcome to Car Insurance.</p>
<h1>Personal Details</h1>
<p><a href="insert.php">Add New Person</a></p>
<p><a href="view.php">View Records</a><p>
<h1>Car Details</h1>
<p><a href="carinsert.php">Add Car</a><p>
<p><a href="carview.php">View Car</a><p>
<h1>Accidents</h1>
<p><a href="accidentinsert.php">Add Accident</a><p>
<p><a href="accidentview.php">View Accident</a><p>


</div>
</body>
</html>