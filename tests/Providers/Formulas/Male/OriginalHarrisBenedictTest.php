<?php

    namespace isfonzar\TDEECalculator\Tests\Providers\Formulas\Male;

    use isfonzar\TDEECalculator\Providers\Formulas\Male\OriginalHarrisBenedict;

    class OriginalHarrisBenedictTest extends \PHPUnit_Framework_TestCase
    {
        public function testIfCalculatesCorrectly()
        {
            $formula = new OriginalHarrisBenedict();

            $expectedResult = 2298.09792;

            $result = $formula->calculate(80, 182, 24, 1.2);

            $this->assertEquals($result, $expectedResult);
        }
    }