<?php

use App\Test;
use Spatie\Ignition\Ignition;

include 'vendor/autoload.php';

Ignition::make()
    ->applicationPath(__DIR__)
    ->register();

(new Test)->myPropertyy;

echo 'hello';
