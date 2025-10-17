<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Tests\Unit;

use ComponoKit\Money\Currencies\DKK;
use ComponoKit\Money\Currencies\EUR;

class DKKTest extends AbstractCurrencyTest
{
	public function testCurrency()
	{
		$currency = new DKK();
		$this->assertCurrencyProperties( $currency, 'DKK', 'kr', 100, 2 );

		$this->assertEqualsBehaviour( $currency, new DKK(), true );
		$this->assertEqualsBehaviour( $currency, new EUR(), false );
	}
}
