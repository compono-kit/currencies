<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Tests\Unit;

use ComponoKit\Money\Currencies\EUR;
use ComponoKit\Money\Currencies\PLN;

class PLNTest extends AbstractCurrencyTest
{
	public function testCurrency()
	{
		$currency = new PLN();
		$this->assertCurrencyProperties( $currency, 'PLN', 'zł', 100, 2 );

		$this->assertEqualsBehaviour( $currency, new PLN(), true );
		$this->assertEqualsBehaviour( $currency, new EUR(), false );
	}
}
