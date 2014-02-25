<?php
// for the search box

require_once('model/publicModel.php');

$pm = new publicModel();

if(isset($_GET['fname'])){
	$pm->signup($_GET['fname'],$_GET['lname'],$_GET['email'],$_GET['password']);
}elseif(isset($_GET['getUsers'])){
	$pm->getUsers($_GET['name']);
}elseif(isset($_GET['userId'])){
	require_once 'view/public/showMsgView.php';
	//$pm->getMessages($conn,$_GET['userId']);
	msg($pm->getMessages($_GET['userId']));
}else{
	include 'view/public/homeView.html';
}

?>