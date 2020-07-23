<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Application\Application;
use Dashboard\AmericanWeatherApiDecorator;
use Dashboard\CachedWeatherApiDecorator;
use Dashboard\WeatherApiClient;

$cachedClient = new CachedWeatherApiDecorator(
    new AmericanWeatherApiDecorator(
        new WeatherApiClient()
    )
);

$app = new Application($cachedClient);
$app->showInfo();
