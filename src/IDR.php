<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies;

use ComponoKit\Money\Currencies\Traits\RepresentingCurrency;
use ComponoKit\Money\Interfaces\RepresentsCurrency;

class IDR implements RepresentsCurrency
{
	use RepresentingCurrency;

	public function getIsoCode(): string
	{
		return 'IDR';
	}

	public function getSymbol(): string
	{
		return 'Rp';
	}

	public function getMinorUnitFactor(): int
	{
		return 100;
	}
}
