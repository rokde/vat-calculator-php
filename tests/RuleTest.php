<?php


class RuleTest extends PHPUnit_Framework_TestCase {

	/** @test */
	public function it_is_instantiable()
	{
		$rule = new \Rokde\VatCalculator\Rule('DE', .19);

		$this->assertInstanceOf('Rokde\VatCalculator\Rule', $rule);

		$this->assertEquals('DE', $rule->identifier());
		$this->assertEquals(.19, $rule->value());
	}
}
