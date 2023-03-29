<?php 

header("content-type: image/png");

$s = 500;
$img = imagecreatetruecolor($s, $s);

for ($i = 0; $i <= 100; $i++) { 
    $points = array(
        rand(0, $s), rand(0, $s),
        rand(0, $s), rand(0, $s),
        rand(0, $s), rand(0, $s),
        rand(0, $s), rand(0, $s),
        rand(0, $s), rand(0, $s),
        rand(0, $s), rand(0, $s),
        rand(0, $s), rand(0, $s),
        rand(0, $s), rand(0, $s),
        rand(0, $s), rand(0, $s),
        rand(0, $s), rand(0, $s)
    );

    // random color
    $color = imagecolorallocate($img, rand(50, 255), rand(50, 255), rand(50, 255));

    imagefilledpolygon($img, $points, rand(3, 10), $color);
}

imagepng($img);
imagedestroy($img);
?>