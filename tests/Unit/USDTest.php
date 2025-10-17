<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Tests\Unit;

use ComponoKit\Money\Currencies\EUR;
use ComponoKit\Money\Currencies\USD;

class USDTest extends AbstractCurrencyTest
{
	public function testCurrency()
	{
		$currency = new USD();
		$this->assertCurrencyProperties( $currency, 'USD', '$', 100, 2 );

		$this->assertEqualsBehaviour( $currency, new USD(), true );
		$this->assertEqualsBehaviour( $currency, new EUR(), false );
	}
}
