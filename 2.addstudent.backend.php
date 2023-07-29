<?php

$con=mysqli_connect("localhost","root","","php_school");
// if ($con) {
// 	echo "connected";
// }

// $sql="CREATE TABLE student_1(
// 	studentd_id INT PRIMARY KEY AUTO_INCREMENT,
// 	std_name VARCHAR(100),
// 	mail VARCHAR(20),
// 	address VARCHAR(100),
// 	pin VARCHAR(100),
// 	pwd VARCHAR(50),
// 	adhar VARCHAR(50),
// 	pan VARCHAR(50),
// 	clg TEXT,
// 	insta VARCHAR(50),
// 	fb VARCHAR(50),
// 	li VARCHAR(50),
// 	course TEXT)";

// mysqli_query($con,$sql);

extract($_POST);

$sql=" INSERT INTO student_1
(std_name,mail,address,pin,pwd,adhar,pan,clg,insta,fb,li,course)
VALUES('$name','$mail','$address','$pin','$pwd','$adhar','$pan','$clg','$insta','$fb','$li','$course')";

mysqli_query($con,$sql);
?>

<script type="text/javascript">
	alert("Details added succesfully");
	location.href="2.addstudent.php";
</script>