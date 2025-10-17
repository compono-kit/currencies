<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Tests\Unit;

use ComponoKit\Money\Currencies\EUR;
use ComponoKit\Money\Currencies\HRK;

class HRKTest extends AbstractCurrencyTest
{
	public function testCurrency()
	{
		$currency = new HRK();
		$this->assertCurrencyProperties( $currency, 'HRK', 'kn', 100, 2 );

		$this->assertEqualsBehaviour( $currency, new HRK(), true );
		$this->assertEqualsBehaviour( $currency, new EUR(), false );
	}
}
