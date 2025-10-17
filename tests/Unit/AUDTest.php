<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Tests\Unit;

use ComponoKit\Money\Currencies\AUD;
use ComponoKit\Money\Currencies\EUR;

class AUDTest extends AbstractCurrencyTest
{
	public function testCurrency()
	{
		$currency = new AUD();
		$this->assertCurrencyProperties( $currency, 'AUD', '$', 100, 2 );

		$this->assertEqualsBehaviour( $currency, new AUD(), true );
		$this->assertEqualsBehaviour( $currency, new EUR(), false );
	}
}
