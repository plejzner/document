<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Dashboard\AmericanWeatherApiClient;
use Dashboard\Cache;
use Dashboard\CachedWeatherApiClient;
use Dashboard\WeatherApiClient;

$client = new WeatherApiClient();
echo "bare weather api client: \n";
echo $client->getTemperature();
echo "\n\n";

$americanClient = new AmericanWeatherApiClient($client);
echo "american weather api client: \n";
echo $americanClient->getTemperature();
echo "\n\n";

$cachedAmericanClient = new CachedWeatherApiClient($americanClient, new Cache);
echo "cached american weather api client: \n";
echo $cachedAmericanClient->getTemperature();
echo "\n\n";
