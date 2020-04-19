<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Application\Application;
use Dashboard\AmericanWeatherApiClient;
use Dashboard\CachedWeatherApiClient;
use Dashboard\WeatherApiClient;

$cachedClient = new CachedWeatherApiClient(
                    new AmericanWeatherApiClient(
                        new WeatherApiClient()
                    )
                );

$app = new Application($cachedClient);
$app->showInfo();
