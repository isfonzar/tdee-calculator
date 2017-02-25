<?php

    namespace isfonzar\TDEECalculator\Providers\Formulas;

    class KathMcArdle implements LBMFormulaInterface
    {
        public function calculate($leanBodyMass, $activityLevel)
        {
            $energy = 370;

            $energy += (21.6 * $leanBodyMass);

            return $energy * $activityLevel;
        }
    }