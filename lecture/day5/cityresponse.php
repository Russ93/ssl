<?php
	$cityentered = trim($_GET['cityget']).'%';
	$conn = new PDO('mysql:host=localhost;dbname=worldcities;port=8889', 'root', 'root');
	$sql = $conn->prepare('SELECT city, region
FROM cities 
WHERE city_ascii like :cityentered 
And country = "us" 
order by city_ascii limit 5;');
	$sql->bindParam(':cityentered',$cityentered);
	$sql-> execute();
	$result = $sql->fetchAll(PDO::FETCH_ASSOC);
	echo json_encode($result);
?>