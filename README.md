<p align="center"><img src="https://rawcdn.githack.com/isfonzar/tdee-calculator/master/logo.png"></p>

<p align="center">
<a href="https://packagist.org/packages/isfonzar/tdee-calculator"><img src="https://img.shields.io/badge/Language-PHP-brightgreen.svg" alt="Language"></a>
<a href="https://packagist.org/packages/isfonzar/tdee-calculator"><img src="https://img.shields.io/badge/License-MIT-blue.svg" alt="License"></a>
<a href="https://packagist.org/packages/isfonzar/tdee-calculator"><img src="https://img.shields.io/badge/Version-1.01-brightgreen.svg" alt="Latest Stable Version"></a>
</p>

## About TDEE Calculator
TDEE Calculator is a composer library that calculates how much energy (calories) are burned daily given the weight, height and age or Lean Body Mass.

## Features

- 4 different selectable formulas for calculation
- Possibility to input either weight, height and age **or** lean body mass
- Parametrizable input in metric or imperial system.
- EASY to incorporate on your projects
- STUPIDLY [EASY TO USE](https://github.com/isfonzar/tdee-calculator#usage)

## Installation

### Composer

```bash
$ composer require isfonzar/tdee-calculator
```

## Usage

### Basic usage

```php
<?php

require(__DIR__ . '/vendor/autoload.php');

// Calculations based on weight, height and age
use isfonzar\TDEECalculator\TDEECalculator;

$tdeeCalculator = new TDEECalculator();

echo $tdeeCalculator->calculate('male', 80, 182, 24);
echo "\n";

// ---------------------------------------------------------
// The unit is parametrizable
$options = [
    'formula' => 'revised_harris_benedict' // You can select the best formula for your needs
    'unit' => 'imperial', // Choose the desired measurement unit
];

$tdeeCalculator = new TDEECalculator($options);

echo $tdeeCalculator->calculate('male', 176, 6, 24);
echo "\n";

// Input activity level
echo $tdeeCalculator->calculate('male', 176, 6, 24, 'very_active');
echo "\n";

 // Calculations based on lean body mass
use isfonzar\TDEECalculator\LBMCalculator;

$options = [
    'unit' => 'metric',
];

$lbmCalculator = new LBMCalculator($options);
echo $lbmCalculator->calculate(80);
echo "\n";
```
#### Formulas
#### Based on weight, height and age
- Original Harris Benedict (_'formula' => 'original_harris_benedict'_)
- Revised Harris Benedict (_'formula' => 'revised_harris_benedict'_)
- Mifflin St Jeor (_'formula' => 'mifflin_st_jeor'_)

#### Based on Lean Body Mass (LBM)
- Kath McArdle (_'formula' => 'kath_mcardle'_)

#### Units
- Metric (_'unit' => 'metric'_)
- Imperial (_'unit' => 'imperial'_)

## Contributing

### Bug Reports & Feature Requests

Please use the [issue tracker](https://github.com/isfonzar/tdee-calculator/issues) to report any bugs or feature requests.

## Social Coding

1. Create an issue to discuss about your idea
2. [Fork it] (https://github.com/isfonzar/tdee-calculator/fork)
3. Create your feature branch (`git checkout -b my-new-feature`)
4. Commit your changes (`git commit -am 'Add some feature'`)
5. Push to the branch (`git push origin my-new-feature`)
6. Create a new Pull Request
7. Profit! :white_check_mark:
