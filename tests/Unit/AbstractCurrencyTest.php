<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Tests\Unit;

use ComponoKit\Money\Interfaces\RepresentsCurrency;
use PHPUnit\Framework\TestCase;

abstract class AbstractCurrencyTest extends TestCase
{
	protected function assertCurrencyProperties( RepresentsCurrency $currency, string $expectedIsoCode, string $expectedSymbol, int $expectedMinorUnitFactor, int $expectedMinorUnit )
	{
		$this->assertSame( $expectedIsoCode, $currency->getIsoCode() );
		$this->assertSame( $expectedSymbol, $currency->getSymbol() );
		$this->assertSame( $expectedMinorUnitFactor, $currency->getMinorUnitFactor() );
		$this->assertSame( $expectedMinorUnit, $currency->getMinorUnit() );
	}

	protected function assertEqualsBehaviour( $currency1, $currency2, bool $expected )
	{
		$this->assertSame( $expected, $currency1->equals( $currency2 ) );
	}
}
