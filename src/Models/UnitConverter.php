<?php

    namespace isfonzar\TDEECalculator\Models;

    use isfonzar\TDEECalculator\Models\Primitives\Height;
    use isfonzar\TDEECalculator\Models\Primitives\Weight;

    /**
     * Class UnitConverter
     *
     * @package isfonzar\TDEECalculator\Models
     */
    class UnitConverter
    {
        /**
         * @var \isfonzar\TDEECalculator\Models\Unit
         */
        protected $unit;

        /**
         * UnitConverter constructor.
         *
         * @param \isfonzar\TDEECalculator\Models\Unit $unit
         */
        public function __construct(Unit $unit)
        {
            $this->unit = $unit;
        }

        /**
         * @param $value
         *
         * @return Weight
         */
        public function getWeight($value)
        {
            switch ($this->unit)
            {
                case Unit::IMPERIAL:
                    return Weight::fromImperial($value);
                    break;
                default:
                case Unit::METRIC:
                    return Weight::fromMetric($value);
                    break;
            }
        }

        /**
         * @param $value
         *
         * @return Height
         */
        public function getHeight($value)
        {
            switch ($this->unit)
            {
                case Unit::IMPERIAL:
                    return Height::fromImperial($value);
                    break;
                default:
                case Unit::METRIC:
                    return Height::fromMetric($value);
                    break;
            }
        }
    }