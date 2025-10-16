<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies;

use ComponoKit\Money\Currencies\Traits\RepresentingCurrency;
use ComponoKit\Money\Interfaces\RepresentsCurrency;

class MXN implements RepresentsCurrency
{
	use RepresentingCurrency;

	public function getIsoCode(): string
	{
		return 'MXN';
	}

	public function getSymbol(): string
	{
		return '$';
	}

	public function getMinorUnitFactor(): int
	{
		return 100;
	}
}
