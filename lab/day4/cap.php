<?php
$data = file('dictionary.txt');
$rndNumber = rand(0,count($data)-1);
message($data[$rndNumber]);

echo '<label>Captcha:</label>
	<image src="cap.png" /><br />
	<input name="cap" value="'.$rndNumber.'" type="hidden" />
	<input name="captcha" type="text" placeholder="Text from the black box above"/><br/>';

function message($msg){
#	imagecreate ( int $width , int $height )
	$canvas = imagecreate(270,32);
#	imagecolorallocate ( resource $image , int $red , int $green , int $blue )
	$black = imagecolorallocate($canvas, 0,0,0);
	$white = imagecolorallocate($canvas, 255,255,255);
	$font = 'fonts/web.ttf';
#	imagefilledrectangle(canvas, size, angle, x, y, color, fontfile, text);
	imagefilledrectangle($canvas, 0,0,250,150,$black);
	#imagefilledrectangle($canvas, 12,0,0,12,$white);
#	imagefttext(canvas, size, angle, x, y, color, fontfile, text)
	imagefttext($canvas,12,0,10,22,$white,$font,$msg);
#	imagepng ( resource $image [, string $filename [, int $quality [, int $filters ]]] )
	imagepng($canvas, 'cap.png');
#	Frees up the resources
	imagedestroy($canvas);
}
?>