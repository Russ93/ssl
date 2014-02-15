<?php
session_start();
#session_destroy();
if(!isset($_SESSION['count'])){
	$_SESSION['count'] = 0;
} else{
	if(isset($_GET)){
		foreach ($_GET as $key => $value) {
			$_SESSION[$key] = $value;
		}
	}else{
		echo 'theres nothing in the get';
	}
}
#session_start();
#unset($_SESSION['count']); //remove the session variable count
//Finaly, destroy the session
#session_destroy();
?>