<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Tests\Unit;

use ComponoKit\Money\Currencies\BGN;
use ComponoKit\Money\Currencies\EUR;

class BGNTest extends AbstractCurrencyTest
{
	public function testCurrency()
	{
		$currency = new BGN();
		$this->assertCurrencyProperties( $currency, 'BGN', 'лв', 100, 2 );

		$this->assertEqualsBehaviour( $currency, new BGN(), true );
		$this->assertEqualsBehaviour( $currency, new EUR(), false );
	}
}
