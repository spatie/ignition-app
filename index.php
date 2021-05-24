<?php

use App\Test;
use Spatie\FlareClient\Flare;
use Spatie\Ignition\Ignition;

include 'vendor/autoload.php';

Ignition::make()
    ->applicationPath(__DIR__)
    ->configureFlare(function(Flare $flare) {
        $flare->anonymizeIp();
    })
    ->register();

(new Test)->myPropertyy;

echo 'hello';
