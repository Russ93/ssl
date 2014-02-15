<?php
//loginModel

class loginModel {
	//The view() function will display a page in the views subdirectory

	public function checklogin($username, $password) {
		//check user/pass against db - returns true on success
		$_SESSION['userid']=1;
		return false;
	}

	public function signout() {
		//clear out the session information
		session_destroy();
		session_start();
	}
}

