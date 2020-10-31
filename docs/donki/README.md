# DONKI
Endpoints of The Space Weather Database Of Notifications, Knowledge, Information (DONKI). DONKI chronicles the daily interpretations of space weather observations, analysis, models, forecasts, and notifications provided by the Space Weather Research Center (SWRC).

This API consists of the following component services:


## Coronal Mass Ejection (CME)
| Param | Description |
|-------|-------------|
| startDate | default to 30 days prior to current UTC date |
| endDate | default to current UTC date |

| Methods |  |
|--------|---|
getCoronalMassEjection() |


```php

use Coderjerk\NasaPhp\DONKI\CoronalMassEjection;

$donki = new CoronalMassEjection;
$donki->getCoronalMassEjection($params);

d($donki);

```


## Coronal Mass Ejection (CME) Analysis
| Param | Description |
|-------|-------------|
| startDate | default 30 days prior to current UTC time
| endDate | default to current UTC time
| mostAccurateOnly | default is set to true
| completeEntryOnly | default is set to true
| speed (lower limit) | default is set to 0
| halfAngle (lower limit) | default is set to 0
| catalog | default is set to ALL (choices: ALL, SWRC_CATALOG, JANG_ET_AL_CATALOG)
| keyword | default is set to NONE (example choices: swpc_annex)

| Methods                  |  |
|--------------------------|--|
| getCoronalMassEjectionAnalysis() |  |


```php

use Coderjerk\NasaPhp\DONKI\CoronalMassEjectionAnalysis;

$donki = new CoronalMassEjectionAnalysis;
$donki->getCoronalMassEjectionAnalysis($params);

d($donki);

```


## Geomagnetic Storm (GST)
| Param | Description |
|-------|-------------|
| startDate | default to 30 days prior to current UTC date
| endDate | default to current UTC date


| Methods                          |  |
|----------------------------------|--|
| getGeomagneticStorm() |  |


```php

use Coderjerk\NasaPhp\DONKI\GeomagneticStorm;

$donki = new GeomagneticStorm;
$donki->getGeomagneticStorm($params);

d($donki);

```

## Interplanetary Shock (IPS)
| Param | Description |
|-------|-------------|
| startDate |  default to 30 days prior to current UTC date
| endDate |  default to current UTC date
| location |  default to ALL (choices: Earth, MESSENGER, STEREO A, STEREO B)
| catalog | default to ALL (choices: SWRC_CATALOG, WINSLOW_MESSENGER_ICME_CATALOG)

| Methods               |  |
|-----------------------|--|
| getInterplanetaryShock() |  |

```php

use Coderjerk\NasaPhp\DONKI\InterplanetaryShock;

$donki = new InterplanetaryShock;
$donki->getInterplanetaryShock($params);

d($donki);

```


## Solar Flare (FLR)
| Param | Description |
|-------|-------------|
| startDate | default to 30 days prior to current UTC date
| endDate | default to current UTC date

**Non functional endpoint**

| Methods               |  |
|-----------------------|--|
| getSolarFlare() |  |


```php

use Coderjerk\NasaPhp\DONKI\SolarFlare;

$donki = new SolarFlare;
$donki->getSolarFlare($params);

d($donki);

```


## Solar Energetic Particle (SEP)
| Param | Description |
|-------|-------------|
| startDate | default to 30 days prior to current UTC date
| endDate | default to current UTC date

**Non functional endpoint**

| Methods               |  |
|-----------------------|--|
| getSolarenergeticParticle() |  |


```php

use Coderjerk\NasaPhp\DONKI\SolarenergeticParticle;

$donki = new SolarenergeticParticle;
$donki->getSolarenergeticParticle($params);

d($donki);

```


## Magnetopause Crossing (MPC)

| Param | Description |
|-------|-------------|
| startDate |  default to 30 days prior to current UTC date
| endDate |  default to current UTC date

**Non functional endpoint**

| Methods               |  |
|-----------------------|--|
| getMagnetopauseCrossing() |  |


```php

use Coderjerk\NasaPhp\DONKI\MagnetopauseCrossing;

$donki = new MagnetopauseCrossing;
$donki->getMagnetopauseCrossing($params);

d($donki);

```


## Radiation Belt Enhancement (RBE)
| Param | Description |
|-------|-------------|
| startDate |  default to 30 days prior to current UTC date
| endDate |  default to current UTC date

| Methods                   |  |
|---------------------------|--|
| getRadiationBeltenhancement() |  |


```php

use Coderjerk\NasaPhp\DONKI\RadiationBeltenhancement;

$donki = new RadiationBeltenhancement;
$donki->getRadiationBeltenhancement($params);

d($donki);

```


## Hight Speed Stream (HSS)
| Param | Description |
|-------|-------------|
| startDate |  default to 30 days prior to current UTC date
| endDate |  default to current UTC date

| Methods                   |  |
|---------------------------|--|
| getHightSpeedStream() |  |


```php

use Coderjerk\NasaPhp\DONKI\HightSpeedStream;

$donki = new HightSpeedStream;
$donki->getHightSpeedStream($params);

d($donki);

```


## WSA+EnlilSimulation
| Param | Description |
|-------|-------------|
| startDate |  default to 7 days prior to current UTC date
| endDate |  default to current UTC date

| Methods               |  |
|-----------------------|--|
| getWSAEnlilSimulation() |  |


```php

use Coderjerk\NasaPhp\DONKI\WSAEnlilSimulation;

$donki = new WSAEnlilSimulation;
$donki->getWSAEnlilSimulation($params);

d($donki);

```


## Notifications
| Param | Description |
|-------|-------------|
| startDate |  default to 7 days prior to current UTC date
| endDate |  default to current UTC date
| 'type' |   all, FLR, SEP, CME, IPS, MPC, GST, RBE or report

| Methods               |  |
|-----------------------|--|
| getNotifications() |  |


```php

use Coderjerk\NasaPhp\DONKI\Notifications;

$donki = new Notifications;
$donki->getNotifications($params);

d($donki);

```

