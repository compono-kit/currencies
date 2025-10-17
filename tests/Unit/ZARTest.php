<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Tests\Unit;

use ComponoKit\Money\Currencies\EUR;
use ComponoKit\Money\Currencies\ZAR;

class ZARTest extends AbstractCurrencyTest
{
	public function testCurrency()
	{
		$currency = new ZAR();
		$this->assertCurrencyProperties( $currency, 'ZAR', 'R', 100, 2 );

		$this->assertEqualsBehaviour( $currency, new ZAR(), true );
		$this->assertEqualsBehaviour( $currency, new EUR(), false );
	}
}
