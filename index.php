<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="../style.css">
<title>E-Learn</title>
</head>

<body>
	<h1>Instructor Login</h1>
	<div id="signin_form">
	<form action="login.php" method="POST">
	<table>
		<tr>
		<td><label>User Name</label></td><td><input type="email" name="email"></td>
		</tr>
		<tr>
		<td><label>Password</label></td><td><input type="password" name="password"></td>
		</tr>
		<tr>
		<td><input type="submit" value="Login"></td>
		<td><a href="inst_reg.php"><input type="button" value="register"></a></td>
		</tr>
		</table>
	</form>
	</div>
</body>
</html>