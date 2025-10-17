<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Tests\Unit;

use ComponoKit\Money\Currencies\EUR;
use ComponoKit\Money\Currencies\GBP;

class GBPTest extends AbstractCurrencyTest
{
	public function testCurrency()
	{
		$currency = new GBP();
		$this->assertCurrencyProperties( $currency, 'GBP', '£', 100, 2 );

		$this->assertEqualsBehaviour( $currency, new GBP(), true );
		$this->assertEqualsBehaviour( $currency, new EUR(), false );
	}
}
