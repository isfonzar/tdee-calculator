<?php

    namespace isfonzar\TDEECalculator\Models\Primitives;

    class Height
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
            return new static($value * 30.48);
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
            return $this->metricValue / 30.48;
        }
    }