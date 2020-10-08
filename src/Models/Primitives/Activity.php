<?php

    namespace isfonzar\TDEECalculator\Models\Primitives;

    use isfonzar\TDEECalculator\Exceptions\InvalidActivityLevel;

    /**
     * Class Activity
     *
     * @package isfonzar\TDEECalculator\Models\Primitives
     */
    class Activity
    {
        /**
         *
         */
        const NO_ACTIVITY = 'no_activity';

        /**
         *
         */
        const SEDENTARY = 'sedentary';

        /**
         *
         */
        const LIGHT_ACTIVE = 'lightly_active';

        /**
         *
         */
        const ACTIVE = 'active';

        /**
         *
         */
        const VERY_ACTIVE = 'very_active';

        /**
         * @var array
         */
        private $activityLevel = [
            self::NO_ACTIVITY => 1.0,
            self::SEDENTARY => 1.2,
            self::LIGHT_ACTIVE => 1.425,
            self::ACTIVE => 1.55,
            self::VERY_ACTIVE => 1.75
        ];

        /**
         * @var mixed
         */
        private $value;

        /**
         * Activity constructor.
         *
         * @param $activity
         */
        public function __construct($activity)
        {
            if (!in_array($activity, array_keys($this->activityLevel)))
            {
                throw new InvalidActivityLevel();
            }

            $this->value = $this->activityLevel[$activity];
        }

        /**
         * @return string
         */
        public function get()
        {
            return $this->value;
        }
    }