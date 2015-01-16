<?php


class RuleSetTest extends PHPUnit_Framework_TestCase {

	/** @test */
	public function it_is_instantiable()
	{
		$ruleSet = new \Rokde\VatCalculator\RuleSet();

		$this->assertInstanceOf('Rokde\VatCalculator\RuleSet', $ruleSet);

		$this->assertFalse($ruleSet->hasRule('as'));
		$this->assertNull($ruleSet->getRuleValue('as'));

		$ruleSet->addRule(new \Rokde\VatCalculator\Rule('as', 123));

		$this->assertTrue($ruleSet->hasRule('as'));
		$this->assertNotNull($ruleSet->getRuleValue('as'));
		$this->assertEquals(123, $ruleSet->getRuleValue('as'));
	}
}
