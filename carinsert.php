<?php
require('db.php');
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $carid =$_REQUEST['carid'];
    $model = $_REQUEST['model'];
    $year = $_REQUEST['year'];
    $ins_query="insert into car
    (`carid`,`model`,`year`)values
    ('$carid','$model','$year')";
    mysqli_query($con,$ins_query)
    or die(mysql_error());
    $status = "New Record Inserted Successfully.
    </br></br><a href='carview.php'>View Inserted Record</a>";
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
<p><input type="text" name="carid" placeholder="Enter Carid" required /></p>
<p><input type="text" name="model" placeholder="Enter Model" required /></p>
<p><input type="text" name="year" placeholder="Enter Year" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>