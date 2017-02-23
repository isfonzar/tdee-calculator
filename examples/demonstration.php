<?php

    require(__DIR__ . '/../vendor/autoload.php');

    use isfonzar\TDEECalculator\TDEECalculator;

    $tdeeCalculator = new TDEECalculator();

    echo $tdeeCalculator->calculate('male', 1.80, 90, 24);