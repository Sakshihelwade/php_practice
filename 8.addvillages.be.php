<?php

print_r($_POST);
print_r($_FILES);


// $filename = time().$_FILES['vimage']['name'];
echo $filename = time().".png";
move_uploaded_file($_FILES['vimage']['tmp_name'], "uploads/$filename");

include "connection.php";
extract($_POST);

// $sql="CREATE TABLE villages( village_id INT PRIMARY KEY AUTO_INCREMENT,vname VARCHAR(100), vpincode VARCHAR(100), vdis VARCHAR(100), vtal VARCHAR(100),vimage TEXT)";

$sql="INSERT INTO villages
(vname,vpincode,vdis,vtal,vimage)
VALUES('$vname','$vpincode','$vdis','$vtal','$filename')";

mysqli_query($con,$sql);
// header("location:8.addvillages.php");
?>