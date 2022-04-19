<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="../style.css">
<title>E-Learn</title>
</head>

<body>
	<h1>Student Registration</h1>
	<div id="signin_form">
	<form action="reg.php" method="POST">
	<table>
		<tr>
		<td><label> Name</label></td><td><input type="text" name="student_name"></td>
		</tr>
		<tr>
		<td><label>Email</label></td><td><input type="email" name="student_email"></td>
		</tr>
		<tr>
		<td><label>Password</label></td><td><input type="password" name="student_password"></td>
		</tr>
		<tr>
			<td><label>Class</label></td><td><select name="class">
			<?php
			for($i=1;$i<=10;$i++)
			{
				echo "<option>".$i."</option>";
			}
			?>
			</td></select>
		</tr>
		<tr>
		<td><input type="submit" value="Register"></td>
		
		</tr>
		</table>
	</form>
	</div>
</body>
</html>