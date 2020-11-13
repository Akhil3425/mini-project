<?php
require('db.php');
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $name =$_REQUEST['name'];
    $address = $_REQUEST['address'];
    $driverid = $_REQUEST['driverid'];
    $licence = $_REQUEST['licence'];
    $insamt = $_REQUEST['insamt'];
    $ins_query="insert into person
    (`name`,`address`,`driverid`,`licence`,`insamt`)values
    ('$name','$address','$driverid','$licence','$insamt')";
    mysqli_query($con,$ins_query)
    or die(mysql_error());
    $status = "New Record Inserted Successfully.
    </br></br><a href='view.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Add CLIENT</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> 
| <a href="view.php">View Records</a> 
| <a href="logout.php">Logout</a></p>
<div>
<h1>Add cLIENT</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="name" placeholder="Enter Name" required /></p>
<p><input type="text" name="address" placeholder="Enter Address" required /></p>
<p><input type="text" name="driverid" placeholder="Enter Driverid" required /></p>
<p><input type="text" name="licence" placeholder="Enter Licence" required /></p>
<p><input type="text" name="insamt" placeholder="Enter Insamt" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>