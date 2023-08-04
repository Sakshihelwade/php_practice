<?php

include"6.navbar.php";
include "connection.php";

$result = mysqli_query($con, "SELECT * FROM account");

?>
<br><br>

<table width="60%" border="1">
	<tr>
		<th>action</th>
		<th>SN</th>
		<th>name</th>
		<th>mobile</th>
		<th>email</th>
		<th>adhar</th>
	</tr> 

	<?php
	foreach($result as $key => $row)
	{
		?>
		<tr>
			<td>
				<a href="6.delete_ac.php?id=<?=$row['ac_id']?>" onclick="return confirm('Are you sure..??')">
					<button>Delete</button>
				</a>
				<a href="6.edit_ac.php?id=<?=$row['ac_id']?>">
					<button>Edit</button>
				</a>
			</td>
			<td><?=$key+1?></td>
			<td><?=$row['ac_name']?></td>
			<td><?=$row['ac_mobile']?></td>
			<td><?=$row['ac_email']?></td>
			<td><?=$row['adhar_no']?></td>
		</tr>
		<?php
	}
	?>
</table>