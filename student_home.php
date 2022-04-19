<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="../style.css">
<title>E-Learn</title>
</head>

<body>
<div id="header">
	<?php
	session_start();
	$name=$_SESSION['name'];
	$email=$_SESSION['email'];
	$class=$_SESSION['class'];
	echo " Name:$name";
	echo "<br>Email:$email";
	echo "<br>Class: $class";
	?>
	
	</div>
	<h1>Student Home</h1>
	<div align="center">
		<h3>Content List</h3>
		<table align="center" border="1px">
			<tr><td>Sl No</td><td>Content Name</td><td>Short Description</td><td>Details</td></tr>
		<?php
			include '..\db.php';
		$class=$_SESSION['class'];
		$sql="SELECT * FROM `class_contents` WHERE `class`='$class'";
		$result=mysqli_query($con,$sql);
		while($r=mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
    $row=$r;

        foreach($row as $r)
        {
			echo '<tr><td>'.$row["slno"].'</td><td>'.$row["content_name"].'</td><td>'.$row["short_description"].'</td><td><a href="view_detail.php?slno='.$row["slno"].'"><button>Click</button></a></td></tr>';
			break;
		}
		}
		?>
		</table>
	</div>
	
	</body>
</html>