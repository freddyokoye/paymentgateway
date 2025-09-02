<?php

namespace Vodia\Paymentgateway\Tests\Features;

use Vodia\Paymentgateway\Facades\VodiaPaymentGateway;
use Vodia\Paymentgateway\Tests\TestCase;

class PaymentGatewayHelperTest extends TestCase
{
    public function testPaymentGatewayList(){
        $currency_list = VodiaPaymentGateway::all_payment_gateway_list();
        $this->assertTrue(is_array($currency_list),'all payment gateawy list as array '. print_r($currency_list,true));
    }
}
