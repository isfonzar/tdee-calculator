<?php

    namespace isfonzar\TDEECalculator\Models;

    /**
     * Class Weight
     * Responsability: Represents a weight measure
     *
     * @package isfonzar\TDEECalculator\Models
     */
    class Weight
    {
        protected $value;

        protected $measure;

        protected $converter;

        public function __construct($value, Unit $measure, ConverterInterface $converter)
        {
            $this->value = $value;

            $this->measure = $measure;

            $this->converter= $converter;
        }

        public function get()
        {
            return $this->converter->convertWeight($this->value);
        }
    }