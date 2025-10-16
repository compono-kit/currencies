<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies;

use ComponoKit\Money\Currencies\Traits\RepresentingCurrency;
use ComponoKit\Money\Interfaces\RepresentsCurrency;

class UAH implements RepresentsCurrency
{
	use RepresentingCurrency;

	public function getIsoCode(): string
	{
		return 'UAH';
	}

	public function getSymbol(): string
	{
		return '₴';
	}

	public function getMinorUnitFactor(): int
	{
		return 100;
	}
}
