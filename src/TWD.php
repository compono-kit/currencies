<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies;

use ComponoKit\Money\Currencies\Traits\RepresentingCurrency;
use ComponoKit\Money\Interfaces\RepresentsCurrency;

class TWD implements RepresentsCurrency
{
	use RepresentingCurrency;

	public function getIsoCode(): string
	{
		return 'TWD';
	}

	public function getSymbol(): string
	{
		return 'NT$';
	}

	public function getMinorUnitFactor(): int
	{
		return 100;
	}
}
