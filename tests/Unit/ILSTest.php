<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Tests\Unit;

use ComponoKit\Money\Currencies\EUR;
use ComponoKit\Money\Currencies\ILS;

class ILSTest extends AbstractCurrencyTest
{
	public function testCurrency()
	{
		$currency = new ILS();
		$this->assertCurrencyProperties( $currency, 'ILS', '₪', 100, 2 );

		$this->assertEqualsBehaviour( $currency, new ILS(), true );
		$this->assertEqualsBehaviour( $currency, new EUR(), false );
	}
}
