<?php namespace Rokde\VatCalculator;

/**
 * Class Price
 *
 * @package Rokde\VatCalculator
 */
class Price
{
	/**
	 * net price
	 *
	 * @var float
	 */
	private $net;

	/**
	 * tax value
	 *
	 * @var float
	 */
	private $tax;

	/**
	 * tax rate value
	 *
	 * @var float
	 */
	private $rate;

	/**
	 * country
	 *
	 * @var string
	 */
	private $country;

	/**
	 * is company
	 *
	 * @var bool
	 */
	private $company = false;

	public function __construct($net, $tax, $rate, $country, $company)
	{
		$this->net = $net;
		$this->tax = $tax;
		$this->rate = $rate;
		$this->country = $country;
		$this->company = $company;
	}

	/**
	 * returns net value
	 *
	 * @return float
	 */
	public function getNetValue()
	{
		return $this->net;
	}

	/**
	 * returns price value, including tax
	 *
	 * @return float
	 */
	public function getValue()
	{
		return $this->net + $this->tax;
	}

	/**
	 * returns tax value
	 *
	 * @return float
	 */
	public function getTax()
	{
		return $this->tax;
	}

	/**
	 * returns tax rate
	 *
	 * @return float
	 */
	public function getTaxRate()
	{
		return $this->rate;
	}

	/**
	 * returns country code
	 *
	 * @return string
	 */
	public function getCountry()
	{
		return $this->country;
	}

	/**
	 * is the price for a company
	 *
	 * @return bool
	 */
	public function isCompany()
	{
		return $this->company;
	}
}