<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies;

use ComponoKit\Money\Currencies\Traits\RepresentingCurrency;
use ComponoKit\Money\Interfaces\RepresentsCurrency;

class RSD implements RepresentsCurrency
{
	use RepresentingCurrency;

	public function getIsoCode(): string
	{
		return 'RSD';
	}

	public function getSymbol(): string
	{
		return 'дин';
	}

	public function getMinorUnitFactor(): int
	{
		return 100;
	}
}
