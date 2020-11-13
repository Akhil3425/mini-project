<?php
require('db.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="dashboard.php">Home</a> 
| <a href="insert.php">Add Accident</a> 
<h2>View Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>Driverid</strong></th>
<th><strong>Date</strong></th>
<th><strong>Reportnumb</strong></th>
<th><strong>carid</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from accident;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="center"><?php echo $row["driverid"]; ?></td>
<td align="center"><?php echo $row["date"]; ?></td>
<td align="center"><?php echo $row["reportnumb"]; ?></td>
<td align="center"><?php echo $row["carid"]; ?></td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>