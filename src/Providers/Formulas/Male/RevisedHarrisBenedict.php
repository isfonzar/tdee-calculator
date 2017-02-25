<?php

    namespace isfonzar\TDEECalculator\Providers\Formulas\Male;

    use isfonzar\TDEECalculator\Providers\Formulas\TDEEFormulaInterface;

    class RevisedHarrisBenedict implements TDEEFormulaInterface
    {
        public function calculate($weight, $height, $age, $activityLevel)
        {
            $energy = 88.362;

            $energy += 13.397 * $weight;
            $energy += 4.799 * $height;
            $energy -= 5.677 * $age;

            return $energy * $activityLevel;
        }
    }