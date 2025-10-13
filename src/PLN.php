<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies;

use ComponoKit\Money\Interfaces\RepresentsCurrency;

class PLN implements RepresentsCurrency
{
	public function getIsoCode(): string
	{
		return 'PLN';
	}

	public function getSymbol(): string
	{
		return 'zł';
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
