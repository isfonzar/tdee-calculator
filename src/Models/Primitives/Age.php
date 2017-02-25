<?php

    namespace isfonzar\TDEECalculator\Models\Primitives;

    use isfonzar\TDEECalculator\Exceptions\InvalidAge;

    /**
     * Class Age
     *
     * @package isfonzar\TDEECalculator\Models\Primitives
     */
    class Age
    {
        /**
         * @var
         */
        private $value;

        /**
         * Age constructor.
         *
         * @param $value
         */
        public function __construct($value)
        {
            if (!filter_var($value, FILTER_VALIDATE_INT))
            {
                throw new InvalidAge();
            }

            if ($value < 0 || $value > 99)
            {
                throw new InvalidAge();
            }

            $this->value = $value;
        }

        /**
         * @return int
         */
        public function get()
        {
            return (int)$this->value;
        }
    }