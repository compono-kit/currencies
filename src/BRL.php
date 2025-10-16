<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies;

use ComponoKit\Money\Currencies\Traits\RepresentingCurrency;
use ComponoKit\Money\Interfaces\RepresentsCurrency;

class BRL implements RepresentsCurrency
{
	use RepresentingCurrency;

	public function getIsoCode(): string
	{
		return 'BRL';
	}

	public function getSymbol(): string
	{
		return 'R$';
	}

	public function getMinorUnitFactor(): int
	{
		return 100;
	}
}
