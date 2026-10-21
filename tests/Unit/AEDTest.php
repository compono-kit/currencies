<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Tests\Unit;

use ComponoKit\Money\Currencies\AED;
use ComponoKit\Money\Currencies\EUR;

class AEDTest extends AbstractCurrencyTestCase
{
	public function testCurrency(): void
	{
		$currency = new AED();
		$this->assertCurrencyProperties( $currency, 'AED', 'د.إ', 100, 2 );

		$this->assertEqualsBehaviour( $currency, new AED(), true );
		$this->assertEqualsBehaviour( $currency, new EUR(), false );
	}
}
