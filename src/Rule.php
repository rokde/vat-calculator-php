<?php namespace Rokde\VatCalculator;

/**
 * Class Rule
 *
 *
 *
 * @package Rokde\VatCalculator
 */
class Rule
{
	/**
	 * returns an identifier for the rule
	 *
	 * @var string
	 */
	private $id;

	/**
	 * returns a value for the rule
	 *
	 * @var mixed
	 */
	private $value;

	/**
	 * @param string $id
	 * @param mixed $value
	 */
	public function __construct($id, $value)
	{
		$this->id = $id;
		$this->value = $value;
	}

	/**
	 * returns the identifier
	 *
	 * @return string
	 */
	public function identifier()
	{
		return $this->id;
	}

	/**
	 * returns the value
	 *
	 * @return mixed
	 */
	public function value()
	{
		return $this->value;
	}
}