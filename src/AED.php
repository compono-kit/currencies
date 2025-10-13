<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies;

use ComponoKit\Money\Interfaces\RepresentsCurrency;

class AED implements RepresentsCurrency
{
	public function getIsoCode(): string
	{
		return 'AED';
	}

	public function getSymbol(): string
	{
		return 'د.إ';
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
