<?php
//loginController
session_start();

require_once('models/loginModel.php');
require_once('models/viewModel.php');
$login = new loginModel();
$view = new viewModel(); 

switch (strtolower($queryMethod)) {
	case 'checklogin':
		//make sure $_POST has valid info
		if (isset($_POST['username']) && isset($_POST['password'])) {
			//pass user/pass to checklogin method - if returns true, successful login
			if ($login->checklogin($_POST['username'], $_POST['password'])) {
				$queryData="Login successful.";
				$view->getView('register');
			} else {
				//login was NOT successful, send back to login page
				$queryData="Login was not successful, try again.";
				$view->getView('signin');
			}
		} else {
			$queryData="Please enter Username and Password, and try again.";
			$view->getView('signin');
		}
		break;

	case 'signout':
		$login->signout();
		$view->getView('signout');
		break;

	default:	
		if (!isset($_SESSION['userid'])) {
			//if session userid is not set, then user is not logged in
			$view->getView('signin');
		} else {
			echo "user is signed in";
		}
}
