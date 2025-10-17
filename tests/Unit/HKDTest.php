<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Tests\Unit;

use ComponoKit\Money\Currencies\EUR;
use ComponoKit\Money\Currencies\HKD;

class HKDTest extends AbstractCurrencyTest
{
	public function testCurrency()
	{
		$currency = new HKD();
		$this->assertCurrencyProperties( $currency, 'HKD', '$', 100, 2 );

		$this->assertEqualsBehaviour( $currency, new HKD(), true );
		$this->assertEqualsBehaviour( $currency, new EUR(), false );
	}
}
