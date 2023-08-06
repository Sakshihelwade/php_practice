<form action="8.addvillages.be.php" method="post" enctype="multipart/form-data">
	Village Name<input type="text" name="vname"><br><br>
	Village Pincode<input type="number" name="vpincode"><br><br>
	Village District<input type="text" name="vdis"><br><br>
	Village Taluka<input type="text" name="vtal"><br><br>
	Village Images<input type="file" accept="image/*" name="vimage"><br><br>

	<button>Save village</button>
</form>



<table border="1">
	<tr>
		<th>SN</th>
		<th>Village name</th>
		<th>Pincode</th>
		<th>District</th>
		<th>Taluka</th>
		<th>Image</th>
	</tr>

	<?php

	include"connection.php";

	$data=mysqli_query($con, "SELECT * FROM Villages");

	foreach($data as $key=>$row)
	{
		?>
		<tr>
			<td><?=$key+1?></td>
			<td><?=$row['vname']?></td>
			<td><?=$row['vpincode']?></td>
			<td><?=$row['vdis']?></td>
			<td><?=$row['vtal']?></td>
			<td>
				<img src="uploads/<?=$row['vimage']?>" width="100px";>
			</td>
		</tr>
		<?php
	}
	?>
</table>
