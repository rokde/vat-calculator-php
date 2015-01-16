<?php namespace Rokde\VatCalculator\Examples;

use Rokde\VatCalculator\Calculator;
use Rokde\VatCalculator\Rule;
use Rokde\VatCalculator\RuleSet;

/**
 * Class MossReverseCharge2015Europe
 *
 * Since 2015 we have a new MOSS Reverse Charge processing in Europe...this is the ruleset for this.
 *
 * @package Rokde\VatCalculator\Examples
 */
class MossReverseCharge2015Europe
{
	public static function getCalculator($ownCountry = 'DE')
	{
		$rules = new RuleSet();

		$rules->addRule(new Rule('AT', .20));
		$rules->addRule(new Rule('BE', .21));
		$rules->addRule(new Rule('BG', .20));
		$rules->addRule(new Rule('CY', .19));
		$rules->addRule(new Rule('CZ', .21));
		$rules->addRule(new Rule('DE', .19));
		$rules->addRule(new Rule('DK', .25));
		$rules->addRule(new Rule('EE', .20));
		$rules->addRule(new Rule('EL', .23));
		$rules->addRule(new Rule('ES', .21));
		$rules->addRule(new Rule('FI', .24));
		$rules->addRule(new Rule('FR', .20));
		$rules->addRule(new Rule('GB', .20));
		$rules->addRule(new Rule('IE', .23));
		$rules->addRule(new Rule('IT', .22));
		$rules->addRule(new Rule('HR', .25));
		$rules->addRule(new Rule('HU', .27));
		$rules->addRule(new Rule('LV', .21));
		$rules->addRule(new Rule('LT', .21));
		$rules->addRule(new Rule('LU', .15));
		$rules->addRule(new Rule('MT', .18));
		$rules->addRule(new Rule('NL', .21));
		$rules->addRule(new Rule('PL', .23));
		$rules->addRule(new Rule('PT', .23));
		$rules->addRule(new Rule('RO', .24));
		$rules->addRule(new Rule('SE', .25));
		$rules->addRule(new Rule('SK', .20));
		$rules->addRule(new Rule('SI', .22));

		return new Calculator($rules, $ownCountry);
	}
}