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
| <a href="insert.php">Add Person</a> 
<h2>View Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>Driverid</strong></th>
<th><strong>Name</strong></th>
<th><strong>Address</strong></th>
<th><strong>Licence</strong></th>
<th><strong>Insurance Amount</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from Person;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="center"><?php echo $row["driverid"]; ?></td>
<td align="center"><?php echo $row["name"]; ?></td>
<td align="center"><?php echo $row["address"]; ?></td>
<td align="center"><?php echo $row["licence"]; ?></td>
<td align="center"><?php echo $row["insamt"]; ?></td>
<td align="center">
<a href="edit.php">Edit</a>
</td>
<td align="center">
<a href="delete.php?driverid=<?php echo $row["driverid"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>