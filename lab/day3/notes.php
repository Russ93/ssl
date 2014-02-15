<?php
function copy_an_image($file, $name){
#	imagecreatefrompng(filename)
	$canvas = imagecreatefrompng($file);
	imagepng($canvas,$name);
	imagedestroy($canvas);
}
function imageResize($file, $name, $h, $w){
#	imagecreatefrompng(filename)
	$canvas = imagecreatefrompng($file);
#	getimagesize(); returns arr[width,height]
	$size = getimagesize($file);
	$fileWidth = $size[0];
	$fileHeight = $size[1];
#	imagecreatetruecolor(width, height)
	$content = imagecreatetruecolor($w, $h);
#	imagecopyresampled(dst_image, src_image, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)
	imagecopyresampled($content,$canvas,0,0,0,0,$w,$h,$fileWidth,$fileHeight);
	imagepng($content,$name,100);
	imagedestroy($canvas);
}
function message($msg){
#	imagecreate ( int $width , int $height )
	$canvas = imagecreate(200,100);
#	imagecolorallocate ( resource $image , int $red , int $green , int $blue )
	$black = imagecolorallocate($canvas, 0,0,0);
	$white = imagecolorallocate($canvas, 255,255,255);
	$font = 'fonts/web.ttf';
#	imagefilledrectangle(canvas, size, angle, x, y, color, fontfile, text);
	imagefilledrectangle($canvas, 0,0,250,150,$black);
	#imagefilledrectangle($canvas, 12,0,0,12,$white);
#	imagefttext(canvas, size, angle, x, y, color, fontfile, text)
	imagefttext($canvas,12,0,0,12,$white,$font,$msg);
#	header ( string $string [, bool $replace = true [, int $http_response_code ]] )	
	header('content-Type: images/png');
#	imagepng ( resource $image [, string $filename [, int $quality [, int $filters ]]] )
	imagepng($canvas, 'cap.png');
#	Frees up the resources
	imagedestroy($canvas);
}
function read_a_file($file){
	$data = file_get_contents($file, true);
	$homepage = file_get_contents('URL');
	echo $homepage;
}
function writeFile($file){
	$data = 'Hello World';
#	file_put_contents(filename, data)
	file_put_contents($file, $data);
}
?>