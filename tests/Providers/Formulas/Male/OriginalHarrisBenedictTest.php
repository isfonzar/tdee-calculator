<?php

    namespace isfonzar\TDEECalculator\Tests\Providers\Formulas\Male;

    use isfonzar\TDEECalculator\Providers\Formulas\Male\OriginalHarrisBenedict;

    class OriginalHarrisBenedictTest extends \PHPUnit\Framework\TestCase
    {
        public function testIfCalculatesCorrectly()
        {
            $formula = new OriginalHarrisBenedict();

            $expectedResult = 2298.0979;

            $result = round($formula->calculate(80, 182, 24, 1.2), 4);

            $this->assertEquals($result, $expectedResult);
        }
    }