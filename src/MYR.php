<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies;

use ComponoKit\Money\Interfaces\RepresentsCurrency;

class MYR implements RepresentsCurrency
{
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

	public function equals( RepresentsCurrency $other ): bool
	{
		return $other instanceof self;
	}
}
