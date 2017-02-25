<?php

    namespace isfonzar\TDEECalculator;

    use isfonzar\TDEECalculator\Models\Formulas\TDEEFormula;
    use isfonzar\TDEECalculator\Models\Options\TDEEOptions;
    use isfonzar\TDEECalculator\Models\Primitives\Activity;
    use isfonzar\TDEECalculator\Models\Primitives\Age;
    use isfonzar\TDEECalculator\Models\Primitives\Gender;
    use isfonzar\TDEECalculator\Models\Unit;
    use isfonzar\TDEECalculator\Models\UnitConverter;
    use isfonzar\TDEECalculator\Providers\TDEEFormulaProvider;

    class TDEECalculator
    {
        private $unitConverter;

        public function __construct($options = [])
        {
            $options = new TDEEOptions($options);

            $this->unit = new Unit($options->getUnit());

            $this->formula = $options->getFormula();

            $this->unitConverter = new UnitConverter($this->unit);

            $this->formula = new TDEEFormula($this->formula);
        }

        public function calculate($gender, $weight, $height, $age, $activity = 'sedentary')
        {
            $gender = new Gender($gender);

            $weight = $this->unitConverter->getWeight($weight);
            $height = $this->unitConverter->getHeight($height);

            $age = new Age($age);

            $activity = new Activity($activity);

            $formulaProvider = new TDEEFormulaProvider($this->formula->get(), $gender);

            return $formulaProvider->calculate($weight->inMetric(), $height->inMetric(), $age->get(), $activity->get());
        }
    }