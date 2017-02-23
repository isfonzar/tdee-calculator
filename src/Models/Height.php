<?php

    namespace isfonzar\TDEECalculator\Models;

    class Height
    {
        protected $value;

        protected $measure;

        public function __construct($value, WeightMeasure $measure)
        {
            $this->value = $value;

            $this->measure = $measure;
        }
    }