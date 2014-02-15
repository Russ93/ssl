<?php
$error = '';
if(isset($_POST['username'])){
	if(preg_match('^[a-zA-Z0-9]^', $_POST['username'])){}else{$error = "Your Username was typed incorrectly.";}
	if(preg_match('^[a-zA-Z0-9]^', $_POST['password'])){}else{$error = "Your Password was typed incorrectly.";}

	if ($error == ''){
		# salt and hasing
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password = md5($username.$password);
	}
}elseif(isset($_COOKIE['username'])){
	$username = $_COOKIE['username'];
}
if ($error=='') {
	$conn = new PDO('mysql:host=localhost;dbname=SSL;port=8889', 'root', 'root');
	$sql = 'SELECT username, password, thumb, image FROM users where username = "'.$username.'";';
	foreach ($conn->query($sql) as $row) {
		$username = $row['username'];
		$password = $row['password'];
		$img = $row['image'];
		$thumb = $row['thumb'];
	}
}
if($error == ''){
		#session calls
		// session_start();
		// setcookie('username', $username);
		// setcookie('password', $password);
		// setcookie('img', $thumb);
		// setcookie('thumb', $img);
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
?>