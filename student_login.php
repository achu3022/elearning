<?php
include'..\db.php';
$email=$_POST['email'];
$password=$_POST['password'];
echo $email;
echo $password;
 $sql="SELECT * FROM `student_data` WHERE `student_email`='$email' and `student_password`='$password'";
    $result=mysqli_query($con,$sql);
    while($r=mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
        if($r)
        {
            $name=$r['student_name'];
			$class=$r['student_class'];
            session_start();
            $_SESSION["name"] ="$name";
			$_SESSION["email"]="$email";
			$_SESSION["class"]="$class";
            header("Location:student_home.php");
        }
    }

?>