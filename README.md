# NASA PHP

A PHP Client library for the complete set of [NASA Open APIs.](https://api.nasa.gov)

The project is in very early stages of development, nevertheless the classes with documentation linked below are fully functional and tested.

**Not production ready until v1.0.0 comes out**


## Installation

Install using composer.

```bash
$ composer require coderjerk/nasa-php
```


## Authentication

Sign up for an [API Key here](https://api.nasa.gov/#signUp).
Set up a .env file in your projects root (if you don't already have one).
https://github.com/vlucas/phpdotenv

add the folowing details to your .env

```
NASA_API_KEY='xxxxxyourkeyherexxxxx'
```


## Endpoint Documentation

Details on how to use each endpoint can be found here:

- [APOD](docs/apod/README.md)
- [Asteroid NeoW](docs/neows/README.md)
- [DONKI](docs/donki/README.md)

## Tests
run all tests:
```
$ phpunit
```

## Contribute
All contributions welcome, in whatever format. Create an issue, a pull request or email me at jerk@coderjerk.com with your idea or suggestion. Code of conduct is don't be a jerk.

## License
MIT