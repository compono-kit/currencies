<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Tests\Unit;

use ComponoKit\Money\Currencies\EUR;
use ComponoKit\Money\Currencies\THB;

class THBTest extends AbstractCurrencyTest
{
	public function testCurrency()
	{
		$currency = new THB();
		$this->assertCurrencyProperties( $currency, 'THB', '฿', 100, 2 );

		$this->assertEqualsBehaviour( $currency, new THB(), true );
		$this->assertEqualsBehaviour( $currency, new EUR(), false );
	}
}
