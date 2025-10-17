<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Tests\Unit;

use ComponoKit\Money\Currencies\EUR;
use ComponoKit\Money\Currencies\MXN;

class MXNTest extends AbstractCurrencyTest
{
	public function testCurrency()
	{
		$currency = new MXN();
		$this->assertCurrencyProperties( $currency, 'MXN', '$', 100, 2 );

		$this->assertEqualsBehaviour( $currency, new MXN(), true );
		$this->assertEqualsBehaviour( $currency, new EUR(), false );
	}
}

