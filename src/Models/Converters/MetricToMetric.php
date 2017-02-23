<?php

    namespace isfonzar\TDEECalculator\Models;

    class MetricToMetric implements ConverterInterface
    {
        public function convertWeight($value)
        {
            return $value;
        }
    }