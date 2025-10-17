<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Tests\Unit;

use ComponoKit\Money\Currencies\EUR;
use ComponoKit\Money\Currencies\INR;

class INRTest extends AbstractCurrencyTest
{
	public function testCurrency()
	{
		$currency = new INR();
		$this->assertCurrencyProperties( $currency, 'INR', '₹', 100, 2 );

		$this->assertEqualsBehaviour( $currency, new INR(), true );
		$this->assertEqualsBehaviour( $currency, new EUR(), false );
	}
}
