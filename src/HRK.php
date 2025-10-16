<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies;

use ComponoKit\Money\Currencies\Traits\RepresentingCurrency;
use ComponoKit\Money\Interfaces\RepresentsCurrency;

class HRK implements RepresentsCurrency
{
	use RepresentingCurrency;

	public function getIsoCode(): string
	{
		return 'HRK';
	}

	public function getSymbol(): string
	{
		return 'kn';
	}

	public function getMinorUnitFactor(): int
	{
		return 100;
	}
}
