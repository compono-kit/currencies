<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Tests\Unit;

use ComponoKit\Money\Currencies\EUR;
use ComponoKit\Money\Currencies\NZD;

class NZDTest extends AbstractCurrencyTest
{
	public function testCurrency()
	{
		$currency = new NZD();
		$this->assertCurrencyProperties( $currency, 'NZD', '$', 100, 2 );

		$this->assertEqualsBehaviour( $currency, new NZD(), true );
		$this->assertEqualsBehaviour( $currency, new EUR(), false );
	}
}
