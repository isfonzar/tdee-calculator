<?php

    namespace isfonzar\TDEECalculator\Models\Formulas;

    use isfonzar\TDEECalculator\Exceptions\InvalidFormula;

    abstract class Formula
    {
        protected $allowedFormulas = [];

        /**
         * TDEEFormula constructor.
         *
         * @param $formula
         */
        public function __construct($formula)
        {
            if (!in_array($formula, $this->allowedFormulas))
            {
                throw new InvalidFormula();
            }

            $this->formula = $formula;
        }

        /**
         * @return mixed
         */
        public function get()
        {
            return $this->formula;
        }
    }