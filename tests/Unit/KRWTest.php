<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Tests\Unit;

use ComponoKit\Money\Currencies\EUR;
use ComponoKit\Money\Currencies\KRW;

class KRWTest extends AbstractCurrencyTest
{
	public function testCurrency()
	{
		$currency = new KRW();
		$this->assertCurrencyProperties( $currency, 'KRW', '₩', 1, 0 );

		$this->assertEqualsBehaviour( $currency, new KRW(), true );
		$this->assertEqualsBehaviour( $currency, new EUR(), false );
	}
}
