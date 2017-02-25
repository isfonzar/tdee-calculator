<?php

    namespace isfonzar\TDEECalculator\Models\Options;

    abstract class Options
    {
        protected $unit = 'metric';

        public function __construct($options)
        {
            if (!empty($options['unit']))
            {
                $this->unit = $options['unit'];
            }

            if (!empty($options['formula']))
            {
                $this->formula = $options['formula'];
            }
        }

        public function getUnit()
        {
            return $this->unit;
        }

        public function getFormula()
        {
            return $this->formula;
        }
    }