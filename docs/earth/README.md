 # Earth

 > This endpoint retrieves the Landsat 8 image for the supplied location and date. The response will include the date and URL to the image that is closest to the supplied date. The requested resource may not be available for the exact date in the request. You can retrieve a json that contains the inputs you provided and an url to the resulting image through the assets endpoint The assets endpoint no longer returns a list of potential images within your date range due to a change on the google earth engine api side.


| Parameter	 | Type	 | Default	 | Description |
|------------|-------|-----------|-------------|
|lat |	float	|n/a|	Latitude |
|lon	| float | 	n/a |	Longitude |
|dim|	float|	0.025	|width and height of image in degrees|
|date	|YYYY-MM-DD	|today|	date of image; if not supplied, then the most recent image (i.e., closest to today) is returned |

Example Response
```JSON
{
"date":"2014-02-04T03:30:01.210000",
"id":"LANDSAT/LC08/C01/T1_SR/LC08_127059_20140204",
"resource":{
    "dataset":"LANDSAT/LC08/C01/T1_SR",
    "planet":"earth"
},
"service_version":"v5000",
"url":"https://earthengine.googleapis.com/v1alpha/projects/earthengine-legacy/thumbnails/5d0a41ccf1adc724506ac396a5ea390b-8dfeb4645283a1f391879163658c1f58:getPixels"
}

```