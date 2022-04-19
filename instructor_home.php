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
	echo " Name:$name";
	echo "<br>Email:$email";
	?>
	
	</div>
	<h1>Add Class Contents</h1>
	<div id="signin_form">
		
	<form action="add_content.php" method="POST" enctype="multipart/form-data">
	<table>
		<tr>
		<td><label>Content Name</label></td><td><input type="text" name="content_name"></td>
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
			<td><label>Short Description</label></td><td><textarea name="short"></textarea></td>
		</tr>
		<tr>
		<td><label>Full Description</label></td><td><textarea name="full"></textarea></td>
		</tr>
		<tr>
			<td><label>File Upload</label></td><td><input type="file" name="file_upload"></td>
		</tr>
		<tr>
		<td><input type="submit" value="Add"></td>
		
		</tr>
		</table>
	</form>
	</div>
	<div>
		<a href="../index.php"><input type="button" value="Log Out"</a>
	</div>
</body>
</html>