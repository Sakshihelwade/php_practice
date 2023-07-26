<?php
//direct insertion into mysql 


print_r($_POST);

$connection = mysqli_connect("localhost","root","","2_php");

$un=$_POST['user_name'];
$um=$_POST['user_mobile'];
$uc=$_POST['user_class'];
$ue=$_POST['user_email'];
$ua=$_POST['user_age'];

$sql="INSERT INTO user_tbl(user_name, user_mobile, user_class, user_email, user_age)
VALUES ('$un','$um','$uc','$ue','$ua')";

mysqli_query($connection,$sql);

?>

<script type="text/javascript">
	alert("customer added");
	location.href="2.form.php";
</script>
