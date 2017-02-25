<?php

    namespace isfonzar\TDEECalculator\Providers\Formulas\Female;

    use isfonzar\TDEECalculator\Providers\Formulas\TDEEFormulaInterface;

    class RevisedHarrisBenedict implements TDEEFormulaInterface
    {
        public function calculate($weight, $height, $age, $activityLevel)
        {
            $energy = 447.593;

            $energy += 9.247 * $weight;
            $energy += 3.098 * $height;
            $energy -= 4.330 * $age;

            return $energy * $activityLevel;
        }
    }