<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies;

use ComponoKit\Money\Currencies\Traits\RepresentingCurrency;
use ComponoKit\Money\Interfaces\RepresentsCurrency;

class CHF implements RepresentsCurrency
{
	use RepresentingCurrency;

	public function getIsoCode(): string
	{
		return 'CHF';
	}

	public function getSymbol(): string
	{
		return 'CHF';
	}

	public function getMinorUnitFactor(): int
	{
		return 100;
	}
}
