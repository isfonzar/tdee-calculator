<?php

    namespace isfonzar\TDEECalculator\Primitives;

    use isfonzar\TDEECalculator\Exceptions\InvalidGender;

    class Gender
    {
        const MALE = 1;

        const FEMALE = 2;

        public $value;

        public function __construct($name)
        {
            switch ($name)
            {
                case 'male':
                    $this->value = self::MALE;
                    break;
                case 'female':
                    $this->value = self::FEMALE;
                    break;
                default:
                    throw new InvalidGender();
            }
        }
    }