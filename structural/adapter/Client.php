<?php

namespace Structural\adapter;
require_once __DIR__."/../../vendor/autoload.php";

class Client
{
    public function run(int $amount)
    {
        $paymentGateway = new PaymentGateway();
        $paymentGatewayAdaptor = new PaymentGatewayAdapter($paymentGateway);
        $paymentProcesser = new PaymentProcessor($paymentGatewayAdaptor);
        $paymentProcesser->payProcess($amount);
    }
}

$clint = new Client();
$clint->run(5354);