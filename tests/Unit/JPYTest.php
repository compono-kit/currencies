<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Tests\Unit;

use ComponoKit\Money\Currencies\EUR;
use ComponoKit\Money\Currencies\JPY;

class JPYTest extends AbstractCurrencyTestCase
{
	public function testCurrency(): void
	{
		$currency = new JPY();
		$this->assertCurrencyProperties( $currency, 'JPY', '¥', 1, 0 );

		$this->assertEqualsBehaviour( $currency, new JPY(), true );
		$this->assertEqualsBehaviour( $currency, new EUR(), false );
	}
}
