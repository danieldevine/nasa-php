# APOD -  Astronomy Picture of the Day API

- [APOD -  Astronomy Picture of the Day API](#apod---astronomy-picture-of-the-day-api)
  - [Parameters](#parameters)
  - [Methods](#methods)
  - [Examples](#examples)
  - [Tests](#tests)

This endpoint structures the APOD imagery and associated metadata so that it can be repurposed for other applications.

HTTP Request GET https://api.nasa.gov/planetary/apod

-----

## Parameters

| Parameter| Type        | Default | Description |
|----------|-------------|---------|-------------|
| date     | YYY-MM-DD   | today   |  The date of the APOD image to retrieve                 |
| hd |   bool    |   false   | Retrieve the URL for the high resolution image|
| api_key | string |    DEMO_KEY   | api.nasa.gov key for expanded usage|

-------

## Methods

| Method    | Description
|-----------|-------|
| getApod($date, $hd) | Gets picture of the day for specified day.
| getRandomApod() | Gets picture of the day for a random date between 01/01/2015 and now.
|getApodMedia($apod) | Echoes the picture or video of the day as either an img element or an iframe


---


## Examples

```php

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

```

## Tests

```bash
$ phpunit tests/APODTest.php
```
