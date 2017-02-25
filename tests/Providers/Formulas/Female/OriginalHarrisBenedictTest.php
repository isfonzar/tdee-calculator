<?php

    namespace isfonzar\TDEECalculator\Tests\Providers\Formulas\Female;

    use isfonzar\TDEECalculator\Providers\Formulas\Female\OriginalHarrisBenedict;

    class OriginalHarrisBenedictTest extends \PHPUnit_Framework_TestCase
    {
        public function testIfCalculatesCorrectly()
        {
            $formula = new OriginalHarrisBenedict();

            $expectedResult = 1973.4964;

            $result = round($formula->calculate(80, 182, 24, 1.2), 4);

            $this->assertEquals($result, $expectedResult);
        }
    }