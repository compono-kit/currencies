<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Tests\Unit;

use ComponoKit\Money\Currencies\CZK;
use ComponoKit\Money\Currencies\EUR;

class CZKTest extends AbstractCurrencyTest
{
	public function testCurrency()
	{
		$currency = new CZK();
		$this->assertCurrencyProperties( $currency, 'CZK', 'Kč', 100, 2 );

		$this->assertEqualsBehaviour( $currency, new CZK(), true );
		$this->assertEqualsBehaviour( $currency, new EUR(), false );
	}
}
