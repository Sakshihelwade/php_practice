<?php

extract($_POST);
include("5.connection.php");
// if ($con) {
// 	echo"connected";
// }


// $sql=" CREATE TABLE card
// (card_id INT PRIMARY KEY AUTO_INCREMENT,icon VARCHAR(100),name VARCHAR(100),mobile VARCHAR(100),email VARCHAR(100), address TEXT, position VARCHAR(100),company VARCHAR(100))";

// mysqli_query($con, $sql);

$sql= "INSERT INTO card
(icon,name,mobile,email,address,position,company)
VALUES('$icon','$name','$mobile','$email','$address','$position','$company')";

mysqli_query($con, $sql);
?>
<script>
	alert("Details submitted");
	location.href="5.add_card.php"
</script>