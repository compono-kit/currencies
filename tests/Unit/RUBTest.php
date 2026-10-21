<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Tests\Unit;

use ComponoKit\Money\Currencies\EUR;
use ComponoKit\Money\Currencies\RUB;

class RUBTest extends AbstractCurrencyTestCase
{
	public function testCurrency(): void
	{
		$currency = new RUB();
		$this->assertCurrencyProperties( $currency, 'RUB', '₽', 100, 2 );

		$this->assertEqualsBehaviour( $currency, new RUB(), true );
		$this->assertEqualsBehaviour( $currency, new EUR(), false );
	}
}
