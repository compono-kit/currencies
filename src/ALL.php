<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies;

use ComponoKit\Money\Currencies\Traits\RepresentingCurrency;
use ComponoKit\Money\Interfaces\RepresentsCurrency;

class ALL implements RepresentsCurrency
{
	use RepresentingCurrency;

	public function getIsoCode(): string
	{
		return 'ALL';
	}

	public function getSymbol(): string
	{
		return 'L';
	}

	public function getMinorUnitFactor(): int
	{
		return 100;
	}
}
