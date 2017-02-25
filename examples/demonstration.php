<?php

    require(__DIR__ . '/../vendor/autoload.php');

    // Calculations based on weight, height and age
    use isfonzar\TDEECalculator\TDEECalculator;

    $tdeeCalculator = new TDEECalculator();

    echo $tdeeCalculator->calculate('male', 80, 182, 24);
    echo "\n";

    // ---------------------------------------------------------
    // It's possible to inject options and change the formula
    $options = [
        'formula' => 'revised_harris_benedict'
    ];

    $tdeeCalculator = new TDEECalculator($options);

    echo $tdeeCalculator->calculate('male', 80, 182, 24);
    echo "\n";

    // ---------------------------------------------------------
    // The unit is parametrizable
    $options = [
        'unit' => 'imperial',
    ];

    $tdeeCalculator = new TDEECalculator($options);

    echo $tdeeCalculator->calculate('male', 176, 6, 24);
    echo "\n";

    // ---------------------------------------------------------
    // Input activity level
    $tdeeCalculator = new TDEECalculator();

    echo $tdeeCalculator->calculate('male', 176, 6, 24, 'very_active');
    echo "\n";

    // ---------------------------------------------------------
    // Calculations based on lean body mass
    use isfonzar\TDEECalculator\LBMCalculator;

    $options = [
        'unit' => 'metric',
    ];

    $lbmCalculator = new LBMCalculator($options);

    echo $lbmCalculator->calculate(80);
    echo "\n";