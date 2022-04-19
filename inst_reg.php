<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="../style.css">
<title>E-Learn</title>
</head>

<body>
	<h1>Instructor Registration</h1>
	<div id="signin_form">
	<form action="reg.php" method="POST">
	<table>
		<tr>
		<td><label> Name</label></td><td><input type="text" name="instructor_name"></td>
		</tr>
		<tr>
		<td><label>Email</label></td><td><input type="email" name="instructor_email"></td>
		</tr>
		<tr>
		<td><label>Password</label></td><td><input type="password" name="password"></td>
		</tr>
		<tr>
		<td><input type="submit" value="Register"></td>
		
		</tr>
		</table>
	</form>
	</div>
</body>
</html>