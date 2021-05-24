<?php

use App\Test;
use Spatie\FlareClient\Flare;
use Spatie\FlareClient\FlareMiddleware\AddGitInformation;
use Spatie\Ignition\Ignition;

include 'vendor/autoload.php';

Ignition::make()
    ->applicationPath(__DIR__)
    ->configureFlare(function(Flare $flare) {
        $flare
            ->anonymizeIp();
    })
    ->registerMiddleware(AddGitInformation::class)
    ->register();


(new Test)->myPropertyy;

echo 'hello';
