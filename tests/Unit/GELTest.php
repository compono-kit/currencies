<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Tests\Unit;

use ComponoKit\Money\Currencies\EUR;
use ComponoKit\Money\Currencies\GEL;

class GELTest extends AbstractCurrencyTest
{
	public function testCurrency()
	{
		$currency = new GEL();
		$this->assertCurrencyProperties( $currency, 'GEL', '₾', 100, 2 );

		$this->assertEqualsBehaviour( $currency, new GEL(), true );
		$this->assertEqualsBehaviour( $currency, new EUR(), false );
	}
}
