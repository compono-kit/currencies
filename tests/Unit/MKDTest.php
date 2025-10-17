<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Tests\Unit;

use ComponoKit\Money\Currencies\EUR;
use ComponoKit\Money\Currencies\MKD;

class MKDTest extends AbstractCurrencyTest
{
	public function testCurrency()
	{
		$currency = new MKD();
		$this->assertCurrencyProperties( $currency, 'MKD', 'ден', 100, 2 );

		$this->assertEqualsBehaviour( $currency, new MKD(), true );
		$this->assertEqualsBehaviour( $currency, new EUR(), false );
	}
}
