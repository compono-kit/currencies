<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Tests\Unit;

use ComponoKit\Money\Currencies\EUR;
use ComponoKit\Money\Currencies\IDR;

class IDRTest extends AbstractCurrencyTest
{
	public function testCurrency()
	{
		$currency = new IDR();
		$this->assertCurrencyProperties( $currency, 'IDR', 'Rp', 100, 2 );

		$this->assertEqualsBehaviour( $currency, new IDR(), true );
		$this->assertEqualsBehaviour( $currency, new EUR(), false );
	}
}
