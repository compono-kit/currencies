<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies;

use ComponoKit\Money\Interfaces\RepresentsCurrency;

class SAR implements RepresentsCurrency
{
	public function getIsoCode(): string
	{
		return 'SAR';
	}

	public function getSymbol(): string
	{
		return '﷼';
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
