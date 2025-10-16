<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies;

use ComponoKit\Money\Currencies\Traits\RepresentingCurrency;
use ComponoKit\Money\Interfaces\RepresentsCurrency;

class ZAR implements RepresentsCurrency
{
	use RepresentingCurrency;

	public function getIsoCode(): string
	{
		return 'ZAR';
	}

	public function getSymbol(): string
	{
		return 'R';
	}

	public function getMinorUnitFactor(): int
	{
		return 100;
	}
}
