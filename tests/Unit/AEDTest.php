<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Tests\Unit;

use ComponoKit\Money\Currencies\AED;
use ComponoKit\Money\Currencies\EUR;
use PHPUnit\Framework\TestCase;

class AEDTest extends TestCase
{
	public function testConstructorValidCurrency()
	{
		$currency = new AED();

		$this->assertSame( 'AED', $currency->getIsoCode() );
		$this->assertSame( 'د.إ', $currency->getSymbol() );
		$this->assertSame( 100, $currency->getMinorUnitFactor() );
		$this->assertSame( 2, $currency->getMinorUnit() );
	}

	public function testEqualsReturnsTrueForSameIsoCode()
	{
		$currency1 = new AED();
		$currency2 = new AED();

		$this->assertTrue( $currency1->equals( $currency2 ) );
	}

	public function testEqualsReturnsFalseForDifferentIsoCode()
	{
		$currency1 = new AED();
		$currency2 = new EUR();

		$this->assertFalse( $currency1->equals( $currency2 ) );
	}
}
