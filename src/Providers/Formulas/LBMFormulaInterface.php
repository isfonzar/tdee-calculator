<?php

    namespace isfonzar\TDEECalculator\Providers\Formulas;

    interface LBMFormulaInterface
    {
        public function calculate($leanBodyMass, $activityLevel);
    }