<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies;

use ComponoKit\Money\Interfaces\RepresentsCurrency;

class RON implements RepresentsCurrency
{
	public function getIsoCode(): string
	{
		return 'RON';
	}

	public function getSymbol(): string
	{
		return 'lei';
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
