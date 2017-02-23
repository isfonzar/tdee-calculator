<?php

    namespace isfonzar\TDEECalculator\Providers\Formulas;

    use isfonzar\TDEECalculator\Models\Gender;

    interface FormulaInterface
    {
        public function calculate(Gender $gender, $weight, $height, $age);
    }