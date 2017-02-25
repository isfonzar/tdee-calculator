<?php

    namespace isfonzar\TDEECalculator\Models\Formulas;

    /**
     * Class TDEEFormula
     *
     * @package isfonzar\TDEECalculator\Models
     */
    class TDEEFormula extends Formula
    {
        const OriginalHarrisBenedict = 'original_harris_benedict';

        const RevisedHarrisBenedict = 'revised_harris_benedict';

        const MifflinStJeor = 'mifflin_st_jeor';

        /**
         * @var array
         */
        protected $allowedFormulas = [
            self::OriginalHarrisBenedict,
            self::RevisedHarrisBenedict,
            self::MifflinStJeor,
        ];

        /**
         * @var
         */
        protected $formula = self::OriginalHarrisBenedict;
    }