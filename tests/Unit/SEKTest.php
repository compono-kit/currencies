<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Tests\Unit;

use ComponoKit\Money\Currencies\EUR;
use ComponoKit\Money\Currencies\SEK;

class SEKTest extends AbstractCurrencyTest
{
	public function testCurrency()
	{
		$currency = new SEK();
		$this->assertCurrencyProperties( $currency, 'SEK', 'kr', 100, 2 );

		$this->assertEqualsBehaviour( $currency, new SEK(), true );
		$this->assertEqualsBehaviour( $currency, new EUR(), false );
	}
}
