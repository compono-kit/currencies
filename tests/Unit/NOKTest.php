<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Tests\Unit;

use ComponoKit\Money\Currencies\EUR;
use ComponoKit\Money\Currencies\NOK;

class NOKTest extends AbstractCurrencyTest
{
	public function testCurrency()
	{
		$currency = new NOK();
		$this->assertCurrencyProperties( $currency, 'NOK', 'kr', 100, 2 );

		$this->assertEqualsBehaviour( $currency, new NOK(), true );
		$this->assertEqualsBehaviour( $currency, new EUR(), false );
	}
}
