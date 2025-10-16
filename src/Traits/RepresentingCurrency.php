<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Traits;

use ComponoKit\Money\Interfaces\RepresentsCurrency;

trait RepresentingCurrency
{
	public function getMinorUnit(): int
	{
		return (int)log10( $this->getMinorUnitFactor() );
	}

	public function equals( RepresentsCurrency $other ): bool
	{
		return $this->getIsoCode() === $other->getIsoCode();
	}
}
