<?php
require_once('model/usersModel.php');

$um = new usersModel();

if(isset($_GET['password'])){
	require_once 'view/users/usersView.php';
	$um->login($_GET['email'],$_GET['password']);
}elseif(isset($_GET['update'])){
	$um->updateMsg($_GET['id'],$_GET['header'],$_GET['message']);
}elseif(isset($_GET['del'])){
	$um->delMsg($_GET['del']);
}elseif(isset($_GET['nMsg'])){
	include 'view/users/addMsgView.php';
}elseif(isset($_GET['header'])){
	$um->addMsg($_GET['header'],$_GET['message']);
}elseif(isset($_GET['signout'])){
	$um->signout();
}elseif(isset($_SESSION['userId'])){
	require_once 'view/users/usersView.php';
	account($um->logged($_SESSION['userId']));
}
?>