<?php

    namespace isfonzar\TDEECalculator\Tests\Providers\Formulas;

    use isfonzar\TDEECalculator\Providers\Formulas\OriginalHarrisBenedictEquation;

    class OriginalHarrisBenedictEquationTest extends \PHPUnit_Framework_TestCase
    {
        public function testKnownResults()
        {
            $formulaProvider = new OriginalHarrisBenedictEquation();

            $result = $formulaProvider->calculate(1, 90, 1.82, 23);

            var_dump($result); exit;
        }
    }