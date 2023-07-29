<?php

$con=mysqli_connect("localhost","root","","2_php");

// if ($con) {
// 	echo "connected";
//}

// $sql=" CREATE TABLE contact(
// contact_id  INT PRIMARY KEY AUTO_INCREMENT,
// full_name VARCHAR(100), mobile VARCHAR(100), email VARCHAR(20), message TEXT
// )";

// mysqli_query($con,$sql);

extract($_POST);
$email=addslashes($email);
$message=addslashes($message);
$message=strip_tags($message);

$sql= " INSERT INTO contact
(full_name,mobile,email,message)
VALUES('$full_name','$mobile','$email','$message')";

mysqli_query($con,$sql);
?>
<script type="text/javascript">
	alert("Details added succesfully");
	location.href="4.contact_page.php";
</script>