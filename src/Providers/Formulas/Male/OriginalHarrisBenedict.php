<?php

    namespace isfonzar\TDEECalculator\Providers\Formulas\Male;

    use isfonzar\TDEECalculator\Providers\Formulas\TDEEFormulaInterface;

    class OriginalHarrisBenedict implements TDEEFormulaInterface
    {
        public function calculate($weight, $height, $age, $activityLevel)
        {
            $energy = 66.4730;

            $energy += 13.7516 * $weight;
            $energy += 5.0033 * $height;
            $energy -= 6.7550 * $age;

            return $energy * $activityLevel;
        }
    }