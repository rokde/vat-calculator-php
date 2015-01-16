# vat-calculator for PHP

[![Latest Stable Version](https://poser.pugx.org/rokde/vat-calculator-php/v/stable.svg)](https://packagist.org/packages/rokde/vat-calculator-php) [![Latest Unstable Version](https://poser.pugx.org/rokde/vat-calculator-php/v/unstable.svg)](https://packagist.org/packages/rokde/vat-calculator-php) [![License](https://poser.pugx.org/rokde/vat-calculator-php/license.svg)](https://packagist.org/packages/rokde/vat-calculator-php) [![Total Downloads](https://poser.pugx.org/rokde/vat-calculator-php/downloads.svg)](https://packagist.org/packages/rokde/vat-calculator-php)

Tax calculator for new reverse-charge processing within the european union.

See the sister project in [javascript](https://github.com/rokde/vat-calculator).

## Installation

Add to your composer.json following lines

	"require": {
		"rokde/vat-calculator-php": "~0.1.0"
	}
	
	
## Usage


	$calculator = \Rokde\VatCalculator\Examples\MossReverseCharge2015Europe::getCalculator('DE');

	$country = "AT";
	$company = false;

	/* @var \Rokde\VatCalculator\Price price */
	$price = $calculator->calculate($country, $company);
	
