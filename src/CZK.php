<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies;

use ComponoKit\Money\Currencies\Traits\RepresentingCurrency;
use ComponoKit\Money\Interfaces\RepresentsCurrency;

class CZK implements RepresentsCurrency
{
	use RepresentingCurrency;

	public function getIsoCode(): string
	{
		return 'CZK';
	}

	public function getSymbol(): string
	{
		return 'Kč';
	}

	public function getMinorUnitFactor(): int
	{
		return 100;
	}
}
