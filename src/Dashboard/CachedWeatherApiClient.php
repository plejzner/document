<?php

declare(strict_types=1);

namespace Dashboard;

class CachedWeatherApiClient implements WeatherApiClientInterface
{
    private WeatherApiClientInterface $weatherApiClient;
    private Cache $cache;

    public function __construct(WeatherApiClientInterface $weatherApiClient, Cache $cache)
    {
        $this->weatherApiClient = $weatherApiClient;
        $this->cache = $cache;
    }

    public function getTemperature(): float
    {
        if ($this->cache->has('temperature') === true) {
            return $this->cache->get('temperature');
        }

        $temp = $this->weatherApiClient->getTemperature();
        $this->cache->update('temperature', $temp, 15);
        return $temp;
    }
}
