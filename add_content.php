<?php
include '..\db.php';
$content_name=$_POST["content_name"];
$class=$_POST["class"];
$short_description=$_POST["short"];
$ful_description=$_POST["full"];
$file_upload=$_FILES["file_upload"]["name"];

$destination = 'upload/' . $file_upload;
$extension = pathinfo($file_upload, PATHINFO_EXTENSION);
$file = $_FILES['file_upload']['tmp_name'];

if (!in_array($extension, [ 'pdf'])) 
{
        echo "You file extension must be .pdf";
    } 
else 
	{
		if (move_uploaded_file($file, $destination)) 
		{
				$sql = "INSERT INTO `class_contents` (`slno`, `content_name`, `class`, `short_description`, `full_description`, `file_upload`) VALUES ('', '$content_name', '$class', '$short_description', '$ful_description', '$file_upload');";
				if (mysqli_query($con, $sql)) 
				{
					echo "File uploaded successfully";
        		}
		}
		else 
		{
            echo "Failed to upload file.";
       }
	}

?>
