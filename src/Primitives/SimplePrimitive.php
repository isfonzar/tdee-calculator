<?php

    namespace isfonzar\TDEECalculator\Primitives;

    use isfonzar\TDEECalculator\Primitives\Constraint\ConstraintInterface;

    /**
     * Class DataModel
     *
     * @package isfonzar\TDEECalculator\Primitives
     */
    abstract class SimplePrimitive implements SinglePrimitiveInterface
    {
        /**
         * @var null
         */
        protected $value;

        /**
         * @var array
         */
        protected $constraints;

        /**
         * DataModel constructor.
         *
         * @param null  $value
         * @param array $constraints
         */
        public function __construct($value = null, $constraints = [])
        {
            foreach ($constraints as $constraint)
            {
                $this->addConstraint($constraint);
            }

            if (!empty($value))
            {
                $this->value = $value;
            }
        }

        /**
         * @param $value
         */
        public function set($value)
        {
            $this->validate($value);

            $this->value = $value;
        }

        /**
         * @return null
         */
        public function get()
        {
            return $this->value;
        }

        /**
         * @param \isfonzar\TDEECalculator\Primitives\Constraint\ConstraintInterface $constraint
         */
        private function addConstraint(ConstraintInterface $constraint)
        {
            $this->constraints[] = $constraint;
        }

        /**
         * @param $value
         */
        private function validate($value)
        {
            foreach ($this->constraints as $constraint)
            {
                $constraint->validate($value);
            }
        }
    }