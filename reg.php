<?php
include '..\db.php';
$name=$_POST['instructor_name'];
$email=$_POST['instructor_email'];
$password=$_POST['password'];
$qry="INSERT INTO `instructor_data` (`slno`, `instructor_name`, `instructor_email`, `instructor_password`) VALUES ('', '$name', '$email', '$password')";
	if(mysqli_query($con, $qry)) {
  
		header("location:..\index.php");
} 
else {
	echo "error";
}
mysqli_close($con);
?>
