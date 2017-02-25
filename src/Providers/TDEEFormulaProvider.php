<?php

    namespace isfonzar\TDEECalculator\Providers;

    use isfonzar\TDEECalculator\Models\Formulas\TDEEFormula;
    use isfonzar\TDEECalculator\Providers\Formulas\MifflinStJeor;
    use isfonzar\TDEECalculator\Providers\Formulas\OriginalHarrisBenedict;
    use isfonzar\TDEECalculator\Providers\Formulas\RevisedHarrisBenedict;

    /**
     * Class TDEEFormulaProvider
     *
     * @package isfonzar\TDEECalculator\Providers
     */
    class TDEEFormulaProvider
    {
        /**
         * @var \isfonzar\TDEECalculator\Providers\Formulas\RevisedHarrisBenedict
         */
        protected $formula;

        /**
         * TDEEFormulaProvider constructor.
         *
         * @param $formula
         * @param $gender
         */
        public function __construct($formula, $gender)
        {
            switch ($formula)
            {
                case TDEEFormula::OriginalHarrisBenedict:
                    $this->formula = new OriginalHarrisBenedict($gender);
                    break;
                case TDEEFormula::RevisedHarrisBenedict:
                    $this->formula = new RevisedHarrisBenedict($gender);
                    break;
                case TDEEFormula::MifflinStJeor:
                    $this->formula = new MifflinStJeor($gender);
                    break;
            }
        }

        /**
         * @param $weight
         * @param $height
         * @param $age
         * @param $activityLevel
         *
         * @return float
         */
        public function calculate($weight, $height, $age, $activityLevel)
        {
            return $this->formula->calculate($weight, $height, $age, $activityLevel);
        }
    }