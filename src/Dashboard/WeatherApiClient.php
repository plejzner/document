<?php

declare(strict_types=1);

namespace Dashboard;

class WeatherApiClient implements WeatherApiClientInterface
{
    public function getTemperature(): float
    {
        return 20.5;
    }
}
