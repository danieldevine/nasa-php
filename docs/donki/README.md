## Coronal Mass Ejection (CME)
- startDate: default to 30 days prior to current UTC date
- endDate: default to current UTC date

## Coronal Mass Ejection (CME) Analysis
- startDate: default 30 days prior to current UTC time
- endDate: default to current UTC time
- mostAccurateOnly: default is set to true
- completeEntryOnly: default is set to true
- speed (lower limit): default is set to 0
- halfAngle (lower limit): default is set to 0
- catalog: default is set to ALL (choices: ALL, SWRC_CATALOG, JANG_ET_AL_CATALOG)
- keyword: default is set to NONE (example choices: swpc_annex)

## Geomagnetic Storm (GST)
- startDate: default to 30 days prior to current UTC date
- endDate: default to current UTC date

## Interplanetary Shock (IPS)
- startDate: default to 30 days prior to current UTC date
- endDate: default to current UTC date
- location: default to ALL (choices: Earth, MESSENGER, STEREO A, STEREO B)
- catalog: default to ALL (choices: SWRC_CATALOG, WINSLOW_MESSENGER_ICME_CATALOG)

Example:
https://api.nasa.gov/DONKI/IPS?startDate=yyyy-MM-dd&endDate=yyyy-MM-dd&location=LOCATION&catalog=CATALOG&api_key=DEMO_KEY

## Solar Flare (FLR)
- startDate: default to 30 days prior to current UTC date
- endDate: default to current UTC date

Non functional endpoint

Example:
https://api.nasa.gov/DONKI/FLR?startDate=yyyy-MM-dd&endDate=yyyy-MM-dd&api_key=DEMO_KEY

## Solar Energetic Particle (SEP)
- startDate: default to 30 days prior to current UTC date
- endDate: default to current UTC date

Non functional endpoint


Example:
https://api.nasa.gov/DONKI/SEP?startDate=yyyy-MM-dd&endDate=yyyy-MM-dd&api_key=DEMO_KEY

## Magnetopause Crossing (MPC)
- startDate: default to 30 days prior to current UTC date
- endDate: default to current UTC date

Non functional endpoint


Example:
https://api.nasa.gov/DONKI/MPC?startDate=yyyy-MM-dd&endDate=yyyy-MM-dd&api_key=DEMO_KEY

## Radiation Belt Enhancement (RBE)
- startDate: default to 30 days prior to current UTC date
- endDate: default to current UTC date

Example:
https://api.nasa.gov/DONKI/RBE?startDate=yyyy-MM-dd&endDate=yyyy-MM-dd&api_key=DEMO_KEY

## Hight Speed Stream (HSS)
- startDate: default to 30 days prior to current UTC date
- endDate: default to current UTC date

Example:
https://api.nasa.gov/DONKI/HSS?startDate=yyyy-MM-dd&endDate=yyyy-MM-dd&api_key=DEMO_KEY

## WSA+EnlilSimulation
- startDate: default to 7 days prior to current UTC date
- endDate: default to current UTC date

Example:
https://api.nasa.gov/DONKI/WSAEnlilSimulations?startDate=2011-09-19&endDate=2011-09-20&api_key=DEMO_KEY

## Notifications
parameters:
- 'startDate' and 'endDate' are in format 'yyyy-MM-dd' UT
- 'type' could be: all, FLR, SEP, CME, IPS, MPC, GST, RBE, report

Note:
'startDate' if left out would default to 7 days prior to the current UT date
'endDate' if left out would default to current UT date
'type' if left out would default to 'all'
The request date range is limit to 30 days. If the request range is greater than 30 days, it would limit your request range to (endDate-30) to endDate.

Example:
https://api.nasa.gov/DONKI/notifications?startDate=2014-05-01&endDate=2014-05-08&type=all&api_key=DEMO_KEY