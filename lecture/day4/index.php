<?php
//$user='root';
//$pass='root';
//$dbh = new PDO('mysql:host=localhost;dbname=day4SSL;port=8889', $user, $pass);
$stuff = '$dbh = new PDO("sqlite:day4ssl.sqlite");
$stmt = $dbh->prepare("select fruitId, fruitName, color 
	from fruits
	order by fruitId");
$stmt->execute();
$result = $stmt->fetchAll(); 
foreach ($result as $key => $vfprintf(handle, format, args)alue) {
	// $value = var_dump($value);
	// echo "$key: $value <br />";
	//echo "$key: $value<br />";

	foreach($value as $k => $v){
		echo "$k: $v<br />";
	}
	echo "<p></p>";
}';
echo '
<html>
<head>
</head>
<body>
	<form method="POST" action="form.php">
		<label>Fruit Name:</label><input name="fruit"></input>
		<label>Fruit Color:</label><input name="color"></input>
		<button>Send</button>
	</form>
</body>
</html>
'
?>