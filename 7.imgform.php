<form action="7.imgform_be.php" method="post" enctype="multipart/form-data">

	customer photo <input type="file" name="customer_photo" accept="image/*"><br><br>
	customer name <input type="text" name="customer_name"><br><br>
	customer mobile <input type="text" name="customer_mobile"><br><br>
	customer email <input type="email" name="customer_email"><br><br>
	customer password <input type="password" name="customer_password"><br><br>
	<button>Register</button>
</form>

<table border="1" width="100%">
	<tr>
		<th>SN</th>
		<th>Photo</th>
		<th>Name</th>
		<th>mobile</th>
		<th>email</th>
		<th>password</th>
	</tr>

<?php
include"connection.php";
$data=mysqli_query($con,"SELECT * FROM customer_img");
foreach($data as $key=>$row)
{
	?>
	<tr>
		<td><?=$key+1?></td>
		<td>
			<img src="uploads/<?=$row['customer_photo']?>" width="150px" height="300px";>
		</td>
		<td><?=$row['customer_name']?></td>
		<td><?=$row['customer_mobile']?></td>
		<td><?=$row['customer_email']?></td>
		<td><?=$row['customer_password']?></td>
	</tr>
	<?php
}
?>
</table>