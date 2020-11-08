<?php

require_once('bootstrap.php');

use Coderjerk\NasaPhp\APOD;

$date = date('Y-m-d', strtotime('-1 days'));
$hd = true;
$apod = new APOD;
$pic = $apod->getApod('2019-12-09', $hd);

$apod->getApodMedia($pic);
echo "<h3>Astronomy picture of the day" . $pic->date . $pic->title . "</h3>";
echo "<p>" . $pic->explanation . "</p>";
echo property_exists($pic, 'copyright') ?  '<p>&copy;' . $pic->copyright . '</p>' : '';

$apod = new APOD;
$pic = $apod->getRandomApod();

$apod->getApodMedia($pic);
echo "<h3>Astronomy picture of the day" . $pic->date . $pic->title . "</h3>";
echo "<p>" . $pic->explanation . "</p>";
echo property_exists($pic, 'copyright') ?  '<p>&copy;' . $pic->copyright . '</p>' : '';