<?php
echo '<style>html{font-family: "Lato", Helvetica, Arial, sans-serif;}</style>';

echo '
<form enctype="multipart/form-data" action="upload.php" method="POST">
	<!-- Name of input element determines name in $_FILES array -->
	Send This file: <input name="userfile" type="file" /><br />
	<input type="submit" value="Send File" />
</form>';


// grades(94);
// grades(54);
// grades(89.9);
// grades(60.01);
// grades(102.1);

// function grades($grade){
// 	// if($grade >= 90){
// 	// 	$grade = 'A';
// 	// } else if($grade >= 80){
// 	// 	$grade = 'B';
// 	// } else if($grade >= 70){
// 	// 	$grade = 'C';
// 	// } else if($grade >= 60){
// 	// 	$grade = 'D';
// 	// } else if($grade < 60){
// 	// 	$grade = 'F';
// 	// } else{
// 	// 	$grade = 'Somethings not right!';
// 	// }
// 	switch($grade){
// 		case $grade >= 90:
// 			$grade = 'A';
// 			break;
// 		case $grade >= 80:
// 			$grade = 'B';
// 			break;
// 		case $grade >= 70:
// 			$grade = 'C';
// 			break;
// 		case $grade >= 60:
// 			$grade = 'D';
// 			break;
// 		case $grade < 60:
// 			$grade = 'F';
// 			break;
// 		default:
// 			$grade = 'Somethings not right!';
// 	}
// //	echo $grade.'<br />';
// }

// $colors = array('red','pink','orange','citrus','yellow','banana','green','blue_grass','blue','sky','purple','royal');

// // for($i = count($colors); $i > 0; $i--){
// // 	echo 'index: '.$i.' Color: '.$colors[$i].'<br />';
// // }
// //foreach (array_reverse($colors) as $key => $color){
// foreach ($colors as $key => $color){
// 	if($key%2 == 0){
// 		//echo 'Key: '.$key.' Color: '.$color.'<br />';
// 	}
// }
?>