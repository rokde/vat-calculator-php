<?php namespace Rokde\VatCalculator;

/**
 * Class RuleSet
 *
 *
 *
 * @package Rokde\VatCalculator
 */
class RuleSet
{
	/**
	 * rules collection
	 *
	 * @var array
	 */
	private $rules = [];

	/**
	 * adds a rule
	 *
	 * @param \Rokde\VatCalculator\Rule $rule
	 */
	public function addRule(Rule $rule)
	{
		$this->rules[$rule->identifier()] = $rule->value();
	}

	/**
	 * does the rule exists
	 *
	 * @param string|Rule $identifier
	 *
	 * @return bool
	 */
	public function hasRule($identifier)
	{
		$identifier = $this->resolveIdentifier($identifier);

		return array_key_exists($identifier, $this->rules);
	}

	/**
	 * returns the rule value
	 *
	 * @param string|Rule $identifier
	 *
	 * @return mixed|null
	 */
	public function getRuleValue($identifier)
	{
		$identifier = $this->resolveIdentifier($identifier);

		return $this->hasRule($identifier)
			? $this->rules[$identifier]
			: null;
	}

	/**
	 * resolves the identifier
	 *
	 * @param string|Rule $identifier
	 *
	 * @return string
	 */
	private function resolveIdentifier($identifier)
	{
		if ($identifier instanceof Rule)
			return $identifier->identifier();

		return $identifier;
	}
}