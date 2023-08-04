<?php
include"connection.php";
extract($_POST);

$sql="UPDATE account SET ac_name='$ac_name', ac_mobile='$mobile', ac_email='$email', adhar_no='$adhar' WHERE ac_id='$ac_id'";

mysqli_query($con,$sql);
?>

<script>
	alert("record updated");
	location.href="6.ac_list.php"
</script>