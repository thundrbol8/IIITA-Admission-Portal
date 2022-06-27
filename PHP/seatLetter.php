<?php
session_start();

header('content-type:image/jpeg');
$font="arial.ttf";
$image=imagecreatefromjpeg("Image1.jpg");
$color=imagecolorallocate($image,19,21,22);
$date=date('d F, Y');
$name="Ankush Sonker";
$ID="123456789";
imagettftext($image,40,0,450,950,$color,$font,$date);
imagettftext($image,40,0,1920,945,$color,$font,"21/".$ID);
imagettftext($image,40,0,440,1072,$color,$font,$name);
imagettftext($image,40,0,750,1525,$color,$font,$name);
imagettftext($image,40,0,750,1650,$color,$font,$ID);
imagettftext($image,40,0,750,1770,$color,$font,);
imagejpeg($image);
imagedestroy($image);

?>