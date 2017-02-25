<?php

    namespace isfonzar\TDEECalculator\Providers;

    use isfonzar\TDEECalculator\Exceptions\InvalidFormula;
    use isfonzar\TDEECalculator\Models\Formulas\LBMFormula;
    use isfonzar\TDEECalculator\Providers\Formulas\KathMcArdle;
    use isfonzar\TDEECalculator\Providers\Formulas\LBMFormulaInterface;

    class LBMFormulaProvider
    {
        /**
         * @var LBMFormulaInterface
         */
        protected $formula;

        /**
         * TDEEFormulaProvider constructor.
         *
         * @param $formula
         */
        public function __construct($formula)
        {
            switch ($formula)
            {
                case LBMFormula::KathMcArdle:
                    $this->formula = new KathMcArdle();
                    break;
                default:
                    throw new InvalidFormula();
            }
        }

        public function calculate($leanBodyMass, $activityLevel)
        {
            return $this->formula->calculate($leanBodyMass, $activityLevel);
        }
    }