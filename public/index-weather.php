<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Application\WeatherApplication;
use Weather\AmericanWeatherApiDecorator;
use Weather\CachedWeatherApiDecorator;
use Weather\WeatherApiClient;

$cachedClient = new CachedWeatherApiDecorator(
    new AmericanWeatherApiDecorator(
        new WeatherApiClient()
    )
);

$app = new WeatherApplication($cachedClient);
$app->showInfo();
