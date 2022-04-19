<?php
include'..\db.php';
$email=$_POST['email'];
$password=$_POST['password'];
 $sql="SELECT * FROM `instructor_data` WHERE `instructor_email`='$email' and `instructor_password`='$password'";
    $result=mysqli_query($con,$sql);
    while($r=mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
        if($r)
        {
            $name=$r['instructor_name'];
            session_start();
            $_SESSION["name"] ="$name";
			$_SESSION["email"]="$email";
            header("Location:instructor_home.php");
        }
    }

?>