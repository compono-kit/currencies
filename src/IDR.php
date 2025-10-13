<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies;

use ComponoKit\Money\Interfaces\RepresentsCurrency;

class IDR implements RepresentsCurrency
{
	public function getIsoCode(): string
	{
		return 'IDR';
	}

	public function getSymbol(): string
	{
		return 'Rp';
	}

	public function getMinorUnitFactor(): int
	{
		return 100;
	}

	public function equals( RepresentsCurrency $other ): bool
	{
		return $this->getIsoCode() === $other->getIsoCode();
	}
}
