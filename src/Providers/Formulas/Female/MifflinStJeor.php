<?php

    namespace isfonzar\TDEECalculator\Providers\Formulas\Female;

    use isfonzar\TDEECalculator\Providers\Formulas\TDEEFormulaInterface;

    class MifflinStJeor implements TDEEFormulaInterface
    {
        public function calculate($weight, $height, $age, $activityLevel)
        {
            $energy = -161;

            $energy += 10 * $weight;
            $energy += 6.25 * $height;
            $energy -= 5 * $age;

            return $energy * $activityLevel;
        }
    }