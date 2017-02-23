<?php

    namespace isfonzar\TDEECalculator\Providers;

    use isfonzar\TDEECalculator\Models\Gender;
    use isfonzar\TDEECalculator\Providers\Formulas\OriginalHarrisBenedictEquation;

    class FormulaProvider
    {
        protected $formula;

        /**
         * FormulaProvider constructor.
         *
         * @param null $formula
         */
        public function __construct($formula = null)
        {
            switch ($formula)
            {
                case 'OriginalHarrisBenedict':
                    $this->formula = new OriginalHarrisBenedictEquation();
                    break;
                default:
                    $this->formula = new OriginalHarrisBenedictEquation();
                    break;
            }
        }

        /**
         * @param \isfonzar\TDEECalculator\Models\Gender $gender
         * @param                                        $weight
         * @param                                        $height
         * @param                                        $age
         *
         * @return float
         */
        public function calculate(Gender $gender, $weight, $height, $age)
        {
            return $this->formula->calculate($gender, $weight, $height, $age);
        }
    }