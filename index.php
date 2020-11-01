<?php

require_once('bootstrap.php');

use Coderjerk\NasaPhp\APOD;

$date = date('Y-m-d', strtotime('-1 days'));
$hd = true;

$apod = new APOD;
$pic = $apod->getApod('2019-12-09', $hd);

if ($pic->media_type == 'image') {
    echo "<img src='" . $pic->url . "' title='" . $pic->title . "' alt='NASA Astronomy picture of the day:" . $pic->title . " '/>";
} else {
    echo "<iframe src='" . $pic->url . "' width='740px' height='400px'></iframe>";
}
echo "<h3>Astronomy picture of the day" . $pic->date . $pic->title . "</h3>";
echo "<p>" . $pic->explanation . "</p>";
echo property_exists($pic, 'copyright') ?  '<p>&copy;' . $pic->copyright . '</p>' : '';

$apod = new APOD;
$pic = $apod->getRandomApod();

//2019-12-09 - non image
if ($pic->media_type == 'image') {
    echo "<img src='" . $pic->url . "' title='" . $pic->title . "' alt='NASA Astronomy picture of the day:" . $pic->title . " '/>";
} else {
    echo "<iframe src='" . $pic->url . "' width='740px' height='400px'></iframe>";
}
echo "<h3>Astronomy picture of the day" . $pic->date . $pic->title . "</h3>";
echo "<p>" . $pic->explanation . "</p>";
echo property_exists($pic, 'copyright') ?  '<p>&copy;' . $pic->copyright . '</p>' : '';