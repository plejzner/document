<?php

declare(strict_types=1);

namespace Dashboard;

class AmericanWeatherApiDecorator extends BaseWeatherApiDecorator
{
    private const CELSIUS_TO_FAHRENHEIT_MULTIPLIER = 9/5;
    private const CELSIUS_TO_FAHRENHEIT_ADDER = 32;

    public function getTemperature(): float
    {
        return parent::getTemperature()
               * self::CELSIUS_TO_FAHRENHEIT_MULTIPLIER
               + self::CELSIUS_TO_FAHRENHEIT_ADDER;
    }
}