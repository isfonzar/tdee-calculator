<?php

    namespace isfonzar\TDEECalculator;

    use isfonzar\TDEECalculator\Models\Gender;
    use isfonzar\TDEECalculator\Providers\FormulaProvider;

    class TDEECalculator
    {
        /**
         * @var \isfonzar\TDEECalculator\Providers\FormulaProvider
         */
        private $formulaProvider;

        /**
         * TDEECalculator constructor.
         *
         * @param null $formula
         */
        public function __construct($formula = null)
        {
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
            return $this->formulaProvider->calculate(new Gender($gender), $weight, $height, $age);
        }
    }