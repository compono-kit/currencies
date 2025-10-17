<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Tests\Unit;

use ComponoKit\Money\Currencies\BRL;
use ComponoKit\Money\Currencies\EUR;

class BRLTest extends AbstractCurrencyTest
{
	public function testCurrency()
	{
		$currency = new BRL();
		$this->assertCurrencyProperties( $currency, 'BRL', 'R$', 100, 2 );

		$this->assertEqualsBehaviour( $currency, new BRL(), true );
		$this->assertEqualsBehaviour( $currency, new EUR(), false );
	}
}
