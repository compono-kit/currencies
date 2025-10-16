<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies;

use ComponoKit\Money\Currencies\Traits\RepresentingCurrency;
use ComponoKit\Money\Interfaces\RepresentsCurrency;

class MYR implements RepresentsCurrency
{
	use RepresentingCurrency;

	public function getIsoCode(): string
	{
		return 'MYR';
	}

	public function getSymbol(): string
	{
		return 'RM';
	}

	public function getMinorUnitFactor(): int
	{
		return 100;
	}
}
