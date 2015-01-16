vat-calculator for PHP
======================

Tax calculator for new reverse-charge processing within the european union.

See the sister project in [javascript](https://github.com/rokde/vat-calculator).

Usage
-----


	$calculator = \Rokde\VatCalculator\Examples\MossReverseCharge2015Europe::getCalculator('DE');

	$country = "AT";
	$company = false;

	/* @var \Rokde\VatCalculator\Price price */
	$price = $calculator->calculate($country, $company);
	
