<?php
//VIEW model

class viewModel {
	//The view() function will display a page in the views subdirectory
	public function getView($pagename, $pagemessage = null) {
		global $queryData;
		if (file_exists("views/".$pagename."View.php")) {
			//prepend views to the path so PHP knows where to find it
			//remember that index in the root of the site is being called
			include("views/".$pagename."View.php");
		}
	}
}
