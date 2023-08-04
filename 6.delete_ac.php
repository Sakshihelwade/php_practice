<?php

extract($_GET);
include"connection.php";

$sql=" DELETE FROM account WHERE  ac_id='$id'";
mysqli_query($con,$sql);

?>
<script type="">
	alert('record deleted');
	location.href="6.ac_list.php"
</script>