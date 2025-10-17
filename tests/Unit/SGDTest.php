<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Tests\Unit;

use ComponoKit\Money\Currencies\EUR;
use ComponoKit\Money\Currencies\SGD;

class SGDTest extends AbstractCurrencyTest
{
	public function testCurrency()
	{
		$currency = new SGD();
		$this->assertCurrencyProperties( $currency, 'SGD', '$', 100, 2 );

		$this->assertEqualsBehaviour( $currency, new SGD(), true );
		$this->assertEqualsBehaviour( $currency, new EUR(), false );
	}
}
