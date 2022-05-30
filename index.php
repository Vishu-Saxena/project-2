<?php
header('content-type:image/png');
$image=imagecreatefromjpeg("1,2.png");
$color=imagecolorallocate($image,19,21,22);
$name="Vishal Gupta";
imagettftext($image,30,0,500,470,$color,"AGENCYR.TTF",$name);
$date="6th may 2020";
imagettftext($image,20,0,450,595,$color,"AGENCYR.TTF",$date);
imagepng($image);
imagedestroy($image);
?>
