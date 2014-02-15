<?php
echo '
        <ul>';
// Calls getNumbers 3 times
for ($i = 1; $i <= 3; $i++) {
    //passes which number time it has been called with $i
    getNumbers($i);
}

function getNumbers($n){
    // $n is the number it is on eairlier called $i
    $arr = array();
    //creates LI for everything using the $n for a number
    echo '
            <li>PowerBall Number '."$n: ";
    //creates 6 numbers
    for ($i = 0; $i < 6; $i++) {
        //pushes them up into the array
        array_push($arr, rand ( 1 , 59 ));
        //if it's the last one make it strong
        if ($i == 5){
            echo "<strong> $arr[$i] </strong>";
        }else{
            echo "$arr[$i], ";
        }
    };
    //closes everything
    echo '    	</li>';
};
echo '
        </ul>';
?>