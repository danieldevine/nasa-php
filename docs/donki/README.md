# DONKI
Endpoints of The Space Weather Database Of Notifications, Knowledge, Information (DONKI). DONKI chronicles the daily interpretations of space weather observations, analysis, models, forecasts, and notifications provided by the Space Weather Research Center (SWRC).

This API consists of the following component services:

## Coronal Mass Ejection (CME)
| Param | Description |
|-------|-------------|
| startDate | default to 30 days prior to current UTC date |
| endDate | default to current UTC date |

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

## Geomagnetic Storm (GST)
| Param | Description |
|-------|-------------|
| startDate | default to 30 days prior to current UTC date
| endDate | default to current UTC date


## Interplanetary Shock (IPS)
| Param | Description |
|-------|-------------|
| startDate |  default to 30 days prior to current UTC date
| endDate |  default to current UTC date
| location |  default to ALL (choices: Earth, MESSENGER, STEREO A, STEREO B)
| catalog | default to ALL (choices: SWRC_CATALOG, WINSLOW_MESSENGER_ICME_CATALOG)



## Solar Flare (FLR)

| Param | Description |
|-------|-------------|
| startDate | default to 30 days prior to current UTC date
| endDate | default to current UTC date

**Non functional endpoint**


## Solar Energetic Particle (SEP)
| Param | Description |
|-------|-------------|
| startDate | default to 30 days prior to current UTC date
| endDate | default to current UTC date

**Non functional endpoint**


| Param | Description |
|-------|-------------|
| startDate |  default to 30 days prior to current UTC date
| endDate |  default to current UTC date

**Non functional endpoint**


## Radiation Belt Enhancement (RBE)
| Param | Description |
|-------|-------------|
| startDate |  default to 30 days prior to current UTC date
| endDate |  default to current UTC date


## Hight Speed Stream (HSS)
| Param | Description |
|-------|-------------|
| startDate |  default to 30 days prior to current UTC date
| endDate |  default to current UTC date


## WSA+EnlilSimulation
| Param | Description |
|-------|-------------|
| startDate |  default to 7 days prior to current UTC date
| endDate |  default to current UTC date


## Notifications
| Param | Description |
|-------|-------------|
| startDate |  default to 7 days prior to current UTC date
| endDate |  default to current UTC date
| 'type' |   all, FLR, SEP, CME, IPS, MPC, GST, RBE or report

