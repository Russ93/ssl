<php
if(isset($_COOKIE['TestCookie'])){
	echo $_COOKIE['TestCookie'];."
	<form method='POST' action='deletecookie.php'>
		<button>delete cookie</button>
	</form>"
}else{
	echo 'there is no cookie'."
	<form method='POST' action='setcookie.php'>
		<button>Make a cookie</button>
	</form>"
}

?>