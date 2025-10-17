<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Tests\Unit;

use ComponoKit\Money\Currencies\CHF;
use ComponoKit\Money\Currencies\EUR;

class CHFTest extends AbstractCurrencyTest
{
	public function testCurrency()
	{
		$currency = new CHF();
		$this->assertCurrencyProperties( $currency, 'CHF', 'CHF', 100, 2 );

		$this->assertEqualsBehaviour( $currency, new CHF(), true );
		$this->assertEqualsBehaviour( $currency, new EUR(), false );
	}
}
