<?php

    namespace isfonzar\TDEECalculator\Models\Formulas;

    class LBMFormula extends Formula
    {
        const KathMcArdle = 'kath_mcardle';

        /**
         * @var array
         */
        protected $allowedFormulas = [
            self::KathMcArdle
        ];

        /**
         * @var
         */
        protected $formula = self::KathMcArdle;
    }