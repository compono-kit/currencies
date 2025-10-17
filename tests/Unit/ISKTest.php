<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Tests\Unit;

use ComponoKit\Money\Currencies\EUR;
use ComponoKit\Money\Currencies\ISK;

class ISKTest extends AbstractCurrencyTest
{
	public function testCurrency()
	{
		$currency = new ISK();
		$this->assertCurrencyProperties( $currency, 'ISK', 'kr', 1, 0 );

		$this->assertEqualsBehaviour( $currency, new ISK(), true );
		$this->assertEqualsBehaviour( $currency, new EUR(), false );
	}
}
