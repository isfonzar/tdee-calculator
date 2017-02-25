<?php

    namespace isfonzar\TDEECalculator\Models\Primitives;

    /**
     * Class Weight
     *
     * @package isfonzar\TDEECalculator\Models\Primitives
     */
    class Weight
    {
        /**
         * @var
         */
        protected $metricValue;

        /**
         * Weight constructor.
         *
         * @param $metricValue
         */
        private function __construct($metricValue)
        {
            $this->metricValue = $metricValue;
        }

        /**
         * @param $value
         *
         * @return static
         */
        public static function fromMetric($value)
        {
            return new static($value);
        }

        /**
         * @param $value
         *
         * @return static
         */
        public static function fromImperial($value)
        {
            return new static($value * 0.45359237);
        }

        /**
         * @return mixed
         */
        public function inMetric()
        {
            return $this->metricValue;
        }

        /**
         * @return float
         */
        public function inImperial()
        {
            return $this->metricValue / 0.45359237;
        }
    }