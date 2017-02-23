<?php

    namespace isfonzar\TDEECalculator;

    use isfonzar\TDEECalculator\Models\Gender;
    use isfonzar\TDEECalculator\Models\Options;
    use isfonzar\TDEECalculator\Providers\FormulaProvider;

    class TDEECalculator
    {
        private $formulaProvider;

        public function __construct($options = [], $formula = null)
        {
            $options = new Options($options);

            $this->unit = $options->getUnit();

            $this->formulaProvider = new FormulaProvider($formula);
        }

        /**
         * @param $gender
         * @param $weight
         * @param $height
         * @param $age
         *
         * @return float
         */
        public function calculate($gender, $weight, $height, $age)
        {
            $gender = new Gender($gender);


            return $this->formulaProvider->calculate($gender, $weight, $height, $age);
        }
    }