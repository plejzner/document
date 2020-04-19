<?php

declare(strict_types=1);

namespace Dashboard;

abstract class BaseWeatherApiDecorator implements WeatherApiClientInterface
{
    private WeatherApiClientInterface $weatherApiClient;

    public function __construct(WeatherApiClientInterface $weatherApiClient)
    {
        $this->weatherApiClient = $weatherApiClient;
    }

    public function getTemperature(): float
    {
        return $this->weatherApiClient->getTemperature();
    }
}
