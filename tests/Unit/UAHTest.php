<?php declare(strict_types=1);

namespace ComponoKit\Money\Currencies\Tests\Unit;

use ComponoKit\Money\Currencies\EUR;
use ComponoKit\Money\Currencies\UAH;

class UAHTest extends AbstractCurrencyTest
{
	public function testCurrency()
	{
		$currency = new UAH();
		$this->assertCurrencyProperties( $currency, 'UAH', '₴', 100, 2 );

		$this->assertEqualsBehaviour( $currency, new UAH(), true );
		$this->assertEqualsBehaviour( $currency, new EUR(), false );
	}
}
