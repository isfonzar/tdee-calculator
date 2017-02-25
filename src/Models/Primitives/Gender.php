<?php

    namespace isfonzar\TDEECalculator\Models\Primitives;

    use isfonzar\TDEECalculator\Exceptions\InvalidGender;

    /**
     * Class Gender
     *
     * @package isfonzar\TDEECalculator\Models\Primitives
     */
    class Gender
    {
        const MALE = 'male';

        const FEMALE = 'female';

        /**
         * @var array
         */
        private $allowedGenders = [self::MALE, self::FEMALE];

        /**
         * @var
         */
        private $value;

        /**
         * Gender constructor.
         *
         * @param $value
         */
        public function __construct($value)
        {
            if (!in_array($value, $this->allowedGenders))
            {
                throw new InvalidGender();
            }

            $this->value = $value;
        }

        /**
         * @return string
         */
        public function __toString()
        {
            return (string)$this->value;
        }
    }