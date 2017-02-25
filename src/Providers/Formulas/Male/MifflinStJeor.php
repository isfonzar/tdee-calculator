<?php

    namespace isfonzar\TDEECalculator\Providers\Formulas\Male;

    use isfonzar\TDEECalculator\Providers\Formulas\TDEEFormulaInterface;

    class MifflinStJeor implements TDEEFormulaInterface
    {
        public function calculate($weight, $height, $age, $activityLevel)
        {
            $energy = 5;

            $energy += 10 * $weight;
            $energy += 6.25 * $height;
            $energy -= 5 * $age;

            return $energy * $activityLevel;
        }
    }