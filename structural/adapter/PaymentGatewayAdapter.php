<?php

namespace Structural\adapter;

use Structural\adapter\Payment;

class PaymentGatewayAdapter implements Payment
{
    public function __construct(
        protected PaymentGateway $paymentGateway
    )
    {}

    public function processPayment(int $amount)
    {
        $this->paymentGateway->pay($amount);
    }
}