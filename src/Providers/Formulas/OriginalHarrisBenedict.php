<?php

    namespace isfonzar\TDEECalculator\Providers\Formulas;

    use isfonzar\TDEECalculator\Exceptions\InvalidGender;
    use isfonzar\TDEECalculator\Models\Primitives\Gender;

    /**
     * Class OriginalHarrisBenedict
     *
     * @package isfonzar\TDEECalculator\Providers\Formulas
     */
    class OriginalHarrisBenedict
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
                    $this->formula = new Male\OriginalHarrisBenedict();
                    break;
                case Gender::FEMALE:
                    $this->formula = new Female\OriginalHarrisBenedict();
                    break;
                default:
                    throw new InvalidGender();
            }
        }


        public function calculate($weight, $height, $age, $activityLevel)
        {
            return $this->formula->calculate($weight, $height, $age, $activityLevel);
        }
    }