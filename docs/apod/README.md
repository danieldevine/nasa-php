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


---

## Examples

```php

use Coderjerk\NasaPhp\APOD;

$date = date('Y-m-d');
$hd = true;

$apod = new APOD;
$apod->getApod($date, $hd);

echo "<img src='. $apod->url .' alt='.$apod->explanation.'/>";

$apod = new APOD;

$result = $apod->getRandomApod();
d($result);

```

## Tests

```bash
$ phpunit tests/APODTest.php
```
