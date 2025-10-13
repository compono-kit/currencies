<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies;

use ComponoKit\Money\Interfaces\RepresentsCurrency;

class TWD implements RepresentsCurrency
{
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

	public function equals( RepresentsCurrency $other ): bool
	{
		return $other instanceof self;
	}
}
