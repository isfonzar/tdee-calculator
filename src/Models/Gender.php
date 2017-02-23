<?php

    namespace isfonzar\TDEECalculator\Models;

    use isfonzar\TDEECalculator\Exceptions\InvalidGender;

    /**
     * Class Gender
     *
     * @package isfonzar\TDEECalculator\Models
     */
    class Gender
    {
        const MALE = 'male';

        const FEMALE = 'female';

        /**
         * @var
         */
        protected $gender;

        /**
         * @var array
         */
        protected $allowedGenders = [self::MALE, self::FEMALE];

        /**
         * Gender constructor.
         *
         * @param $gender
         */
        public function __construct($gender)
        {
            $this->validate($gender);

            $this->gender = $gender;
        }

        /**
         * @param $gender
         */
        private function validate($gender)
        {
            if (!in_array($gender, $this->allowedGenders))
            {
                throw new InvalidGender();
            }
        }

        /**
         * @return string
         */
        public function __toString()
        {
            return (string)$this->gender;
        }
    }