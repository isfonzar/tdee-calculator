<?php

    namespace isfonzar\TDEECalculator\Models;

    class ImperialToMetric implements ConverterInterface
    {
        public function convertWeight($value)
        {
            return $value;
        }
    }