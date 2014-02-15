<?php

$user='root';
$pass='root';
$dbh = new PDO('mysql:host=localhost;dbname=SSL;port=8889', 'root', 'root');
$stmt = $dbh->prepare("insert into fruits (fruitName, color) values(:name,:value)");
$stmt->bindParam(':name',$name);
$stmt->bindParam(':value',$value);

//insert one row
$name = $_POST['fruit'];
$value =$_POST['color'];
$stmt->execute();
echo "You have sent $value $name to the Database"
?>