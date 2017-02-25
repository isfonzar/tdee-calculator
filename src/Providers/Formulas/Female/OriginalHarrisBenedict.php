<?php

    namespace isfonzar\TDEECalculator\Providers\Formulas\Female;

    use isfonzar\TDEECalculator\Providers\Formulas\TDEEFormulaInterface;

    class OriginalHarrisBenedict implements TDEEFormulaInterface
    {
        public function calculate($weight, $height, $age, $activityLevel)
        {
            $energy = 655.0955;

            $energy += 9.5634 * $weight;
            $energy += 1.8496 * $height;
            $energy -= 4.6756 * $age;

            return $energy * $activityLevel;
        }
    }