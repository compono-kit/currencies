<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Tests\Unit;

use ComponoKit\Money\Currencies\EUR;
use ComponoKit\Money\Currencies\TWD;

class TWDTest extends AbstractCurrencyTest
{
	public function testCurrency()
	{
		$currency = new TWD();
		$this->assertCurrencyProperties( $currency, 'TWD', 'NT$', 100, 2 );

		$this->assertEqualsBehaviour( $currency, new TWD(), true );
		$this->assertEqualsBehaviour( $currency, new EUR(), false );
	}
}
