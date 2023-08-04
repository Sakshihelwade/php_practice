<?php

extract($_POST);
include "connection.php";

// $sql="CREATE TABLE account
// (ac_id INT PRIMARY KEY AUTO_INCREMENT,ac_name VARCHAR(100),ac_mobile VARCHAR(20),ac_email VARCHAR(50),adhar_no VARCHAR(50))";

$sql = "INSERT INTO account
(ac_name,ac_mobile,ac_email,adhar_no)
VALUES('$ac_name','$mobile','$email','$adhar')";

mysqli_query($con,$sql);

?>
<script>
	alert("Ac created");
	location.href="6.create_ac.php"
</script>