<?php

$con=mysqli_connect("localhost","root","","2_php");
extract($_GET);

echo $sql =" DELETE FROM contact WHERE contact_id='$contact_id'";
mysqli_query($con,$sql);

?>

<script type="">
	alert("record deleted");
	location.href="4.contact_list.php";
</script>