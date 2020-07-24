<?php

declare(strict_types=1);

namespace Weather;

class Cache
{
    public function has(string $key): bool
    {
        return false;
//        return $key === 'temperature';
    }

    public function get(string $key)
    {
        return 30;
    }

    public function update(string $key, $value, $validPeriod)
    {

    }
}
