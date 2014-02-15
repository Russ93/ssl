<?php
$data = file('dictionary.txt');
$error = '';

if(isset($_POST['cap'])){
	if($_POST['cap']<9){$post=$_POST['captcha']."
";}
	if(preg_match('^[a-zA-Z0-9]^', $_POST['username'])){}else{$error = "Your Username was typed incorrectly.";}
	if(preg_match('^[a-zA-Z0-9]^', $_POST['password'])){}else{$error = "Your Password was typed incorrectly.";}
	if($data[$_POST['cap']] != $post){$error = "Your Captcha was typed incorrectly.";}
	if($error == ''){
		$userCheck = '';
		$username = $_POST['username'];
		$conn = new PDO('mysql:host=localhost;dbname=SSL;port=8889', 'root', 'root');
		$sql = 'SELECT username, password, thumb, image FROM users where username = "'.$username.'";';
		foreach ($conn->query($sql) as $row) {$userCheck = $row['username'];}
		if($userCheck==$_POST['username']){$error='That username already exits';}
	}

	if($error == ''){
		# salt and hasing
		$salt = $_POST['username'];
		$password = $_POST['password'];

		#user Input info
		$username = $_POST['username'];
		$password = md5($salt.$password);
		$thumb = "uploads/thumb_".$_FILES['userfile']['name'];
		$img = "uploads/".$_FILES['userfile']['name'];

		#sql calls
		$stmt = $conn->prepare("insert into users (username, password,image,thumb) values(:username,:password,:img,:thumb);");
		$stmt->bindParam(':username',$username);
		$stmt->bindParam(':password',$password);
		$stmt->bindParam(':thumb',$thumb);
		$stmt->bindParam(':img',$img);
		$stmt->execute();

		#Image Preparation
		$uploaddir = '/Users/russellbenton/Desktop/SSL/lab/day4/uploads/';
		$uploadfile = $uploaddir.basename($_FILES['userfile']['name']);

		if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){
			imageResize("uploads/".$_FILES['userfile']['name'], 'uploads/thumb_'.$_FILES['userfile']['name'],100,100);
		}
	}
}

if($error == ''){
	foreach ($conn->query($sql) as $row) {
		$username = $row['username'];
		$password = $row['password'];
		$img = $row['image'];
		$thumb = $row['thumb'];
	}

	echo "<!DOCTYPE html>
<html>
<head>
<title>User Profile</title>
<style>html{font-family: 'Avenir','Lato',helvetica,arial,sans-serif;}body{background: #fefefe;}img{background: #fff; padding: 5px; border: 1px solid #eee;}.thumb{float: left;}.big{clear: both;}</style>
</head>
<html>
	<center>
		<img class='thumb' src='".$thumb."' /><br />
		<h3>Username: ".$username."</h3>
		<p>Password Key:".$password."</p><br />
		<img class='big' src='".$img."' />
	</center>
</html>";
}else{
	echo "<span>$error</span>";
	include "index.php";
}

function imageResize($file, $name, $h, $w){
#	imagecreatefrompng(filename)
	$type=substr($file, -3);
	switch($type){
		case $type == 'jpg':
			$canvas = imagecreatefromjpeg($file);
			break;
		case $type == 'png':
			$canvas = imagecreatefrompng($file);
			break;
		case $type == 'bmp':
			$canvas = imagecreatefromwbmp($file);
			break;
		case $type == 'gif':
			$canvas = imagecreatefromgif($file);
			break;
	}
#	getimagesize(); returns arr[width,height]
	$size = getimagesize($file);
	$fileWidth = $size[0];
	$fileHeight = $size[1];
#	imagecreatetruecolor(width, height)
	$content = imagecreatetruecolor($w, $h);
#	imagecopyresampled(dst_image, src_image, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)
	imagecopyresampled($content,$canvas,0,0,0,0,$w,$h,$fileWidth,$fileHeight);
#	imagepng($content, src file, quality 0-9);
	imagepng($content,$name,9);
#	Frees up the resources by remove the canvas from the RAM
	imagedestroy($canvas);
}
?>