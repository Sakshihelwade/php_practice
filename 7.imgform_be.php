<?php
echo "<pre>";

echo"<br>";
print_r($_POST);
print_r($_FILES);

echo $filename = time()."$_FILES['customer_photo']['tmp_name']";
//or
echo $filename = time().".png";

move_uploaded_file($_FILES['customer_photo']['tmp_name'],"uploads/$filename");

include 'connection.php';
extract($_POST);

// $sql = "CREATE TABLE customer_img
// (customer_id INT PRIMARY KEY AUTO1_INCREMENT,customer_photo TEXT ,customer_name VARCHAR(100), customer_mobile VARCHAR(100),customer_email VARCHAR(100),customer_password VARCHAR(100))";


$sql="INSERT INTO customer_img
(customer_photo,customer_name,customer_mobile,customer_email,customer_password)
VALUES ('$filename','$customer_name','$customer_mobile','$customer_email','$customer_password')";

mysqli_query($con,$sql);

header("location:7.imgform.php");
?>