<?php

declare(strict_types=1);

use Encoder\CustomStrategy;
use Encoder\Encoder;
use Encoder\SerpentStrategy;
use Encoder\TwofishStrategy;

require 'vendor/autoload.php';

$e = new Encoder(new SerpentStrategy());
echo $e->encode('secret text', 'pass01');
echo "\n\n";

$e = new Encoder(new SerpentStrategy(new TwofishStrategy(new CustomStrategy())));
echo $e->encode('secret text', 'pass01');
echo "\n\n";

$e = new Encoder(new CustomStrategy(new TwofishStrategy(new CustomStrategy())));
echo $e->encode('secret text', 'pass01');
echo "\n\n";