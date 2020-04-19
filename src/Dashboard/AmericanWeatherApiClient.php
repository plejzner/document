<?php

declare(strict_types=1);

namespace Dashboard;

class AmericanWeatherApiClient implements WeatherApiClientInterface
{
    private const CELSIUS_TO_FAHRENHEIT_MULTIPLIER = 9/5;
    private const CELSIUS_TO_FAHRENHEIT_ADDER = 32;

    private WeatherApiClientInterface $weatherApiClient;

    public function __construct(WeatherApiClientInterface $weatherApiClient)
    {
        $this->weatherApiClient = $weatherApiClient;
    }

    public function getTemperature(): float
    {
        return $this->weatherApiClient->getTemperature()
               * self::CELSIUS_TO_FAHRENHEIT_MULTIPLIER
               + self::CELSIUS_TO_FAHRENHEIT_ADDER;
    }
}
