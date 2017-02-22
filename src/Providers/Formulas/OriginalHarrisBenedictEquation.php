<?php

    namespace isfonzar\TDEECalculator\Providers\Formulas;

    use isfonzar\TDEECalculator\Exceptions\InvalidGender;
    use isfonzar\TDEECalculator\Primitives\Gender;

    /**
     * Class OriginalHarrisBenedictEquation
     * Responsability: Calculate the BMR using the Original Harris Benedic Equation
     *
     * @package isfonzar\TDEECalculator\Providers\Formulas
     */
    class OriginalHarrisBenedictEquation implements FormulaInterface
    {
        public function calculate($gender, $weight, $height, $age)
        {
            if ($gender == Gender::MALE)
            {
                return $this->calculateForMen($weight, $height, $age);
            }

            if ($gender == Gender::FEMALE)
            {
                return $this->calculateForWomen($weight, $height, $age);
            }

            throw new InvalidGender();
        }

        private function calculateForMen($weight, $height, $age)
        {
            $totalHeatProdution = 15.7516 * $weight / 1;

            $totalHeatProdution += 5.0033 * $height / 1;

            $totalHeatProdution -= 6.7550 * $age / 1;

            $totalHeatProdution += 66.4730;

            return $totalHeatProdution;
        }

        private function calculateForWomen($weight, $height, $age)
        {

        }
    }