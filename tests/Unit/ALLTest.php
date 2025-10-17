<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Tests\Unit;

use ComponoKit\Money\Currencies\ALL;
use ComponoKit\Money\Currencies\EUR;

class ALLTest extends AbstractCurrencyTest
{
	public function testCurrency()
	{
		$currency = new ALL();
		$this->assertCurrencyProperties( $currency, 'ALL', 'L', 100, 2 );

		$this->assertEqualsBehaviour( $currency, new ALL(), true );
		$this->assertEqualsBehaviour( $currency, new EUR(), false );
	}
}
