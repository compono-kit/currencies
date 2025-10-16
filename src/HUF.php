<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies;

use ComponoKit\Money\Currencies\Traits\RepresentingCurrency;
use ComponoKit\Money\Interfaces\RepresentsCurrency;

class HUF implements RepresentsCurrency
{
	use RepresentingCurrency;

	public function getIsoCode(): string
	{
		return 'HUF';
	}

	public function getSymbol(): string
	{
		return 'Ft';
	}

	public function getMinorUnitFactor(): int
	{
		return 1;
	}
}
