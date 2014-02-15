<html>
<head></head>
<body>
<h1>User Login</h1>
<?php if (isset($queryData)) { echo "<h2>$queryData</h2>"; } ?>

<form name="login" action="/?controller=login&method=checklogin" method="post">
	Username: <input type="text" name="username" /><br/>
	Password: <input type="password" name="password" /><br/>
	<input type="submit" value="Login" />
</form>

</body>
</html>