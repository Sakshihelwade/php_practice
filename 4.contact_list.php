<?php

$con= mysqli_connect("localhost","root","","2_php");
$data= mysqli_query($con, "SELECT * FROM contact" );

?>

<table border="1" bgcolor="grey" style="color:white; width: auto;">
	<tr>
		<th>Action</th>
		<th>SN</th>
		<th>full name</th>
		<th>mobile</th>
		<th>email</th>
		<th>user message</th>
	</tr>

	<?php
	foreach($data as $key => $row)
	{
		?>
		<tr>
			<td><a href="4.contact_delete.php?contact_id=<?=$row['contact_id']?>" onclick="return confirm ('are you sure?')"><button>Delete</button></a></td>
			<td><?=$key+1?></td>
			<td><?=$row['full_name']?></td>
			<td><?=$row['mobile']?></td>
			<td><?=$row['email']?></td>
			<td><?=$row['message']?></td>
		</tr>
		<?php 
	}
	?>
</table>