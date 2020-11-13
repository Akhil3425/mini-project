<?php
require('db.php');
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $driverid =$_REQUEST['driverid'];
    $date = $_REQUEST['date'];
    $reportnumb = $_REQUEST['reportnumb'];
    $carid = $_REQUEST['carid'];
    $ins_query="insert into accident
    (`driverid`,`date`,`reportnumb`,`carid`)values
    ('$driverid','$date','$reportnumb','$carid')";
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
<p><input type="text" name="driverid" placeholder="Enter Driverid" required /></p>
<p><input type="text" name="date" placeholder="Enter Date" required /></p>
<p><input type="text" name="reportnumb" placeholder="Enter Reportnumb" required /></p>
<p><input type="text" name="carid" placeholder="Enter Carid" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>