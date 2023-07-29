<?php

//syntax -> SELECT * FROM table_name

$conn= mysqli_connect("localhost","root","","2_php");
$sql= "SELECT * FROM vehicles";

$result = mysqli_query($conn,$sql);
print_r($result);

?>

<table border="1" width="60%" bgcolor="yellow">
	<tr>
		<th>Vehicle Id</th>
		<th>Vehicle No</th>
		<th>Chessie</th>
		<th>Model</th>
		<th>Owner</th>
		<th>Company</th>
	</tr>
	<?php
	foreach($result as $key=>$row)
	{
		?>
		<tr>
			<td><?=$row['vehicle_id']?></td>
			<td><?=$row['vehicle_no']?></td>
			<td><?=$row['vehicle_chessie']?></td>
			<td><?=$row['vehicle_model']?></td>
			<td><?=$row['vehicle_owner']?></td>
			<td><?=$row['vehicle_company']?></td>
	</tr>
	<?php
	}
	?>
</table>