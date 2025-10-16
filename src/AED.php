<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies;

use ComponoKit\Money\Currencies\Traits\RepresentingCurrency;
use ComponoKit\Money\Interfaces\RepresentsCurrency;

class AED implements RepresentsCurrency
{
	use RepresentingCurrency;

	public function getIsoCode(): string
	{
		return 'AED';
	}

	public function getSymbol(): string
	{
		return 'د.إ';
	}

	public function getMinorUnitFactor(): int
	{
		return 100;
	}
}
