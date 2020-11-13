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
| <a href="carinsert.php">Add car</a> 
<h2>View Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>carid</strong></th>
<th><strong>model</strong></th>
<th><strong>year</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from car;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="center"><?php echo $row["carid"]; ?></td>
<td align="center"><?php echo $row["model"]; ?></td>
<td align="center"><?php echo $row["year"]; ?></td>
<td align="center">
</td>
<td align="center">
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>