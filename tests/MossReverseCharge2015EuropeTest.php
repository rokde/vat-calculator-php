<?php


class MossReverseCharge2015EuropeTest extends PHPUnit_Framework_TestCase {

	/** @test */
	public function it_is_instantiable()
	{
		$calculator = \Rokde\VatCalculator\Examples\MossReverseCharge2015Europe::getCalculator('DE');

		$this->assertInstanceOf('Rokde\VatCalculator\Calculator', $calculator);

		$calculator->setPrice(20.01);

		$actualPriceForAustrianPrivatePerson = $calculator->calculate('AT', false);
		$expectedPriceForAustrianPrivatePerson = new \Rokde\VatCalculator\Price(20.01, 4.002, .20, 'AT', false);
		$this->assertInstanceOf('Rokde\VatCalculator\Price', $actualPriceForAustrianPrivatePerson);
		$this->assertEquals($expectedPriceForAustrianPrivatePerson, $actualPriceForAustrianPrivatePerson);
		$this->assertEquals(24.012, $actualPriceForAustrianPrivatePerson->getValue());
		$this->assertEquals(4.002, $actualPriceForAustrianPrivatePerson->getTax());

		$actualPriceForAustrianCompany = $calculator->calculate('AT', true);
		$expectedPriceForAustrianCompany = new \Rokde\VatCalculator\Price(20.01, 0, 0, 'AT', true);
		$this->assertInstanceOf('Rokde\VatCalculator\Price', $actualPriceForAustrianCompany);
		$this->assertEquals($actualPriceForAustrianCompany, $expectedPriceForAustrianCompany);
		$this->assertEquals(20.01, $actualPriceForAustrianCompany->getValue());
		$this->assertEquals(0.0, $actualPriceForAustrianCompany->getTax());
	}
}
