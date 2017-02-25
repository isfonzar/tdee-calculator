<?php

    namespace isfonzar\TDEECalculator;

    use isfonzar\TDEECalculator\Models\Formulas\LBMFormula;
    use isfonzar\TDEECalculator\Models\Options\LBMOptions;
    use isfonzar\TDEECalculator\Models\Primitives\Activity;
    use isfonzar\TDEECalculator\Models\Unit;
    use isfonzar\TDEECalculator\Models\UnitConverter;
    use isfonzar\TDEECalculator\Providers\LBMFormulaProvider;

    class LBMCalculator
    {
        private $unitConverter;

        public function __construct($options = [])
        {
            $options = new LBMOptions($options);

            $this->unit = new Unit($options->getUnit());

            $this->formula = $options->getFormula();

            $this->unitConverter = new UnitConverter($this->unit);

            $this->formula = new LBMFormula($this->formula);
        }

        public function calculate($leanBodyMass, $activity = 'sedentary')
        {
            $leanBodyMass = $this->unitConverter->getWeight($leanBodyMass);

            $formulaProvider = new LBMFormulaProvider($this->formula->get());

            $activity = new Activity($activity);

            return $formulaProvider->calculate($leanBodyMass->inMetric(), $activity->get());
        }
    }