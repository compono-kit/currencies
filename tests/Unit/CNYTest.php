<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Tests\Unit;

use ComponoKit\Money\Currencies\CNY;
use ComponoKit\Money\Currencies\EUR;

class CNYTest extends AbstractCurrencyTestCase
{
	public function testCurrency(): void
	{
		$currency = new CNY();
		$this->assertCurrencyProperties( $currency, 'CNY', '¥', 100, 2 );

		$this->assertEqualsBehaviour( $currency, new CNY(), true );
		$this->assertEqualsBehaviour( $currency, new EUR(), false );
	}
}
