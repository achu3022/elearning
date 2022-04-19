<?php
include '..\db.php';
$name=$_POST['student_name'];
$email=$_POST['student_email'];
$password=$_POST['student_password'];
$class=$_POST['class'];

$qry="INSERT INTO `student_data` (`slno`, `student_name`, `student_email`, `student_password`, `student_class`) VALUES ('', '$name', '$email', '$password', '$class')";
	if(mysqli_query($con, $qry)) {
  
		header("location:..\index.php");
} 
else {
	echo "error";
}
mysqli_close($con);
?>
