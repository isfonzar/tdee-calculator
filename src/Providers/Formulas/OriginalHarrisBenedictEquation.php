<?php

    namespace isfonzar\TDEECalculator\Providers\Formulas;
    use isfonzar\TDEECalculator\Exceptions\InvalidGender;
    use isfonzar\TDEECalculator\Models\Age;
    use isfonzar\TDEECalculator\Models\Gender;
    use isfonzar\TDEECalculator\Models\Height;
    use isfonzar\TDEECalculator\Models\Weight;

    /**
     * Class OriginalHarrisBenedictEquation
     * Responsability: Calculate the BMR using the Original Harris Benedic Equation
     *
     * @package isfonzar\TDEECalculator\Providers\Formulas
     */
    class OriginalHarrisBenedictEquation implements FormulaInterface
    {
        public function calculate(Gender $gender, Weight $weight, Height $height, Age $age)
        {
            switch ($gender)
            {
                case Gender::MALE:
                    return $this->calculateForMen($weight, $height, $age);
                    break;
                case Gender::FEMALE:
                    return $this->calculateForWomen($weight, $height, $age);
                    break;
            }

            throw new InvalidGender();
        }

        private function calculateForMen(Weight $weight, Height $height, Age $age)
        {
            $totalHeatProdution = 66.5;

            $totalHeatProdution += (13.75 * $weight);

            $totalHeatProdution += (5.0033 * $height);

            $totalHeatProdution -= (6.755 * $age);

            return $totalHeatProdution;
        }

        private function calculateForWomen(Weight $weight, Height $height, Age $age)
        {

        }
    }