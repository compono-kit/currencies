<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies;

use ComponoKit\Money\Currencies\Traits\RepresentingCurrency;
use ComponoKit\Money\Interfaces\RepresentsCurrency;

class PLN implements RepresentsCurrency
{
	use RepresentingCurrency;

	public function getIsoCode(): string
	{
		return 'PLN';
	}

	public function getSymbol(): string
	{
		return 'zł';
	}

	public function getMinorUnitFactor(): int
	{
		return 100;
	}
}
