<?php

    namespace isfonzar\TDEECalculator\Primitives\Constraint;

    interface ConstraintInterface
    {
        public function validate($value);
    }