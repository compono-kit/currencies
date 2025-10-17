<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Tests\Unit;

use ComponoKit\Money\Currencies\CAD;
use ComponoKit\Money\Currencies\EUR;

class CADTest extends AbstractCurrencyTest
{
	public function testCurrency()
	{
		$currency = new CAD();
		$this->assertCurrencyProperties( $currency, 'CAD', '$', 100, 2 );

		$this->assertEqualsBehaviour( $currency, new CAD(), true );
		$this->assertEqualsBehaviour( $currency, new EUR(), false );
	}
}
