<?php

    namespace isfonzar\TDEECalculator\Models;

    class Options
    {
        private $unit = 'metric';

        public function __construct($options)
        {
            if (!empty($options['unit']))
            {
                $this->unit = $options['unit'];
            }
        }

        public function getUnit()
        {
            return $this->unit;
        }
    }