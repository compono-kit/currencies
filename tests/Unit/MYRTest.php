<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Tests\Unit;

use ComponoKit\Money\Currencies\EUR;
use ComponoKit\Money\Currencies\MYR;

class MYRTest extends AbstractCurrencyTest
{
	public function testCurrency()
	{
		$currency = new MYR();
		$this->assertCurrencyProperties( $currency, 'MYR', 'RM', 100, 2 );

		$this->assertEqualsBehaviour( $currency, new MYR(), true );
		$this->assertEqualsBehaviour( $currency, new EUR(), false );
	}
}
