<?php

    namespace isfonzar\TDEECalculator;

    use isfonzar\TDEECalculator\Providers\FormulaProvider;

    class TDEECalculator
    {
        private $formulaProvider;

        public function __construct($formula = null)
        {
            $this->formulaProvider = new FormulaProvider($formula);
        }

        public function calculate()
        {
            return 'ok';
        }
    }