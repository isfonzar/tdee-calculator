<?php

    namespace isfonzar\TDEECalculator\Models;

    use isfonzar\TDEECalculator\Exceptions\InvalidUnit;

    /**
     * Class Unit
     * Responsability: Represents an unit measure
     *
     * @package isfonzar\TDEECalculator\Models
     */
    class Unit
    {
        const METRIC = 'metric';

        const IMPERIAL = 'imperial';

        /**
         * @var array
         */
        protected $allowedUnits = [self::METRIC, self::IMPERIAL];

        /**
         * @var
         */
        protected $value = self::METRIC;

        /**
         * WeightType constructor.
         *
         * @param $unit
         */
        public function __construct($unit)
        {
            $this->validate($unit);

            $this->value = $unit;
        }

        /**
         * @param $unit
         */
        private function validate($unit)
        {
            if (empty($unit))
            {
                return;
            }

            if (!in_array($unit, $this->allowedUnits))
            {
                throw new InvalidUnit();
            }
        }

        public function __toString()
        {
            return (string)$this->value;
        }
    }