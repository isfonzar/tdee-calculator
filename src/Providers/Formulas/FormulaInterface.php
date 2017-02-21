<?php

    namespace isfonzar\TDEECalculator\Providers\Formulas;

    interface FormulaInterface
    {
        public function calculate($gender, $weight, $height, $age);
    }