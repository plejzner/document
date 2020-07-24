<?php

declare(strict_types=1);

namespace Weather;

class CachedWeatherApiDecorator extends BaseWeatherApiDecorator
{
    private Cache $cache;

    public function __construct(WeatherApiClientInterface $weatherApiClient)
    {
        parent::__construct($weatherApiClient);
        $this->cache = new Cache();
    }

    public function getTemperature(): float
    {
        if ($this->cache->has('temperature') === true) {
            return $this->cache->get('temperature');
        }

        $temp = parent::getTemperature();
        $this->cache->update('temperature', $temp, 15);
        return $temp;
    }
}
