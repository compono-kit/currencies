<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Tests\Unit;

use ComponoKit\Money\Currencies\EUR;
use ComponoKit\Money\Currencies\RSD;

class RSDTest extends AbstractCurrencyTest
{
	public function testCurrency()
	{
		$currency = new RSD();
		$this->assertCurrencyProperties( $currency, 'RSD', 'дин', 100, 2 );

		$this->assertEqualsBehaviour( $currency, new RSD(), true );
		$this->assertEqualsBehaviour( $currency, new EUR(), false );
	}
}
