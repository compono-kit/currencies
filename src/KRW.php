<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies;

use ComponoKit\Money\Interfaces\RepresentsCurrency;

class KRW implements RepresentsCurrency
{
	public function getIsoCode(): string
	{
		return 'KRW';
	}

	public function getSymbol(): string
	{
		return '₩';
	}

	public function getMinorUnitFactor(): int
	{
		return 1;
	}

	public function equals( RepresentsCurrency $other ): bool
	{
		return $other instanceof self;
	}
}
