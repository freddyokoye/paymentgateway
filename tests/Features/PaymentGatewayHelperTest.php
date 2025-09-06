<?php

namespace Freddyokoye\Paymentgateway\Tests\Features;

use Freddyokoye\Paymentgateway\Facades\VodiaPaymentGateway;
use Freddyokoye\Paymentgateway\Tests\TestCase;

class PaymentGatewayHelperTest extends TestCase
{
    public function testPaymentGatewayList(){
        $currency_list = VodiaPaymentGateway::all_payment_gateway_list();
        $this->assertTrue(is_array($currency_list),'all payment gateawy list as array '. print_r($currency_list,true));
    }
}
