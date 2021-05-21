<?php

use Spatie\Ignition\Ignition;

include 'vendor/autoload.php';

Ignition::make()
    ->anonymizeIp()
    ->register();

echo 'hello';
