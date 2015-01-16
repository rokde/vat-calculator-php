<?php namespace Rokde\VatCalculator;

/**
 * Class Calculator
 *
 * Calculating the correct price
 *
 * @package Rokde\VatCalculator
 */
class Calculator
{
	/**
	 * current price
	 *
	 * @var float
	 */
	private $price = 0.0;

	/**
	 * used ruleset
	 *
	 * @var \Rokde\VatCalculator\RuleSet
	 */
	private $ruleSet;

	/**
	 * own country (shop)
	 *
	 * @var string
	 */
	private $country;

	/**
	 * @param \Rokde\VatCalculator\RuleSet $ruleSet
	 * @param string $country
	 */
	public function __construct(RuleSet $ruleSet, $country)
	{
		$this->ruleSet = $ruleSet;
		$this->country = $country;
	}

	/**
	 * sets price
	 *
	 * @param float|int $price
	 *
	 * @return $this
	 */
	public function setPrice($price)
	{
		$this->price = floatval($price);

		return $this;
	}

	/**
	 * calculates the correct price
	 *
	 * @param string $country
	 * @param bool $company
	 *
	 * @return \Rokde\VatCalculator\Price
	 */
	public function calculate($country, $company)
	{
		$taxRuleValue = $this->getTaxRuleValue($country, $company);
		$taxValue = $taxRuleValue * $this->price;

		return new Price($this->price, $taxValue, $taxRuleValue, $country, $company);
	}

	/**
	 * returns the tax rule value
	 *
	 * @param string $country
	 * @param bool $company
	 *
	 * @return int|null|mixed
	 */
	private function getTaxRuleValue($country, $company)
	{
		if ( ! $this->ruleSet->hasRule($country))
			return 0;

		if ($company && $country !== $this->country)
			return 0;

		return $this->ruleSet->getRuleValue($country);
	}
}