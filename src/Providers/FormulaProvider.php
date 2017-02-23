<?php

    namespace isfonzar\TDEECalculator\Providers;

    use isfonzar\TDEECalculator\Exceptions\InvalidFormula;
    use isfonzar\TDEECalculator\Models\Gender;
    use isfonzar\TDEECalculator\Models\Weight;
    use isfonzar\TDEECalculator\Providers\Formulas\OriginalHarrisBenedictEquation;

    class FormulaProvider
    {
        protected $formula = 'OriginalHarrisBenedict';

        private $allowedFormulas = ['OriginalHarrisBenedict'];

        public function __construct($formula = null)
        {
            $this->validate($formula);

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
        public function calculate(Gender $gender, Weight $weight, $height, $age)
        {
            return $this->formula->calculate($gender, $weight, $height, $age);
        }

        private function validate($formula)
        {
            if (empty($formula))
            {
                return;
            }

            if (!in_array($formula, $this->allowedFormulas))
            {
                throw new InvalidFormula();
            }
        }
    }