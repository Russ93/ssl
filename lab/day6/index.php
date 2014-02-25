<?php
session_start();

$conn = new PDO('mysql:host=localhost;dbname=twitter;port=8889', 'root', 'root');

//$_GET['call'] is for calls to the server insted of getting information

if(!isset($_GET['call'])){
	include 'view/public/head.html';
}

if(isset($_GET['controller'])){
	$controller=trim($_GET['controller']);
}elseif(isset($_SESSION['userId'])){
	$controller='users';
}else {
	$controller="public";
}

// elseif(isset($_SESSION['userId'])){$controller='users';}

if (file_exists("controller/".$controller."Controller.php")) {
	include("controller/".$controller."Controller.php");
} else {
	//controller page does not exist, return 404
	//include('404.php');
}

if(!isset($_GET['call'])){
	echo '
	</body>
</html>';
}
?>