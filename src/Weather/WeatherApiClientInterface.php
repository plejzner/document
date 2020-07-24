<?php

namespace Weather;

interface WeatherApiClientInterface
{
    public function getTemperature(): float;
}
