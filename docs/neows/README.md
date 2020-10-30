# Asteroids - NeoWs

- [Asteroids - NeoWs](#asteroids---neows)
  - [Methods](#methods)
  - [Examples](#examples)
  - [Tests](#tests)

NeoWs (Near Earth Object Web Service) is a RESTful web service for near earth Asteroid information. With NeoWs a user can: search for Asteroids based on their closest approach date to Earth, lookup a specific Asteroid with its NASA JPL small body id, as well as browse the overall data-set.

-----

## Methods

|Method | Params | Returns |
|-------|--------|---------|
getAsteroidFeed(); | $start_date, $end_date | ? |
getAsteroid();| $asteroid_id | ?|
getPotentiallyHazardousAsteroids() | $start_date, $end_date | ? |

-----

## Examples

```php

use Coderjerk\NasaPhp\NeoW;

$neow = new NeoW;

$start_date = date('Y-m-d', strtotime('-7 days'));

$result = $neow->getAsteroidFeed($start_date, $date);
d($result);

$result = $neow->getPotentiallyHazardousAsteroids($start_date, $date);
d($result);

$single = $neow->getAsteroidById('54075541');
d($single);

```

## Tests

```bash
$ phpunit tests/NeoWTest.php
```