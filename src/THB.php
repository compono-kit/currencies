<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies;

use ComponoKit\Money\Currencies\Traits\RepresentingCurrency;
use ComponoKit\Money\Interfaces\RepresentsCurrency;

class THB implements RepresentsCurrency
{
	use RepresentingCurrency;

	public function getIsoCode(): string
	{
		return 'THB';
	}

	public function getSymbol(): string
	{
		return '฿';
	}

	public function getMinorUnitFactor(): int
	{
		return 100;
	}
}
