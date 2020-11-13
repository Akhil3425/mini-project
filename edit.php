<?php
require('db.php');
$query = "SELECT * from person "; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> 
| <a href="insert.php">Add person</a> 
| <a href="logout.php">Logout</a></p>
<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$name =$_REQUEST['name'];
$address =$_REQUEST['address'];
$driverid =$_REQUEST['driverid'];
$licence = $_REQUEST['licence'];
 $insamt = $_REQUEST['insamt'];
$update="update person set driverid='".$driverid."',name='".$name."',address='".$address."',licence='".$licence."',insamt='".$insamt."' where driverid='".$driverid."' ";

mysqli_query($con, $update) or die(mysqli_error()); 
$status = "Record Updated Successfully. </br></br>
<a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="driverid" placeholder="Enter Driverid" 
required value="<?php echo $row['driverid'];?>" /></p>
<p><input type="text" name="name" placeholder="Enter Name" 
required value="<?php echo $row['name'];?>" /></p>
<p><input type="text" name="address" placeholder="Enter Address"
required value="<?php echo $row['address'];?>" /></p>
<p><input type="text" name="licence" placeholder="Enter Licence"
required value="<?php echo $row['licence'];?>" /></p>
<p><input type="text" name="insamt" placeholder="Enter Insamt" 
required value="<?php echo $row['insamt'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>