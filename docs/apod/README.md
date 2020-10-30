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

| Method    |    Args     | Returns |
|-----------|-------------|---------|
| getApod() | $date, $hd  | 'copyright' String, 'date' String YYYY-MM-DD, 'explanation' String, 'hdurl' String, 'media type' String,'service version' String,'title' String, 'url' String |

---

## Examples

```php

use Coderjerk\NasaPhp\APOD;

$date = date('Y-m-d');
$hd = true;

$apod = new APOD;
$apod->getApod($date, $hd);

echo "<img src='. $apod->url .' alt='.$apod->explanation.'/>";

```

## Tests

```bash
$ phpunit tests/APODTest.php
```
