<?php

    namespace isfonzar\TDEECalculator\Providers\Formulas;

    use isfonzar\TDEECalculator\Models\Age;
    use isfonzar\TDEECalculator\Models\Gender;
    use isfonzar\TDEECalculator\Models\Height;
    use isfonzar\TDEECalculator\Models\Weight;

    interface FormulaInterface
    {
        public function calculate(Gender $gender, Weight $weight, Height $height, Age $age);
    }