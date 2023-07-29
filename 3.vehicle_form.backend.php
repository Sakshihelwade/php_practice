<?php

$con=mysqli_connect("localhost","root","","2_php");

// if ($con) {
// 	echo "connected";
// }

// $sql = "CREATE TABLE Vehicles (vehicle_id INT PRIMARY KEY AUTO_INCREMENT,vehicle_no VARCHAR(100),vehicle_chessie VARCHAR(100),vehicle_model VARCHAR(100),vehicle_owner VARCHAR(100),vehicle_company VARCHAR(100))";

// mysqli_query($con,$sql);

extract($_POST);

$vehicle_model=addslashes($vehicle_model);
$vehicle_owner=addslashes($vehicle_owner);

$sql ="INSERT INTO vehicles
(vehicle_no,vehicle_chessie,vehicle_model,vehicle_owner,vehicle_company)
VALUES('$vehicle_no','$vehicle_chessie','$vehicle_model','$vehicle_owner','$vehicle_company')";

mysqli_query($con,$sql);

?>

<script type="text/javascript">
	alert("Details added succesfully");
	location.href="3.vehicle_form.php";
</script>