<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Tests\Unit;

use ComponoKit\Money\Currencies\EUR;
use ComponoKit\Money\Currencies\HUF;

class HUFTest extends AbstractCurrencyTest
{
	public function testCurrency()
	{
		$currency = new HUF();
		$this->assertCurrencyProperties( $currency, 'HUF', 'Ft', 1, 0 );

		$this->assertEqualsBehaviour( $currency, new HUF(), true );
		$this->assertEqualsBehaviour( $currency, new EUR(), false );
	}
}
