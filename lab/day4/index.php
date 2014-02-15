<?php
// if(isset($_COOKIE['username'])){
// 	include "login.php";
// }else{
	echo '<style>html{font-family: "Lato", Helvetica, Arial, sans-serif;}span{width:960px;margin:0 auto;display:block;color:#E66665;font-size:1.25em;}div{float: left;margin-left: 20%;}form{width: 300px;}input[type="file"]{text-indent: 100%;}button,input[type=button],input[type=reset],input[type=submit]{text-transform:capitalize;position:relative;vertical-align:top;width:90%;height:60px;padding:15px;font-size:1.375em;color:#fff;text-align:center;text-shadow:0 1px 2px rgba(0,0,0,.25);background:#27ae60;border:0;border-bottom:2px solid #219d55;cursor:pointer;-webkit-box-shadow:inset 0 -2px #219d55;box-shadow:inset 0 -2px #219d55}button:active,input[type=button]:active,input[type=reset]:active,input[type=submit]:active{top:1px;outline:0;-webkit-box-shadow:none;box-shadow:none}input{width:calc(100% - 30px);padding:1em;margin-bottom:1em;border-radius:5px;border:#ccc solid 2px;background:#fff;clear:both}input:focus{outline:0;border:#4D9379 solid 2px}</style>';
	echo '
	<div id="signup">
		<h3>Sign Up</h3>
		<form enctype="multipart/form-data" action="upload.php" method="POST">
			<!-- Name of input element determines name in $_FILES array -->
			<label>Username:</label> <input name="username" type="text" required="required"/><br/>
			<label>Password:</label> <input name="password" type="Password" required="required"/><br/>
			<label>Avatar:</label> <input name="userfile" type="file" required="required" /><br />';
		include "cap.php";
		echo '	<input type="submit" value="Sign Up" />
		</form>
	</div>
	<div id="signin">
		<h3>Sign In</h3>
		<form enctype="multipart/form-data" action="login.php" method="POST">
			<!-- Name of input element determines name in $_FILES array -->
			<label>Username:</label> <input name="username" type="text" required="required"/><br/>
			<label>Password:</label> <input name="password" type="Password" required="required"/><br/>
			<input name="login" type="submit" value="Sign In" />
		</form>
	</div>';
//}
?>