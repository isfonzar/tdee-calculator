<?php

    namespace isfonzar\TDEECalculator\Providers\Formulas;

    interface TDEEFormulaInterface
    {
        public function calculate($weight, $height, $age, $activityLevel);
    }