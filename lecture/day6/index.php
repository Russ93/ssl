<?php
//index.php - default routing page

//set Action, Method, and Data passed through querystring
if (isset($_GET['controller'])) {
	$queryController=trim($_GET['controller']);
} else {
	//a CONTROLLER has not been requested (root of site)
	//set default controller/method to home page
	$queryController="view";
	$queryMethod="home";
}
if (isset($_GET['method'])) {
	$queryMethod=trim($_GET['method']);
} else {
	if (!isset($queryMethod)){ $queryMethod=""; } 
}
if (isset($_GET['data'])) {
	$queryData=trim($_GET['data']);
} else {
	$queryData="";
}

if (file_exists("controllers/".$queryController."Controller.php")) {
	include("controllers/".$queryController."Controller.php");
} else {
	//controller page does not exist, return 404
	include('404.php');
}
