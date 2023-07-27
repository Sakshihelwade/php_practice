<pre><?php 
print_r($_POST);

//connection

$connection = mysqli_connect("localhost","root","","2_php");


//checking conn

// if($connection){
// 	echo "connection";
// }
// else{
// 	echo"fail";
// }

//variable declaration

$sn=$_POST['student_name'];
$sm=$_POST['student_mobile'];
$se=$_POST['student_email'];


//create table query variable declaration and run and create table in dtabase mentiond in connection

// $sql="CREATE TABLE add_new_student (student_id INT PRIMARY KEY AUTO_INCREMENT, student_name VARCHAR(100),student_mobile VARCHAR(100),student_email VARCHAR(100))";
// mysqli_query($connection, $sql);


//insert query run

$sql="INSERT INTO add_new_student(student_name, student_mobile, student_email)VALUES ('$sn','$sm','$se')";
mysqli_query($connection, $sql);
 ?></pre>

<script type="text/javascript">
    alert("customer added");
    location.href="add_new_student.php";
</script>