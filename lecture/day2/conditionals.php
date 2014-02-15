<?php

grades(94);
grades(54);
grades(89.9);
grades(60.01);
grades(102.1);

function grades($grade){
	if($grade >= 90){
		$grade = 'A';
	} else if($grade >= 80){
		$grade = 'B';
	} else if($grade >= 70){
		$grade = 'C';
	} else if($grade >= 61){
		$grade = 'D';
	} else if($grade < 60){
		$grade = 'F';
	} else{
		grade = 'Somethings not right!';
	}
	echo $grade;
}
?>