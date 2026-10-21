<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Tests\Unit;

use ComponoKit\Money\Currencies\EUR;
use ComponoKit\Money\Currencies\SAR;

class SARTest extends AbstractCurrencyTestCase
{
	public function testCurrency(): void
	{
		$currency = new SAR();
		$this->assertCurrencyProperties( $currency, 'SAR', '﷼', 100, 2 );

		$this->assertEqualsBehaviour( $currency, new SAR(), true );
		$this->assertEqualsBehaviour( $currency, new EUR(), false );
	}
}
