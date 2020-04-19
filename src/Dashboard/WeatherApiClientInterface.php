<?php

namespace Dashboard;

interface WeatherApiClientInterface
{
    public function getTemperature(): float;
}
