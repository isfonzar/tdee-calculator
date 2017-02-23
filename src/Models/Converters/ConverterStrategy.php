<?php

    namespace isfonzar\TDEECalculator\Models;

    use isfonzar\TDEECalculator\Exceptions\InvalidUnit;

    class ConverterStrategy
    {
        public function __construct(Unit $unit)
        {
            switch ($unit)
            {
                case Unit::METRIC:
                    return new MetricToMetric();
                    break;
                case Unit::IMPERIAL:
                    return new ImperialToMetric();
                    break;
            }

            throw new InvalidUnit();
        }
    }