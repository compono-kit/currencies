<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies;

use ComponoKit\Money\Currencies\Traits\RepresentingCurrency;
use ComponoKit\Money\Interfaces\RepresentsCurrency;

class MKD implements RepresentsCurrency
{
	use RepresentingCurrency;

	public function getIsoCode(): string
	{
		return 'MKD';
	}

	public function getSymbol(): string
	{
		return 'ден';
	}

	public function getMinorUnitFactor(): int
	{
		return 100;
	}
}
