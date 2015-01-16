<?php

class CalculatorTest extends PHPUnit_Framework_TestCase {

	/** @test */
	public function it_is_instantiable()
	{
		$ruleSet = new \Rokde\VatCalculator\RuleSet();

		$calculator = new \Rokde\VatCalculator\Calculator($ruleSet, 'DE');

		$this->assertInstanceOf('Rokde\VatCalculator\Calculator', $calculator);

		$calculator->setPrice(1.01);

		$price = new \Rokde\VatCalculator\Price(1.01, 0, 0, 'AT', false);
		$this->assertEquals($price, $calculator->calculate('AT', false));
	}
}
