<?php


class PriceTest extends PHPUnit_Framework_TestCase {

	/** @test */
	public function it_is_instantiable()
	{
		$price = new \Rokde\VatCalculator\Price(1, .2, .3, 'DE', false);

		$this->assertInstanceOf('Rokde\VatCalculator\Price', $price);

		$this->assertEquals(1, $price->getNetValue());
		$this->assertEquals(.2, $price->getTax());
		$this->assertEquals(.3, $price->getTaxRate());
		$this->assertEquals('DE', $price->getCountry());
		$this->assertFalse($price->isCompany());
	}
}
