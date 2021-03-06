<?php

    namespace isfonzar\TDEECalculator\Providers\Formulas;

    use isfonzar\TDEECalculator\Exceptions\InvalidGender;
    use isfonzar\TDEECalculator\Models\Primitives\Gender;

    class RevisedHarrisBenedict
    {
        /**
         * @var TDEEFormulaInterface
         */
        public $formula;

        /**
         * OriginalHarrisBenedict constructor.
         *
         * @param $gender
         */
        public function __construct($gender)
        {
            switch ($gender)
            {
                case Gender::MALE:
                    $this->formula = new Male\RevisedHarrisBenedict();
                    break;
                case Gender::FEMALE:
                    $this->formula = new Female\RevisedHarrisBenedict();
                    break;
                default:
                    throw new InvalidGender();
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