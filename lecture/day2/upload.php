<?php
$uploaddir = '/Users/russellbenton/Desktop/SSL/lecture/day2/uploads/';
$uploadfile = $uploaddir.basename($_FILES['userfile']['name']);

echo '<pre>';
if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){
	echo "File is valid, and was succefully uploaded";
	echo "</pre>";
	echo "<img src='uploads/".$_FILES['userfile']['name']."' />";
}else{
	echo "possible file upload attack!";
}
?>