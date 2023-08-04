<?php

include"connection.php";
extract($_GET);
$sql= "SELECT * FROM account WHERE ac_id='$id'";
$result= mysqli_query($con,$sql);

$row= mysqli_fetch_assoc($result);

?>

<form action="6.update_ac.php" method="post">
	<input type="hidden" name="ac_id" value="<?=$row['ac_id']?>"><br><br>
	Enter name<input type="text" name="ac_name" value="<?=$row['ac_name']?>"><br><br>
	Enter mobile<input type="text" name="mobile" value="<?=$row['ac_mobile']?>"><br><br>
	Enter email<input type="email" name="email" value="<?=$row['ac_email']?>"><br><br>
	Enter adhar no.<input type="text" name="adhar" value="<?=$row['adhar_no']?>"><br><br>
	<button>Update details</button>
</form>